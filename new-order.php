<!-- оформление заказа -->
<!DOCTYPE html>
<html>
<head>
  <link href="https://assets3.insales.ru/assets/1/7308/1227916/1561988348/theme.css" rel="stylesheet" type="text/css" />
  <link href="https://assets3.insales.ru/assets/1/7308/1227916/1561988348/ie.css" rel="stylesheet" type="text/css" />
  <link href="//fonts.googleapis.com/css?family=Exo+2&subset=cyrillic,latin" rel="stylesheet" />
  <link href="//fonts.googleapis.com/css?family=Lobster&subset=cyrillic,latin" rel="stylesheet" />
  <link href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" crossorigin="anonymous" rel="stylesheet" />
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />
  <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="script.js" type="text/javascript"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
    Оформление заказа | CoffeeTime
  </title>
<meta charset="UTF-8" />
</head>
<body class="adaptive">
  <div class="page-wrapper">
    <div class="page-inner container">
      <header class="main-header container">
        <div class="row middle-xl">
          <div class="logotype cell-xl-4 text-center-xl cell-sm-12">
            <a title="CoffeeTime" href="\" class="logotype-link">
              <span class="logotype-text">CoffeeTime</span>
              <small class="logotype-subtitle">...adventure awaits, but first coffee...</small> 
            </a>
          </div>
      <div class="user-toolbar cell-xl-4 text-right-xl hidden-sm">
        <a title="Личный кабинет" class="compare-button button button-circle is-gray" href="\account.php">
          <i class="icon compare-icon ion-person"></i>
        </a>
      <div class="shopcart-widget">
        <a title="Корзина" href="\basket.php" class="shopcart-link button button-circle is-primary">
          <i class="icon shopcart-icon ion-ios-cart-outline"></i>
          <span class="shopcart-count js-shopcart-amount"></span>
        </a>
      </div>
    </div>
  </div>
</header>
  <div class="collection-menu-horizontal-wrapper container">
    <ul class="collection-menu-horizontal list js-edge-calc text-center-xl">
      <li class="list-item menu-item text-left-xl " data-handle="drink">
            <a title="Напитки" href="\#drink" class="menu-link">
              <span class="link-text">Напитки</span> 
            </a>
      </li> 
      <li class="list-item menu-item text-left-xl " data-handle="eat">
        <a title="Десерты" href="\#eat" class="menu-link">
          <span class="link-text">Десерты</span>    
        </a>
      </li>
      <li class="list-item menu-item text-left-xl " data-handle="addres">
        <a title="Контакты" href="\addres.php" class="menu-link">
          <span class="link-text">Контакты</span>   
        </a>
      </li>
    </ul> 
  </div>
  <div class="breadcrumb-wrapper container">
    <ul class="breadcrumb">
      <li class="breadcrumb-item home">
        <a class="breadcrumb-link" title='Главная' href="\">Главная</a>
      </li>
      <li class="breadcrumb-item"><span class="breadcrumb-link current-page">Оформление заказа</span></li>
    </ul>
  </div>

<div class="page-header container">
  <h1>
    Покупатель
  </h1>
