<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1> -->
  <!-- Page Heading -->
  <div class="card shadow mb-4">
    <div class="card">
      <div class="card-body justify-content-center">
        <div class="row align-items-center">
          <div class="col-xl-7 col-xxl-12">
            <div class="text-center px-4 mb-4 mb-xl-0 mb-xxl-4">
              <h2 class="text-primary">Welcome <?= $user['name']; ?>!</h2>
              <p class="text-gray-700 mb-0">It's time to get started!</p>
            </div>
          </div>
          <div class="col-xl-5 col-xxl-12 text-center">
            <img class="img-fluid" src="<?= base_url('assets/img/195.jpg'); ?>" style="max-width: 10rem;">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-7">
      <?= $this->session->flashdata('message'); ?>
    </div>
  </div>

  <div class="row row-cols-1 row-cols-md-2">
    <div class="col mb-4">
      <div class="card shadow border-bottom-primary">
        <div class="row no-gutters">
          <div class="col-md-4 pt-3 pl-3 mt-3 mb-3">
            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <table>
                <tr>
                  <td style="min-width: 70px; height: 40px">Nama</td>
                  <td>: <?= $user['name']; ?></td>
                </tr>
                <tr>
                  <td style="min-width: 70px; height: 40px">Email</td>
                  <td>: <?= $user['email']; ?></td>
                </tr>
                <tr>
                  <td style="min-width: 70px; height: 40px">NIP</td>
                  <td>: <?= $user['nip']; ?></td>
                </tr>
                <tr>
                  <td style="min-width: 70px; height: 40px">NUPTK</td>
                  <td>: <?= $user['nuptk']; ?></td>
                </tr>
                <tr>
                  <td style="min-width: 70px; height: 40px">NRG</td>
                  <td>: <?= $user['nrg']; ?></td>
                </tr>
              </table>
              <p class="card-text"><small class="text-muted">Registered since <?= date('d F Y', $user['date_created']); ?></small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card shadow border-bottom-primary">
        <div class="card-body">
          <h5 class="card-title text-center">Mulai</h5>
          <a class="btn btn-info btn-icon-split mb-3" href="<?= base_url('user/user_guide'); ?>" role="button"><span class="icon text-white-50"><i class="fas fa-info"></i></span><span class="text">User Guide</span></a>
          <a class="btn btn-secondary btn-icon-split mb-3" href="<?= base_url('user/edit'); ?>" role="button"><span class="icon text-white-50"><i class="fas fa-user-edit"></i></span><span class="text">Edit Profile</span></a>
          <a class="btn btn-danger btn-icon-split mb-3" href="<?= base_url('user/changepassword'); ?>" role="button"><span class="icon text-white-50"><i class="fas fa-key"></i></span><span class="text">Change Password</span></a><br>
          <a class="btn btn-primary btn-icon-split mb-3" href="<?= base_url('user/datapokok'); ?>" role="button"><span class="icon text-white-50"><i class="fas fa-archive"></i></span><span class="text">Input Data Pokok</span></a><br>
          <a class="btn btn-success btn-icon-split mb-3" href="<?= base_url('user/datatahunan'); ?>" role="button"><span class="icon text-white-50"><i class="fas fa-archive"></i></span><span class="text">Input Data Tahunan</span></a><br>
          <a class="btn btn-warning btn-icon-split mb-3" href="<?= base_url('user/datatambahan'); ?>" role="button"><span class="icon text-white-50"><i class="fas fa-archive"></i></span><span class="text">Input Data Tambahan</span></a>
        </div>
      </div>
    </div>


  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->