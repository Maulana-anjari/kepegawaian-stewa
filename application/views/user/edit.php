<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<!-- <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1> -->

	<div class="row">
		<div class="col-lg-9">
			<?= form_open_multipart('user/edit');  ?>
			<div class="form-group row">
				<div class="col-sm-10">
					<?= $this->session->flashdata('message'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="email" class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="email" name="email" value="<?= $user['email'];  ?>" readonly>
				</div>
			</div>
			<div class="form-group row">
				<label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="name" name="name" value="<?= $user['name'];  ?>">
					<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-2">Foto</div>
				<div class="col-sm-8">
					<div class="row">
						<div class="col-sm-4">
							<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
						</div>
						<div class="col-sm-8">
							<div class="custom-file mb-2">
								<input type="file" class="custom-file-input" id="image" name="image">
								<label class="custom-file-label" for="image">Choose File</label>
							</div>
							<div>
								<div class="alert alert-info" role="alert">Pastikan pas foto berasio 3x4 dan maksimal 2 MB!</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- form input ke tabel user_data -->
			<div class="form-group row">
				<label for="nip" class="col-sm-2 col-form-label">NIP</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="nip" name="nip" value="<?= $user['nip'];  ?>">
					<?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="nuptk" class="col-sm-2 col-form-label">NUPTK</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="nuptk" name="nuptk" value="<?= $user['nuptk'];  ?>">
					<?= form_error('nuptk', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="nrg" class="col-sm-2 col-form-label">NRG</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="nrg" name="nrg" value="<?= $user['nrg'];  ?>">
					<?= form_error('nrg', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="tempatlahir" name="tempatlahir" value="<?= $user['tempatlahir'];  ?>">
					<?= form_error('tempatlahir', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-8">
					<input type="text" class="form-control mb-2" id="tgllahir" name="tgllahir" value="<?= $user['tgllahir'];  ?>">
					<?= form_error('tanggallahir', '<small class="text-danger pl-3">', '</small>'); ?>
					<div class="alert alert-info mb-2" role="alert">Format tanggal lahir: dd-mm-yyyy</div>
				</div>
			</div>
			<div class="form-group row">
				<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="alamat" name="alamat" value="<?= $user['alamat'];  ?>">
					<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>

			<div class="form-group row justify-content-end">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary btn-icon-split"><span class="icon text-white-50"><i class="fas fa-save"></i></span><span class="text">Save</span></button>
				</div>
			</div>

			</form>
		</div>
	</div>
</div>