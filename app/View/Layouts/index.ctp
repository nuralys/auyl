<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		<?php echo $title_for_layout ?>
	</title>
	<link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">

<meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php if(isset($meta['keywords'])): ?>
		<meta name="keywords" content="<?=$meta['keywords']?>">
	<?php endif; ?>
	<?php if(isset($meta['description'])): ?>
		<meta name="description" content="<?=$meta['description']?>">
	<?php endif; ?>
	<?php
		

		echo $this->Html->css(array('reset', 'style', 'slide', 'jquery.fancybox.css?v=2.1.5', ));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->script(array('jquery-2.1.4', 'jquery.fancybox.pack.js?v=2.1.5', 'app','ckeditor/ckeditor.js','responsive-nav'));
	?>
</head>
<body>
<div class="page">
	<?php echo $this->element('header'); ?>
	<div class="cr">
		<div class="container">
			<div class="left_img"></div>
			<div class="right_img"></div>
			<div class="content">
				
				
				<?php echo $this->fetch('content') ?>
				
			</div>
			<?php echo $this->element('sidebar') ?>
		</div>
	</div>
	</div>
	<footer>
		<div class="footer">
			<div class="cr">
				<div class="menu_footer">
					<ul class="menu_footer_list">
						<li><a href="">Главная</a>|</li>
						<li><a href="">История партии </a>|</li>
						<li><a href="">Структура</a>|</li>
						<li><a href="">Руководство</a>|</li>
						<li><a href="">Программные документы</a>|</li>
						<li><a href="">Новости    </a>|</li>
						<li><a href="">Контакты</a></li>
					</ul>
					<div class="soc_seti_container footers">
						<a href="" class="soc_seti footers facebook"></a>
						<a href="" class="soc_seti  footers insta"></a>
						<a href="https://twitter.com/NdppAuyl" class="soc_seti footers twit"></a>

					</div>
				</div>
				<div class="developed">
					<p>Разработано в <a href="" target="_blank">Астана Креатив</a></p>
				</div>
				<div class="footer_des">
					<p>© 2015 “АУЫЛ” ХАЛЫҚТЫҚ-ДЕМОКРАТИЯЛЫҚ ПАТРИОТТЫҚ ПАРТИЯСЫ</p>
					<p>НАРОДНО-ДЕМОКРАТИЧЕСКАЯ ПАТРИОТИЧЕСКАЯ ПАРТИЯ “АУЫЛ” </p>
					<p>Все права защищены</p>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>