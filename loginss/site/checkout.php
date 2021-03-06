<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Корзина</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <style>
        input[type="number"] {
            width: 50px;
        }
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
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<div class="container">
    <h1>Моя корзина</h1>
    <form action="Покупка завершена" method="post" target="_top">
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="upload" value="1">
        <input type="hidden" name="business" value="womghei-facilitator@connect.hku.hk">
        <input type="hidden" name="return" value="http://net.tutsplus.com/payment-complete/">
        <table class="table table-hover">
            <thead class="thead-inverse">
            <tr>
                <th>Колличество</th>
                <th>Название</th>
                <th>Цена</th>
                <th class="text-xs-right">Итоговая цена</th>
            </tr>
            </thead>
            <tbody id="output"> </tbody>
        </table>
        <input type="submit" class="btn btn-primary btn-block" value="Оплатить">
        <a href="index.php" class="btn btn-success btn-block">Продолжить покупки</a>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    var shopcart = [];
    $(document).ready(function () {
        outputCart();
        $('#output').on('change keyup', '.dynqua', function () {
            var iteminfo = $(this.dataset)[0];
            var itemincart = false;
            console.log(shopcart);
            var qty = $(this).val();
            if (qty < 0) {
                qty = 0;
                $(this).val(0);
            }
            $.each(shopcart, function (index, value) {
                if (value.id == iteminfo.id) {
                    shopcart[index].qty = qty;
                    itemincart = true;
                }
            })
            sessionStorage["sca"] = JSON.stringify(shopcart);
            outputCart();
        })

        function outputCart() {
            if (sessionStorage["sca"] != null) {
                shopcart = JSON.parse(sessionStorage["sca"].toString());
            }
            console.log(sessionStorage["sca"]);
            console.log(shopcart);
            var holderHTML = '';
            var total = 0;
            var itemCnt = 0;
            $.each(shopcart, function (index, value) {
                var stotal = value.qty * value.price;
                var a = (index + 1);
                total += stotal;
                itemCnt += parseInt(value.qty);
                holderHTML += '<tr><td><input size="5"  type="number" class="dynqua" name="quantity_' + a + '" value="' + value.qty + '" data-id="' + value.id + '"></td><td><input type="hidden" name="item_name_' + a + '" value="' + value.name + ' ' + value.s + '">' + value.name + '(' + value.s + ')</td><td><input type="hidden" name="amount_' + a + '" value="' + formatMoney(value.price) + '"> $' + formatMoney(value.price) + ' </td><td class="text-xs-right"> ' + formatMoney(stotal) + '</td></tr>';
            })
            holderHTML += '<tr><td colspan="3" class="text-xs-right">Итого</td><td class="text-xs-right">$' + formatMoney(total) + '</td></tr>';
            $('#output').html(holderHTML);
        }

        function formatMoney(n) {
            return (n / 100).toFixed(2);
        }
    })
</script>
</body>

</html>