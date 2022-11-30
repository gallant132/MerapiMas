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
                    <?php foreach($cov as $key){ ?>
					<!-- <form class="text-center border border-light p-5" method="post" action="<?php echo base_url() . 'admin/Cov/update'; ?>"> -->
					<?php echo form_open_multipart('admin/Cov/update'); ?>
						<p class="h4 mb-4">Edit Core of Value</p>
                        <div class="form-row mb-4">
							<br>
							<small>Id CoV</small>
							<input type="text" class="form-control 
                            form-control-line form-user-input" name="id_cov" id="id_cov" required readonly value="<?php echo $key->id_cov ?>">
							<br><br>
							
						</div>

						<div class="form-row mb-4">
							<br>
							<small>Nama Perusahaan</small>
							<select name="id_tentang" id="id_tentang" class="form-control" required>
								<?php foreach($tentang as $jb) : ?>
									<option value="<?= $jb->id_tentang ?>" <?= $jb->id_tentang === $key->id_tentang ? 'selected' : '' ?>><?= $jb->nama_perusahaan ?></option>
								<?php endforeach; ?>
							</select>
							
						</div>

						<div class="form-row mb-4">
							<br>
							<small>Core of Value</small>
							<input type="text" placeholder="Inputkan Nama Lengkap Anda" class="form-control
							form-control-line form-user-input" name="nama" id="nama" required value="<?php echo $key->nama ?>">
							<br><br>
							
						</div>
						
						<div class="form-row mb-4">
							<br>
							<small>Detail</small>
							<input type="text" placeholder="Inputkan Nama Lengkap Anda" class="form-control
							form-control-line form-user-input" name="detail" id="detail" required value="<?php echo $key->detail ?>">
							<br><br>
							
						</div>

                

						<div class="form-group mb-4">
						<br>
						<small class="align left">Icon</small>
						<input type="file" class="form-control" name="userfile"  size="20">
                        </div>

						<div>
						<img src="<?php echo base_url().'/upload/icon_cov/'. $key->icon ?>" width="100">
						</div>


                        


						<!-- Sign up button -->
						<button class="btn btn-success my-4" type="submit">Simpan</button>
                        <a class="btn btn-danger my-4 " href="javascript:window.history.go(-1);">Kembali</a>
						<!-- Social register -->

						<hr>

						<!-- Terms of service -->
						<? redirect(base_url("admin/cov"))?>
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
