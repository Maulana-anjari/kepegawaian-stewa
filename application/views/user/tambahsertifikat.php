<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->

	<!-- <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1> -->
	<a class="btn btn-secondary btn-icon-split mb-3" href="<?= base_url('user/datatambahan'); ?>" role="button"><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span><span class="text">Back</span></a>
	<a class="btn btn-primary btn-icon-split mb-3" href="<?= base_url('user/tambahsertifikatlain'); ?>" role="button"><span class="icon text-white-50"><i class="fas fa-plus"></i></span><span class="text">Tambah Sertifikat</span></a>
	<div class="alert alert-info" role="alert"><b>Penting!</b> Pastikan file yang Anda masukkan berbentuk file pdf dengan ukuran maksimal 2 MB!</div>
	<?= $this->session->flashdata('message')  ?>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Upload File Sertifikat</h6>
		</div>
		<div class="card-body">
			<?= form_open_multipart('user/inputsertifikat');  ?>
			<div class="form-group row">
				<label for="email" class="col-sm-4 col-form-label">Email</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="email" name="email" value="<?= $user['email'];  ?>" readonly>
				</div>
			</div>
			<?php if ($datam['sertifikat1'] === null) : ?>
				<div class="form-group row">
					<label for="sertifikat1" class="col-sm-4 col-form-label">Sertifikat 1</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="sertifikat1" name="sertifikat1">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_sertifikat1" value="<?= $datam['sertifikat1'] ?>">
			<?php endif; ?>
			<?php if ($datam['sertifikat2'] === null) : ?>
				<div class="form-group row">
					<label for="sertifikat2" class="col-sm-4 col-form-label">Sertifikat 2</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="sertifikat2" name="sertifikat2">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_sertifikat2" value="<?= $datam['sertifikat2'] ?>">
			<?php endif; ?>
			<?php if ($datam['sertifikat3'] === null) : ?>
				<div class="form-group row">
					<label for="sertifikat3" class="col-sm-4 col-form-label">Sertifikat 3</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="sertifikat3" name="sertifikat3">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_sertifikat3" value="<?= $datam['sertifikat3'] ?>">
			<?php endif; ?>
			<?php if ($datam['sertifikat4'] === null) : ?>
				<div class="form-group row">
					<label for="sertifikat4" class="col-sm-4 col-form-label">Sertifikat 4</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="sertifikat4" name="sertifikat4">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_sertifikat4" value="<?= $datam['sertifikat4'] ?>">
			<?php endif; ?>
			<?php if ($datam['sertifikat5'] === null) : ?>
				<div class="form-group row">
					<label for="sertifikat5" class="col-sm-4 col-form-label">Sertifikat 5</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="sertifikat5" name="sertifikat5">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_sertifikat5" value="<?= $datam['sertifikat5'] ?>">
			<?php endif; ?>
			<?php if ($datam['sertifikat6'] === null) : ?>
				<div class="form-group row">
					<label for="sertifikat6" class="col-sm-4 col-form-label">Sertifikat 6</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="sertifikat6" name="sertifikat6">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_sertifikat6" value="<?= $datam['sertifikat6'] ?>">
			<?php endif; ?>
			<?php if ($datam['sertifikat7'] === null) : ?>
				<div class="form-group row">
					<label for="sertifikat7" class="col-sm-4 col-form-label">Sertifikat 7</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="sertifikat7" name="sertifikat7">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_sertifikat7" value="<?= $datam['sertifikat7'] ?>">
			<?php endif; ?>
			<?php if ($datam['sertifikat8'] === null) : ?>
				<div class="form-group row">
					<label for="sertifikat8" class="col-sm-4 col-form-label">Sertifikat 8</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="sertifikat8" name="sertifikat8">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_sertifikat8" value="<?= $datam['sertifikat8'] ?>">
			<?php endif; ?>
			<?php if ($datam['sertifikat9'] === null) : ?>
				<div class="form-group row">
					<label for="sertifikat9" class="col-sm-4 col-form-label">Sertifikat 9</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="sertifikat9" name="sertifikat9">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_sertifikat9" value="<?= $datam['sertifikat9'] ?>">
			<?php endif; ?>
			<?php if ($datam['sertifikat10'] === null) : ?>
				<div class="form-group row">
					<label for="sertifikat10" class="col-sm-4 col-form-label">Sertifikat 10</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="sertifikat10" name="sertifikat10">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_sertifikat10" value="<?= $datam['sertifikat10'] ?>">
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
			<h6 class="m-0 font-weight-bold text-primary">Daftar File Sertifikat</h6>
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
								<th scope="col">Sertifikat 1</th>
								<th scope="col">Sertifikat 2</th>
								<th scope="col">Sertifikat 3</th>
								<th scope="col">Sertifikat 4</th>
								<th scope="col">Sertifikat 5</th>
								<th scope="col">Sertifikat 6</th>
								<th scope="col">Sertifikat 7</th>
								<th scope="col">Sertifikat 8</th>
								<th scope="col">Sertifikat 9</th>
								<th scope="col">Sertifikat 10</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php if ($datam['sertifikat1'] === null) : ?>
									<td>File Kosong</td>
								<?php else : ?>
									<td><?= $datam['sertifikat1']; ?> <br>
										<a href="<?= base_url('assets/datatambahan/sertifikat/' . $datam['sertifikat1']) ?>" class="badge badge-info">Download</a>
										<a href="<?= base_url('hapusdandownloadtambahan/hapussertifikat1') ?>" class="badge badge-danger">Delete</a>
									</td>
								<?php endif; ?>

								<?php if ($datam['sertifikat2'] === null) : ?>
									<td>File Kosong</td>
								<?php else : ?>
									<td><?= $datam['sertifikat2']; ?> <br>
										<a href="<?= base_url('assets/datatambahan/sertifikat/' . $datam['sertifikat2']) ?>" class="badge badge-info">Download</a>
										<a href="<?= base_url('hapusdandownloadtambahan/hapussertifikat2') ?>" class="badge badge-danger">Delete</a>
									</td>
								<?php endif; ?>

								<?php if ($datam['sertifikat3'] === null) : ?>
									<td>File Kosong</td>
								<?php else : ?>
									<td><?= $datam['sertifikat3']; ?> <br>
										<a href="<?= base_url('assets/datatambahan/sertifikat/' . $datam['sertifikat3']) ?>" class="badge badge-info">Download</a>
										<a href="<?= base_url('hapusdandownloadtambahan/hapussertifikat3') ?>" class="badge badge-danger">Delete</a>
									</td>
								<?php endif; ?>

								<?php if ($datam['sertifikat4'] === null) : ?>
									<td>File Kosong</td>
								<?php else : ?>
									<td><?= $datam['sertifikat4']; ?> <br>
										<a href="<?= base_url('assets/datatambahan/sertifikat/' . $datam['sertifikat4']) ?>" class="badge badge-info">Download</a>
										<a href="<?= base_url('hapusdandownloadtambahan/hapussertifikat4') ?>" class="badge badge-danger">Delete</a>
									</td>
								<?php endif; ?>

								<?php if ($datam['sertifikat5'] === null) : ?>
									<td>File Kosong</td>
								<?php else : ?>
									<td><?= $datam['sertifikat5']; ?> <br>
										<a href="<?= base_url('assets/datatambahan/sertifikat/' . $datam['sertifikat5']) ?>" class="badge badge-info">Download</a>
										<a href="<?= base_url('hapusdandownloadtambahan/hapussertifikat5') ?>" class="badge badge-danger">Delete</a>
									</td>
								<?php endif; ?>

								<?php if ($datam['sertifikat6'] === null) : ?>
									<td>File Kosong</td>
								<?php else : ?>
									<td><?= $datam['sertifikat6']; ?> <br>
										<a href="<?= base_url('assets/datatambahan/sertifikat/' . $datam['sertifikat6']) ?>" class="badge badge-info">Download</a>
										<a href="<?= base_url('hapusdandownloadtambahan/hapussertifikat6') ?>" class="badge badge-danger">Delete</a>
									</td>
								<?php endif; ?>

								<?php if ($datam['sertifikat7'] === null) : ?>
									<td>File Kosong</td>
								<?php else : ?>
									<td><?= $datam['sertifikat7']; ?> <br>
										<a href="<?= base_url('assets/datatambahan/sertifikat/' . $datam['sertifikat7']) ?>" class="badge badge-info">Download</a>
										<a href="<?= base_url('hapusdandownloadtambahan/hapussertifikat7') ?>" class="badge badge-danger">Delete</a>
									</td>
								<?php endif; ?>

								<?php if ($datam['sertifikat8'] === null) : ?>
									<td>File Kosong</td>
								<?php else : ?>
									<td><?= $datam['sertifikat8']; ?> <br>
										<a href="<?= base_url('assets/datatambahan/sertifikat/' . $datam['sertifikat8']) ?>" class="badge badge-info">Download</a>
										<a href="<?= base_url('hapusdandownloadtambahan/hapussertifikat8') ?>" class="badge badge-danger">Delete</a>
									</td>
								<?php endif; ?>

								<?php if ($datam['sertifikat9'] === null) : ?>
									<td>File Kosong</td>
								<?php else : ?>
									<td><?= $datam['sertifikat9']; ?> <br>
										<a href="<?= base_url('assets/datatambahan/sertifikat/' . $datam['sertifikat9']) ?>" class="badge badge-info">Download</a>
										<a href="<?= base_url('hapusdandownloadtambahan/hapussertifikat9') ?>" class="badge badge-danger">Delete</a>
									</td>
								<?php endif; ?>

								<?php if ($datam['sertifikat10'] === null) : ?>
									<td>File Kosong</td>
								<?php else : ?>
									<td><?= $datam['sertifikat10']; ?> <br>
										<a href="<?= base_url('assets/datatambahan/sertifikat/' . $datam['sertifikat10']) ?>" class="badge badge-info">Download</a>
										<a href="<?= base_url('hapusdandownloadtambahan/hapussertifikat10') ?>" class="badge badge-danger">Delete</a>
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