<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->

	<!-- <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1> -->
	<a class="btn btn-secondary btn-icon-split mb-3" href="<?= base_url('user/datatambahan'); ?>" role="button"><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span><span class="text">Back</span></a>
	<div class="alert alert-info" role="alert"><b>Penting!</b> Pastikan file yang Anda masukkan berbentuk file pdf dengan ukuran maksimal 2 MB!</div>
	<?= $this->session->flashdata('message')  ?>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Tambah File SK</h6>
		</div>
		<div class="card-body">
			<?= form_open_multipart('user/inputsktambahan');  ?>
			<div class="row">
				<div class="col-lg">
					<?php if (validation_errors()) : ?>
						<div class="alert alert-danger" role="alert">
							<?= validation_errors(); ?>
						</div>
					<?php endif; ?>
					<?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>');  ?>
					<!--
				<embed src="namafolder/nama_file.pdf" type="application/pdf" width="100%" height="700px">
				-->
					<div class="form-group row">
						<label for="email" class="col-sm-4 col-form-label">Email</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="email" name="email" value="<?= $user['email'];  ?>" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label for="nama_sk_tambahan" class="col-sm-4 col-form-label">Nama SK</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="nama_sk_tambahan" name="nama_sk_tambahan">
							<?= form_error('nama_sk_tambahan', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
					</div>
					<div class="form-group row">
						<label for="file_sk_tambahan" class="col-sm-4 col-form-label">File SK</label>
						<div class="col-sm-8">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="file_sk_tambahan" name="file_sk_tambahan">
								<label class="custom-file-label" for="image">Choose File</label>
							</div>
							<?= form_error('file_sk_tambahan', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
					</div>
					<div class="form-group row">
						<div class="col">
							<button type="submit" name="submit" class="btn btn-primary btn-icon-split"><span class="icon text-white-50"><i class="fas fa-plus"></i></span><span class="text">Add</span></button>
						</div>
					</div>
					<table class="table table-bordered" style="min-width: 100px">
						<thead>
							<tr>
								<th scope="col" style="max-width: 20px">No</th>
								<th scope="col">Nama SK</th>
								<th scope="col">File SK</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($dasktam as $dsk) : ?>
								<tr>
									<th scope="row"><?php echo $i; ?></th>
									<td><?= $dsk['nama_sk_tambahan']; ?></td>
									<td><?= $dsk['file_sk_tambahan']; ?></td>
									<td>
										<a href="<?= base_url('user/download_sktambahan/' . $dsk['id']); ?>" class="badge badge-info">Download</a>
										<a href="<?= base_url('user/delete_sktambahan/' . $dsk['id']); ?>" class="badge badge-danger">Delete</a>
									</td>
								</tr>
								<?php $i++; ?>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			</form>
		</div>
	</div>

</div>
</div>