</div>
<?php 
  require_once("bd.php");
  if(isset($_COOKIE['token'])){
  $token = $_COOKIE['token'];
    $result = mysqli_query($db, "SELECT * FROM users WHERE token='$token'");
    $data = mysqli_fetch_array($result);
    $name = $data['name'];
    $phone = $data['phone'];
    $email = $data['login'];
  ?>
<div class="cart-body row">
      <div class="cart-list cell-xl-12">
        <div class="cart-header row">
          <div class="cart-head item-image cell-xs-12 cell-md-4 cell-lg-2 cell-xl-2">&nbsp;</div>
          <div class="cart-head item-caption cell-xs-12 cell-md-4 cell-lg-2 cell-xl-3">
            Имя
          </div>
          <div class="cart-head item-price cell-xs-12 cell-md-4 cell-xl-2">
            Email
          </div>
          <div class="cart-head item-counter cell-xs-12 cell-md-4 cell-lg-3 cell-xl-2">
          </div>
          <div class="cart-head item-total js-item-total-price cell-xs-12 cell-md-4 cell-xl-2">
            Телефон
          </div>
          <div class="cart-head item-remove cell-xs-12 cell-md-4 cell-xl-1">
            Выйти
          </div>
        </div>
        <br>
        </div>
        <div class="cart-list cell-xl-12" ng-view>
        <div class="cart-header row">
          <div class="cart-head item-image cell-xs-12 cell-md-4 cell-lg-2 cell-xl-2">
            <img src="http://webcomme.ru/components/com_community/assets/user.png" height="128" width="128">
          </div>
          <div class="cart-head item-caption cell-xs-12 cell-md-4 cell-lg-2 cell-xl-3">
          <?php echo $name ?>  
          </div>
          <div class="cart-head item-price cell-xs-12 cell-md-4 cell-xl-2">
          <?php echo $email ?> 
          </div>
          <div class="cart-head item-counter cell-xs-12 cell-md-4 cell-lg-3 cell-xl-2">
          </div>
          <div class="cart-head item-total js-item-total-price cell-xs-12 cell-md-4 cell-xl-2">
          <?php echo $phone ?> 
          </div>
          <div class="cart-head item-remove cell-xs-12 cell-md-4 cell-xl-1">
            (<a href='\myshop.ru\logout.php'>Выход</a>)
          </div>
        </div>
        <br>
        <br>
        <hr>
        </div>
      </div>
<?php 
};
?>
<?php
  if(!isset($_COOKIE['token'])){
  ?>
  <div class="checkout-v1-wrapper">
      <div class='wrapper body fc'>
        <div class='page-title'>Вход в кабинет покупателя</div>
        <div id="flash_messages"></div>
        <div id='top_info'></div>
        <div class="set wide_set">
          <form action="\login_basket.php" accept-charset="UTF-8" method="post">
            <input name="utf8" type="hidden" value="&#x2713;"/>
            <div class='set-block small_label'>
              <div class='field fc'>
                <div class='field-label'>Email:
                </div>
                <div class='field-content'>
                <input type="text" name="email" id="email" class="textfield" style="width: 200px;"/>
                </div>
              </div>
            <div class='field fc'>
              <div class='field-label'>Пароль:
              </div>
              <div class='field-content'>
              <input type="password" name="password" id="password" class="textfield" style="width: 200px;" />
              </div>
            </div>
            <div class='field fc'>
              <div class='field-content'>
              <input class='button' name='commit' type='submit' value='Войти'>
              </div>
            </div>
            <div class='field fc'>
              <div class='field-content'>
              <a href="forgot.php">Восстановить пароль</a>
              </div>
            </div>
            <div class='field fc'>
              <div class='field-content'>
              <a href="signup.php">Зарегистрироваться</a>
              </div>
            </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php
}; 
?>
<div class="basket_form">
    <div class="cart-body row">
      <div class="cart-list cell-xl-12">
        <div class="cart-header row">
          <div class="cart-head item-image cell-xs-12 cell-md-4 cell-lg-2 cell-xl-2">&nbsp;</div>
          <div class="cart-head item-caption cell-xs-12 cell-md-4 cell-lg-2 cell-xl-3">
            Наименование
          </div>
          <div class="cart-head item-price cell-xs-12 cell-md-4 cell-xl-2">
            Цена
          </div>
          <div class="cart-head item-counter cell-xs-12 cell-md-4 cell-lg-3 cell-xl-2">
          </div>
          <div class="cart-head item-total js-item-total-price cell-xs-12 cell-md-4 cell-xl-2">
            Сумма
          </div>
          <div class="cart-head item-remove cell-xs-12 cell-md-4 cell-xl-1">
            Удалить
          </div>
        </div>

        <div id="form">
        </div>
          <div class="cart-footer row top-xl js-shopcart-area">
            <div class="cart-control  cell-xs-12 ">
              <div class="total-summ">
                <span class="summ-caption">Итого:</span>
                <span class="summ-number js-shopcart-total-summ"></span>
              </div>
              <button id="new_order" type="button" class="button button-primary button-buy" data-cart-submit>
                <span class="button-text">Подтвердить</span>
              </button>
            </div>
          </div>
         </div>
      </div>
</div>
</div>
  <div class="footer">
    <center>
    (<a href='\admin.php'>Панель управления</a>)
  </center>
  </div>
 <script>
   $(function(){
      $('#new_order').click(function(){
        var mas = localStorage.cart;
        var name = 'shop';
        document.cookie = name + "=" + mas;
        window.location.href = "issue.php";
      });
   })
 </script>
</html>