<?php

class Search extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('bs2_model');
        $this->load->model('profile');
        
    }

    public function index() {
        //$data['member'] = $this->bs2_model->get_search();
        $data['title'] = 'CoFounded';
        $data['main_content'] = 'Search';
        $data['item'] = $this->session->userdata('email');
        $data['member'] = $this->profile->get_search();
        

        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != true) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/banner', $data);
            $this->load->view('pages/search', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/banner_log_in_home', $data);
            $this->load->view('pages/search', $data);
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

}

?>
