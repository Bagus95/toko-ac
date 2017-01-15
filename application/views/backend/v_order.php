<!DOCTYPE html>
<html>
<head>
	<title>Laman Admin | View all Order_Details</title>
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
					<h1>Daftar Order</h1>
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
							<th>ID Produk</th>
							<th>Nama Produk</th>
              <th>Jumlah</th>
							<th>Harga</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($order_detail as $order_details) : ?>
						<tr>
							<td><?=$order_details->id?></td>
							<td><?=$order_details->productid?></td>
							<td><?=$order_details->productname?></td>
							<td><?=$order_details->quantity?></td>
              <td><?="Rp ".number_format($order_details->price,0,',','.')?></td>
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
