<?php
defined('BASEPATH') or exit('No direct script access allowed');
define("DOMPDF_ENABLE_REMOTE", false);

class Beranda extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Model_penyakit');
		$this->load->model('Model_gejala');
		$this->load->model('Model_data_hasil_diagnosis');
		$this->load->model('Model_penanganan');
		$this->load->model('Model_artikel');
	}

	public function index()
	{
		$data['penyakit'] = $this->Model_penyakit->get()->result();
		$data['artikel'] = $this->Model_artikel->get()->result();
		$data['gejalaKepala'] = $this->Model_gejala->getWhere('Kepala')->result();
		$data['gejalaBadan'] = $this->Model_gejala->getWhere('Badan')->result();
		$data['gejalaKaki'] = $this->Model_gejala->getWhere('Kaki')->result();
		$data['gejalaPencernaan'] = $this->Model_gejala->getWhere('Pencernaan')->result();
		$data['gejalaPernafasan'] = $this->Model_gejala->getWhere('Pernafasan')->result();
		$data['hasil'] = $this->Model_data_hasil_diagnosis->get_detail()->result();

		$this->load->view('beranda', $data);
	}

	public function invalid()
	{
		$data['penyakit'] = $this->Model_penyakit->get()->result();
		$data['gejalaKepala'] = $this->Model_gejala->getWhere('Kepala')->result();
		$data['gejalaBadan'] = $this->Model_gejala->getWhere('Badan')->result();
		$data['gejalaKaki'] = $this->Model_gejala->getWhere('Kaki')->result();
		$data['gejalaPencernaan'] = $this->Model_gejala->getWhere('Pencernaan')->result();
		$data['gejalaPernafasan'] = $this->Model_gejala->getWhere('Pernafasan')->result();
		$data['hasil'] = $this->Model_data_hasil_diagnosis->get_detail()->result();

		$this->load->view('beranda_invalid', $data);
	}

	public function detail_penyakit($id)
	{
		$penyakit = $this->Model_penyakit->find($id);
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($penyakit->row_array()));
	}


	public function data_penyakit()
	{
		$data['penyakit'] = $this->Model_penyakit->get()->result();
		$this->load->view('data_penyakit', $data);
	}

	public function detail_artikel($id)
	{
		$artikel = $this->Model_artikel->find($id);
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($artikel->row_array()));
	}

	public function detail_hasil($id_hasil)
	{
		$hasil = $this->Model_data_hasil_diagnosis->get_where_detail($id_hasil)->row();
		$data['hasil'] = $this->Model_data_hasil_diagnosis->get_where_detail($id_hasil);
		$data['gejala'] = $this->db->join('tb_gejala', 'tb_gejala.id_gejala=tb_diagnosis.id_gejala')->get_where('tb_diagnosis', ['id_hasil' => $id_hasil])->result();
		$data['data_hasil_diagnosis'] = $this->Model_data_hasil_diagnosis->get_where_detail($id_hasil)->row();
		$data['solusi'] = $this->Model_penanganan->solusi($hasil->id_penyakit)->result();
		$this->load->view('beranda_detail_diagnosis', $data);
	}

	public function hitung()
	{
		$idx = $this->input->post('gejala');
		if ($idx == NULL) {
			$message = array('status' => false, 'message' => 'Gejala belum dipilih!');

			$this->session->set_flashdata('message', $message);

			redirect('beranda/invalid#lakukan-diagnosis', 'refresh');
		} else if (count($idx) <= 1) {
			$message = array('status' => false, 'message' => 'Minimal 2 gejala dipilih!');

			$this->session->set_flashdata('message', $message);

			redirect('beranda/invalid#lakukan-diagnosis', 'refresh');
		} else {
			$x = 0;
			$str = "";
			foreach ($idx as $a) {
				if ($x == 0) {
					$str .= "tb_gejala.id_gejala = '" . $idx[$x] . "'";
				} else {
					$str .= " OR tb_gejala.id_gejala = '" . $idx[$x] . "'";
				}
				$x++;
			}
			//$str;
			$query = $this->db->query('SELECT * FROM tb_gejala JOIN tb_basis_pengetahuan ON tb_gejala.id_gejala=tb_basis_pengetahuan.id_gejala JOIN tb_penyakit ON tb_penyakit.id_penyakit=tb_basis_pengetahuan.id_penyakit where ' . $str)->result();
			$query2 = $this->db->query('SELECT * FROM tb_gejala JOIN tb_basis_pengetahuan ON tb_gejala.id_gejala=tb_basis_pengetahuan.id_gejala JOIN tb_penyakit ON tb_penyakit.id_penyakit=tb_basis_pengetahuan.id_penyakit where ' . $str . ' group by tb_gejala.id_gejala order by tb_basis_pengetahuan.id_penyakit')->result_array();
			$data = array(
				'data' => $query,
				'gejala' => $this->db->group_by('id_gejala')->get_where('tb_gejala', $str)->result(),
				'sort_by' => $query2,
			);

			$data['nama'] = $this->input->post('nama');
			$data['alamat'] = $this->input->post('alamat');
			$data['pekerjaan'] = $this->input->post('pekerjaan');
			$data['_gejala'] = $this->input->post('gejala');

			$this->load->view('beranda_hitung_cf', $data);
		}
	}

	public function cetak($id_hasil)
	{
		$hasil = $this->Model_data_hasil_diagnosis->get_where_detail($id_hasil)->row();
		$data['hasil'] = $this->Model_data_hasil_diagnosis->get_where_detail($id_hasil);
		$data['gejala'] = $this->db->join('tb_gejala', 'tb_gejala.id_gejala=tb_diagnosis.id_gejala')->get_where('tb_diagnosis', ['id_hasil' => $id_hasil])->result();
		$data['data_hasil_diagnosis'] = $this->Model_data_hasil_diagnosis->get_where_detail($id_hasil)->row();
		$data['solusi'] = $this->Model_penanganan->solusi($hasil->id_penyakit)->result();

		// Load all views as normal
		$this->load->view('beranda_cetak', $data);
		// Get output html
		$html = $this->output->get_output();

		// Load library
		$this->load->library('pdf');

		// Convert to PDF
		$this->pdf->load_html($html);
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->render();
		$this->pdf->stream("hasil-diagnosis-{$id_hasil}.pdf", array("Attachment" => false));
	}
}
