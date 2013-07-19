<?php

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('bs2_model');
        $this->load->model('profile');
    }

    public function index() {
        $data['member'] = $this->bs2_model->get_member();
        $data['title'] = 'CoFounded';
        $data['main_content'] = 'dashboard';
        $data['item'] = $this->session->userdata('email');
        $data['potential'] = $this->profile->get_potential_matches();
        $data['connect'] = $this->profile->get_your_connection();
        $data['message'] = $this->profile->get_message_member();
        $data['view'] = $this->profile->get_view();
        
        

        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != true) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/banner', $data);
            $this->load->view('pages/dashboard', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/banner_log_in_home', $data);
            $this->load->view('pages/dashboard', $data);
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
