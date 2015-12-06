<div class="title">
	<h1>
		Актуальные новости
	</h1>
</div>
<div class="news_container_first">
	<ul class="news_list">
	<?php foreach ($data as $item) : ?>
		<li class="news_list_item">
			<div class="news_list_item_img">
				<a href="/news/view/<?=$item['News']['id']?>">
				<img src="/img/news/thumbs/<?=$item['News']['img']?>" alt="<?=$item['News']['title']?>">
				<div class="imgae_overlay"></div>
				</a>

			</div>

			<div class="news_list_item_date"><?php echo $this->Time->format($item['News']['date'], '%d.%m.%Y', 'invalid'); ?></div>
			<div class="news_list_item_title">
				<a href="/news/view/<?=$item['News']['id']?>">
				<?=$item['News']['title']?>
				</a>
			</div>
		</li>
	<?php endforeach; ?>	
	</ul>
</div>

