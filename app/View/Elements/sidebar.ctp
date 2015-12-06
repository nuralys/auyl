<?php //debug($gallerySidebar) ?>
<div class="side_bar">
	<div class="side_bar_title">Видео партии</div>
	<div class="photo-sliders">
		<div class="photo-slider active">
			<div class="photo-slider-big slider-big">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/sBMywteWkOc" frameborder="0" allowfullscreen></iframe>
				</div>
		</div>
	</div>
	<div class="side_bar_title">Фотогалерея  партии</div>
	<div class="photo-sliders">
		<div class="photo-slider active">
			<div class="photo-slider-big slider-big">
			<?php foreach($gallerySidebar as $item): ?>
				<img src="/img/gallery/<?=$item['Gallery']['img']?>" alt="<?=$item['Gallery']['title']?>">
			<?php endforeach ?>
			</div>
			<div class="photo-slider-small slider-small">
			<?php foreach($gallerySidebar as $item): ?>
				<div class="slider-smallimg"><img src="/img/gallery/thumbs/<?=$item['Gallery']['img']?>" alt="<?=$item['Gallery']['title']?>"></div>
			<?php endforeach ?>
				
			</div>
		</div>
	</div>
</div>