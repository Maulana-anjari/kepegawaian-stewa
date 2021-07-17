<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->

	<!-- <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1> -->
	<a class="btn btn-secondary btn-icon-split mb-3" href="<?= base_url('user/datatambahan'); ?>" role="button"><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span><span class="text">Back</span></a>
	<div class="alert alert-info" role="alert"><b>Penting!</b> Pastikan file yang Anda masukkan berbentuk file pdf atau image dengan ukuran maksimal 2 MB!</div>
	<?= $this->session->flashdata('message')  ?>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Upload File SK Tambahan</h6>
		</div>
		<div class="card-body">
			<?= form_open_multipart('user/inputsklainnya');  ?>
			<div class="form-group row">
				<label for="email" class="col-sm-4 col-form-label">Email</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="email" name="email" value="<?= $user['email'];  ?>" readonly>
				</div>
			</div>
			<?php if ($datam['sk_lainnya1'] === null) : ?>
				<div class="form-group row">
					<label for="sk_lainnya1" class="col-sm-4 col-form-label">SK Tambahan 1</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="sk_lainnya1" name="sk_lainnya1">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_sk_lainnya1" value="<?= $datam['sk_lainnya1'] ?>">
			<?php endif; ?>
			<?php if ($datam['sk_lainnya2'] === null) : ?>
				<div class="form-group row">
					<label for="sk_lainnya2" class="col-sm-4 col-form-label">SK Tambahan 2</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="sk_lainnya2" name="sk_lainnya2">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_sk_lainnya2" value="<?= $datam['sk_lainnya2'] ?>">
			<?php endif; ?>
			<?php if ($datam['sk_lainnya3'] === null) : ?>
				<div class="form-group row">
					<label for="sk_lainnya3" class="col-sm-4 col-form-label">SK Tambahan 3</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="sk_lainnya3" name="sk_lainnya3">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_sk_lainnya3" value="<?= $datam['sk_lainnya3'] ?>">
			<?php endif; ?>
			<?php if ($datam['sk_lainnya4'] === null) : ?>
				<div class="form-group row">
					<label for="sk_lainnya4" class="col-sm-4 col-form-label">SK Tambahan 4</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="sk_lainnya4" name="sk_lainnya4">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_sk_lainnya4" value="<?= $datam['sk_lainnya4'] ?>">
			<?php endif; ?>
			<?php if ($datam['sk_lainnya5'] === null) : ?>
				<div class="form-group row">
					<label for="sk_lainnya5" class="col-sm-4 col-form-label">SK Tambahan 5</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="sk_lainnya5" name="sk_lainnya5">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_sk_lainnya5" value="<?= $datam['sk_lainnya5'] ?>">
			<?php endif; ?>
			<div class="form-group row">
				<div class="col">
					<button type="submit" name="submit" class="btn btn-primary btn-icon-split"><span class="icon text-white-50"><i class="fas fa-save"></i></span><span class="text">Save</span></button>
				</div>
			</div>
			</form>
		</div>
	</div>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Daftar File SK Tambahan</h6>
		</div>
		<div class="card-body">
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
					<table class="table table-bordered" style="min-width: 100px">
						<thead>
							<tr>
								<th scope="col">SK Lainnya 1</th>
								<th scope="col">SK Lainnya 2</th>
								<th scope="col">SK Lainnya 3</th>
								<th scope="col">SK Lainnya 4</th>
								<th scope="col">SK Lainnya 5</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php if ($datam['sk_lainnya1'] === null) : ?>
									<td>File Kosong</td>
								<?php else : ?>
									<td><?= $datam['sk_lainnya1']; ?> <br>
										<a href="<?= base_url('assets/datatambahan/sktambahan/' . $datam['sk_lainnya1']) ?>" class="badge badge-info">Download</a>
										<a href="<?= base_url('hapusdandownloadtambahan/hapussk_lainnya1') ?>" class="badge badge-danger">Delete</a>
									</td>
								<?php endif; ?>

								<?php if ($datam['sk_lainnya2'] === null) : ?>
									<td>File Kosong</td>
								<?php else : ?>
									<td><?= $datam['sk_lainnya2']; ?> <br>
										<a href="<?= base_url('assets/datatambahan/sktambahan/' . $datam['sk_lainnya2']) ?>" class="badge badge-info">Download</a>
										<a href="<?= base_url('hapusdandownloadtambahan/hapussk_lainnya2') ?>" class="badge badge-danger">Delete</a>
									</td>
								<?php endif; ?>

								<?php if ($datam['sk_lainnya3'] === null) : ?>
									<td>File Kosong</td>
								<?php else : ?>
									<td><?= $datam['sk_lainnya3']; ?> <br>
										<a href="<?= base_url('assets/datatambahan/sktambahan/' . $datam['sk_lainnya3']) ?>" class="badge badge-info">Download</a>
										<a href="<?= base_url('hapusdandownloadtambahan/hapussk_lainnya3') ?>" class="badge badge-danger">Delete</a>
									</td>
								<?php endif; ?>

								<?php if ($datam['sk_lainnya4'] === null) : ?>
									<td>File Kosong</td>
								<?php else : ?>
									<td><?= $datam['sk_lainnya4']; ?> <br>
										<a href="<?= base_url('assets/datatambahan/sktambahan/' . $datam['sk_lainnya4']) ?>" class="badge badge-info">Download</a>
										<a href="<?= base_url('hapusdandownloadtambahan/hapussk_lainnya4') ?>" class="badge badge-danger">Delete</a>
									</td>
								<?php endif; ?>

								<?php if ($datam['sk_lainnya5'] === null) : ?>
									<td>File Kosong</td>
								<?php else : ?>
									<td><?= $datam['sk_lainnya5']; ?> <br>
										<a href="<?= base_url('assets/datatambahan/sktambahan/' . $datam['sk_lainnya5']) ?>" class="badge badge-info">Download</a>
										<a href="<?= base_url('hapusdandownloadtambahan/hapussk_lainnya5') ?>" class="badge badge-danger">Delete</a>
									</td>
								<?php endif; ?>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</div>
</div>