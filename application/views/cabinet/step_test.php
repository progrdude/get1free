<div class="container-fluid">
    <div class="row" style="background: white">
        <h1>Шаг 1</h1>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="" id="progress-bar">
                <div class="step_info">
                    <div class="col">
                        <div class="step_info_step active">
                            <img src="/assets/image/icon-1.svg">
                            <img src="/assets/image/galina.svg" alt="">
                            <span>choose <br> your prize</span>

                        </div>
                    </div>
                    <div class="col">
                        <div class="step_info_step active">
                            <img src="/assets/image/icon-3.svg">
                            <img src="/assets/image/galina.svg" alt="">
                            <span>enter<br> your order id</span>

                        </div>
                    </div>
                    <div class="col">
                        <div class="step_info_step active">
                            <img src="/assets/image/icon-4.svg"><img src="/assets/image/galina.svg" alt="">
                            <span>sumbit your delivery<br> information</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="step_info_step now">
                            <img src="/assets/image/icon-4.svg">
                            <img src="/assets/image/galina.svg" alt="">
                            <span>share <br>your experience</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="step_info_step ">
                            <img src="/assets/image/icon-5.svg">
                            <img src="/assets/image/galina.svg" alt="">
                            <span>get <br>your reward</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-lg-8 mx-auto my-5 text-center">
                <h1>Please tell us your experience with the product</h1>
                <div class="row mt-5 col-lg-8 mx-auto radio-group">
                    <div class="col-6">
                        <div class="flex-row happy_radio radio" data-happy="1">
                            <div class="col">
                                <div class="pic">
                                    <img class="irc_mut img-fluid" src="/assets/image/smile.png"
                                         width="100" height="100">
                                </div>
                                <p class="fw-bold mt-3 fs-6 text-uppercase">I am  satisfied</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="flex-row not_happy_radio radio" data-happy="0">
                            <div class="col">
                                <div class="pic">
                                    <img class="irc_mut img-fluid" src="/assets/image/not_smile.png"
                                         width="100" height="100">
                                </div>
                                <p class="fw-bold mt-3 fs-6 text-uppercase">I am not satisfied</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row mt-5 justify-content-center">
                        <button class="btn btn-success" id="next_happy" disabled onclick="happy_update(<?= $user_order['id']?>)">NEXT</button>
                    </div>
                </div>


            </div>
        </div>
    </div>

        <div class="row">
            <div class="" id="progress-bar">
                <div class="step_info">
                    <div class="col">
                        <div class="step_info_step active">
                            <img src="/assets/image/icon-1.svg">
                            <img src="/assets/image/galina.svg" alt="">
                            <span>choose <br> your prize</span>

                        </div>
                    </div>
                    <div class="col">
                        <div class="step_info_step active">
                            <img src="/assets/image/icon-3.svg">
                            <img src="/assets/image/galina.svg" alt="">
                            <span>enter<br> your order id</span>

                        </div>
                    </div>
                    <div class="col">
                        <div class="step_info_step active">
                            <img src="/assets/image/icon-4.svg"><img src="/assets/image/galina.svg" alt="">
                            <span>sumbit your delivery<br> information</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="step_info_step now">
                            <img src="/assets/image/icon-4.svg">
                            <img src="/assets/image/galina.svg" alt="">
                            <span>share <br>your experience</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="step_info_step ">
                            <img src="/assets/image/icon-5.svg">
                            <img src="/assets/image/galina.svg" alt="">
                            <span>get <br>your reward</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row text-center">
                <h1>To continue, please rate this product for our website.</h1>
            </div>
            <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
                <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>
                <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
                <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
                <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
            </div>
            <div class="row mt-5 justify-content-center">
                <button class="btn btn-success" style="max-width: 200px;" onclick="star_update(<?= $user_order['id']?>)">NEXT</button>
            </div>
        </div>

        <div class="row">
            <div class="" id="progress-bar">
                <div class="step_info">
                    <div class="col">
                        <div class="step_info_step active">
                            <img src="/assets/image/icon-1.svg">
                            <img src="/assets/image/galina.svg" alt="">
                            <span>choose <br> your prize</span>

                        </div>
                    </div>
                    <div class="col">
                        <div class="step_info_step active">
                            <img src="/assets/image/icon-3.svg">
                            <img src="/assets/image/galina.svg" alt="">
                            <span>enter<br> your order id</span>

                        </div>
                    </div>
                    <div class="col">
                        <div class="step_info_step active">
                            <img src="/assets/image/icon-4.svg"><img src="/assets/image/galina.svg" alt="">
                            <span>sumbit your delivery<br> information</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="step_info_step now">
                            <img src="/assets/image/icon-4.svg">
                            <img src="/assets/image/galina.svg" alt="">
                            <span>share <br>your experience</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="step_info_step ">
                            <img src="/assets/image/icon-5.svg">
                            <img src="/assets/image/galina.svg" alt="">
                            <span>get <br>your reward</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-8 mx-auto my-5 text-center">

                    <img class="irc_mut img-fluid" src="/assets/image/not_smile.png"
                         width="100" height="100">
                    <h1>We are really sorry to hear you had such a frustrating experience, but we appreciate you bringing this issue to our attention.</h1>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row text-center">
                <h3>Our experts are already solving your problem.</h3>
                <h5>If more than a day has passed and you have not been contacted, please, write directly to us.<br>
                    <?= $config_site['email'] ?>
                </h5>
                <h5>Thank you for choosing <?= $config_site['brand'] ?>.</h5>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row text-center">
                <h3>Our experts are already solving your problem.</h3>
                <h5>If more than a day has passed and you have not been contacted, please, write directly to us.<br>
                    <?= $config_site['email'] ?>
                </h5>
                <h5>Thank you for choosing <?= $config_site['brand'] ?>.</h5>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row text-center">
                <h3>Our experts are already solving your problem.</h3>
                <h5>If more than a day has passed and you have not been contacted, please, write directly to us.<br>
                    <?= $config_site['email'] ?>
                </h5>
                <h5>Thank you for choosing <?= $config_site['brand'] ?>.</h5>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row text-center">
                <h3>It would be shipped in the immediate future to the address,
                    you have provided in your order.</h3>
                <h5>If there would be any issues, please, write directly to us.<br>
                    <?= $config_site['email'] ?>
                </h5>
                <h5>Thank you for choosing <?= $config_site['brand'] ?>.</h5>
            </div>
        </div>

        <div class="row">
            <div class="" id="progress-bar">
                <div class="step_info">
                    <div class="col">
                        <div class="step_info_step active">
                            <img src="/assets/image/icon-1.svg">
                            <img src="/assets/image/galina.svg" alt="">
                            <span>choose <br> your prize</span>

                        </div>
                    </div>
                    <div class="col">
                        <div class="step_info_step active">
                            <img src="/assets/image/icon-3.svg">
                            <img src="/assets/image/galina.svg" alt="">
                            <span>enter<br> your order id</span>

                        </div>
                    </div>
                    <div class="col">
                        <div class="step_info_step active">
                            <img src="/assets/image/icon-4.svg"><img src="/assets/image/galina.svg" alt="">
                            <span>sumbit your delivery<br> information</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="step_info_step now">
                            <img src="/assets/image/icon-4.svg">
                            <img src="/assets/image/galina.svg" alt="">
                            <span>share <br>your experience</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="step_info_step ">
                            <img src="/assets/image/icon-5.svg">
                            <img src="/assets/image/galina.svg" alt="">
                            <span>get <br>your reward</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-8 mx-auto my-5 text-center">
                    <h3>We are thrilled you enjoyed our product 🥰<br>
                        Please, support our growing business by kindly leaving us feedback on Amazon.</h3>
                    <div class="row mt-5 col-lg-8 mx-auto">
                        <a href="https://www.amazon.com/review/create-review/ref=cm_cr_arp_d_wr_but_lft?ie=UTF8&channel=reviews-product&asin=<?=$user_order['asin']?>" target="_blank" class="btn btn-warning btn-lg text-uppercase fw-bold leave-button">
                            Share your expirience <br> on Amazon
                        </a>
                    </div>
                    <h5 class="mt-5">Notice: use your real name in review, so we could find it quicker. And save the screenshot of your review. Return here to upload it.</h5>
                    <div class="row mt-5 col-lg-8 mx-auto input__wrapper"  style="display: none">
                        <form method="POST" action="<?php echo base_url('/cabinet/update_image'); ?>" enctype="multipart/form-data">
                            <div>
                                <label for="formFileLg" class="form-label">Upload a screenshot</label>
                                <input name="review" class="form-control form-control-lg" id="formFileLg" type="file" accept="image/gif, image/jpeg, image/png">
                                <input name="order_id" style="display: none" type="text" value="<?=$user_order['id']?>"/>
                            </div>
                            <button type="submit" class="btn btn-success mt-5" style="max-width: 250px">NEXT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <div class="row">
        <div class="" id="progress-bar">
            <div class="step_info">
                <div class="col">
                    <div class="step_info_step active">
                        <img src="/assets/image/icon-1.svg">
                        <img src="/assets/image/galina.svg" alt="">
                        <span>choose <br> your prize</span>

                    </div>
                </div>
                <div class="col">
                    <div class="step_info_step active">
                        <img src="/assets/image/icon-3.svg">
                        <img src="/assets/image/galina.svg" alt="">
                        <span>enter<br> your order id</span>

                    </div>
                </div>
                <div class="col">
                    <div class="step_info_step active">
                        <img src="/assets/image/icon-4.svg"><img src="/assets/image/galina.svg" alt="">
                        <span>sumbit your delivery<br> information</span>
                    </div>
                </div>
                <div class="col">
                    <div class="step_info_step active">
                        <img src="/assets/image/icon-4.svg">
                        <img src="/assets/image/galina.svg" alt="">
                        <span>share <br>your experience</span>
                    </div>
                </div>
                <div class="col">
                    <div class="step_info_step now">
                        <img src="/assets/image/icon-5.svg">
                        <img src="/assets/image/galina.svg" alt="">
                        <span>get <br>your reward</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-8 mx-auto my-5 text-center">
                <h3>It would be shipped in the immediate future to the address,<br>
                    you have provided in your order.<br>
                    If there would be any issues, please, write directly to us.<br>
                    mail@revicare-beauty.com<br><br>

                    Thank you for choosing REVICARE BEAUTY.</h3>
                <div class="row mt-5 col-lg-8 mx-auto">
                    <a href="https://m.me/105794154969384?ref=w15040896" target="_blank" class="btn btn-warning btn-lg text-uppercase fw-bold leave-button">
                        Join our private Giveaway Club!<br>Click here!
                    </a>
                </div>

            </div>
        </div>
    </div>


