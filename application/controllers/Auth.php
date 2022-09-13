<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_data');
        // $this->load->library('form_validation');


    }
    public function index()
    {
        $data['title'] = 'International Student Registration';
        $this->load->view('templates/landing_header', $data);
        $this->load->view('templates/landing_navbar');
        $this->load->view('auth/landing');
        $this->load->view('templates/landing_footer');
    }
    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pendaftar.email]');
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[6]',
            [
                'min_length' => 'password too short!'
            ]
        );
        $where = [
            'status' => '1'
        ];
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $data['gelombang'] = $this->model_data->ambilDataTertentu('gelombang', $where)->result_array();


        // $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Registration';
            $this->load->view('templates/landing_header', $data);
            $this->load->view('templates/landing_navbar');
            $this->load->view('auth/registration', $data);
            $this->load->view('templates/landing_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0,
                'lulus' => 0,
                'date_created' => time(),
                'gelombang' => htmlspecialchars($this->input->post('gelombang', true))
            ];

            $this->model_data->inputData('pendaftar', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role = "alert"> 
            <a href="http://localhost/mahasiswa_asing/auth/procedurePDF"  class="alert-link" > Congratulation! Your Accoun Has Been Created. Please Download General Procedure
            </a>
            </div>');
            redirect('auth/login');
        }
    }
    public function login()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('templates/landing_header', $data);
            $this->load->view('templates/landing_navbar');
            $this->load->view('auth/login');
            $this->load->view('templates/landing_footer');
        } else {
            //    validasi success
            $this->__loginAksi();
        }
    }
    private function __loginAksi()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $pengguna = $this->model_data->ambilDataTertentu('pendaftar', ['email' => $email])->row_array();
        if ($pengguna) {
            // jika penggunanya aktif
            if ($pengguna['is_active'] == 1) {
                // cek password
                if (password_verify($password, $pengguna['password'])) {
                    $data = [
                        'email' => $pengguna['email'],
                        'role_id' => $pengguna['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($pengguna['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role = "alert"> Wrong password!</div>');
                    redirect('auth/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role = "alert"> Email has not been activated!</div>');
                redirect('auth/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role = "alert"> Email is not Registerd!</div>');
            redirect('auth/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role = "alert"> Your  has been logout</div>');

        redirect('auth/login');
    }

    public function procedurePDF()
    {
        $this->load->library('dompdf_gen');

        $data['pengguna'] = $this->model_data->ambilDataTertentu('pendaftar', ['email' => $this->session->userdata('email')])->result_array();

        $this->load->view('auth/prosedur', $data);

        $paper_size = 'A4';
        $orientation = 'Potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("general_procedur.pdf", ['attachment' => 0]);
    }
}
