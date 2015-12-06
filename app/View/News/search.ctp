<div class="title">
	<h1>
		Результаты поиска
	</h1>
</div>
<div class="min_title">
	Введите ключевые слова для поиска
</div>				
<div class="search pages">
	<form>
		<input placeholder="Поиск..." type="text">
		<div class="sub_b pages">
			<button type="button"></button>
		</div>
	</form>
</div>
<div class="news_container">
	<ul class="search_list">
	<?php foreach($search_res as $item): ?>
		<li>
		<a href=""class="search_title">
			<?=$item['news']['title'] ?>
		</a>
		<p>
<?= $this->Text->truncate(strip_tags($item['news']['body']), 55, array('ellipsis' => '...', 'exact' => true)) ?>
		</p>
		<div class="date_min"><?php echo $this->Time->format($item['news']['date'], '%d.%m.%Y', 'invalid'); ?>5</div>
		</li>
	<?php endforeach ?>
	</ul>
</div>