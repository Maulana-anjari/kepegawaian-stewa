<!-- Begin Page Content -->
  <div class="container-fluid">

    	<div class="row">
            <div class="col-lg-7">
              <?= $this->session->flashdata('message'); ?>
            </div>
    	</div>

      <div class="row row-cols-1 row-cols-md-2">
      <div class="col mb-4">
        <div class="card">
          <div class="card-header">Profile</div>
          <div class="row no-gutters">
            <div class="col-md-4 pt-3 pl-3">
              <img src="<?= base_url('assets/img/profile/') . $users['image'];?>" class="card-img">
            </div>
            <div class="col-md-8">
              <div class="card-body" style="overflow: auto;">
                <table>
                        <tr>
                          <td style="min-width: 65px; height: 40px">Nama</td>
                          <td>: <?= $users['name'];?></td>
                        </tr>
                        <tr>
                          <td style="min-width: 65px; height: 40px">Email</td>
                          <td>: <?= $users['email'];?></td>
                        </tr>
                        <tr>
                          <td style="min-width: 65px; height: 40px">NIP</td>
                          <td>: <?= $users['nip'];?></td>
                        </tr>
                        <tr>
                          <td style="min-width: 65px; height: 40px">NUPTK</td>
                          <td>: <?= $users['nuptk'];?></td>
                        </tr>
                        <tr>
                          <td style="min-width: 65px; height: 40px">NRG</td>
                          <td>: <?= $users['nrg'];?></td>
                        </tr>
                        <tr>
                          <td style="min-width: 65px; height: 40px">NRG</td>
                          <td>: <?= $users['tempatlahir'];?></td>
                        </tr>
                        <tr>
                          <td style="min-width: 65px; height: 40px">NRG</td>
                          <td>: <?= $users['tgllahir'];?></td>
                        </tr>
                        <tr>
                          <td style="min-width: 65px; height: 40px">NRG</td>
                          <td>: <?= $users['alamat'];?></td>
                        </tr>
                      </table>
                <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $users['date_created']); ?></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card">
          <div class="card-header">Data Pokok</div>
          <div class="card-body" style="height: 380px; overflow : auto">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col" style="width: 200px">Nama Data</th>
                    <th scope="col" style="width: 250px">Nama File</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Ijazah SD</td>
                    <?php if ($dapok['ij_sd'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $dapok['ij_sd']; ?></td>
                    <td><a href="<?= base_url('assets/upload/dataijazah/' . $dapok['ij_sd']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td>Ijazah SLTP</td>
                    <?php if ($dapok['ij_sltp'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $dapok['ij_sltp']; ?></td>
                    <td><a href="<?= base_url('assets/upload/dataijazah/' . $dapok['ij_sltp']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td>Ijazah SLTA</td>
                    <?php if ($dapok['ij_slta'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $dapok['ij_slta']; ?></td>
                    <td><a href="<?= base_url('assets/upload/dataijazah/' . $dapok['ij_slta']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td>Ijazah S1</td>
                    <?php if ($dapok['ij_s1'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $dapok['ij_s1']; ?></td>
                    <td><a href="<?= base_url('assets/upload/dataijazah/' . $dapok['ij_s1']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td>Ijazah S2</td>
                    <?php if ($dapok['ij_s2'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $dapok['ij_s2']; ?></td>
                    <td><a href="<?= base_url('assets/upload/dataijazah/' . $dapok['ij_s2']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td>KTP Pribadi</td>
                    <?php if ($dapok['ktp_diri'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $dapok['ktp_diri']; ?></td>
                    <td><a href="<?= base_url('assets/upload/datakeluarga/' . $dapok['ktp_diri']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td>KTP Suami/Istri</td>
                    <?php if ($dapok['ktp_pas'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $dapok['ktp_pas']; ?></td>
                    <td><a href="<?= base_url('assets/upload/datakeluarga/' . $dapok['ktp_pas']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td>Kartu Keluarga</td>
                    <?php if ($dapok['kk'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $dapok['kk']; ?></td>
                    <td><a href="<?= base_url('assets/upload/datakeluarga/' . $dapok['kk']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td>Surat Nikah</td>
                    <?php if ($dapok['s_nikah'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $dapok['s_nikah']; ?></td>
                    <td><a href="<?= base_url('assets/upload/datakeluarga/' . $dapok['s_nikah']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td>Akta Kelahiran Pribadi</td>
                    <?php if ($dapok['akta_pribadi'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $dapok['akta_pribadi']; ?></td>
                    <td><a href="<?= base_url('assets/upload/datakeluarga/' . $dapok['akta_pribadi']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td>Akta Kelahiran Suami/Istri</td>
                    <?php if ($dapok['akta_pas'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $dapok['akta_pas']; ?></td>
                    <td><a href="<?= base_url('assets/upload/datakeluarga/' . $dapok['akta_pas']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td>Pengangkatan/CPNS</td>
                    <?php if ($dapok['cpns'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $dapok['cpns']; ?></td>
                    <td><a href="<?= base_url('assets/upload/datask/' . $dapok['cpns']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td>PNS</td>
                    <?php if ($dapok['pns'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $dapok['pns']; ?></td>
                    <td><a href="<?= base_url('assets/upload/datask/' . $dapok['pns']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td>Naik Pangkat</td>
                    <?php if ($dapok['naik_pangkat'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $dapok['naik_pangkat']; ?></td>
                    <td><a href="<?= base_url('assets/upload/datask/' . $dapok['naik_pangkat']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td>Mutasi</td>
                    <?php if ($dapok['mutasi'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $dapok['mutasi']; ?></td>
                    <td><a href="<?= base_url('assets/upload/datask/' . $dapok['mutasi']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td>Kenaikan Gaji Berkala</td>
                    <?php if ($dapok['kgb'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $dapok['kgb']; ?></td>
                    <td><a href="<?= base_url('assets/upload/datask/' . $dapok['kgb']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td>Impasing</td>
                    <?php if ($dapok['impasing'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $dapok['impasing']; ?></td>
                    <td><a href="<?= base_url('assets/upload/datask/' . $dapok['impasing']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td>NIP/KARPEG/NIP Baru</td>
                    <?php if ($dapok['nip_baru'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $dapok['nip_baru']; ?></td>
                    <td><a href="<?= base_url('assets/upload/datalain/' . $dapok['nip_baru']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td>TASPEN</td>
                    <?php if ($dapok['taspen'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $dapok['taspen']; ?></td>
                    <td><a href="<?= base_url('assets/upload/datalain/' . $dapok['taspen']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td>NPWP</td>
                    <?php if ($dapok['npwp'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $dapok['npwp']; ?></td>
                    <td><a href="<?= base_url('assets/upload/datalain/' . $dapok['npwp']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td>KARIS/KARSU</td>
                    <?php if ($dapok['karisu'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $dapok['karisu']; ?></td>
                    <td><a href="<?= base_url('assets/upload/datalain/' . $dapok['karisu']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td>Kartu Askes</td>
                    <?php if ($dapok['askes'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $dapok['askes']; ?></td>
                    <td><a href="<?= base_url('assets/upload/datalain/' . $dapok['askes']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card">
          <div class="card-header">Data Tahunan</div>
          <div class="card-body"  style="height: 380px; overflow : auto">
              <table class="table table-striped" style="min-width: 100px">
                <thead>
                  <tr>
                    <th scope="col" style="max-width: 300px">Nama File</th>
                    <th scope="col" style="max-width: 200px">2021</th>
                    <th scope="col" style="max-width: 200px">2020</th>
                    <th scope="col" style="max-width: 200px">2019</th>
                    <th scope="col" style="max-width: 200px">2018</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">SKP</th>
                    <?php if ($dahun4['skp'] === null): ?>
                    <td>File Kosong</td>
                    <?php else: ?>
                    <td><?= $dahun4['skp']; ?> <br>
                    <a href="<?= base_url('assets/datatahunan/2021/' . $dahun4['skp']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a>
                    </td>
                    <?php endif; ?>

                    <?php if ($dahun3['skp'] === null): ?>
                    <td>File Kosong</td>
                    <?php else: ?>
                    <td><?= $dahun3['skp']; ?><br>
                    <a href="<?= base_url('assets/datatahunan/2020/' . $dahun3['skp']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a>
                    </td>
                    <?php endif; ?>

                    <?php if ($dahun2['skp'] === null): ?>
                    <td>File Kosong</td>
                    <?php else: ?>
                    <td><?= $dahun2['skp']; ?><br>
                    <a href="<?= base_url('assets/datatahunan/2019/' . $dahun2['skp']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a>
                    </td>
                    <?php endif; ?>

                    <?php if ($dahun1['skp'] === null): ?>
                    <td>File Kosong</td>
                    <?php else: ?>
                    <td><?= $dahun1['skp']; ?><br>
                    <a href="<?= base_url('assets/datatahunan/2018/' . $dahun1['skp']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a>
                    </td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <th scope="row">PAK</th>
                    <?php if ($dahun4['pak'] === null): ?>
                    <td>File Kosong</td>
                    <?php else: ?>
                    <td><?= $dahun4['pak']; ?> <br>
                    <a href="<?= base_url('assets/datatahunan/2021/' . $dahun4['pak']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a>
                    </td>
                    <?php endif; ?>
                    
                    <?php if ($dahun3['pak'] === null): ?>
                    <td>File Kosong</td>
                    <?php else: ?>
                    <td><?= $dahun3['pak']; ?> <br>
                    <a href="<?= base_url('assets/datatahunan/2020/' . $dahun3['pak']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a>
                    </td>
                    <?php endif; ?>

                    <?php if ($dahun2['pak'] === null): ?>
                    <td>File Kosong</td>
                    <?php else: ?>
                    <td><?= $dahun2['pak']; ?> <br>
                    <a href="<?= base_url('assets/datatahunan/2019/' . $dahun2['pak']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a>
                    </td>
                    <?php endif; ?>
                    
                    <?php if ($dahun1['pak'] === null): ?>
                    <td>File Kosong</td>
                    <?php else: ?>
                    <td><?= $dahun1['pak']; ?> <br>
                    <a href="<?= base_url('assets/datatahunan/2018/' . $dahun1['pak']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a>
                    </td>
                    <?php endif; ?>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
      </div>

      <div class="col mb-4">
        <div class="card">
          <div class="card-header">Data Tambahan</div>
          <div class="card-body" style="height: 380px; overflow : auto">
              <table class="table" style="min-width: 100px">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" style="width: 200px">Nama Data</th>
                    <th scope="col">Nama File</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>SK Tugas Mengajar</td>
                    <?php if ($datam['sk_tugas_mengajar'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $datam['sk_tugas_mengajar']; ?></td>
                    <td><a href="<?= base_url('assets/datatambahan/data/' . $datam['sk_tugas_mengajar']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td>SK Tugas Tambahan</td>
                    <?php if ($datam['sk_tugas_tambahan'] === null): ?>
                    <td>File Kosong</td>
                    <td></td>
                    <?php else: ?>
                    <td><?= $datam['sk_tugas_tambahan']; ?></td>
                    <td><a href="<?= base_url('assets/datatambahan/data/' . $datam['sk_tugas_tambahan']) ?>" class="badge badge-success"><i class="fas fa-download"></i> Download</a></td>
                    <?php endif; ?>
                  </tr>
                  <tr></tr>
                </tbody>
              </table>
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Sertifikat</th>
                    <th scope="col">File Sertifikat</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1; ?>
                  <?php foreach ($sertifikat as $sf): ?>
                    <tr>
                      <th scope="row"><?php echo $i; ?></th>
                      <td><?= $sf['nama_sertifikat']; ?></td>
                      <td><?= $sf['file_sertifikat']; ?><br>
                        <a href="<?= base_url('user/download_sertifikat/' . $sf['id']); ?>" class="badge badge-success">Download</a>
                      </td>
                    </tr>
                  <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama SK</th>
                    <th scope="col">File SK</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1; ?>
                  <?php foreach ($sktambahan as $skt): ?>
                    <tr>
                      <th scope="row"><?php echo $i; ?></th>
                      <td><?= $skt['nama_sk_tambahan']; ?></td>
                      <td><?= $skt['file_sk_tambahan']; ?><br>
                        <a href="<?= base_url('user/download_sertifikat/' . $skt['id']); ?>" class="badge badge-success">Download</a>
                      </td>
                    </tr>
                  <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>

</div>
</div>
