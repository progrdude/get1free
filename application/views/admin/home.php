<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/admin">Конверсия</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/analytics/order">Ордеры</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Пользователи</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Заходы</a>
            </li>

        </ul>
	</div>

    <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <div class="row">
                                <div class="col-3">
                                    <p>От: <input type="text" class="form-control" data-filter="dateStartTotal"></p>
                                </div>
                                <div class="col-3">
                                    <p>До: <input type="text" class="form-control" data-filter="dateEndTotal"></p>
                                </div>
                                <div class="col-3">
                                    <p>
                                        Сайт:
                                        <select class="form-select" id="site">
                                            <option selected></option>
                                            <?php if (!empty($get_all_site)) { ?>
                                                <?php foreach ($get_all_site as $site) { ?>
                                                    <option value="<?= $site['url'] ?>"><?= $site['url'] ?></option>
                                                <?php } ?>
                                            <?php } ?>

                                        </select>
                                    </p>

                                </div>
                                <div class="col-3 d-flex align-items-center" style="margin-top: 8px">
                                    <button class="btn btn-primary w-100" onclick="loadTotalNum(); destroyChart();">Показать</button>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 d-grid">
                            <h5>
                                <b>Конверсия в финал(общая):</b>
                                <span id="dataConTotal" class="text-primary"></span>
                            </h5>
                            <h5>
                                <b>Конверсия в регистрацию:</b>
                                <span id="dataViewReg" class="text-primary"></span>
                            </h5>
                            <h5>
                                <b>Процент финала(happy):</b>
                                <span id="dataConHappy" class="text-primary"></span>
                            </h5>
                            <h5>
                                <b>Процент финала(not happy):</b>
                                <span id="dataConNotHappy" class="text-primary"></span>
                            </h5>




                        </div>
                        <div class="col-6" >
                            <h5 class="text-center">
                                <b title="1 шаг(ввод данных)', '2 шаг(выбор хеппи/нот хеппи)', '3 шаг(Оценка)', '4 шаг(загрузка скриншота)', '5 шаг(финал)">
                                    По шагам</b>

                            </h5>

                            <div style="height: 300px">
                                <canvas id="myChart" width="250px" height="250"></canvas>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h4>Конверсия по месяцам</h4>
                        </div>
                        <div class="col-3 ms-auto">
                            <p>
                                Сайт:
                                <select class="form-select" id="site_month">
                                    <option selected></option>
                                    <?php if (!empty($get_all_site)) { ?>
                                        <?php foreach ($get_all_site as $site) { ?>
                                            <option value="<?= $site['url'] ?>"><?= $site['url'] ?></option>
                                        <?php } ?>
                                    <?php } ?>

                                </select>
                            </p>
                        </div>
                        <div class="col-1 d-flex align-items-center" style="margin-top: 8px">
                            <button class="btn btn-primary w-100" onclick="loadTotalNum(); window.chartMonth.destroy();">Показать</button>
                        </div>
                    </div>
                    <div class="row">
                        <div style="height: 450px">
                            <canvas id="chartMonth" width="250px" height="450"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>



