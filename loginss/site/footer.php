
<footer class="footer">
    <div class="container">
        <p class="text-xs-center">© Copyright info</p>
    </div>
</footer>
<!-- Modals -->
<div class="modal fade" id="cart" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Окно корзины</h4>
            </div>
            <div class="modal-body">
                <table class="table table-hover">
                    <thead class="thead-inverse">
                    <tr>
                        <th>К-во</th>
                        <th>Название</th>
                        <th>Цена</th>
                        <th class="text-xs-right">Итоговая цена</th>
                    </tr>
                    </thead>
                    <tbody id="output"> </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Продолжить покупки</button><a href="checkout.php" class="btn btn-primary">Проверить корзину</a></div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
<script>
    var shopcart = [];
    $(document).ready(function() {
        outputCart();
        $(".productItem").click(function(e) {
            e.preventDefault();
            var iteminfo = $(this.dataset)[0];
            iteminfo.qty = 1;
            var itemincart = false;
            $.each(shopcart, function(index, value) {
                if (value.id == iteminfo.id) {
                    value.qty = parseInt(value.qty) + parseInt(iteminfo.qty);
                    itemincart = true;
                }
            })
            if (!itemincart) {
                shopcart.push(iteminfo);
            }
            sessionStorage["sca"] = JSON.stringify(shopcart);
            outputCart();
            ///
        })

        function outputCart() {
            if (sessionStorage["sca"] != null) {
                shopcart = JSON.parse(sessionStorage["sca"].toString());
                console.log(sessionStorage["sca"]);
                $('#checkoutdiv').show();
            }
            var holderHTML = '';
            var total = 0;
            var itemCnt = 0;
            $.each(shopcart, function(index, value) {
                console.log(value);
                var stotal = value.qty * value.price;
                total += stotal;
                itemCnt += parseInt(value.qty);
                holderHTML += '<tr><td>' + value.qty + '</td><td>#' + value.id + ' ' + value.name + '(' + value.s + ')</td><td> ' + formatMoney(value.price) + ' </td><td class="text-xs-right"> ' + formatMoney(stotal) + '</td></tr>';
            })
            holderHTML += '<tr><td colspan="3" class="text-xs-right">Итого</td><td class="text-xs-right">' + formatMoney(total) + '</td></tr>';
            $('#output').html(holderHTML);
            $('.total').html(formatMoney(total));
            $('.items').html(itemCnt);
        }

        function formatMoney(n) {
            return '$' + (n / 100).toFixed(2);
        }
    })
</script>
</body>
</html>