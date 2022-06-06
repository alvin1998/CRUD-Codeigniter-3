<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasboard extends CI_Controller {

    function __construct()
    {
    parent::__construct();
    $this->load->database();
    $this->load->model('M_Produk');

    }

	public function index()
	{
        $data['data']=$this->M_Produk->get_produk('products');
		$this->load->view('tabel_data',$data);
    }
    
	public function form_input()
	{
		$this->load->view('form_input');
	}
	public function aksi_input()
	{
        $nama = $this->input->post('nama_produk');
        $harga = $this->input->post('harga');
        $deskripsi = $this->input->post('deskripsi');
        $id = random_string('numeric',6);
 
        $file_name = random_string('numeric',5);
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'jpg';
        $config['max_size'] = 2000;
        $config['file_name']     = $file_name;
 
 
        $this->upload->initialize($config);
 
        if ($this->upload->do_upload('gambar')) 
        {
    
         $data_update = array(
             'product_id' => $id,
             'name' =>  $nama,
             'price' => $harga,
             'image' => $file_name.'.jpg',
             'description' => $deskripsi,
       
 
         );
         $this->M_Produk->insert_produk('products',$data_update);
             redirect('dasboard');
        } 
        else 
        {
             echo  $this->upload->display_errors();
        }
    }
    public function form_edit()
	{
        $id = $this->uri->segment(3);
    
        $data['data']=$this->M_Produk->get_produk_edit($id);

		$this->load->view('form_edit',$data);
	}
    public function aksi_edit()
	{
        $id = $this->input->post('id');
        $foto_lama = $this->input->post('foto_lama');
        $nama = $this->input->post('nama_produk');
        $harga = $this->input->post('harga');
        $deskripsi = $this->input->post('deskripsi');
 
        $file_name = random_string('numeric',5);
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'jpg';
        $config['max_size'] = 2000;
        $config['file_name']     = $file_name;
 
 
        $this->upload->initialize($config);
 
        if ($this->upload->do_upload('gambar')) 
        {

        unlink("./upload/$foto_lama");
    
         $where = array(
             'product_id' =>  $id,
 
         );
         $data_update = array(
             'name' =>  $nama,
             'price' => $harga,
             'image' => $file_name.'.jpg',
             'description' => $deskripsi,
       
 
         );

         $this->M_Produk->edit_data_produk('products',$where,$data_update);
         redirect('dasboard');
             
        } 
        else 
        {
             $where = array(
             'product_id' =>  $id,
 
         );
         $data_update = array(
             'name' =>  $nama,
             'price' => $harga,
             'image' => $foto_lama,
             'description' => $deskripsi,
       
 
         );

         $this->M_Produk->edit_data_produk('products',$where,$data_update);
         redirect('dasboard');
        }
    }
    
    public function data_hapus()
	{
        $id = $this->uri->segment(3);

        $where =  array(
            'product_id' => $id
        );

        $data = $this->M_Produk->get_produk_hapus($id);
        unlink("./upload/$data->image");

        $this->M_Produk->hapus_produk($where);
        redirect('dasboard');
	}
}
