<?php

class BarangModel extends CI_Model{

    var $tabelbarang = 'master_barang'; //nama tabel dari database
    var $tabelkategori = 'master_kategori'; //nama tabel dari database
    var $column_order = array(null, 'master_kategori.nama_kategori','master_barang.kode_barang_sistem', 'master_barang.nama_barang', null, null, 'master_barang.ukuran', 'master_barang.bahan', 'master_barang.harga', 'master_barang.created_at', 'master_barang.updated_at'); //field yang ada di table user
    var $column_search = array('master_kategori.nama_kategori','master_barang.nama_barang', 'master_barang.ukuran', 'master_barang.bahan', 'master_barang.harga'); //field yang diizin untuk pencarian 
    var $order = array('master_kategori.nama_kategori' => 'asc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    private function _get_datatables_query()
    {
         
        $this->db->select('master_kategori.id_kategori, master_kategori.nama_kategori, master_kategori.aktif, master_barang.*');
        $this->db->from($this->tabelbarang);
        $this->db->join($this->tabelkategori, 'master_barang.id_kategori = master_kategori.id_kategori');
        // $this->db->where('master_barang.aktif' , 'Y');
 
        $i = 0;
     
        foreach ($this->column_search as $item) // looping awal
        {
            if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
                 
                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        // $this->db->from($this->tabelbarang);
        $this->db->select('*');
        $this->db->from($this->tabelbarang);
        $this->db->join($this->tabelkategori, 'master_barang.id_kategori = master_kategori.id_kategori');
        // $this->db->where('master_barang.aktif' , 'Y');
        return $this->db->count_all_results();
    }


    function simpanData($id, $kategori, $kodebarang, $namabarang, $deskripsi, $image, $ukuran, $bahan, $harga){
        $query = $this->db->query("
            insert into master_barang (id_barang, id_kategori, kode_barang_sistem, nama_barang, deskripsi, gambar, ukuran, bahan, harga) values ('$id', '$kategori', '$kodebarang', '$namabarang', '$deskripsi', '$image', '$ukuran', '$bahan', '$harga')
        ");
        return $query;
    }

    function getBarang($barang){
        $query = $this->db->query("
            select * from master_barang where id_barang = '$barang'
        ");
        return $query;
    }

    function updateData($id, $kategori, $kodebarang, $namabarang, $deskripsi, $gambar, $ukuran, $bahan, $harga){
        $now = date('Y-m-d H:i:s');
        $query = $this->db->query("
            update master_barang set 
                id_kategori         = '$kategori', 
                kode_barang_sistem  = '$kodebarang',
                nama_barang         = '$namabarang',
                deskripsi           = '$deskripsi',
                gambar              = '$gambar',
                ukuran              = '$ukuran',
                bahan               = '$bahan',
                harga               = '$harga',
                updated_at          = '$now'
            where id_barang = '$id'
        ");
        return $query;
    }

    function hapusBarang($idBarang){
        $query = $this->db->query("
            delete from master_barang  where id_barang = '$idBarang'
        ");
        return $query;
    }


    function get_barang($kategori){
        $query = $this->db->query("
            select * from master_barang  where id_kategori = '$kategori'
        ");
        return $query;
    }

    function get_barang_all(){
        $query = $this->db->query("
            select a.*, b.* from master_barang a join master_kategori b 
            on a.id_kategori = b.id_kategori
            order by a.created_at asc
        ");
        return $query;
    }

    function searchBykategoriHarga($hasilQuery){
        $query = $this->db->query($hasilQuery);
        return $query;
    }

    function sortByHarga($hasilQuery){
        $query = $this->db->query($hasilQuery);
        return $query;
    }

    function searchByKategori($kategori){
        $query = $this->db->query("
            select * from master_barang  where id_kategori = '$kategori'
        ");
        return $query;
    }


}