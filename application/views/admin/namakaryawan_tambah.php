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
                    <h1 class="text-center pt-3" style="Margin-top:100px">Tambah Karyawan</h1>
                    <div class="d-flex align-items-center justify-content-center container row m-auto" style="height: 250px">
                        <form class="col-6" action="<?php echo base_url() . 'admin/NamaKaryawan/insert'; ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="kelas">Nama Karyawan</label>
                                <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" required>
                            </div>
                            
                            <div class="form-row mb-4">
                                <br>
                                <small>Jabatan</small>
                                <select name="id_jabatan" id="id_jabatan" class="form-control" >
                                    <option value="" selected disabled>Pilih Jabatan</option>
                                    <?php foreach($jabatan as $jb) : ?>
                                        <option value="<?= $jb->id_jabatan ?>"><?= $jb->jabatan ?></option>
                                    <?php endforeach; ?>
                                </select>
                            
                            
                            </div>

                            <div class="form-group mb-4">
                                <label for="foto">Foto Karyawan</label>
                                <input type="file" class="form-control" name="userfile" required size="20">
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
