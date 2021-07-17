<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->

	<!-- <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>		 -->
	<a class="btn btn-secondary btn-icon-split mb-3" href="<?= base_url('user/datapokok'); ?>" role="button"><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span><span class="text">Back</span></a>
	<div class="alert alert-info" role="alert"><b>Penting!</b> Pastikan file yang Anda masukkan berbentuk file pdf dengan ukuran maksimal 2 MB!</div>
	<?= $this->session->flashdata('message')  ?>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Upload File Keluarga</h6>
		</div>
		<div class="card-body">
			<?= form_open_multipart('user/inputkeluarga');  ?>
			<div class="form-group row">
				<label for="email" class="col-sm-4 col-form-label">Email</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="email" name="email" value="<?= $user['email'];  ?>" readonly>
				</div>
			</div>
			<?php if ($dapok['ktp_diri'] === null) : ?>
				<div class="form-group row">
					<label for="ktp_diri" class="col-sm-4 col-form-label">KTP Pribadi</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="ktp_diri" name="ktp_diri">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_ktp_diri" value="<?= $dapok['ktp_diri'] ?>">
			<?php endif; ?>
			<?php if ($dapok['ktp_pas'] === null) : ?>
				<div class="form-group row">
					<label for="ktp_pas" class="col-sm-4 col-form-label">KTP Suami/Istri</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="ktp_pas" name="ktp_pas">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_ktp_pas" value="<?= $dapok['ktp_pas'] ?>">
			<?php endif; ?>
			<?php if ($dapok['kk'] === null) : ?>
				<div class="form-group row">
					<label for="kk" class="col-sm-4 col-form-label">Kartu Keluarga</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="kk" name="kk">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_kk" value="<?= $dapok['kk'] ?>">
			<?php endif; ?>
			<?php if ($dapok['s_nikah'] === null) : ?>
				<div class="form-group row">
					<label for="s_nikah" class="col-sm-4 col-form-label">Surat Nikah</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="s_nikah" name="s_nikah">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_s_nikah" value="<?= $dapok['s_nikah'] ?>">
			<?php endif; ?>
			<?php if ($dapok['akta_pribadi'] === null) : ?>
				<div class="form-group row">
					<label for="akta_pribadi" class="col-sm-4 col-form-label">Akta Kelahiran Pribadi</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="akta_pribadi" name="akta_pribadi">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_akta_pribadi" value="<?= $dapok['akta_pribadi'] ?>">
			<?php endif; ?>
			<?php if ($dapok['akta_pas'] === null) : ?>
				<div class="form-group row">
					<label for="akta_pas" class="col-sm-4 col-form-label">Akta Kelahiran Suami/Istri</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="akta_pas" name="akta_pas">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_akta_pas" value="<?= $dapok['akta_pas'] ?>">
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
			<h6 class="m-0 font-weight-bold text-primary">Daftar File Keluarga</h6>
		</div>
		<div class="card-body">
			<div style="overflow : auto">
				<div class="row">
					<div class="col-lg">
						<?php if (validation_errors()) : ?>
							<div class="alert alert-danger" role="alert">
								<?= validation_errors(); ?>
							</div>
						<?php endif; ?>
						<?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>');  ?>

						<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col">KTP Pribadi</th>
									<th scope="col">KTP Suami/Istri</th>
									<th scope="col">Kartu Keluarga</th>
									<th scope="col">Surat Nikah</th>
									<th scope="col">Akta Kelahiran Pribadi</th>
									<th scope="col">Akta Kelahiran Suami/Istri</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php if ($dapok['ktp_diri'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $dapok['ktp_diri']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadktpdiri') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadpokok/hapusktpdiri') ?>" class="badge badge-danger">Delete</a>
										</td>
									<?php endif; ?>

									<?php if ($dapok['ktp_pas'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $dapok['ktp_pas']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadktppas') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadpokok/hapusktppas') ?>" class="badge badge-danger">Delete</a>
										</td>
									<?php endif; ?>

									<?php if ($dapok['kk'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $dapok['kk']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadkk') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadpokok/hapuskk') ?>" class="badge badge-danger">Delete</a>
										</td>
									<?php endif; ?>

									<?php if ($dapok['s_nikah'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $dapok['s_nikah']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadsnikah') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadpokok/hapussnikah') ?>" class="badge badge-danger">Delete</a>
										</td>
									<?php endif; ?>

									<?php if ($dapok['akta_pribadi'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $dapok['akta_pribadi']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadakta') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadpokok/hapusakta') ?>" class="badge badge-danger">Delete</a>
										</td>
									<?php endif; ?>

									<?php if ($dapok['akta_pas'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $dapok['akta_pas']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadaktapas') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadpokok/hapusaktapas') ?>" class="badge badge-danger">Delete</a>
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
</div>