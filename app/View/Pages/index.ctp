				<section class="slider" >
				<?php foreach($slides as $slide): ?>
					<div class="slider__item">
						<a href="/<?=$lang?>news/view/<?=$slide['Slide']['link'] ?>">
							<img src="/img/slider/<?=$slide['Slide']['img'] ?>" alt=""></a>
						<div class="des_slider">
							<?=$slide['Slide']['title'] ?>
						</div>
					</div>
				<?php endforeach ?>
				</section>
				<div class="title">
					<h2>Новости</h2>
				</div>
				<div class="news_container_first">
					<ul class="news_list">
					<?php foreach($news as $item): ?>
						<li class="news_list_item">
							<div class="news_list_item_img">
								<a href="/<?=$lang?>news/view/<?=$item['News']['id'] ?>">
									<img src="/img/news/thumbs/<?=$item['News']['img'] ?>" alt=""></a>
							</div>
							<div class="news_list_item_date"><?php echo $this->Time->format($item['News']['date'], '%d.%m.%Y', 'invalid'); ?></div>
							<div class="news_list_item_title">
								<a href="/<?=$lang?>news/view/<?=$item['News']['id'] ?>">
									<?=$item['News']['title'] ?>
								</a>
							</div>
						</li>
					<?php endforeach ?>
					</ul>
				</div>