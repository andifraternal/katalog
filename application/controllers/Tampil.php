<?php

class Tampil extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model(array('barangModel', 'kategoriModel'));
    }    

    function index(){
        $kategori = $this->kategoriModel->get_all_data()->result();
        $this->load->view('__templatePublic/header');
        $this->load->view('tampil', array('kategori'=>$kategori));
        $this->load->view('__templatePublic/footer');
        // print_r($kategori);
    }


}