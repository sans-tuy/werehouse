<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a class="btn btn-success" href="<?php echo site_url('admin/products/add') ?>"><i class="fa fa-plus"></i> Tambah Data</a>
						
						<a class="btn btn-danger ml-3" href=" <?php echo base_url('admin/cetak') ?>"><i class="fa fa-print"></i>Print</a>
					</div>

					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>id</th>
										<th>Nama</th>
										<th>Jumlah</th>
										<th>Foto</th>
										<th>Deskripsi</th>
										<th>Edit/Hapus</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($products as $product): ?>
									<tr>
										<td>
											<?php echo $product->product_id ?>
										</td>
										<td width="150">
											<?php echo $product->name ?>
										</td>
										<td>
											<?php echo $product->quantity ?>
										</td>
										<td>
											<img src="<?php echo base_url('upload/product/'.$product->image) ?>" width="64" />
										</td>
										<td class="small">
											<?php echo substr($product->description, 0, 120) ?>...</td>
										<td width="250">
											<a href="<?php echo site_url('admin/products/edit/'.$product->product_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$product->product_id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>

							<?php echo $this->pagination->create_links(); ?>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
