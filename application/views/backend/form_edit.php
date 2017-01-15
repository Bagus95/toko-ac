<?php
	$serial = $products->serial;
if($this->input->post('is_submitted')){
	$name = set_value('name');
	$description = set_value('description');
	$price = set_value('price');
} else {
	$name = $products->name;
	$description = $products->description;
	$price = $products->price;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Produk - Laman Admin</title>
	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>

	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
</head>
<body>
	<div class="row">
		<div class="col-md-1"></div>
			<div class="col-md-10">
				<h1>Edit Product </h1>
				<div><?= validation_errors() ?></div>
				<?= form_open_multipart('admin/products/update/' . $id, ['class'=>'form-horizontal']) ?>
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Nama Produk</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="name" value="<?= $name ?>">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">Deskripsi</label>
				    <div class="col-sm-10">
				      <textarea class="form-control" name="description"><?= $description ?></textarea>
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="price" value="<?= $price ?>">
				    </div>
				  </div>

				   <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Gambar</label>
				    <div class="col-sm-10">
				      <input type="file" class="form-control" name="userfile">
				    </div>
				  </div>

				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <input type="hidden" name="is_submitted" value="1"/>
				      <button type="submit" class="btn btn-default">Simpan</button>
				    </div>
				  </div>
				<?= form_close() ?>
			</div>
			<div class="col-md-1">
			</div>
	</div>
				<script>
					$(document).ready(function(){
					    $('#myTable').DataTable();
					});
				</script>
</body>
</html>
