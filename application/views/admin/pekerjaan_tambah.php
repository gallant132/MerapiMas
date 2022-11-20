<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- css -->
        <?php $this->load->view("admin/partial/css.php") ?>
    </head>
    <body data-spy="scroll" data-target=".fixed-top">

	<!-- Breadcrumbs -->
	<div class="ex-basic-1">
		<div class="container">
			<div class="row">
                <div class="col-lg-6">
                    <!-- Default form register -->
                    <h1 class="text-center pt-3" style="Margin-top:100px">Tambah Pekerjaan</h1>
                    <div class="d-flex align-items-center justify-content-center container row m-auto" style="height: 250px">
                        <form class="col-6" action="<?php echo base_url() . 'admin/Pekerjaan/insert'; ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="kelas">Nama Pekerjaan</label>
                                <input type="text" class="form-control" id="nama_pekerjaan" name="nama_pekerjaan" required>
                            </div>
                            
                            <div class="form-row mb-4">
                                <br>
                                <small>Nama Layanan</small>
                                <select name="id_layanan" id="id_layanan" class="form-control" >
                                    <option value="" selected disabled>Pilih Jabatan</option>
                                    <?php foreach($layanan as $ly) : ?>
                                        <option value="<?= $ly->id_layanan ?>"><?= $ly->Nama_layanan ?></option>
                                    <?php endforeach; ?>
                                </select>
                            
                            
                            </div>

                            <div class="form-group">
                                <label for="kelas">Detail Pekerjaan</label>
                                <input type="text" class="form-control" id="detail_pekerjaan" name="detail_pekerjaan" required>
                            </div>

                            <div class="form-group">
                                <label for="kelas">Tahun Pekerjaan</label>
                                <input type="text" class="form-control" id="tahun_pekerjaan" name="tahun_pekerjaan" required>
                            </div>

                            <div class="form-group">
                                <label for="kelas">Nama Client</label>
                                <input type="text" class="form-control" id="nama_client" name="nama_client" required>
                            </div>
                            

                            <div class="form-group mb-4">
                                <label for="foto">Logo Client</label>
                                <input type="file" class="form-control" name="logo_client"  size="20">
                            </div>

                            <div class="form-group mb-4">
                                <label for="foto">Thumbnail</label>
                                <input type="file" class="form-control" name="thumbnail"  size="20">
                            </div>

                            
                            <div class="d-flex align-items-center flex-column row">
                                <button type="submit" class="col-5 rounded btn btn-success text-white rounded-lg mt-3" onClick="alert('Karyawan Ditambahkan')">Tambah</button>
                                <button class="col-5 btn btn-danger text-white rounded rounded-lg mt-3" onclick="window.location.href='/MerapiMas/admin/NamaKaryawan' ">Kembali</button>
                            </div>
                        </form>
                    </div>
					<!-- Default form register -->

				</div>
				
			</div>

		</div>
		<!-- end of container -->
	</div>
	
	<!-- js -->
	<?php $this->load->view("admin/partial/js.php") ?>



</body>
</html>
