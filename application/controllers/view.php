<?php

class View extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('bs2_model');
        $this->load->model('profile');
        
    }

    function index() {
        $get = $this->uri->uri_to_assoc();
        $memberid = $get['id'];
        $data['member'] = $this->bs2_model->get_member($memberid);
        $data['media'] = $this->bs2_model->get_media($memberid);
        $data['title'] = 'CoFounded';
        $data['item'] = $this->session->userdata('email');
           
        $data['work_exp'] = $this->bs2_model->get_work($memberid);
        $data['edu'] = $this->bs2_model->get_edu($memberid);
        $data['skill'] = $this->bs2_model->get_skill($memberid);
        $data['additional'] = $this->bs2_model->get_additional($memberid);

        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != true) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/banner', $data);
            $this->load->view('pages/view', $data);
            $this->load->view('templates/footer');
            $this->load-model('profile');
            $this->profile->view_counter($memberid);
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/banner_log_in_home', $data);
            $this->load->view('pages/view', $data);
            $this->load->view('templates/footer');
            $this->profile->view_counter($memberid);
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
    
    function insert_new_message1() {
        $this->load->model('profile');
        $q = $this->profile->insert_new_message();
        if ($q) {
            redirect('/view/index/id/'.$this->input->post('member_id_message'));
        } else {
            
        }
    }

}