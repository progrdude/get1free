
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Пользователи </h1>

    </div>
    <table  class="table myTable">
        <span class="me-3 text-info">Не подтвердил почту</span>
        <span class="text-danger">Заблокирован</span>
        <thead>
        <tr>
            <th>Id</th>
            <th>Почта</th>
            <th>Телефон</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Сайт</th>
            <th>Адрес</th>
            <th>Город</th>
            <th>Штат</th>
            <th>Откуда</th>
            <th>Ip</th>
            <th>Дата регистрации</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        
        <?php if (!empty($get_all_user)) { ?>
            <?php foreach ($get_all_user as $user) { ?>
                <?php
                switch ($user['status']){
                    case 0:
                        $status = 'table-danger';
                        break;
                    case 1:
                        $status = 'table-info';
                        break;
                    case 2:
                        $status = 'table-light';
                        break;
                }

                ?>
                <tr class="<?= $status ?>">
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['phone'] ?></td>
                    <td><?= $user['firstname'] ?></td>
                    <td><?= $user['lastname'] ?></td>
                    <td><?= $user['site'] ?></td>
                    <td><?= $user['address'] ?></td>
                    <td><?= $user['city'] ?></td>
                    <td><?= $user['state'] ?></td>
                    <td><?= $user['ref_url'] ?></td>
                    <td><?= $user['ip'] ?></td>
                    <td><?= $user['reg_date'] ?></td>
                    <td><a href="">Посмотреть</a></td>
                </tr>
            <?php } ?>
        <?php } ?>


        </tbody>
    </table>
</main>



