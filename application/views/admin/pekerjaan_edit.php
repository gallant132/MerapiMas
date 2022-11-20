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
                    <?php foreach($pekerjaan as $key){ ?>
					<!-- <form class="text-center border border-light p-5" method="post" action="<?php echo base_url() . 'admin/NamaKaryawan/update'; ?>"> -->
					<?php echo form_open_multipart('admin/Pekerjaan/update'); ?>
						<p class="h4 mb-4">Edit Pekerjaan</p>
                        <div class="form-row mb-4">
							<br>
							<small>Id Pekerjaan</small>
							<input type="text" class="form-control 
                            form-control-line form-user-input" name="id_pekerjaan" id="id_pekerjaan" required readonly value="<?php echo $key->id_pekerjaan ?>">
							<br><br>
							
						</div>

						<div class="form-row mb-4">
							<br>
							<small>Nama Pekerjaan</small>
							<input type="text" placeholder="Inputkan Nama Lengkap Anda" class="form-control
							form-control-line form-user-input" name="nama_pekerjaan" id="nama_pekerjaan" required value="<?php echo $key->nama_pekerjaan ?>">
							<br><br>
							
						</div>
						
						<div class="form-row mb-4">
							<br>
							<small>Nama Layanan</small>
							<select name="id_layanan" id="id_layanan" class="form-control" required>
								<?php foreach($layanan as $jb) : ?>
									<option value="<?= $jb->id_layanan ?>" <?= $jb->id_layanan === $key->id_layanan ? 'selected' : '' ?>><?= $jb->Nama_layanan ?></option>
								<?php endforeach; ?>
							</select>
							
						</div>

                        <div class="form-row mb-4">
							<br>
							<small>Detail Pekerjaan</small>
							<input type="text" placeholder="Inputkan Nama Lengkap Anda" class="form-control
							form-control-line form-user-input" name="detail_pekerjaan" id="detail_pekerjaan" required value="<?php echo $key->detail_pekerjaan ?>">
							<br><br>
							
						</div>

                        <div class="form-row mb-4">
							<br>
							<small>Tahun Pekerjaan</small>
							<input type="text" placeholder="Inputkan Nama Lengkap Anda" class="form-control
							form-control-line form-user-input" name="tahun_pekerjaan" id="tahun_pekerjaan" required value="<?php echo $key->tahun_pekerjaan ?>">
							<br><br>
							
						</div>

                        <div class="form-row mb-4">
							<br>
							<small>Nama Client</small>
							<input type="text" placeholder="Inputkan Nama Lengkap Anda" class="form-control
							form-control-line form-user-input" name="nama_client" id="nama_client" required value="<?php echo $key->nama_client ?>">
							<br><br>
							
						</div>

						<div class="form-group mb-4">
						<br>
						<small class="align left">Logo Client</small>
                        <input type="text" class="form-control 
                            form-control-line form-user-input" name="logo_client" id="logo_client" required readonly value="<?php echo $key->logo_client ?>">
						<input type="file" class="form-control" name="logo_client"  value="<?php echo $key->logo_client ?> size="20">
                        </div>

            

						<div>
						<img src="<?php echo base_url().'/upload/pekerjaan/'. $key->logo_client ?>" width="100">
						</div>

                        <div class="form-group mb-4">
						<br>
						<small class="align left">Thumbnail</small>
                        <input type="text" class="form-control 
                            form-control-line form-user-input" name="thumbnail" id="thumbnail" required readonly value="<?php echo $key->thumbnail ?>">
						<input type="file" class="form-control" name="thumbnail" value="<?php echo $key->thumbnail ?>  size="20">
                        </div>

						<div>
						<img src="<?php echo base_url().'/upload/pekerjaan/'. $key->thumbnail ?>" width="100">
						</div>


                        


						<!-- Sign up button -->
						<button class="btn btn-success my-4" type="submit">Simpan</button>
                        <a class="btn btn-danger my-4 " href="javascript:window.history.go(-1);">Kembali</a>
						<!-- Social register -->

						<hr>

						<!-- Terms of service -->
						<? redirect(base_url("admin/Pekerjaan"))?>
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
