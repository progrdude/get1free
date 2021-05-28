<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
	<div
		class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Настройка сайта <?= $site_detail['brand'] ?></h1>

	</div>

	<div class="row">
		<div class="col-3">
			<h5>Почта</h5>
			<div class="card">
				<div class="card-body">
					<h5>Email</h5>
					<p><?= $site_detail['email'] ?></p>
					<h5>Bmail</h5>
					<p><?= $site_detail['bmail'] ?></p>
					<h5>Epass</h5>
					<p><?= $site_detail['epass'] ?></p>
				</div>
			</div>

		</div>

		<div class="col-4">
			<h5>Аналитика(google)</h5>
			<div class="card">
				<div class="card-body">
					<form  method="POST" action="<?php echo base_url('admin/update_site'); ?>">
						<div class="mb-3">
							<label class="form-label">Код аналитики</label>
							<input type="text" name="anal" class="form-control" value="<?= $site_detail['anal'] ?>">
						</div>
						<div class="mb-3">
							<label class="form-label">Тег head</label>
							<input type="text" name="tag_head" class="form-control" value="<?= $site_detail['tag_head'] ?>" >
						</div>
						<div class="mb-3">
							<label class="form-label">Тег body</label>
							<input type="text" name="tag_body" class="form-control"  value="<?= $site_detail['tag_body'] ?>">
						</div>
						<input type="text" name="site_id" class="form-control d-none" value="<?= $site_detail['id'] ?>">
						<button type="submit" class="btn btn-primary w-100">Обновить</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-5">
			<h5>Настрока</h5>
			<div class="card">
				<div class="card-body">
					<h5>Основной цвет и доп</h5>
					<form  method="POST" action="<?php echo base_url('admin/update_site'); ?>">
						<input type="text" name="site_id" class="form-control d-none" value="<?= $site_detail['id'] ?>">
						<input type="color" name="color" class="form-control form-control-color" id="exampleColorInput" value="<?= $site_detail['color'] ?>" title="Choose your color">
						<input type="color" name="color_second" class="form-control form-control-color" id="exampleColorInput" value="<?= $site_detail['color_second'] ?>" title="Choose your color">
						<button class="btn btn-primary w-100 mt-2" >Обновить</button>
					</form>
				</div>
			</div>
			<div class="card mt-2">
				<div class="card-body">
					<h5>Отзывы</h5>
					<form  method="POST" action="<?php echo base_url('admin/update_site'); ?>">
						<input type="text" name="review_id" class="form-control" value="<?= $site_detail['review_id'] ?>">
						<input type="text" name="site_id" class="form-control d-none" value="<?= $site_detail['id'] ?>">
						<button type="submit" class="btn btn-primary w-100 mt-2" >Обновить</button>
					</form>
				</div>
			</div>
			<div class="card mt-2">
				<div class="card-body">
					<h5>Статус: <span class="text-success">Активный</span></h5>
					<button class="btn btn-danger w-100" >Заблокировать сайт</button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-4 mt-5">
				<h5>Background</h5>
				<div class="card">
					<div class="card-body">
						<div class="mb-3">
							<img src="/assets/image/<?= $site_detail['background'] ?>" alt="" class="img-fluid mb-3">
							<form  method="POST" action="<?php echo base_url('admin/update_site_img'); ?>" enctype="multipart/form-data">
								<input type="text" name="site_id" class="form-control d-none" value="<?= $site_detail['id'] ?>">
								<input class="form-control" type="file" id="formFile" name="background">
								<button class="btn btn-primary w-100 mt-2" >Обновить</button>
							</form>

						</div>
					</div>
				</div>
			</div>
			<div class="col-4 mt-5">
				<h5>Logo</h5>
				<div class="card">
					<div class="card-body">
						<div class="mb-3">
							<div class="text-center mb-3" style="background: #aaa">
								<img src="/assets/image/<?= $site_detail['logo'] ?>" alt="" class="img-fluid mb-3">

							</div>
							<form  method="POST" action="<?php echo base_url('admin/update_site_img'); ?>" enctype="multipart/form-data">
								<input type="text" name="site_id" class="form-control d-none" value="<?= $site_detail['id'] ?>">
								<input class="form-control" type="file" id="formFile" name="logo" >
								<button class="btn btn-primary w-100 mt-2" >Обновить</button>
							</form>

						</div>
					</div>
				</div>
			</div>
			<div class="col-4 mt-5">
				<h5>Product</h5>
				<div class="card">
					<div class="card-body">
						<div class="mb-3">
							<div class="text-center mb-3">
								<img src="/assets/image/<?= $site_detail['image'] ?>" alt="" class="img-fluid mb-3">

							</div>
							<form  method="POST" action="<?php echo base_url('admin/update_site_img'); ?>" enctype="multipart/form-data">
								<input type="text" name="site_id" class="form-control d-none" value="<?= $site_detail['id'] ?>">
								<input class="form-control" type="file" id="formFile" name="image">
							<button class="btn btn-primary w-100 mt-2" >Обновить</button>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-12">
				<h5>Секция 2 (текст)</h5>
				<div class="card">
					<div class="card-body">
						<form  method="POST" action="<?php echo base_url('admin/update_site'); ?>">
							<input type="text" name="site_id" class="form-control d-none" value="<?= $site_detail['id'] ?>">
							<textarea class="form-control summernote answer" name="text_two" id="answer" rows="5"><?= $site_detail['text_two'] ?></textarea>
						<button class="btn btn-primary w-100 mt-2" >Обновить</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-6">
				<h5>Секция 3 (Картинка)</h5>
				<div class="card">
					<div class="card-body">
						<div class="text-center mb-3">
							<img src="/assets/image/<?= $site_detail['img_three'] ?>" alt="" class="img-fluid mb-3">

						</div>
						<form  method="POST" action="<?php echo base_url('admin/update_site_img'); ?>" enctype="multipart/form-data">
							<input type="text" name="site_id" class="form-control d-none" value="<?= $site_detail['id'] ?>">
							<input class="form-control" type="file" id="formFile" name="img_three">
							<button class="btn btn-primary w-100 mt-2" >Обновить</button>
						</form>

					</div>
				</div>
			</div>
			<div class="col-6">
				<h5>Секция 3 (текст)</h5>
				<div class="card">
					<div class="card-body">
						<form  method="POST" action="<?php echo base_url('admin/update_site'); ?>">
							<input type="text" name="site_id" class="form-control d-none" value="<?= $site_detail['id'] ?>">
							<textarea class="form-control summernote answer" name="text_three" id="answer" rows="5"><?= $site_detail['text_three'] ?></textarea>
							<button class="btn btn-primary w-100 mt-2" >Обновить</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
				<h5>Продукты</h5>
				<div class="btn-toolbar mb-2 mb-md-0">

					<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addproduct">
						Добавить продукт
					</button>
				</div>
			</div>
			<div class="row">
				<?php if (!empty($all_site_product)) { ?>
					<?php foreach ($all_site_product as $site) { ?>

						<div class="col-4">
							<div class="card">
								<div class="card-body">
									<img src="/assets/image/<?= $site['image'] ?>" alt="" class="img-fluid mb-3">
									<a href="/product?product_id=<?= $site['id'] ?>" class="btn btn-primary w-100">Изменить</a>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php } ?>

			</div>
		</div>
	</div>

</main>

<div class="modal fade" id="addproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Добавить продукт</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form  method="POST" action="<?php echo base_url('admin/add_site_product'); ?>" enctype="multipart/form-data">
					<input type="text" name="site_id" class="form-control d-none" value="<?= $site_detail['id'] ?>">
					<div class="mb-3">
						<label class="form-label">Изображение</label>
						<input class="form-control" type="file" id="formFile" name="image_product">
					</div>
					<div class="mb-3">
						<label class="form-label">Название</label>
						<input type="text" name="name" class="form-control" >
					</div>
					<div class="mb-3">
						<label class="form-label">Ссылка на Amazon</label>
						<input type="text" name="amazon_url" class="form-control" >
					</div>
					<div class="mb-3">
						<label class="form-label">About</label>
						<textarea type="text" name="about" class="form-control" ></textarea>
					</div>
					<div class="mb-3">
						<label class="form-label">Instruction manual</label>
						<textarea type="text" name="manual" class="form-control" ></textarea>
					</div>

					<button type="submit" class="btn btn-primary w-100">Добавить</button>
				</form>
			</div>

		</div>
	</div>
</div>

