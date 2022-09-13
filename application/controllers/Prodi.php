<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_data');
    }
    public function Index()
    {
        $data['title'] = 'Data Prodi';
        $data['admin'] = $this->model_data->ambilDataTertentu('pendaftar', ['email' => $this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->model_data->ambilSemuaData('prodi');

        $this->load->view('admin/admin_header', $data);
        $this->load->view('admin/admin_navbar');
        $this->load->view('admin/admin_sidebar', $data);
        $this->load->view('admin/admin_prodi', $data);
        $this->load->view('admin/admin_footer');
    }

    public function Tambahprodi()
    {
        $id_prodi = $this->input->post('id_prodi');
        $nama_prodi = $this->input->post('nama_prodi');

        $data = [
            'id' => $id_prodi,
            'nama_prodi' => $nama_prodi
        ];

        $this->model_data->inputData('prodi', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di Tambah!!</div>');
        redirect('prodi');
    }
    public function hapus($id)
    {
        $where = [
            'id' => $id
        ];
        $this->model_data->hapusData('prodi', $where);
        redirect('prodi');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di Hapus!!</div>');
    }
    public function edit($id)
    {
        $where = [
            'id' => $id
        ];
        $data['title'] = 'Data Prodi';
        $data['admin'] = $this->model_data->ambilDataTertentu('pendaftar', ['email' => $this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->model_data->ambilDataTertentu('prodi', $where)->result_array();

        $this->load->view('admin/admin_header', $data);
        $this->load->view('admin/admin_navbar');
        $this->load->view('admin/admin_sidebar', $data);
        $this->load->view('admin/prodi_edit', $data);
        $this->load->view('admin/admin_footer');
    }



    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama_prodi');


        $data = [
            'id' => $id,
            'nama_prodi' => $nama
        ];

        $where = [
            'id' => $id
        ];
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('prodi');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di update!!</div>');
        redirect('prodi');
    }
}
