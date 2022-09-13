<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_data');
    }
    public function Index()
    {
        $data['title'] = 'Admin Dashboard';
        $data['admin'] = $this->model_data->ambilDataTertentu('pendaftar', ['email' => $this->session->userdata('email')])->row_array();

        $data['jumlah_pendaftar'] = $this->model_data->getJumlah('pendaftar');
        $data['jumlah_lulus'] = $this->model_data->getJumlah('lulus');
        $data['jumlah_gelombang'] = $this->model_data->getJumlah('gelombang');

        $this->load->view('admin/admin_header', $data);
        $this->load->view('admin/admin_navbar');
        $this->load->view('admin/admin_sidebar', $data);
        $this->load->view('admin/admin', $data);
        $this->load->view('admin/admin_footer');
    }

    public function Pendaftar()
    {
        $data['title'] = 'Data Pendaftar';
        $data['admin'] = $this->model_data->ambilDataTertentu('pendaftar', ['email' => $this->session->userdata('email')])->row_array();

        $where = [
            'role_id' => '2'
        ];
        $data['pendaftar'] = $this->model_data->ambilDataTertentu('pendaftar', $where)->result_array();


        $data['jumlah_pendaftar'] = $this->model_data->getJumlah('pendaftar');

        $this->load->view('admin/admin_header', $data);
        $this->load->view('admin/admin_navbar');
        $this->load->view('admin/admin_sidebar', $data);
        $this->load->view('admin/admin_pendaftar', $data);
        $this->load->view('admin/admin_footer');
    }

    public function editPendaftar($id)
    {
        $where = [
            'id' => $id
        ];
        $data['title'] = 'Edit Pendaftar';
        $data['admin'] = $this->model_data->ambilDataTertentu('pendaftar', ['email' => $this->session->userdata('email')])->row_array();
        $data['pendaftar'] = $this->model_data->ambilDataTertentu('pendaftar', $where)->result_array();

        $this->load->view('admin/admin_header', $data);
        $this->load->view('admin/admin_navbar');
        $this->load->view('admin/admin_sidebar', $data);
        $this->load->view('admin/pendaftar_edit', $data);
        $this->load->view('admin/admin_footer');
    }



    public function pendaftar_update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $is_active = $this->input->post('is_active');


        $data = [
            'nama' => $nama,
            'email' => $email,
            'is_active' => $is_active
        ];

        $where = [
            'id' => $id,


        ];
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('pendaftar');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di update!!</div>');
        redirect('admin/pendaftar');
    }

    public function Lulus()
    {
        $data['title'] = 'Data Lulus';
        $data['admin'] = $this->model_data->ambilDataTertentu('pendaftar', ['email' => $this->session->userdata('email')])->row_array();
        $data['lulus'] = $this->model_data->ambilSemuaData('lulus');

        $this->load->view('admin/admin_header', $data);
        $this->load->view('admin/admin_navbar');
        $this->load->view('admin/admin_sidebar', $data);
        $this->load->view('admin/admin_lulus', $data);
        $this->load->view('admin/admin_footer');
    }
    public function cetakPDF()
    {
        $this->load->library('dompdf_gen');

        $data['lulus'] = $this->model_data->ambilSemuaData('lulus');

        $this->load->view('admin/laporan_pdf', $data);

        $paper_size = 'F4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_lulus.pdf", ['attachment' => 0]);
    }
}
