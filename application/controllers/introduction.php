<?php

class Introduction extends CI_Controller {

    function index() {
        $this->load->model('profile');

        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != true) {
            echo 'You don\'t have permission to access this page. <a href="../index.php/home">Home<a/a';
            die();
        } else {
            $data['title'] = 'CoFounded';
            $data['main_content'] = 'introduction';
            $data['item'] = $this->session->userdata('email');

            $data['member_id_img'] = $this->profile->get_id();
            $data['work_exp'] = $this->profile->get_work_exp();
            $data['skill'] = $this->profile->get_work_skill();
            $data['edu'] = $this->profile->get_edu_exp();
            $data['etc'] = $this->profile->get_additional();
            $data['media_youtube'] = $this->profile->get_media_youtube();
            $data['media_slideshare'] = $this->profile->get_media_slideshare();


            $data['img_url'] = $this->get_introduction_img();
            $data['fname'] = $this->profile->get_fname();
            $data['lname'] = $this->profile->get_lname();
            $data['title_name'] = $this->profile->get_title();
            $data['industry'] = $this->profile->get_industry();
            $data['quotes'] = $this->profile->get_quotes();
            $data['about'] = $this->profile->get_aboutme();
            $data['lookingfor'] = $this->profile->get_lookingfor();
            $data['idea'] = $this->profile->get_idea();
            $data['city'] = $this->profile->get_city();
            $data['state'] = $this->profile->get_state();
            $data['country'] = $this->profile->get_country();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/banner_log_in', $data);
            $this->load->view('pages/introduction', $data);
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

    function get_introduction_img() {
        $this->load->model('profile');
        $q = $this->profile->get_img();
        return $q;
    }

    function get_image() {
        $this->load->model('Gallery_model');
        if ($this->input->post('upload')) {
            $this->Gallery_model->do_upload();
        }
        $data['images'] = $this->Gallery_model->get_images();
        $this->load->view('gallery', $data);
    }

    function update_member() {
        $this->load->model('membership_model');
        if ($query = $this->membership_model->update_profile()) {
            redirect('/introduction');
        } else {
            
        }
    }

    function update_skill() {
        $this->load->model('membership_model');
        if ($query = $this->membership_model->update_skill()) {
            redirect('/introduction#1B');
        } else {
            
        }
    }

    function update_edu() {
        $this->load->model('membership_model');
        if ($query = $this->membership_model->update_edu()) {
            redirect('/introduction');
        } else {
            
        }
    }

    function update_work_exp() {
        $this->load->model('membership_model');
        if ($query = $this->membership_model->update_work_exp()) {
            redirect('/introduction');
        } else {
            
        }
    }
    
    function update_add_info() {
        $this->load->model('membership_model');
        if ($query = $this->membership_model->update_addtional()) {
            redirect('/introduction#1B');
        } else {
            
        }
    }

    function insert_media_youtube() {
        $this->load->model('membership_model');
        if ($query = $this->membership_model->insert_new_media_youtube()) {
            redirect('/introduction');
        } else {
            
        }
    }

    function insert_new_media_slideshare() {
        $this->load->model('membership_model');
        if ($query = $this->membership_model->insert_new_media_slideshare()) {
            redirect('/introduction');
        } else {
            
        }
    }
    
    function upload_img(){
        $this->load->model('profile');
        $q = $this->profile->upload_img();
        
        if($q){
            redirect("/introduction");
        }
    }
    
    function delete_img(){
        $this->load->model('profile');
        $q = $this->profile->del_img();
        
        if($q){
            redirect("/introduction");
        }
    }

}

?>
