<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\LtAppAsset;

AppAsset::register($this);

//LtAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Концертное агенство" />
	<meta name="keywords" content="Концертное агенство" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="favicon.png" />	
	<?php 
$this -> registerJsFile('js/html5shiv/es5-shim.min.js',['position' => \yii\web\View::POS_HEAD , 'condition' => 'lte IE9']);
$this -> registerJsFile('js/html5shiv/html5shiv.min.js',['position' => \yii\web\View::POS_HEAD ,'condition' => 'lte IE9']);
$this -> registerJsFile('js/html5shiv/html5shiv-printshiv.min.js',['position' => \yii\web\View::POS_HEAD,'condition' => 'lte IE9']);
$this -> registerJsFile('js/respond/respond.min.js',['position' => \yii\web\View::POS_HEAD,'condition' => 'lte IE9']);
	?>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	
</head>
<body class="ishome">
	<?php $this->beginBody() ?>

	<header class="mein_head">
<div class="top">
<div>
<div class="btn_index hidden-md hidden-lg"><i class="fa fa-bars" aria-hidden="true"></i></div>
<nav class="top_line">
    <ul class="sf-menu">
        <li><a href="/"><i class="fa fa-angle-right" aria-hidden="true"></i>Главная</a></li>
        <li><a href="/artist/" ><i class="fa fa-angle-right" aria-hidden="true"></i>Артисты</a>
        <ul>
<li><a href="view_category.php?id=1">Ведущий, тамада, мс</a></li><li><a href="view_category.php?id=2">Исполнители, музыкальные колективы</a></li><li><a href="view_category.php?id=3">Клубные фрики</a></li><li><a href="view_category.php?id=4">Артисты оригинального жанра</a></li><li><a href="view_category.php?id=5">Фотографы,видеографы</a></li><li><a href="view_category.php?id=6">DJ Show</a></li><li><a href="view_category.php?id=7">Fire, Led Show</a></li><li><a href="view_category.php?id=8">Dance Show</a></li><li><a href="view_category.php?id=9">Strip Show, Go-Go, PJ</a></li>     </ul>
</li>
        <li><a href="gallery.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Галерея</a></li>
        <li><a href="uslygi.php"><i class="fa fa-angle-right" aria-hidden=""></i>Услуги</a>
        <ul>
        </ul>

        </li>
        <li><a href="otzivy.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Отзывы</a></li>
        <li><a href="contakt.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Контакты</a></li>
        <li><a href="partners.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Партнеры</a></li>
        <li><a href="#dobavit" class="dabovit"><i class="fa fa-angle-right" aria-hidden="true"></i>Добавить+</a></li>
        <li><a  href="#vhod" class="vhod"  style="padding: 10px 0px;margin-right: 0px;"><i class="fa fa-angle-right" aria-hidden="true"></i>Вход/</a></li>

        <li><a href="#registration" class="registration" style="padding: 10px 0px;margin-right: 0px;">Регистрация</a></li>
    </ul>
</div>
    <div class="hidden">
    <form  id="dobavit" class="frm" method="POST">
        <input type="text" name="name_dobavit" placeholder="Логин" required />
        <input type="pasword" name="password_dobavit" placeholder="Пароль" required />
        <input type="submit" class="btn_contakt" name="dabavit" value="Отправить">
    </form>
</div>
<div class="hidden">
    <form method="POST" id="registration" class="frm" action="/index.php" onsubmit="return f_submit();">

        <input type="text" id="name" name="name" placeholder="Имя" required />
        <input type="email" id="email" name="email" placeholder="E-MAIL" required />
        <input type="password" id="password" name="password" placeholder="Пароль" required />
        <input type="password" id="password2" name="password2" placeholder="Повторите пароль" required />
        <input type="submit" class="btn_contakt" name="go" value="Зарегестрироваться"  />
                <p class="reg_msg"></p>
    </form>
</div>
<div class="hidden">
    <form  id="vhod" class="frm" method="POST" action="">
        <input type="text" name="name_vhod" placeholder="Логин" required />
        <input type="pasword" name="password_vhod" placeholder="Пароль" required />
        <input type="submit" class="btn_contakt" value="Отправить" name="vhod"/>
    </form>
</div>
</nav>
</div>
</div>







<?= $content ?>


	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
	<section class="footer">
    <footer>
        
        <div class="container">
            <div class="col-md-3">
                <p class="slog">Живи ярко, будь на высоте!</p>
                <h2 class="footer_h2">Организация праздников, канцертов, шоу-программ</h2>
                <p class="contact">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>3dvoiceFaily@gmail.com<br>
                <i class="fa fa-phone" aria-hidden="true"></i>+38055 555 55 55<br />
                <i class="fa fa-map-marker" aria-hidden="true"></i>Славянск, ул.Центральная 12     
                </p>
            </div>
            <div class="col-md-3">
                <p class="footer_mnu">Меню:</p>
                <ul class="footer_ul">
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">Артисты</a></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">Афифша</a></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">Услуги</a></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">Отзывы</a></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">Контакты</a></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">Партнеры</a></li>
                    

                </ul>
            </div>
            <div class="col-md-3">
                <p  class="we_instagram">Галерея инстаргамм:</p>
            </div>
            <div class="col-md-3">
                <p class="soc_seti">Мы в соц.сетях</p>
                <ul class="soc-seti">
                    <li><i class="fa fa-facebook" aria-hidden="true"></i><a href="">Facebook</a></li>
                    <li><i class="fa fa-vk" aria-hidden="true"></i><a href="">vk</a></li>
                    <li><i class="fa fa-instagram" aria-hidden="true"></i><a href="">instagramm</a></li>
                    <li><i class="fa fa-twitter" aria-hidden="true"></i><a href="">twitter</a></li>
                </ul>
            </div>
        </div>
    </footer>
</section>

	
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>