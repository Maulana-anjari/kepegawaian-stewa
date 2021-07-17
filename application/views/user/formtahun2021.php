<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->

	<!-- <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1> -->
	<a class="btn btn-secondary mb-3" href="<?= base_url('user/datatahunan'); ?>" role="button"><i class="fas fa-arrow-left"></i> Back</a>
	<div class="alert alert-info" role="alert"><b>Penting!</b> Pastikan file yang Anda masukkan berbentuk file pdf dengan ukuran maksimal 2 MB!</div>
	<?= $this->session->flashdata('message')  ?>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Upload File Tahunan 2021</h6>
		</div>
		<div class="card-body">
			<?= form_open_multipart('user/inputtahun2021');  ?>
			<div class="form-group row">
				<label for="email" class="col-sm-4 col-form-label">Email</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="email" name="email" value="<?= $user['email'];  ?>" readonly>
				</div>
			</div>
			<?php if ($dahun['skp'] === null) : ?>
				<div class="form-group row">
					<label for="skp" class="col-sm-4 col-form-label">SKP</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="skp" name="skp">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_skp" value="<?= $dahun['skp'] ?>">
			<?php endif; ?>

			<?php if ($dahun['pak'] === null) : ?>
				<div class="form-group row">
					<label for="pak" class="col-sm-4 col-form-label">PAK</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="pak" name="pak">
							<label class="custom-file-label" for="image">Choose File</label>
						</div>
					</div>
				</div>
			<?php else : ?>
				<input type="hidden" name="id_pak" value="<?= $dahun['pak'] ?>">
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
			<h6 class="m-0 font-weight-bold text-primary">Data Tahunan Tahun 2021</h6>
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

					<table class="table table-bordered" style="min-width: 100px">
						<thead>
							<tr>
								<th scope="col">SKP</th>
								<th scope="col">PAK</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php if ($dahun['skp'] === null) : ?>
									<td>File Kosong</td>
								<?php else : ?>
									<td><?= $dahun['skp']; ?> <br>
										<a href="<?= base_url('hapusdandownloadpokok/downloadskp2021') ?>" class="badge badge-info">Download</a>
										<a href="<?= base_url('hapusdandownloadtahunan/hapusskp2021') ?>" class="badge badge-danger">Delete</a>
									</td>
								<?php endif; ?>

								<?php if ($dahun['pak'] === null) : ?>
									<td>File Kosong</td>
								<?php else : ?>
									<td><?= $dahun['pak']; ?> <br>
										<a href="<?= base_url('hapusdandownloadpokok/downloadpak2021') ?>" class="badge badge-info">Download</a>
										<a href="<?= base_url('hapusdandownloadtahunan/hapuspak2021') ?>" class="badge badge-danger">Delete</a>
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