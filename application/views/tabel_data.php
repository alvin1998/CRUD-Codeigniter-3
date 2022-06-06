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
  <h2>Porduk</h2>
  <a type="button" class="btn btn-success mb-3" href="<?php echo site_url()?>/dasboard/form_input">Tambah Produk</a>     
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Pricet</th>
        <th>Image</th>
        <th>Dekripsi</th>
        <th>aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php 
        if ($data) {
            $no = 1;
            foreach ($data as $key => $result) {
    ?>
        <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $result->name; ?></td>
        <td><?php echo $result->price; ?></td>
        <td><img src="<?php echo base_url();?>/upload/<?php echo $result->image; ?>" 
        width="48" height="48" alt="User" /></td>
        <td><?php echo $result->description; ?></td>
        <td>
        <a href="<?php echo site_url()?>/dasboard/form_edit/<?php echo $result->product_id;  ?>">Edit</a> || 
        <a href="<?php echo site_url()?>/dasboard/data_hapus/<?php echo $result->product_id;  ?>">Hapus</a></td>
      </tr>
      <?php
            $no++;
            }
        }
    ?>
    </tbody>
  </table>
</div>
</body>
</html>

<script src="<?php echo base_url() ?>/asstes/js/jquery.js"></script>
<script src="<?php echo base_url() ?>/asstes/bootstrap/js/bootstrap.js"></script>