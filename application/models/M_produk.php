<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model {
    
    public function insert_produk($tabel,$data)
    {
       
        return  $this->db->insert($tabel,$data);
    }

    public function get_produk($tabel)
    {
       

        return $this->db->get($tabel)->result();
    }


    public function get_produk_edit($where)
    {
       
        $query = $this->db->query("SELECT * FROM `products` WHERE `product_id` = $where ");
        return $query->result()[0];
    }

    public function edit_data_produk($tabel,$where,$data)
    {

      $this->db->where($where);
      return $this->db->update($tabel,$data);
    }

    public function hapus_produk($kondisi){
      
        $this->db->where($kondisi);
        return $this->db->delete('products');
    }
    public function get_produk_hapus($where)
    {
       
        $query = $this->db->query("SELECT * FROM `products` WHERE `product_id` = $where ");
        return $query->result()[0];
    }
        
}