<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/admin">Конверсия</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/analytics/order">Ордеры</a>
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


</main>

<script>
    function loadOrderMonth() {
        let data = {

            'site': $('#site_month').val(),
        };

        return $.ajax({
            url: 'analytics/get_site_con_month',
            method: 'POST',
            data: data,
            success: function (data) {
                var new_data = JSON.parse(data)
                var get_total_con_chart = JSON.parse(JSON.stringify(new_data));

                window.chartMonth = new Chart(document.getElementById('chartMonth').getContext('2d'), {
                    type: 'line',
                    data: {
                        labels:  ["Март","Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
                        datasets: [
                            {
                                label: "Конверсия к финалу",
                                backgroundColor: "#4BC0C0",
                                borderColor: "#4BC0C0",
                                data: get_total_con_chart,
                            },

                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false
                    }
                });

            },
        })

    };
</script>

