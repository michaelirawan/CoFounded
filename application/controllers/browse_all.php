<?php

class Browse_all extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('bs2_model');
        $this->load->model('profile');
    }

    public function index() {
        $data['member'] = $this->bs2_model->get_member_all();
        $data['title'] = 'CoFounded';
        $data['main_content'] = 'Browse All';
        $data['item'] = $this->session->userdata('email');


        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != true) {
            $this->load->view('templates/header_browse', $data);
            $this->load->view('templates/banner', $data);
            $this->load->view('pages/browse_all', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header_browse', $data);
            $this->load->view('templates/banner_log_in_home', $data);
            $this->load->view('pages/browse_all', $data);
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

    function get_list_emp($id=NULL){
        $config['base_url'] = base_url().'index.php/browse_all';
        $config['total_rows'] = $this->profile->get_total_rows();
        $config['per_page'] = 6;
        
        $config['num_links'] = 5;
        $this->pagination->initialize($config);
        
        $data['member'] = $this->profile->get_list_emp($config['per_page'], $id);

        
        $data['title'] = 'CoFounded';
        $data['main_content'] = 'Browse All';
        $data['item'] = $this->session->userdata('email');


        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != true) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/banner', $data);
            $this->load->view('pages/browse_all', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/banner_log_in_home', $data);
            $this->load->view('pages/browse_all', $data);
            $this->load->view('templates/footer');
        }
    }

}