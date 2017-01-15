<!DOCTYPE html>
<html>
<head>
	<title>Laman Admin | View all Products</title>
	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>

	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
</head>
<body>
	<?php $this->load->view('backend/admin_menu')?>
	<div class="row">
		<div class="col-md-1"></div>
			<div class="col-md-10">
				<center>
					<h1>Tabel Product</h1>
					<br>
					<?=anchor('admin/detailorder','Detail Order', ['class'=>'btn btn-success btn-lg'])?>
					<?=anchor('admin/products','Products', ['class'=>'btn btn-info btn-lg'])?>
					<?=anchor('admin/customerdetail','Detail Customer', ['class'=>'btn btn-success btn-lg'])?>
					</br>
				</center>
				<table id="myTable" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama Produk</th>
							<th>Gambar Produk</th>
              <th>Deskripsi</th>
							<th>Harga</th>
							<th>
								<?=anchor('admin/products/tambah','Tambah Product', ['class'=>'btn btn-primary btn-sm'])?>
							</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($products as $product) : ?>
						<tr>
							<td><?=$product->serial?></td>
							<td><?=$product->name?></td>
							<td><center><?php
							$product_picture = ['src'=>'images/' . $product->picture,
											  'width' => '75'];
								echo img($product_picture)
							?></center></td>
              <td><?=$product->description?></td>
              <td><?="Rp ".number_format($product->price,0,',','.')?></td>
							<td>
								<?=anchor('admin/products/update/' . $product->serial, 'Edit Product', ['class'=>'btn btn-info btn-sm'])?>
								<?=anchor('admin/products/delete/' . $product->serial, 'Hapus Product', ['class'=>'btn btn-danger btn-sm', 'onclick'=>'return confirm(\'Anda Yakin ingin mmenghapus item ini?\')'])?>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
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
