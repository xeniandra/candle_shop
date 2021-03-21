<?php
session_start();
require_once "../back/check_session.php";
require_once "../back/connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href ="../css/aboutUs.css">
</head>

<body>
<div class="logo">
        <a href="catalogue.php"><img src="../img/logo.png" width= "250px" height= "110px"></a>
    </div>
    <header>
        <a href="catalogue.php"> Каталог </a>    
        <a href="construct.php"> Конструктор </a>
        <a href="cart.php"> Корзина </a>
        <a href="../back/logout.php"> Выйти </a>
    </header>
    
<div class="container">    
        <div class="content">
<h1>О нас</h1>
<p>    
Дорогой посетитель, зайдя на наш интернет-магазин, Вы можете купить аромасвечи для дома, как для себя, так и для близких.

Мы гарантируем, что наши продукты, помогут создать неповторимую атмосферу уюта и романтики, вызвать приятные воспоминания и вдохновить.
</p>

<h2>Конструктор</h2>

<p>
Если Вы узнали как сделать ароматическую свечу своими руками, но не хватает сил, времени, усидчивости на это, то Вы можете создать её в нашем конструкторе.

Среди большого количества ароматов и разной цветовой палитры можно выбрать свой любимый!

Выберите все необходимые параметры и закажите именно то, что хотели.
</p>

<h2>Зачем это нужно?</h2>

<p>
Ароматические свечи – это модный и очень красивый элемент декора, который делает любое помещение по-настоящему атмосферным.
Зажигая аромасвечу, ваш дом наполняется нотками трав, цветов, пряностей, древесины, цитрусов и десертов. Закройте глаза… Насладитесь… Эти минуты только для Вас!
</p>

<h2>Из чего изготовлены?</h2>
<p>
Нам важны, прежде всего, натуральный состав, сами запахи, а также уникальный дизайн.

В интернет-магазине <span>HomeCandle</span> Вы можете не просто купить понравившуюся аромасвечу, но и найти подходящий аромат.
Испытайте удовольствие от невероятных нот, красивого свечения, стильных упаковок. Будьте уверены в безопасном составе, получите удовольствие от процесса выбора и покупки.
</p>            
    
</div>

</div>
</body>
</html>