<?php
class Scanner extends CI_Controller{

    public function index(){
        // $data['santri'] = $this->m_santri->getalldata()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('absensiscanner');
        $this->load->view('templates/footer');
    }

    public function getdatascan(){
        $no_induk = $this->input->post('no_induk');
        json_encode($no_induk);
    }

}