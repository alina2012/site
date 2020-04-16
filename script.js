$(function(){
                var goods = [
                    {id: 1, name: "Кофе Американо", link: "http://api.bushe.notissimus.com/images/product/aba67f07-c581-46d7-96ac-89fbab7e31fe"},
                    {id: 2, name: "Кофе Капучино", link: "https://api.bushe.notissimus.com/images/product/7ca25f24-64fb-43a7-be10-5729f608d914"},
                    {id: 3, name: "Кофе Латте", link: "https://api.bushe.notissimus.com/images/product/483ab1b5-53d3-4728-aae0-e27e5fa5eb8c"},
                    {id: 4, name: "Какао", link: "https://api.bushe.notissimus.com/images/product/2be56011-ac16-497d-b3e0-73dcad860b46"},
                    {id: 5, name: "Чиз-кейк", link: "http://api.bushe.notissimus.com/images/product/2c77f277-e4f9-4cc8-82e7-f4469e8ebfaf"},
                    {id: 6, name: "Наполеон", link: "https://api.bushe.notissimus.com/images/product/f28c125c-331b-4646-906a-df2c4f1fd721"},
                    {id: 7, name: "Медовик", link: "https://api.bushe.notissimus.com/images/product/720f245d-e328-441a-bbf6-c87404741de7"},
                    {id: 8, name: "Ягодный тарт", link: "https://api.bushe.notissimus.com/images/product/ab740e5b-724a-4b95-a595-33bdb8e63ce1"},
                ];
                var cart=[
                    {id: 1, price1: "160", quantity1: "0", price2: "180", quantity2: "0"},
                    {id: 2, price1: "180", quantity1: "0", price2: "210", quantity2: "0"},
                    {id: 3, price1: "190", quantity1: "0", price2: "220", quantity2: "0"},
                    {id: 4, price1: "190", quantity1: "0", price2: "220", quantity2: "0"},
                    {id: 5, price1: "150", quantity1: "0", price2: "990", quantity2: "0"},
                    {id: 6, price1: "120", quantity1: "0", price2: "600", quantity2: "0"},
                    {id: 7, price1: "110", quantity1: "0", price2: "600", quantity2: "0"},
                    {id: 8, price1: "130", quantity1: "0", price2: "1200", quantity2: "0"}
                ];
                if(localStorage.cart){
                    var mas = JSON.parse(localStorage.cart);
                    for(let i=0; i<8; i++){
                        cart[i].quantity1 = mas[i].quantity1;
                        cart[i].quantity2 = mas[i].quantity2;
                    };
                };
                
            //изменение цены
            $(".hidden1").change(function(){
                var price = $(".hidden1").val();
                $(".coffeeprice1").html(price);
              });
            $(".hidden2").change(function(){
                var price = $(".hidden2").val();
                $(".coffeeprice2").html(price);
              });
            $(".hidden3").change(function(){
                var price = $(".hidden3").val();
                $(".coffeeprice3").html(price);
              });
            $(".hidden4").change(function(){
                var price = $(".hidden4").val();
                $(".coffeeprice4").html(price);
              });
            $(".hidden5").change(function(){
                var price = $(".hidden5").val();
                $(".coffeeprice5").html(price);
              });
            $(".hidden6").change(function(){
                var price = $(".hidden6").val();
                $(".coffeeprice6").html(price);
              });
            $(".hidden7").change(function(){
                var price = $(".hidden7").val();
                $(".coffeeprice7").html(price);
              });
            $(".hidden8").change(function(){
                var price = $(".hidden8").val();
                $(".coffeeprice8").html(price);
              });

                //изменение количества
            $(".minus").click(function () {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $(".plus").click(function () {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });

            //добавление в корзину
            $(".buy1").click(function(){
            	event.preventDefault();
            	var itemId = $(".buy1").data('id'); //id товара
            	var price = $(".hidden1").val(); //цена
            	var quantity = $("input[name='quantity1']").val(); //количество
                if(price == cart[itemId-1].price1){
                    cart[itemId-1].quantity1 = Number(quantity)+Number(cart[itemId-1].quantity1);
                };
                if(price == cart[itemId-1].price2){
                    cart[itemId-1].quantity2 = Number(quantity)+Number(cart[itemId-1].quantity2);
                };   
            	localStorage.setItem('cart', JSON.stringify(cart));
            });
            $(".buy2").click(function(){
                event.preventDefault();
                var itemId = $(".buy2").data('id'); 
                var price = $(".hidden2").val(); 
                var quantity = $("input[name='quantity2']").val();
                if(price == cart[itemId-1].price1){
                    cart[itemId-1].quantity1 = Number(quantity)+Number(cart[itemId-1].quantity1);
                };
                if(price == cart[itemId-1].price2){
                    cart[itemId-1].quantity2 = Number(quantity)+Number(cart[itemId-1].quantity2);
                };   
                localStorage.setItem('cart', JSON.stringify(cart));
            });
            $(".buy3").click(function(){
                event.preventDefault();
                var itemId = $(".buy3").data('id'); 
                var price = $(".hidden3").val(); 
                var quantity = $("input[name='quantity3']").val();
                if(price == cart[itemId-1].price1){
                    cart[itemId-1].quantity1 = Number(quantity)+Number(cart[itemId-1].quantity1);
                };
                if(price == cart[itemId-1].price2){
                    cart[itemId-1].quantity2 = Number(quantity)+Number(cart[itemId-1].quantity2);
                };   
                localStorage.setItem('cart', JSON.stringify(cart));
            });
            $(".buy4").click(function(){
                event.preventDefault();
                var itemId = $(".buy4").data('id'); 
                var price = $(".hidden4").val(); 
                var quantity = $("input[name='quantity4']").val();
                if(price == cart[itemId-1].price1){
                    cart[itemId-1].quantity1 = Number(quantity)+Number(cart[itemId-1].quantity1);
                };
                if(price == cart[itemId-1].price2){
                    cart[itemId-1].quantity2 = Number(quantity)+Number(cart[itemId-1].quantity2);
                };   
                localStorage.setItem('cart', JSON.stringify(cart));
            });
            $(".buy5").click(function(){
                event.preventDefault();
                var itemId = $(".buy5").data('id'); 
                var price = $(".hidden5").val(); 
                var quantity = $("input[name='quantity5']").val();
                if(price == cart[itemId-1].price1){
                    cart[itemId-1].quantity1 = Number(quantity)+Number(cart[itemId-1].quantity1);
                };
                if(price == cart[itemId-1].price2){
                    cart[itemId-1].quantity2 = Number(quantity)+Number(cart[itemId-1].quantity2);
                };   
                localStorage.setItem('cart', JSON.stringify(cart));
            });
            $(".buy6").click(function(){
                event.preventDefault();
                var itemId = $(".buy6").data('id'); 
                var price = $(".hidden6").val(); 
                var quantity = $("input[name='quantity6']").val();
                if(price == cart[itemId-1].price1){
                    cart[itemId-1].quantity1 = Number(quantity)+Number(cart[itemId-1].quantity1);
                };
                if(price == cart[itemId-1].price2){
                    cart[itemId-1].quantity2 = Number(quantity)+Number(cart[itemId-1].quantity2);
                };   
                localStorage.setItem('cart', JSON.stringify(cart));
            });
            $(".buy7").click(function(){
                event.preventDefault();
                var itemId = $(".buy7").data('id'); 
                var price = $(".hidden7").val(); 
                var quantity = $("input[name='quantity7']").val();
                if(price == cart[itemId-1].price1){
                    cart[itemId-1].quantity1 = Number(quantity)+Number(cart[itemId-1].quantity1);
                };
                if(price == cart[itemId-1].price2){
                    cart[itemId-1].quantity2 = Number(quantity)+Number(cart[itemId-1].quantity2);
                };   
                localStorage.setItem('cart', JSON.stringify(cart));
            });
            $(".buy8").click(function(){
                event.preventDefault();
                var itemId = $(".buy8").data('id'); 
                var price = $(".hidden8").val(); 
                var quantity = $("input[name='quantity8']").val();
                if(price == cart[itemId-1].price1){
                    cart[itemId-1].quantity1 = Number(quantity)+Number(cart[itemId-1].quantity1);
                };
                if(price == cart[itemId-1].price2){
                    cart[itemId-1].quantity2 = Number(quantity)+Number(cart[itemId-1].quantity2);
                };   
                localStorage.setItem('cart', JSON.stringify(cart));
            });
            var num = 0;                          //наличие товаров в корзине
            var sum = 0;                          //итоговая сумма
            if(mas){
                for(let i=0; i<8; i++){
                   num = Number(num)+Number(mas[i].quantity1)+Number(mas[i].quantity2);
                   sum1 = Number(mas[i].quantity1)*Number(mas[i].price1);
                   sum2 = Number(mas[i].quantity2)*Number(mas[i].price2);
                   sum += (sum1+sum2);
                };
            }
            //отображение товаров в корзине
            if(num == 0){
                $('.basket_form').hide();
                $('.message').html('Ваша корзина пуста');
            };
            if(num != 0){
                $('.summ-number').html(sum);
                loadGoods(mas, goods);
            }

            //изменение количества товаров в корзине
            $(".minus-cart").click(function () {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                var id = $(this).data('id');
                var size = $(this).data('size');
                var quantity = $("input[name='quantity"+id+size+"']").val();
                if (size == 1){
                    cart[id-1].quantity1 = quantity;
                };
                if (size == 2){
                    cart[id-1].quantity2 = quantity;
                };
                localStorage.setItem('cart', JSON.stringify(cart));
                location.reload();
            });
            $(".plus-cart").click(function () {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                var id = $(this).data('id');
                var size = $(this).data('size');
                var quantity = $("input[name='quantity"+id+size+"']").val();
                if (size == 1){
                    cart[id-1].quantity1 = quantity;
                };
                if (size == 2){
                    cart[id-1].quantity2 = quantity;
                };
                localStorage.setItem('cart', JSON.stringify(cart));
                location.reload();
            });

            //удаление из корзины
            $(".delete-cart").click(function () {
                var id = $(this).data('id');
                var size = $(this).data('size');
                if (size == 1){
                    cart[id-1].quantity1 = 0;
                };
                if (size == 2){
                    cart[id-1].quantity2 = 0;
                };
                localStorage.setItem('cart', JSON.stringify(cart));
                location.reload();
            });
            //изменение статуса заказа
            $('.change-status').change(function(){
                
                var id = $(this).children(":selected").attr("id"); //номер заказа
                var status = $(".change-status[name='"+id+"']").val();            //статус заказа
                if(status != '---'){
                        $.ajax({
                        type: "POST", 
                        url: "up_status.php",  
                        data: {id: id, status: status}, 
                        success:function(){
                              location.reload();
                        }
                    });
                    };
            });

    });

//выгрузка товаров из корзины
function loadGoods(mas, goods){
    const goods_on_cart = mas.filter(function (e) {
      return (e.quantity1 != 0 || e.quantity2 != 0) ;
    });
    var out = '';
    for (var id in goods_on_cart) {
        out += '<form onsubmit="return false;">';
        out += '<div class="cart-item row middle-xl">';
        out += '<div class="item-image-wrapper cell-xl-2" id="goods-photo">';
        out+='<div class="item-image-inner"><div class="item-image-link"><img title='+goods[goods_on_cart[id].id-1].name+' src="'+goods[goods_on_cart[id].id-1].link+'" class="item-image"></div></div>';
        out += '</div>';
        out += '<div class="item-caption cell-xs-12 cell-sm-6 cell-md-3 cell-xl-3">';
        out += '<div class="item-title">'+goods[goods_on_cart[id].id-1].name+'';
        out += '</div>';
        out += '</div>';

        out += '<div class="item-price in-item hide-mc cell-sm-6 cell-md-2 cell-xl-2">';
        if(goods_on_cart[id].quantity1 != 0){
            out += '<div class="price-number js-item-price">'+goods_on_cart[id].price1+'';    
            out += '</div>';
            out += '<div class="item-old-price js-item-old-price"> ';
            out += '</div>';
            out += '<br>';
        }
        if(goods_on_cart[id].quantity2 != 0){
            out += '<div class="price-number js-item-price">'+goods_on_cart[id].price2+'';
            out += '</div>';
            out += '<div class="item-old-price js-item-old-price"> ';
            out += '</div>';
        }
        out += '</div>';

        out += '<div class="item-counter cell-mc-7 cell-sm-6 cell-xl-2" data-quantity>';
        if(goods_on_cart[id].quantity1 != 0){
             out += ' <div class="counter">';
              out += '<span class="minus-cart" data-id="'+goods_on_cart[id].id+'" data-size="1"><button type="button" data-quantity-change="-1" class="button button-number count-down">';
                out += '  <i class="icon ion-ios-minus-empty"></i>';
               out += ' </button></span>';
               out += ' <input type="text" value="'+goods_on_cart[id].quantity1+'" min="1" max="1000" name="quantity'+goods_on_cart[id].id+'1" class="input-number input-field"/>';
               out += '<span class="plus-cart" data-id="'+goods_on_cart[id].id+'" data-size="1"><button type="button" data-quantity-change="1" class="button button-number count-up">';
                out += '  <i class="icon ion-ios-plus-empty"></i>';
                out += '</button></span>';
              out += '</div>';
        };
        if(goods_on_cart[id].quantity2 != 0){
              out += ' <div class="counter">';
              out += ' <span class="minus-cart" data-id="'+goods_on_cart[id].id+'" data-size="2"><button type="button" data-quantity-change="-1" class="button button-number count-down">';
                out += '  <i class="icon ion-ios-minus-empty"></i>';
               out += ' </button></span>';
               out += ' <input type="text" value="'+goods_on_cart[id].quantity2+'" min="1" max="1000" name="quantity'+goods_on_cart[id].id+'2" class="input-number input-field"/>';
               out += '<span class="plus-cart" data-id="'+goods_on_cart[id].id+'" data-size="2"><button type="button" data-quantity-change="1" class="button button-number count-up">';
                out += '  <i class="icon ion-ios-plus-empty"></i>';
                out += '</button></span>';
              out += '</div>';
        };
        out += '</div>';

        out += '<div class="item-total in-item cell-mc-5 cell-sm-6 cell-xl-2">';
        if(goods_on_cart[id].quantity1 != 0){
            out += '<div>';
             out += ' <span class="js-item-total-price">';
              out += ''+Number(goods_on_cart[id].price1)*Number(goods_on_cart[id].quantity1)+'руб';
              out += '</span>';
            out += '</div>';
             out += '<br>';
         };
        if(goods_on_cart[id].quantity2 != 0){
            out += '<div>';
             out += ' <span class="js-item-total-price">';
              out += ''+Number(goods_on_cart[id].price2)*Number(goods_on_cart[id].quantity2)+'руб';
              out += '</span>';
            out += '</div>';
        };
        out += '</div>';

        out += '<div class="item-remove cell-xl-1">';
        if(goods_on_cart[id].quantity1 != 0){
            out += '<div class="delete-cart" data-size="1" data-id='+goods_on_cart[id].id+'>';
              out += '<button type="submit" class="button button-error" >';
              out += '  <i class="fa fa-remove"></i>';
             out += '</button>';
            out += '</div>';
        };
        if(goods_on_cart[id].quantity2 != 0){
            out += '<div class="delete-cart" data-size="2" data-id='+goods_on_cart[id].id+'>';
              out += '<button type="submit" class="button button-error">';
              out += '  <i class="fa fa-remove"></i>';
             out += '</button>';
            out += '</div>';
        };
        out += '</div>';

        out += '</div>';
          out +=' </div>';
         out += ' </div>';
        out += '</form>';
        $('#form').html(out);  
    } 
}
