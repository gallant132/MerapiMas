<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- css -->
        <?php $this->load->view("admin/partial/css.php") ?>
    </head>
    <body data-spy="scroll" data-target=".fixed-top">

	<!-- Breadcrumbs -->
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="card mt-4" >
					<div class="card-header">
						Upload Files
					</div>
					<div class="card-body">
						<form action="<?=base_url('admin/Galeri/upload/')?>" enctype="multipart/form-data" method="post">
								<div class="mb-3">
									<label class="form-label" id="uploadFile">Select Files</label>
									<input multiple="" type="file" name="uploadedFiles[]" >
								</div>

                                <div class="form-row mb-4">
                                <br>
                                <small>Nama Pekerjaan</small>
                                <select name="id_pekerjaan" id="id_pekerjaan" class="form-control" >
                                    <option value="" selected disabled>Pilih Pekerjaan</option>
                                    <?php foreach($pekerjaan as $ly) : ?>
                                        <option value="<?= $ly->id_pekerjaan ?>"><?= $ly->nama_pekerjaan ?></option>
                                    <?php endforeach; ?>
                                </select>
                            
                            
                            </div>

								<input type="submit" class="btn btn-primary" value="Upload" name="submit">

								<?php 
								if($this->session->flashdata('messgae'))
								{
									?>
									<p class="text-success"> <?=$this->session->flashdata('messgae')?></p>
								<?php }
								?>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
	
	<!-- js -->
	<?php $this->load->view("admin/partial/js.php") ?>



</body>
</html>

	<!-- Optional JavaScript; choose one of the two!
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="card mt-4" >
					<div class="card-header">
						Upload Files
					</div>
					<div class="card-body">
						<form action="<?=base_url('welcome/upload/')?>" enctype="multipart/form-data" method="post">
								<div class="mb-3">
									<label class="form-label" id="uploadFile">Select Files</label>
									<input multiple="" type="file" name="uploadedFiles[]" >
								</div>
								<input type="submit" class="btn btn-primary" value="Upload" name="submit">

								<?php 
								if($this->session->flashdata('messgae'))
								{
									?>
									<p class="text-success"> <?=$this->session->flashdata('messgae')?></p>
								<?php }
								?>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div> -->

