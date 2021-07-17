<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->

	<!-- <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1> -->
	<a class="btn btn-secondary btn-icon-split mb-3" href="<?= base_url('user/datapokok'); ?>" role="button"><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span><span class="text">Back</span></a>
	<div class="alert alert-info" role="alert"><b>Penting!</b> Pastikan file yang Anda masukkan berbentuk file pdf dengan ukuran maksimal 2 MB!</div>
	<?= $this->session->flashdata('message')  ?>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Upload File Ijazah</h6>
		</div>
		<div class="card-body">
			<?= form_open_multipart('user/inputijazah');  ?>
			<div class="form-group row">
				<label for="email" class="col-sm-4 col-form-label">Email</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="email" name="email" value="<?= $user['email'];  ?>" readonly>
				</div>
			</div>
			<?php if ($dapok['ij_sd'] === null) : ?>
				<div class="form-group row">
					<label for="ij_sd" class="col-sm-4 col-form-label">Ijazah SD</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="ij_sd" name="ij_sd">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_sd" value="<?= $dapok['ij_sd'] ?>">
			<?php endif; ?>
			<?php if ($dapok['ij_sltp'] === null) : ?>
				<div class="form-group row">
					<label for="ij_sltp" class="col-sm-4 col-form-label">Ijazah SLTP</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="ij_sltp" name="ij_sltp">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_sltp" value="<?= $dapok['ij_sltp'] ?>">
			<?php endif; ?>
			<?php if ($dapok['ij_slta'] === null) : ?>

				<div class="form-group row">
					<label for="ij_slta" class="col-sm-4 col-form-label">Ijazah SLTA</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="ij_slta" name="ij_slta">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_slta" value="<?= $dapok['ij_slta'] ?>">
			<?php endif; ?>
			<?php if ($dapok['ij_s1'] === null) : ?>

				<div class="form-group row">
					<label for="ij_s1" class="col-sm-4 col-form-label">Ijazah S1</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="ij_s1" name="ij_s1">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_s1" value="<?= $dapok['ij_s1'] ?>">
			<?php endif; ?>
			<?php if ($dapok['ij_s2'] === null) : ?>

				<div class="form-group row">
					<label for="ij_s2" class="col-sm-4 col-form-label">Ijazah S2</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="ij_s2" name="ij_s2">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_s2" value="<?= $dapok['ij_s2'] ?>">
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
			<h6 class="m-0 font-weight-bold text-primary">Daftar File Ijazah</h6>
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
						<!--
				<embed src="namafolder/nama_file.pdf" type="application/pdf" width="100%" height="700px">
				-->
						<table class="table table-bordered" style="min-width: 100px">
							<thead>
								<tr>
									<th scope="col">Ijazah SD</th>
									<th scope="col">Ijazah SLTP</th>
									<th scope="col">Ijazah SLTA</th>
									<th scope="col">Ijazah S1</th>
									<th scope="col">Ijazah S2</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php if ($dapok['ij_sd'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $dapok['ij_sd']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadijsd') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadpokok/hapusijsd') ?>" class="badge badge-danger">Delete</a>
										</td>
									<?php endif; ?>

									<?php if ($dapok['ij_sltp'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $dapok['ij_sltp']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadijsltp') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadpokok/hapusijsltp') ?>" class="badge badge-danger">Delete</a>
										</td>
									<?php endif; ?>

									<?php if ($dapok['ij_slta'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $dapok['ij_slta']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadijslta') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadpokok/hapusijslta') ?>" class="badge badge-danger">Delete</a>
										</td>
									<?php endif; ?>

									<?php if ($dapok['ij_s1'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $dapok['ij_s1']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadijs1') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadpokok/hapusijs1') ?>" class="badge badge-danger">Delete</a>
										</td>
									<?php endif; ?>

									<?php if ($dapok['ij_s2'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $dapok['ij_s2']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadijs2') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadpokok/hapusijs2') ?>" class="badge badge-danger">Delete</a>
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