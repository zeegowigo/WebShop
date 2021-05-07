<?php
session_start();
if(!isset($_SESSION["site"])&&!isset($_SESSION["email"]))
{
    header("Location:Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Магазин PC/PHONE/...</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <style>
        #output {
            clear: both;
        }

        #checkoutdiv {
            display: none;
        }

        .footer {
            background-color: darkgrey;
            color: white;
        }
        .htop .row{
            background-color: lime;
        }
    </style>
</head>
<body>
<header class="header">
    <div class="htop">
        <div id="checkoutdiv " class="container">
            <div class="row" >
                <div class="col-md-6 text-xs-right "><span><?php echo "Здраствуйте, ".$_SESSION["site"]; echo " у вас"; ?> </span>(<span class="items text-muted"></span> <small>товаров</small>) <span class="total"></span> </div>
                <div class="col-md-6 text-xs-right">
                    <span class="btn btn-success" data-toggle="modal" data-target="#cart">Открыть окно корзины</span>
                    <a href="checkout.php" class="btn btn-primary">Перейти в корзину</a>
                </div>
            </div>
        </div>
    </div>
    <div class="hbot">
        <div class="container">
            <nav class="navbar navbar-full navbar-dark bg-inverse">
                <button class="navbar-toggler light float-xs-right hidden-sm-up" type="button" data-toggle="collapse" data-target="#nvbar"></button>
                <div id="nvbar" class="collapse navbar-toggleable-xs">
                    <ul class="nav navbar-nav float-sm-right ">
                        <li class="nav-item"><a class="nav-link" href="index.php">Главная</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">О нас</a></li>
                        <li class="nav-item"><a class="nav-link" href="error.php">Другие товары(не работает)</a></li>
                        <li class="nav-item"><a class="nav-link" href="error.php">Admin Panel</a></li>
                        <li class="nav-item"><a class="nav-link" href="Login.php">Выход</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<div class="content">
    <!-- content changes on each page -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">iPhone</h3>
                        <h6 class="card-subtitle text-muted">$500.00</h6> <img src="pc-sell.jpg" class="img-fluid"> </div>
                    <div class="card-block">
                        <div class="card-text">Информация о продукте! <a href="#" class="card-link productItem btn btn-primary" data-name="PC" data-s="black" data-price="50000" data-id="1">В корзину</a> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">iPad</h3>
                        <h6 class="card-subtitle text-muted">$300.00</h6> <img src="pc-sell.jpg" class="img-fluid"> </div>
                    <div class="card-block">
                        <div class="card-text">Информация о продукте! <a href="#" class="productItem btn btn-primary" data-name="PC" data-s="white" data-price="30000" data-id="2">В корзину</a> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">Cable 3</h3>
                        <h6 class="card-subtitle text-muted">$12.00</h6> <img src="pc-sell.jpg" class="img-fluid"> </div>
                    <div class="card-block">
                        <div class="card-text">Информация о продукте! <a href="#" class="productItem btn btn-primary" data-name="PC" data-s="white" data-price="1200" data-id="3">В корзину</a> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">SD Card 32GB</h3>
                        <h6 class="card-subtitle text-muted">$30.00</h6> <img src="pc-sell.jpg" class="img-fluid"> </div>
                    <div class="card-block">
                        <div class="card-text">Информация о продукте! <a href="#" class="productItem btn btn-primary" data-name="PC" data-s="black" data-price="3000" data-id="4">В корзину</a> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">SD Card 16GB</h3>
                        <h6 class="card-subtitle text-muted">$20.00</h6> <img src="pc-sell.jpg" class="img-fluid"> </div>
                    <div class="card-block">
                        <div class="card-text">Информация о продукте! <a href="#" class="productItem btn btn-primary" data-name="PC" data-s="white" data-price="2000" data-id="5">В корзину</a> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">SD Card 32GB</h3>
                        <h6 class="card-subtitle text-muted">$10.00</h6> <img src="pc-sell.jpg" class="img-fluid"> </div>
                    <div class="card-block">
                        <div class="card-text">Информация о продукте! <a href="#" class="productItem btn btn-primary" data-name="PC" data-s="black" data-price="1000" data-id="6">В корзину</a> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">Cable 4</h3>
                        <h6 class="card-subtitle text-muted">$16.00</h6> <img src="pc-sell.jpg" class="img-fluid"> </div>
                    <div class="card-block">
                        <div class="card-text">Информация о продукте! <a href="#" class="productItem btn btn-primary" data-name="PC" data-s="2020" data-price="1600" data-id="7">В корзину</a> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">Cable 1</h3>
                        <h6 class="card-subtitle text-muted">$3.00</h6> <img src="pc-sell.jpg" class="img-fluid"> </div>
                    <div class="card-block">
                        <div class="card-text">Информация о продукте! <a href="#" class="productItem btn btn-primary" data-name="PC" data-s="2021" data-price="300" data-id="8">В корзину</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
