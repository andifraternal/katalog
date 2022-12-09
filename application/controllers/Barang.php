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
            $row[] = $field->kode_barang_sistem;
            $row[] = $field->nama_barang;
            $row[] = $field->deskripsi;
            $row[] = '<img src="'.base_url().'/assets/images/'.$field->gambar.'" style="height:50px;width:50px;"/>';
            $row[] = $field->ukuran;
            $row[] = $field->bahan;
            $row[] = $field->harga;
            $row[] = $field->created_at;
            $row[] = $field->updated_at;
            $row[] = '<button type="button" name="updateBarang" id="'.$field->id_barang.'" class="btn btn-warning updateBarang">Edit Data</button>
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
                $data = 200;
                echo json_encode($data);
            }else{
                $data = 400;
                echo json_encode($data);
            }
        }else{
            $data = 401;
            echo json_encode($data);
        }

    }


    function getbarang($barang){
        $barang = $this->barangModel->getBarang($barang)->row();
        $kategori = $this->kategoriModel->get_all_data()->result();

        $data = array(
            'barang'    => $barang,
            'kategori'  => $kategori
        );

        echo json_encode($data);
    }


    function updateBarang(){
        $kategori   = $this->input->post('kategori_update'); 
        $kodebarang = $this->input->post('kode_barang_update');  
        $namabarang = $this->input->post('nama_barang_update'); 
        $deskripsi  = $this->input->post('deskripsi_update');
        $ukuran     = $this->input->post('ukuran_update');
        $bahan      = $this->input->post('bahan_update');
        $harga      = $this->input->post('harga_update');
        $id         = $this->input->post('id_barang_update'); 

        $gambar     = $this->input->post('gambar_update');

        $gambar_lama= $this->input->post('gambar_lama');

        if($gambar == ''){
            $result= $this->barangModel->updateData($id, $kategori, $kodebarang, $namabarang, $deskripsi, $gambar_lama, $ukuran, $bahan, $harga);
            if($result){
                $data = 200;
                echo json_encode($data);
            }else{
                $data = 400;
                echo json_encode($data);
            }
        }else{
            if(isset($_FILES['gambar_update'])){
                $config['upload_path']="./assets/images"; //path folder file upload
                $config['allowed_types']='gif|jpg|png|jpeg'; //type file yang boleh di upload
                $config['encrypt_name'] = TRUE; //enkripsi file name upload
                
                $this->load->library('upload',$config); //call library upload 
                if($this->upload->do_upload('gambar_update')){ //upload file
                    $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
        
                    // $judul= $this->input->post('judul'); //get judul image
                    $image= $data['upload_data']['file_name']; //set file name ke variable image
                    
                    $result= $this->barangModel->updateData($id, $kategori, $kodebarang, $namabarang, $deskripsi, $image, $ukuran, $bahan, $harga); //kirim value ke model m_upload
                    // echo json_decode($result);
                    if($result){
                        $data = 200;
                        echo json_encode($data);
                    }else{
                        $data = 400;
                        echo json_encode($data);
                    }
                }
            }
        }
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

    function tampilAllbarang(){
        $data = $this->barangModel->get_barang_all()->result();

        echo json_encode($data);
    }

    function tampilBarangTanpaHarga(){
        $kategori = $_POST['kategori'];
        $jumlahKategori = ($this->input->post('kategori')?1:0);
        // $data = array();

        if($jumlahKategori == 0){
            $tampilData = $this->barangModel->get_barang_all()->result();
        }else{
            if(is_array($kategori) || is_object($kategori))
            {
                $kat = '';
                $index = 0;
                foreach($kategori as $datakategori){ 
                    // if($index == $jumlahKategori -1){
                    //     $kat .= "'".$datakategori."'";
                    // }else{
                        $kat .= "'".$datakategori."',";
                    // }
                    
                }
                $hasilKategori = substr($kat, 0, -1);

            }
            echo json_encode($hasilKategori);
        }
        
        
    }




}