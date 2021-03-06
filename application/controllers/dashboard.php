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
        $data['data_member'] = $this->profile->get_id();





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
    
    function get_viewer_dashboard_total(){
        $q = $this->profile->get_viewer_dashboard_total();
        echo $q;
    }
    
    function get_where_last_comment(){
        $q = $this->profile->get_where_last_comment_id();
        echo $q;
    }
    
     function get_message_chat() {
        $where_id = $this->input->post('where_id');
        $this->load->model('profile');
        $q = $this->profile->get_message_member($where_id);
        echo $q;
    }
    
    function the_last(){
        $last_id = $this->input->post('last_id');
        $this->load->model('profile');
        $q = $this->profile->the_last_comment($last_id);
        echo $q;
    }

}

?>
