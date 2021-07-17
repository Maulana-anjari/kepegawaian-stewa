        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Guru</h6>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <form action="<?= base_url('admin/dataguru') ?>" method="post">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Search keyword..." name="keyword" autocomplete="off" autofocus>
                      <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="submit">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-4">
                  <?= $this->session->flashdata('message')  ?> 
                </div>
              </div>

              <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
               	<div class="row">
          	     <div class="col-lg">
                  <h5>Result: <?= $total_rows; ?></h5>
                  <table class="table table-hover">
          			  <thead>
          			    <tr>
          			      <th scope="col">No</th>
          			      <th scope="col">Nama</th>
                      <th scope="col">Email</th>
          			      <th scope="col">NIP</th>
          			      <th scope="col">NUPTK</th>
          			      <th scope="col">NRG</th>
          			      <th scope="col">Action</th>
          			    </tr>
          			  </thead>
          			  <tbody>
                    <?php if(empty($dataguru)) : ?>
                      <tr>
                        <td colspan="7">
                          <div class="alert alert-danger" role="alert">
                            Data not found!
                          </div>
                        </td>
                      </tr>
                    <?php endif; ?>

          			  	<?php foreach ($dataguru as $dg): ?>
          			    <tr>
          			      <th scope="row"><?= ++$start; ?></th>
          			      <td><?= $dg['name']; ?></td>
                      <td><?= $dg['email']; ?></td>
          			      <td><?= $dg['nip']; ?></td>
          			      <td><?= $dg['nuptk']; ?></td>
          			      <td><?= $dg['nrg']; ?></td>
          			      <td>
          			      	<a href="<?= base_url('admin/detailguru/' . $dg['email']); ?>" class="btn btn-info btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Detail">
                          <i class="fas fa-info-circle"></i>
                        </a>
                        <?php if ($dg['email'] === 'gatotkaca@gmail.com'): ?>
                          <a href="" class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#cannotdeleteuserModal"><span><i class="fas fa-trash"></i></span></a>
                        <?php else: ?>
                          <a href="" class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#deleteverificationModal"><span><i class="fas fa-trash"></i></span></a>
                        <?php endif; ?>
          			      </td>
          			    </tr>
          			    <?php endforeach; ?>
          			  </tbody>
          			</table>
              	</div>
              </div>
                </div>
                  </div>
                  <?= $this->pagination->create_links(); ?>
                </div>
              </div>

        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
  <div>
  <div class="modal fade" id="deleteverificationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete this user?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Delete" below if you are ready to delete user.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-danger" href="<?= base_url('admin/delete_user/' . $dg['email']); ?>">Delete</a>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="cannotdeleteuserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Can not delete this user</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Sorry you can not delete Super Admin</div>
          <div class="modal-footer">
            <button class="btn btn-primary" type="button" data-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div>