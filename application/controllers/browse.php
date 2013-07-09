<?php

class Browse extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('bs2_model');
    }

    public function index() {
        $data['member'] = $this->bs2_model->get_member();
        $data['title'] = 'CoFounded';
        $data['main_content'] = 'Browse';
        $data['item'] = $this->session->userdata('email');

        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != true) {
            $this->load->view('templates/header_browse', $data);
            $this->load->view('templates/banner', $data);
            $this->load->view('pages/browse', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header_browse', $data);
            $this->load->view('templates/banner_log_in_home', $data);
            $this->load->view('pages/browse', $data);
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

    function get_where_browser() {
        $where_industry = $this->input->post('browser');
        $this->load->model('profile');
        $q = $this->profile->get_browser_industry($where_industry);
        echo $q;
    }
    
    

}

?>
