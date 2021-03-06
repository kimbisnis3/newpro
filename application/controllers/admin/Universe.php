<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Universe extends CI_Controller {

    function __construct() {
        parent::__construct();
        //include(APPPATH.'libraries/sessionakses.php');
        // $title      = $this->judul;
    }

    public function index(){
        $data['title']      = $this->judul;
        $data['aktifgrup']  = $this->aktifgrup;
        $data['aktifmenu']  = $this->aktifmenu;
        $title      = $this->judul;
        $this->load->view($this->indexpage, $data);  
    }

    function insert(){
        $jumlah_data = 500;
        for ($i=1;$i<=$jumlah_data;$i++){
            $data   =   array(
                "judul"     =>  "Judul Ke-".$i,
                "artikel"   =>  "artikel ke-".$i,
                "ket"       =>  '089699935552');
            $this->db->insert('fartikel',$data); 
        }
        echo $i.' Data Berhasil Di Insert';
    }

    function templatetb() {
        $tb    = ['m_menu','m_tipeakses','m_akses']; //contoh
        for ($i=0; $i<=(count($tb) - 1); $i++){
            $sql = "CREATE TABLE $tb[$i] (
            id  int NOT NULL AUTO_INCREMENT ,
            datei  timestamp NULL DEFAULT now() ON UPDATE CURRENT_TIMESTAMP ,
            dateu  timestamp NULL ON UPDATE CURRENT_TIMESTAMP ,
            useri  varchar(50) NULL ,
            useru  varchar(50) NULL ,
            PRIMARY KEY (id)
            )";
            $this->db->query($sql);
        }

    }

    

}
