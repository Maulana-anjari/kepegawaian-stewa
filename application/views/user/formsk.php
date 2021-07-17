<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->

	<!-- <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>		 -->
	<a class="btn btn-secondary btn-icon-split mb-3" href="<?= base_url('user/datapokok'); ?>" role="button"><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span><span class="text">Back</span></a>
	<div class="alert alert-info" role="alert"><b>Penting!</b> Pastikan file yang Anda masukkan berbentuk file pdf dengan ukuran maksimal 2 MB!</div>
	<?= $this->session->flashdata('message')  ?>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Upload File Surat Keputusan</h6>
		</div>
		<div class="card-body">
			<?= form_open_multipart('user/inputsk');  ?>
			<div class="form-group row">
				<label for="email" class="col-sm-4 col-form-label">Email</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="email" name="email" value="<?= $user['email'];  ?>" readonly>
				</div>
			</div>
			<?php if ($dapok['cpns'] === null) : ?>
				<div class="form-group row">
					<label for="nuptk" class="col-sm-4 col-form-label">Pengangkatan/CPNS</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="cpns" name="cpns">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_cpns" value="<?= $dapok['cpns'] ?>">
			<?php endif; ?>
			<?php if ($dapok['pns'] === null) : ?>
				<div class="form-group row">
					<label for="nuptk" class="col-sm-4 col-form-label">PNS</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="pns" name="pns">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_pns" value="<?= $dapok['pns'] ?>">
			<?php endif; ?>
			<?php if ($dapok['naik_pangkat'] === null) : ?>
				<div class="form-group row">
					<label for="nuptk" class="col-sm-4 col-form-label">Naik Pangkat</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="naik_pangkat" name="naik_pangkat">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_naik_pangkat" value="<?= $dapok['naik_pangkat'] ?>">
			<?php endif; ?>
			<?php if ($dapok['mutasi'] === null) : ?>
				<div class="form-group row">
					<label for="nuptk" class="col-sm-4 col-form-label">Mutasi</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="mutasi" name="mutasi">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_mutasi" value="<?= $dapok['mutasi'] ?>">
			<?php endif; ?>
			<?php if ($dapok['kgb'] === null) : ?>
				<div class="form-group row">
					<label for="nuptk" class="col-sm-4 col-form-label">Kenaikan Gaji Berkala</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="kgb" name="kgb">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_kgb" value="<?= $dapok['kgb'] ?>">
			<?php endif; ?>
			<?php if ($dapok['impasing'] === null) : ?>
				<div class="form-group row">
					<label for="nuptk" class="col-sm-4 col-form-label">Impasing</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="impasing" name="impasing">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_impasing" value="<?= $dapok['impasing'] ?>">
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
			<h6 class="m-0 font-weight-bold text-primary">Daftar File Surat Keputusan</h6>
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
									<th scope="col">Pengangkatan/CPNS</th>
									<th scope="col">PNS</th>
									<th scope="col">Naik Pangkat</th>
									<th scope="col">Mutasi</th>
									<th scope="col">Kenaikan Gaji Berkala</th>
									<th scope="col">Impasing</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php if ($dapok['cpns'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $dapok['cpns']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadcpns') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadpokok/hapuscpns') ?>" class="badge badge-danger">Delete</a>
										</td>
									<?php endif; ?>

									<?php if ($dapok['pns'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $dapok['pns']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadpns') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadpokok/hapuspns') ?>" class="badge badge-danger">Delete</a>
										</td>
									<?php endif; ?>

									<?php if ($dapok['naik_pangkat'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $dapok['naik_pangkat']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadnaikpangkat') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadpokok/hapusnaikpangkat') ?>" class="badge badge-danger">Delete</a>
										</td>
									<?php endif; ?>

									<?php if ($dapok['mutasi'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $dapok['mutasi']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadmutasi') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadpokok/hapusmutasi') ?>" class="badge badge-danger">Delete</a>
										</td>
									<?php endif; ?>

									<?php if ($dapok['kgb'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $dapok['kgb']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadkgb') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadpokok/hapuskgb') ?>" class="badge badge-danger">Delete</a>
										</td>
									<?php endif; ?>

									<?php if ($dapok['impasing'] === null) : ?>
										<td>File Kosong</td>
									<?php else : ?>
										<td><?= $dapok['impasing']; ?> <br>
											<a href="<?= base_url('hapusdandownloadpokok/downloadimpasing') ?>" class="badge badge-info">Download</a>
											<a href="<?= base_url('hapusdandownloadpokok/hapusimpasing') ?>" class="badge badge-danger">Delete</a>
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