<!-- корзина -->
<!DOCTYPE html>
<html>
<head>
  <link href="https://assets3.insales.ru/assets/1/7308/1227916/1561988348/theme.css" rel="stylesheet" type="text/css" />
  <link href="https://assets3.insales.ru/assets/1/7308/1227916/1561988348/ie.css" rel="stylesheet" type="text/css" />
  <link href="//fonts.googleapis.com/css?family=Exo+2&subset=cyrillic,latin" rel="stylesheet" />
  <link href="//fonts.googleapis.com/css?family=Lobster&subset=cyrillic,latin" rel="stylesheet" />
  <link href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" crossorigin="anonymous" rel="stylesheet" />
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="script.js" type="text/javascript"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
    Корзина | CoffeeTime
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
      <li class="breadcrumb-item"><span class="breadcrumb-link current-page">Корзина</span></li>
    </ul>
  </div>

<div class="page-header container">
  <h1>
    Корзина
  </h1>
</div>
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
              <button id="new_order" type="submit" class="button button-primary button-buy" data-cart-submit>
                <a href="\new-order.php"><span class="button-text">Оформить заказ</span></a>
              </button>
            </div>
          </div>
         </div>
      </div>

<div class="message">
  <div class="notices-container container">
    <div></div>
  </div>
</div>
  </div>
</div>
  <div class="footer">
    <center>
    (<a href='\admin.php'>Панель управления</a>)
  </center>
  </div>
</html>