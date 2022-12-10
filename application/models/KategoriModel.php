<?php

class KategoriModel extends CI_Model{
    var $tabel = 'master_kategori'; //nama tabel dari database
    var $column_order = array(null, 'id_kategori','nama_kategori'); //field yang ada di table user
    var $column_search = array('id_kategori','nama_kategori'); //field yang diizin untuk pencarian 
    var $order = array('nama_kategori' => 'asc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    private function _get_datatables_query()
    {
        // $this->db->where('aktif', '1');
        $this->db->from($this->tabel);
 
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
        // $this->db->where('status_aktif', '1');
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        // $this->db->where('status_aktif', '1');
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        // $this->db->where('status_aktif', '1');
        $this->db->from($this->tabel);
        return $this->db->count_all_results();
    }

    function insertData($kategori, $aktif){
        $id             = uniqid();
        $query = $this->db->query("
            insert into master_kategori (id_kategori, nama_kategori,  aktif) values ('$id', '$kategori', '$aktif')
        ");
        return $query;
    }

    function getKategori($kategori){
        $query = $this->db->query("
            select * from master_kategori where id_kategori = '$kategori'
        ");
        return $query;
    }

    function updateData($id_kategori, $nama_kategori, $status){
        $query = $this->db->query("
            update master_kategori set nama_kategori = '$nama_kategori', aktif= '$status' where id_kategori = '$id_kategori'
        ");
        return $query;
    }

    function get_all_data(){
        $query = $this->db->query("
            select * from master_kategori where aktif = 'Y' order by nama_kategori asc
        ");
        return $query;
    }

    function get_all_data_all(){
        $query = $this->db->query("
            select * from master_kategori  order by nama_kategori asc
        ");
        return $query;
    }

}