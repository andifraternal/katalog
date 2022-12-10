<?php

class Merk extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('merkModel');
    }

    function index(){
        $this->load->view('__template/header');
        $this->load->view('merk');
        $this->load->view('__template/footer');
    }

    function dataMerk(){
        $list = $this->merkModel->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            
            $row[] = $field->nama_merk;
            if($field->aktif == 'Y'){
                $row[] = 'Aktif';   
            }else{
                $row[] = 'Tidak Aktif';   
            }
            $row[] = $field->created_at;
            $row[] = $field->updated_at;
            $row[] = '<button type="button" name="updateMerk" id="'.$field->id_merk.'" class="btn btn-warning updateMerk">Edit Data</button>';
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->merkModel->count_all(),
            "recordsFiltered" => $this->merkModel->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    function simpanMerk(){
        $merk = $this->input->post('namamerk');
        $aktif = 'Y';

        $query = $this->merkModel->insertData($merk, $aktif);

        if($query){
            $data = array(
                'kode'       => 200,
                'keterangan' => 'success'
            );
        }else{
            $data = array(
                'kode'       => 400,
                'keterangan' => 'failed'
            );
        }

        echo json_encode($data);
    }

    function getmerk($merk){
        $query = $this->merkModel->getMerk($merk)->row();

        echo json_encode($query);
    }

    function updateMerk(){
        $idmerk = $this->input->post('idmerk');
        $merk = $this->input->post('namamerk');

        $status = $this->input->post('status');

        $query = $this->merkModel->updateData($idmerk, $merk, $status);
        if($query){
            $data = array(
                'kode'       => 200,
                'keterangan' => 'success'
            );
        }else{
            $data = array(
                'kode'       => 400,
                'keterangan' => 'failed'
            );
        }

        echo json_encode($data);
    }

    
}