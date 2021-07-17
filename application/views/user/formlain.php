<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->

	<!-- <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>		 -->
	<a class="btn btn-secondary btn-icon-split mb-3" href="<?= base_url('user/datapokok'); ?>" role="button"><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span><span class="text">Back</span></a>
	<div class="alert alert-info" role="alert"><b>Penting!</b> Pastikan file yang Anda masukkan berbentuk file pdf dengan ukuran maksimal 2 MB!</div>
	<?= $this->session->flashdata('message')  ?>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Upload File Pokok Lainnya</h6>
		</div>
		<div class="card-body">
			<?= form_open_multipart('user/inputlainnya');  ?>
			<div class="form-group row">
				<label for="email" class="col-sm-4 col-form-label">Email</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="email" name="email" value="<?= $user['email'];  ?>" readonly>
				</div>
			</div>
			<?php if ($dapok['nip_baru'] === null) : ?>
				<div class="form-group row">
					<label for="nuptk" class="col-sm-4 col-form-label">NIP/KARPEG/NIP Baru</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="nip_baru" name="nip_baru">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_nip_baru" value="<?= $dapok['nip_baru'] ?>">
			<?php endif; ?>
			<?php if ($dapok['taspen'] === null) : ?>
				<div class="form-group row">
					<label for="nuptk" class="col-sm-4 col-form-label">TASPEN</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="taspen" name="taspen">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_taspen" value="<?= $dapok['taspen'] ?>">
			<?php endif; ?>
			<?php if ($dapok['npwp'] === null) : ?>
				<div class="form-group row">
					<label for="nuptk" class="col-sm-4 col-form-label">NPWP</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="npwp" name="npwp">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_npwp" value="<?= $dapok['npwp'] ?>">
			<?php endif; ?>
			<?php if ($dapok['karisu'] === null) : ?>
				<div class="form-group row">
					<label for="nuptk" class="col-sm-4 col-form-label">KARIS/KARSU</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="karisu" name="karisu">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_karisu" value="<?= $dapok['karisu'] ?>">
			<?php endif; ?>
			<?php if ($dapok['askes'] === null) : ?>
				<div class="form-group row">
					<label for="nuptk" class="col-sm-4 col-form-label">Kartu Askes</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="askes" name="askes">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_askes" value="<?= $dapok['askes'] ?>">
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
			<h6 class="m-0 font-weight-bold text-primary">Daftar File Lainnya</h6>
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
									<th scope="col">NIP/KARPEG/NIP Baru</th>
									<th scope="col">TASPEN</th>
									<th scope="col">NPWP</th>
									<th scope="col">KARIS/KARSU</th>
									<th scope="col">ASKES</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php if ($dapok['nip_baru'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $dapok['nip_baru']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadnipbaru') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadpokok/hapusnipbaru') ?>" class="badge badge-danger">Delete</a>
										</td>
									<?php endif; ?>

									<?php if ($dapok['taspen'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $dapok['taspen']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadtaspen') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadpokok/hapustaspen') ?>" class="badge badge-danger">Delete</a>
										</td>
									<?php endif; ?>

									<?php if ($dapok['npwp'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $dapok['npwp']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadnpwp') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadpokok/hapusnpwp') ?>" class="badge badge-danger">Delete</a>
										</td>
									<?php endif; ?>

									<?php if ($dapok['karisu'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $dapok['karisu']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadkarisu') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadpokok/hapuskarisu') ?>" class="badge badge-danger">Delete</a>
										</td>
									<?php endif; ?>

									<?php if ($dapok['askes'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $dapok['askes']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadaskes') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadpokok/hapusaskes') ?>" class="badge badge-danger">Delete</a>
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