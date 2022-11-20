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
                    <?php foreach($karyawan as $key){ ?>
					<!-- <form class="text-center border border-light p-5" method="post" action="<?php echo base_url() . 'admin/NamaKaryawan/update'; ?>"> -->
					<?php echo form_open_multipart('admin/NamaKaryawan/update'); ?>
						<p class="h4 mb-4">Edit Data Karyawan</p>
                        <div class="form-row mb-4">
							<br>
							<small>Id Karyawan</small>
							<input type="text" class="form-control 
                            form-control-line form-user-input" name="id_karyawan" id="id_karyawan" required readonly value="<?php echo $key->id_karyawan ?>">
							<br><br>
							
						</div>

						<div class="form-row mb-4">
							<br>
							<small>Nama Karyawan</small>
							<input type="text" placeholder="Inputkan Nama Lengkap Anda" class="form-control
							form-control-line form-user-input" name="nama_karyawan" id="nama_karyawan" required value="<?php echo $key->nama_karyawan ?>">
							<br><br>
							
						</div>
						
						<div class="form-row mb-4">
							<br>
							<small>Jabatan</small>
							<select name="id_jabatan" id="id_jabatan" class="form-control" required>
								<?php foreach($jabatan as $jb) : ?>
									<option value="<?= $jb->id_jabatan ?>" <?= $jb->id_jabatan === $key->id_jabatan ? 'selected' : '' ?>><?= $jb->jabatan ?></option>
								<?php endforeach; ?>
							</select>
							
						</div>

                        <!-- <div class="form-row mb-4">
							<br>
							<small>Foto</small>
							<input type="text" placeholder="Inputkan Nama Lengkap Anda" class="form-control
							form-control-line form-user-input" name="foto" id="foto" required value="<?php echo $key->foto ?>">
							<br><br>
							
						</div> -->

						<div class="form-group mb-4">
						<br>
						<small class="align left">Foto Karyawan</small>
						<input type="file" class="form-control" name="userfile"  size="20">
                        </div>

						<div>
						<img src="<?php echo base_url().'/upload/karyawan/'. $key->foto ?>" width="100">
						</div>


                        


						<!-- Sign up button -->
						<button class="btn btn-success my-4" type="submit">Simpan</button>
                        <a class="btn btn-danger my-4 " href="javascript:window.history.go(-1);">Kembali</a>
						<!-- Social register -->

						<hr>

						<!-- Terms of service -->
						<? redirect(base_url("admin/namakaryawan"))?>
					</form>
                    
                 <?php } ?>
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
