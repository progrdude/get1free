
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Настройка <?= $product_detail['name'] ?> </h1>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="/assets/image/<?= $product_detail['image'] ?>" alt="" class="img-fluid mb-3">
                <form  method="POST" action="<?php echo base_url('product/update_product_img'); ?>" enctype="multipart/form-data">
                    <input type="text" name="product_id" class="form-control d-none" value="<?= $product_detail['id'] ?>">
                    <input class="form-control" type="file" id="formFile" name="image">
                    <button class="btn btn-primary w-100 mt-2" >Обновить</button>
                </form>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form  method="POST" action="<?php echo base_url('product/update_product'); ?>">
                            <input type="text" name="product_id" class="form-control d-none" value="<?= $product_detail['id'] ?>">
                            <h5>Amazon</h5>
                            <input type="text" name="amazon_url" class="form-control" value="<?= $product_detail['amazon_url'] ?>">
                            <h5 class="mt-3">Название</h5>
                            <input type="text" name="name" class="form-control" value="<?= $product_detail['name'] ?>">
                            <h5 class="mt-3">About</h5>
                            <textarea class="form-control summernote answer" name="about" id="answer" rows="5"><?= $product_detail['about'] ?></textarea>
                            <h5 class="mt-3">Manual</h5>
                            <textarea class="form-control summernote answer" name="manual" id="answer" rows="5"><?= $product_detail['manual'] ?></textarea>

                            <button class="btn btn-primary w-100 mt-2" >Обновить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



