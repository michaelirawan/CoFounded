<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('bs2_model');
    }

    public function index() {
        $data['member'] = $this->bs2_model->get_member();
        $data['title'] = 'CoFounded';
        $data['main_content'] = 'home';



        $data['item'] = $this->session->userdata('email');


        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != true) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/banner', $data);
            $this->load->view('pages/home', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/banner_log_in_home', $data);
            $this->load->view('pages/home', $data);
            $this->load->view('templates/footer');
        }
    }

    function sign_out() {
        $this->session->sess_destroy();

        redirect('/home');
    }

    function is_logged_in() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != true) {
            echo 'You don\'t have permission to access this page. <a href="../home">Home<a/a';
            die();
        }
    }

    function validate_credential() {
        $this->load->model('membership_model');
        $query = $this->membership_model->validate();

        if ($query) {
            $data = array(
                'email' => $this->input->post('email'),
                'is_logged_in' => true
            );

            if (!$this->input->post('remember')) {
                $this->session->sess_expiration = 7200;
                $this->session->sess_expire_on_close = TRUE;
            }
            $this->session->set_userdata($data);
            redirect('introduction');
        } else {
            redirect('home');
        }
    }

    function create_member() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
        $this->form_validation->set_rules('first_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('password2', 'Pass', 'trim|required|matches[password]');

        if ($this->form_validation->run() == false) {
            redirect('home');
        } else {
            $this->load->model('membership_model');
            if ($query = $this->membership_model->create_member()) {
                $data['main_content'] = 'signup_successful';
                $this->load->view('signup_successful');
            } else {
                $this->load->view('signup_form');
            }
        }
    }

}