<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_data');
    }
    public function index()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'trim|required');
        $this->form_validation->set_rules('hp', 'HP', 'trim|required');
        $this->form_validation->set_rules('negara', 'Negara', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'trim|required');
        // $this->form_validation->set_rules('foto', 'Foto', 'trim|required');

        $id = $this->input->post('id');


        // ambil data dari session
        $data['pendaftar'] = $this->model_data->ambilDataTertentu('pendaftar', ['email' => $this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->model_data->ambilSemuaData('prodi');
        $data['title'] = 'User';
        // echo 'Selamat Datang ' . $data['pendaftar']['nama'];

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/landing_header', $data);
            $this->load->view('templates/navbar_user');
            $this->load->view('user/index', $data);
            $this->load->view('templates/user_footer');
        } else {

            //cek jika ada file yang akan diupload
            $upload_ijazah = $_FILES['ijazah']['name'];
            $upload_passport = $_FILES['passport']['name'];
            $upload_penanggung_jawab = $_FILES['penanggung_jawab']['name'];
            $upload_pernyataan_tidak_bekerja = $_FILES['pernyataan_tidak_bekerja']['name'];
            $upload_pernyataan_tidak_berpolitik = $_FILES['pernyataan_tidak_berpolitik']['name'];
            $upload_pernyataan_undang = $_FILES['pernyataan_undang']['name'];
            $upload_jaminan_biaya = $_FILES['jaminan_biaya']['name'];
            $upload_surat_kesehatan = $_FILES['surat_kesehatan']['name'];
            $upload_foto = $_FILES['foto']['name'];

            if ($upload_ijazah && $upload_passport && $upload_penanggung_jawab && $upload_pernyataan_tidak_bekerja && $upload_pernyataan_undang && $upload_pernyataan_tidak_berpolitik && $upload_jaminan_biaya && $upload_surat_kesehatan) {
                $config['upload_path'] = './assets/document/';
                $config['allowed_types'] = 'pdf|gif|jpg|png|jpeg';
                $config['max_size']     = '60000';

                $this->load->library('upload', $config);

                // Upload Ijazah
                if ($this->upload->do_upload('ijazah')) {
                    $new_ijazah = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                    echo "upload ijazah gagal";
                    die;
                }

                if ($this->upload->do_upload('passport')) {
                    $new_passport = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                    echo "upload pasport gagal";
                    die;
                }

                if ($this->upload->do_upload('penanggung_jawab')) {
                    $new_penanggung_jawab = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                    echo "upload penanggung jawab gagal";
                    die;
                }

                if ($this->upload->do_upload('pernyataan_tidak_bekerja')) {
                    $new_pernyataan_tidak_bekerja = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }


                if ($this->upload->do_upload('pernyataan_undang')) {
                    $new_pernyataan_undang = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                    echo "upload pernyataan undang";
                    die;
                }

                if ($this->upload->do_upload('jaminan_biaya')) {
                    $new_jaminan_biaya = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                    echo "upload jaminan biaya";
                    die;
                }

                if ($this->upload->do_upload('surat_kesehatan')) {
                    $new_surat_kesehatan = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                    echo "upload surat kesehatan gagal";
                    die;
                }

                if ($this->upload->do_upload('pernyataan_tidak_berpolitik')) {
                    $new_pernyataan_tidak_berpolitik = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                    echo "upload pernyataan tidak berpolitik gagal";
                    die;
                }
            }

            if ($upload_foto) {
                $config['upload_path'] = 'assets/image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '60000';

                $this->load->library('upload', $config);

                $cari = $this->upload->do_upload('foto');

                // Upload Ijazah
                if ($this->upload->do_upload('foto')) {
                    $new_foto = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                    echo "upload foto gagal";
                    die;
                }
            }

            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'nik' => $this->input->post('nik'),
                'hp' => $this->input->post('hp'),
                'id_prodi' => $this->input->post('prodi'),
                'negara' => $this->input->post('negara'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'ijazah' => $new_ijazah,
                'foto' => $new_foto,
                'passport' => $new_passport,
                'penanggung_jawab' => $new_penanggung_jawab,
                'pernyataan_tidak_bekerja' => $new_pernyataan_tidak_bekerja,
                'pernyataan_undang' => $new_pernyataan_undang,
                'jaminan_biaya' => $new_jaminan_biaya,
                'surat_kesehatan' => $new_surat_kesehatan,
                'pernyataan_tidak_berpolitik' => $new_pernyataan_tidak_berpolitik,
            ];

            $dataLulus = [
                'lulus' => 1
            ];
            $email = $this->input->post('email');
            $where = [
                'email' => $email
            ];
            $this->model_data->inputData('lulus', $data);
            $this->model_data->updateData('pendaftar', $dataLulus, $where);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been update!!</div>');
            redirect('user/profile');
        }
    }
    public function Profile()
    {
        $data['pendaftar'] = $this->model_data->ambilDataTertentu('pendaftar', ['email' => $this->session->userdata('email')])->row_array();
        $data['lulus'] = $this->model_data->ambilDataTertentu('lulus', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'My Profile';

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/landing_header');
        $this->load->view('templates/navbar_user');
        $this->load->view('user/profile', $data);
        $this->load->view('templates/landing_footer');
    }
    public function edit()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'trim|required');
        $this->form_validation->set_rules('hp', 'HP', 'trim|required');
        $this->form_validation->set_rules('negara', 'Negara', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'trim|required');

        $data['pendaftar'] = $this->model_data->ambilDataTertentu('lulus', ['email' => $this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->model_data->ambilSemuaData('prodi')->result_array();
        // echo 'Selamat Datang ' . $data['pendaftar']['nama'];

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header');
            $this->load->view('templates/landing_header');
            $this->load->view('templates/navbar_user');
            $this->load->view('user/edit', $data);
            $this->load->view('templates/user_footer');
        } else {

            //cek jika ada file yang akan diupload
            $upload_ijazah = $_FILES['ijazah']['name'];
            $upload_passport = $_FILES['passport']['name'];
            $upload_penanggung_jawab = $_FILES['penanggung_jawab']['name'];
            $upload_pernyataan_tidak_bekerja = $_FILES['pernyataan_tidak_bekerja']['name'];
            $upload_pernyataan_tidak_berpolitik = $_FILES['pernyataan_tidak_berpolitik']['name'];
            $upload_pernyataan_undang = $_FILES['pernyataan_undang']['name'];
            $upload_jaminan_biaya = $_FILES['jaminan_biaya']['name'];
            $upload_surat_kesehatan = $_FILES['surat_kesehatan']['name'];
            $upload_foto = $_FILES['foto']['name'];

            if ($upload_ijazah or $upload_passport or $upload_penanggung_jawab or $upload_pernyataan_tidak_bekerja or $upload_pernyataan_undang or $upload_pernyataan_tidak_berpolitik or $upload_jaminan_biaya or $upload_surat_kesehatan) {
                $config['upload_path'] = 'assets/document/';
                $config['allowed_types'] = '.gif|jpg|png|jpeg';
                $config['max_size']     = '60000';

                $this->load->library('upload', $config);

                // Upload Ijazah
                if ($this->upload->do_upload('ijazah')) {

                    $old_ijazah = $data['pendaftar']['ijazah'];

                    unlink(FCPATH . 'assets/document/' . $old_ijazah);

                    $new_ijazah = $this->upload->data('file_name');
                    $this->db->set('ijazah', $new_ijazah);
                } else {
                    echo $this->upload->display_errors();
                }

                if ($this->upload->do_upload('passport')) {

                    $old_passport = $data['pendaftar']['passport'];
                    unlink(FCPATH . 'assets/document/' . $old_passport);

                    $new_passport = $this->upload->data('file_name');
                    $this->db->set('passport', $new_passport);
                } else {
                    echo $this->upload->display_errors();
                }

                if ($this->upload->do_upload('penanggung_jawab')) {

                    $old_penanggung_jawab = $data['pendaftar']['penanggung_jawab'];
                    unlink(FCPATH . 'assets/document/' . $old_penanggung_jawab);

                    $new_penanggung_jawab = $this->upload->data('file_name');
                    $this->db->set('penanggung_jawab', $new_penanggung_jawab);
                } else {
                    echo $this->upload->display_errors();
                }

                if ($this->upload->do_upload('pernyataan_tidak_bekerja')) {

                    $old_pernyataan_tidak_bekerja = $data['pendaftar']['pernyataan_tidak_bekerja'];
                    unlink(FCPATH . 'assets/document/' . $old_pernyataan_tidak_bekerja);

                    $new_pernyataan_tidak_bekerja = $this->upload->data('file_name');
                    $this->db->set('pernyataan_tidak_bekerja', $new_pernyataan_tidak_bekerja);
                } else {
                    echo $this->upload->display_errors();
                }

                if ($this->upload->do_upload('pernyataan_undang')) {

                    $old_pernyataan_undang = $data['pendaftar']['pernyataan_undang'];
                    unlink(FCPATH . 'assets/document/' . $old_pernyataan_undang);

                    $new_pernyataan_undang = $this->upload->data('file_name');
                    $this->db->set('pernyataan_undang', $new_pernyataan_undang);
                } else {
                    echo $this->upload->display_errors();
                }

                if ($this->upload->do_upload('jaminan_biaya')) {

                    $old_jaminan_biaya = $data['pendaftar']['jaminan_biaya'];
                    unlink(FCPATH . 'assets/document/' . $old_jaminan_biaya);

                    $new_jaminan_biaya = $this->upload->data('file_name');
                    $this->db->set('jaminan_biaya', $new_jaminan_biaya);
                } else {
                    echo $this->upload->display_errors();
                }

                if ($this->upload->do_upload('surat_kesehatan')) {

                    $old_surat_kesehatan = $data['pendaftar']['surat_kesehatan'];
                    unlink(FCPATH . 'assets/document/' . $old_surat_kesehatan);

                    $new_surat_kesehatan = $this->upload->data('file_name');
                    $this->db->set('surat_kesehatan', $new_surat_kesehatan);
                } else {
                    echo $this->upload->display_errors();
                }

                if ($this->upload->do_upload('pernyataan_tidak_berpolitik')) {

                    $old_pernyataan_tidak_berpolitik = $data['pendaftar']['pernyataan_tidak_berpolitik'];
                    unlink(FCPATH . 'assets/document/' . $old_pernyataan_tidak_berpolitik);

                    $new_pernyataan_tidak_berpolitik = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            }
            if ($upload_foto) {
                $config['upload_path'] = 'assets/document/';
                $config['allowed_types'] = '.gif|jpg|png|jpeg';
                $config['max_size']     = '60000';

                $this->load->library('upload', $config);

                // Upload Ijazah
                if ($this->upload->do_upload('foto')) {
                    $new_foto = $this->upload->data('file_name');
                    $this->db->set('foto', $new_foto);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'nik' => $this->input->post('nik'),
                'hp' => $this->input->post('hp'),
                'id_prodi' => $this->input->post('prodi'),
                'negara' => $this->input->post('negara'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'passport' => $new_passport,
                'penanggung_jawab' => $new_penanggung_jawab,
                'pernyataan_tidak_bekerja' => $new_pernyataan_tidak_bekerja,
                'pernyataan_undang' => $new_pernyataan_undang,
                'jaminan_biaya' => $new_jaminan_biaya,
                'surat_kesehatan' => $new_surat_kesehatan,
                'pernyataan_tidak_berpolitik' => $new_pernyataan_tidak_berpolitik
            ];
            $where = ['id' => $id];

            $this->db->set($data);
            $this->db->where('id', $id);
            $this->db->update('lulus');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been update!!</div>');
            redirect('user/profile');
        }
    }
}
