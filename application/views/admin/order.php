
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ордеры </h1>

    </div>

    <table  class="table myTable">
        
        <thead>
        <tr>
            <th>id</th>
            <th>order id</th>
            <th>email</th>
            <th>step</th>
            <th>sku</th>
            <th>asin</th>
            <th>star</th>
            <th>happy</th>
            <th>site</th>
            <th>screen</th>
            <th>date</th>

        </tr>
        </thead>
        <tbody>
        <?php if (!empty($get_all_order)) { ?>
            <?php foreach ($get_all_order as $user) { ?>

                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['order_id'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['step'] ?></td>
                    <td><?= $user['sku'] ?></td>
                    <td><?= $user['asin'] ?></td>
                    <td><?= $user['star'] ?></td>
                    <td><?= $user['happy'] ?></td>
                    <td><?= $user['site'] ?></td>
                    <td>
                        <?php if($user['screen'] !== ''){ ?>
                        <a target="_blank" href="/assets/image/<?= $user['screen'] ?>">
                            Открыть
                        </a>
                        <?php } ?>
                    </td>
                    <td><?= $user['update_date'] ?></td>

                </tr>
            <?php } ?>
        <?php } ?>


        </tbody>
    </table>
</main>



