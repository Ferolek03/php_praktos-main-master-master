<!doctype html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Главная страница</title>
   <style>
	body {
	margin: 0;
	padding: 0;
}
.header{
    margin-top: -20px;
	height: 100px;
	background-color: #64C7BB;
}
.nav{
	display: flex;
	align-items: center;
	justify-content: space-between;
	margin-left: 40px;
	margin-right: 40px;
    padding-top: 40px;
    
}
.logo >a {
	font-size: 32px;
    text-decoration: none;
	color: #000;
	padding: 20px;
}
.link >a {
	text-decoration: none;
	color: #000;
	padding: 20px;
	font-size: 24px;
}
.link >a:hover{
	color: white;
}
.center{
	margin-top: 100px;
	display: flex;
	justify-content: center;
}
.block{
	background-color: #000;
	width: 824px;
	height: 726px;
}
</style>
</head>
<body>
	<div class="header">
		<div class="nav">
			<div class="logo">
                <a href="<?= app()->route->getUrl('/hello')?>">Прием Пациентов</a>
			</div>
			<div class="link">
			<?php
        if (!app()->auth::check()):
            ?>

		<?php
        else:
            ?>

			<?php
if (app()->auth::User()->id_role === 1 || 0):
    ?>
			<a href="<?= app()->route->getUrl('/add_user')?>">Добавления на прием</a>
			<a href="<?= app()->route->getUrl('/profile')?>">Профиль</a>
			<?php
        endif;
        ?>
				<?php
			if (app()->auth::User()->id_role === 1 ):
			?>
			<a href="<?= app()->route->getUrl('/signup')?>">Регистрация</a>
			<?php
			endif;
			?>

			<a href="<?= app()->route->getUrl('/room')?>">Диагнозы</a>
			<a href="<?= app()->route->getUrl('/subdivision')?>">Список врачей</a>
			<a href="<?= app()->route->getUrl('/search')?>">Поиск</a>
			<a href="<?= app()->route->getUrl('/logout')?>">Выход(<?= app()->auth::User()->login ?>)</a>
		<?php
        endif;
        ?>
			</div>
		</div>
	</div>
	<main>
		<?= $content ?? '' ?>
		
	</main>
</body>
</html>

	




