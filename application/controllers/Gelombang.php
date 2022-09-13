<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gelombang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_data');
    }

    public function Index()
    {
        $data['title'] = 'Data Gelombang';
        $data['admin'] = $this->model_data->ambilDataTertentu('pendaftar', ['email' => $this->session->userdata('email')])->row_array();
        $data['gelombang'] = $this->model_data->ambilSemuaData('gelombang');

        $this->load->view('admin/admin_header', $data);
        $this->load->view('admin/admin_navbar');
        $this->load->view('admin/admin_sidebar', $data);
        $this->load->view('admin/admin_gelombang', $data);
        $this->load->view('admin/admin_footer');
    }

    public function tambahgelombang()
    {
        $gelombang = $this->input->post('gelombang');
        $tahun = $this->input->post('tahun');
        $status = $this->input->post('status');

        $data = [
            'gelombang' => $gelombang,
            'tahun' => $tahun,
            'keterangan' => "Sipenmasing gelombang " . $gelombang . " tahun " . $tahun,
            'status' => $status
        ];

        $this->model_data->inputData('gelombang', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di Tambah!!</div>');
        redirect('gelombang');
    }
    public function hapus($id)
    {
        $where = [
            'id' => $id
        ];
        $this->model_data->hapusData('gelombang', $where);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berhasil di Hapus!!</div>');
        redirect('gelombang');
    }
    public function edit($id)
    {
        $where = [
            'id' => $id
        ];
        $data['title'] = 'Edit Gelombang';
        $data['admin'] = $this->model_data->ambilDataTertentu('pendaftar', ['email' => $this->session->userdata('email')])->row_array();
        $data['gelombang'] = $this->model_data->ambilDataTertentu('gelombang', $where)->result_array();

        $this->load->view('admin/admin_header', $data);
        $this->load->view('admin/admin_navbar');
        $this->load->view('admin/admin_sidebar', $data);
        $this->load->view('admin/gelombang_edit', $data);
        $this->load->view('admin/admin_footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $gelombang = $this->input->post('gelombang');
        $tahun = $this->input->post('tahun');
        $status = $this->input->post('status');

        $data = [
            'gelombang' => $gelombang,
            'tahun' => $tahun,
            'keterangan' => "Sipenmasing gelombang " . $gelombang . " tahun " . $tahun,
            'status' => $status
        ];

        $where = [
            'id' => $id
        ];
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('gelombang');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di update!!</div>');
        redirect('gelombang');
    }
}
