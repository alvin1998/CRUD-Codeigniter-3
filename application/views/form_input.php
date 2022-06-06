<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial crud</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>/asstes/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/asstes/style_daftar.css">
</head>
<body>

<div class="container">		
		<h1>Tambah produk</h1> 
		<form class="form-horizontal" action="<?php echo site_url()?>/dasboard/aksi_input" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label class="control-label col-sm-2" for="nama">Nama Produk:</label>
				<div class="col-sm-10">
					<input type="text" name="nama_produk" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="alamat">Harga:</label>
				<div class="col-sm-10">
					<input type="number"  name="harga" class="form-control" id="alamat">
				</div>
			</div>		
			<div class="form-group">
				<label class="control-label col-sm-2" for="alamat">Deskripsi :</label>
				<div class="col-sm-10">
                    <textarea name="deskripsi" name="deskripsi" class="form-control" id="" cols="30" rows="10"></textarea>
				</div>
            </div>	
            <div class="form-group">
				<label class="control-label col-sm-2" for="alamat">foto:</label>
				<div class="col-sm-10">
                <input type="file" class="form-control-file" id="fileupload" name="gambar" >
				</div>
            </div>	
            <div class="row">

            <div class="col-md-10"></div>
            <div class="col-md-2">
            <button type="submit" class="btn btn-danger mt-3 mb-3">Simpan</button></div>
            
            </div>

		</form>		
	</div>
 
</body>
</html>

<script src="<?php echo base_url() ?>/asstes/js/jquery.js"></script>
<script src="<?php echo base_url() ?>/asstes/bootstrap/js/bootstrap.js"></script>