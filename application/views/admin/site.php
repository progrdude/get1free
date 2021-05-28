
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Настройка сайтов </h1>

	</div>
	<table  class="table myTable">
		<thead>
		<tr>
			<th>Id</th>
			<th>Домен</th>
			<th>Бренд</th>
			<th></th>
		</tr>
		</thead>
		<tbody>
		<?php if (!empty($get_all_site)) { ?>
			<?php foreach ($get_all_site as $site) { ?>
				<tr>
					<td><?= $site['id'] ?></td>
					<td><?= $site['url'] ?></td>
					<td><?= $site['brand'] ?></td>
					<td class="text-center"><a href="/site/site_detail?site_id=<?= $site['id'] ?>">Изменить</a></td>
				</tr>
			<?php } ?>
		<?php } ?>


		</tbody>
	</table>
</main>



