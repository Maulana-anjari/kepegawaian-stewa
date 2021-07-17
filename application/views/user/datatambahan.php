<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->

	<!-- <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1> -->
	<div class="alert alert-info" role="alert"><b>Penting!</b> Pastikan file yang Anda masukkan berbentuk file pdf dengan ukuran maksimal 2 MB!</div>
	<?= $this->session->flashdata('message')  ?>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Upload File Tambahan</h6>
		</div>
		<div class="card-body">
			<?= form_open_multipart('user/inputdatatambahan');  ?>
			<div class="form-group row">
				<label for="email" class="col-sm-4 col-form-label">Email</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="email" name="email" value="<?= $user['email'];  ?>" readonly>
				</div>
			</div>
			<?php if ($datam['sk_tugas_mengajar'] === null) : ?>
				<div class="form-group row">
					<label for="sk_tugas_mengajar" class="col-sm-4 col-form-label">SK Tugas Mengajar</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="sk_tugas_mengajar" name="sk_tugas_mengajar">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_sk_tugas_mengajar" value="<?= $datam['sk_tugas_mengajar'] ?>">
			<?php endif; ?>
			<?php if ($datam['sk_tugas_tambahan'] === null) : ?>
				<div class="form-group row">
					<label for="sk_tugas_tambahan" class="col-sm-4 col-form-label">SK Tugas Tambahan</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="sk_tugas_tambahan" name="sk_tugas_tambahan">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_sk_tugas_tambahan" value="<?= $datam['sk_tugas_tambahan'] ?>">
			<?php endif; ?>
			<div class="form-group row">
				<div class="col">
					<button type="submit" name="submit" class="btn btn-primary btn-icon-split"><span class="icon text-white-50"><i class="fas fa-save"></i></span><span class="text">Save</span></button>
				</div>
			</div>
			</form>
		</div>
	</div>

	<div class="row row-cols-1 row-cols-md-2">
		<div class="col mb-2">
			<div class="card shadow">
				<div class="card">
					<div class="card-header">SK Tugas Mengajar dan Tambahan</div>
					<div class="card-body">
						<table class="table table-bordered" style="min-width: 100px">
							<thead>
								<tr>
									<th scope="col">SK Tugas Mengajar</th>
									<th scope="col">SK Tugas Tambahan</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php if ($datam['sk_tugas_mengajar'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $datam['sk_tugas_mengajar']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadtugasmengajar') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadtambahan/hapustugasmengajar') ?>" class="badge badge-danger">Delete</a>
										</td>
									<?php endif; ?>

									<?php if ($datam['sk_tugas_tambahan'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $datam['sk_tugas_tambahan']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadtugastambahan') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadtambahan/hapustugastambahan') ?>" class="badge badge-danger">Delete</a>
										</td>
									<?php endif; ?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col mb-2">
			<div class="card shadow">
				<div class="card" style="height: 207px">
					<div class="card-header">SK Lain & Sertifikat</div>
					<div class="card-body">
						<a href="<?= base_url('user/tambahsertifikatlain'); ?>" class="btn btn-success btn-icon-split ml-2 mr-5 mb-3 mt-4">
							<span class="icon text-white-50"><i class="fas fa-plus"></i></span>
							<span class="text">Tambah Sertifikat</span>
						</a>
						<a href="<?= base_url('user/sk_tambahan'); ?>" class="btn btn-warning btn-icon-split ml-5 mb-3 mt-4">
							<span class="icon text-white-50"><i class="fas fa-plus"></i></span>
							<span class="text">Tambah SK Lain</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>
</div>