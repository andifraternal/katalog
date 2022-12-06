<?php

class Barang extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model(array('barangModel', 'kategoriModel'));
    }

    function index(){
        $kategori = $this->kategoriModel->get_all_data()->result();
        $this->load->view('__template/header');
        $this->load->view('barang', array('kategori'=>$kategori));
        $this->load->view('__template/footer');
    }


    function dataBarang(){
        $list = $this->barangModel->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->nama_kategori;
            $row[] = $field->nama_barang;
            $row[] = $field->deskripsi;
            $row[] = $field->gambar;
            $row[] = $field->ukuran;
            $row[] = $field->bahan;
            $row[] = $field->harga;
            $row[] = $field->created_at;
            $row[] = $field->updated_at;
            $row[] = '<button type="button" name="updateBarang" id="'.$field->id_barang.'" class="btn btn-warning updateBarang">Edit Harga</button>
            <button type="button" name="deleteBarang" id="'.$field->id_barang.'" class="btn btn-danger deleteBarang">Delete Data</button>';
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->barangModel->count_all(),
            "recordsFiltered" => $this->barangModel->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    function simpanBarang(){
        $kategori   = $this->input->post('kategori'); 
        $kodebarang = $this->input->post('kode_barang');  
        $namabarang = $this->input->post('nama_barang'); 
        $deskripsi  = $this->input->post('deskripsi');
        $ukuran     = $this->input->post('ukuran');
        $bahan      = $this->input->post('bahan');
        $harga      = $this->input->post('harga');
        $id         = uniqid();

        $config['upload_path']="./assets/images"; //path folder file upload
        $config['allowed_types']='gif|jpg|png|jpeg'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload
         
        $this->load->library('upload',$config); //call library upload 
        if($this->upload->do_upload('gambar')){ //upload file
            $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
 
            // $judul= $this->input->post('judul'); //get judul image
            $image= $data['upload_data']['file_name']; //set file name ke variable image
             
            $result= $this->barangModel->simpanData($id, $kategori, $kodebarang, $namabarang, $deskripsi, $image, $ukuran, $bahan, $harga); //kirim value ke model m_upload
            // echo json_decode($result);
            if($result){
                $data = array(
                    'kode'       => 200,
                    'keterangan' => 'success'
                );
                echo json_encode($data);
            }else{
                $data = array(
                    'kode'       => 400,
                    'keterangan' => 'failed'
                );
                echo json_encode($data);
            }
        }else{
            $data = array(
                'kode'       => 401,
                'keterangan' => 'failed'
            );
            echo json_encode($data);
        }

    }


    function getbarang($barang){
        $query = $this->barangModel->getBarang($barang)->row();

        echo json_encode($query);
    }


    function updateBarang(){
        $idbarang = $this->input->post('idbarang');
        $harga = $this->input->post('harga');
        $now = date('Y-m-d H:i:s');
        $query      = $this->barangModel->updateData($idbarang, $harga, $now);
        $queryLog   = $this->barangModel->insertBarangLog($idbarang, $harga);
        if($query && $queryLog){
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


    function hapusBarang($idBarang){
        $query = $this->barangModel->hapusBarang($idBarang);
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

    function get_barang($kategori){
        $query = $this->barangModel->get_barang($kategori)->result();
        echo json_encode($query);
    }
}