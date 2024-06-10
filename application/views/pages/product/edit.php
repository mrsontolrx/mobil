<div class="container">
	<div class="row mt-4">
		<div class="col">
			<h2 class="text-center">Ubah Produk</h2>
		</div>
	</div>

	<div class="row bg-light p-3 mt-4">
		<div class="col">

			<?= form_open_multipart(base_url('product/edit/' . $product['id'])) ?>
				<input type="hidden" name="id" value="<?= $product['id'] ?>">
				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label font-weight-bold">Produk Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name" value="<?= $product['name'] ?>">
						<?= form_error('name', '<small class="form-text text-danger">', '</small>') ?>
					</div>
				</div> 
				<div class="row">
					<div class="col-5 offset-2">
						<div class="form-group">
							<label class="font-weight-bold">Harga</label>
							<input type="number" class="form-control" name="price" value="<?= $product['price'] ?>">
							<?= form_error('price', '<small class="form-text text-danger">', '</small>') ?>
						</div>
					</div>
					<div class="col-5">
						<div class="form-group">
							<label class="font-weight-bold">Tipe</label>
							<select class="form-control" name="tipe">
								<option value="manual" <?php if($product['tipe'] == "manual"){ print ' selected'; }?>>MANUAL</option>
								<option value="listrik" <?php if($product['tipe'] == "listrik"){ print ' selected'; }?>>LISTRIK</option>
								<option value="matic" <?php if($product['tipe'] == "matic"){ print ' selected'; }?>>MATIC</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Deskripsi Produk</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="summernote" name="description" rows="3">
							<?= $product['description'] ?>
						</textarea>
						<?= form_error('description', '<small class="form-text text-danger">', '</small>') ?>
					</div>
				</div>	
				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label font-weight-bold">Foto Produk</label>
					<div class="col">
						<?php if(!empty($product['image'])) : ?>
							<img src="<?= base_url('images/game/'. $product['image']) ?>" height="300" width="200">
						<?php else: ?>
							No Image
						<?php endif; ?>
						<br> <br>
						<input name="image" type="file" class="form-control-file">
						<?php if($this->session->flashdata('image_error')) :  ?>
							<small class="form-text text-danger">
								<?= $this->session->flashdata('image_error') ?>
							</small>
						<?php endif ?>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<a href="<?= base_url('product') ?>" class="btn btn-secondary btn-sm">
							<i class="fa fa-arrow-left mr-1"></i>
							Kembali
						</a>
						<button type="submit" class="btn btn-info btn-sm float-right">
							<i class="fa fa-save mr-2"></i>
							Ubah
						</button>
					</div>
				</div>
			<?= form_close() ?>			
		</div>
	</div>
</div>

