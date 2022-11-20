<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page &mdash; Stisla</title>

  <?php $this->load->view("admin/partial/css.php") ?>
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <!--Top Navbar -->
      <?php $this->load->view("admin/partial/topnavbar.php") ?>

      <!-- Side Navbar -->
      <?php $this->load->view("admin/partial/sidenavbar.php") ?>


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tentang Perusahaan</h1>
          </div>

          <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" 
                            role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                    <thead>
                                        <tr><th rowspan="0" colspan="1">No</th>
                                        <th rowspan="0" colspan="1">ID</th>
                                        <th rowspan="1" colspan="2">Nama Perusahaan</th>
                                            <th rowspan="1" colspan="4">Tentang Perusahaan</th>
                                            <th rowspan="1" colspan="8">Alamat</th>
                                            <th rowspan="1" colspan="4">Contact</th>
                                            <th rowspan="1" colspan="4">Visi</th>
                                            <th rowspan="1" colspan="4">Misi</th>
                                            <th rowspan="1" colspan="4">Legalitas</th>
                                            <th rowspan="1" colspan="4">Core of Value</th>
                                            <th rowspan="1" colspan="1">Action</th></tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                          <?php $no = 0 ?>;
                                            <?php foreach ($tentang as $key): ?>
                                              <?php $no++?>
                                                <td colspan="1"><?php echo $no; ?></td>
                                                <td colspan="1"><?php echo $key->id_tentang; ?></td>
                                                <td colspan="2"><?php echo $key->nama_perusahaan; ?></td>
                                                <td colspan="4"><?php echo $key->tentangperusahaan; ?></td>
                                                <td><?php echo $key->alamat; ?></td>
                                                <!-- <td><?php echo $key->contact; ?></td>
                                                <td><?php echo $key->visi; ?></td>
                                                <td><?php echo $key->misi; ?></td>
                                                <td><?php echo $key->legalitas; ?></td>
                                                <td><?php echo $key->nama; ?></td> -->

                                                <!-- <td  rowspan="1" colspan="8"><?php foreach ($tentang as $key):?>
                                                      <?php  echo $key->alamat; ?>
                                                      <?php endforeach; ?> 
                                                </td> -->

                                                <!-- <td><?php foreach ($tentang as $cnt):?>
                                                      <td><?php  echo $cnt->contact; ?> </td>
                                                      <?php endforeach; ?> 
                                                </td>

                                                <td><?php foreach ($tentang as $vs):?>
                                                      <td><?php  echo $vs->visi; ?> </td>
                                                      <?php endforeach; ?> 
                                                </td>

                                                <td><?php foreach ($tentang as $ms):?>
                                                      <td><?php echo $ms->misi; ?> </td>
                                                      <?php endforeach; ?> 
                                                </td>

                                                <td><?php foreach ($tentang as $lgl):?>
                                                      <td><?php echo $lgl->legalitas; ?> </td>
                                                      <?php endforeach; ?> 
                                                </td>

                                                <td><?php foreach ($tentang as $c):?>
                                                      <td><?php echo $c->nama; ?> </td>
                                                      <?php endforeach; ?> 
                                                </td>  -->
                                                
                                                <!-- <td><?php echo $key->no_wa; ?></td>
                                                <td><?php echo $key->alamat_pendaftar; ?></td>
                                                <td><?php echo $key->asal_sekolah; ?></td>
                                                <td><?php echo $key->nama_kelas; ?></td> 
                                                <td><?php echo $key->pembayaran; ?></td> -->
                                                <td>
                                                    <button class="btn btn-primary text-white mb-2"> <?php echo anchor('daftar/edit_pendaftar/'.$key->id_tentang,'<font color=white > Ubah </font>'); ?> </button>
                                                    <button class="btn btn-success mb-2"> <?php echo anchor('daftar/konfirmasi_pendaftar/'.$key->id_tentang,'<font color=white > Konfirmasi </font>'); ?> </button> 
                                                    <button class="btn btn-danger text-white mb-2"> <?php echo anchor('daftar/hapus_pendaftar/'.$key->id_tentang,'<font color=white > Hapus </font>'); ?> </button>
                                                </td>
    
                                        </tr>
                                            <?php endforeach; ?>      
                                    </tbody>
                                                         
                        </table>
                        <ol class="breadcrumb mb-4 ">
                        <a class="nav-link page-scroll active btn btn-success" href="<?= base_url("admin/tentang/tambah_tentang/") ?>">Tambah Data</a>
                        </ol>
        </section>
      </div>
      <!-- footer -->
      <?php $this->load->view("admin/partial/footer.php") ?>
    </div>
  </div>

  <!-- General JS Scripts -->
  <?php $this->load->view("admin/partial/js.php") ?>
</body>
</html>