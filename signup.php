<!-- регистрация -->
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
    Регистрация | CoffeeTime
  </title>
<meta charset="UTF-8" />
</head>
<body class="adaptive">
  <div class="page-wrapper">
    <div class="page-inner container">
      <header class="main-header container">
        <div class="row middle-xl">
          <div class="logotype cell-xl-4 text-center-xl cell-sm-12">
            <a title="CoffeeTime" href="\myshop.ru\index.php" class="logotype-link">
              <span class="logotype-text">CoffeeTime</span>
              <small class="logotype-subtitle">...adventure awaits, but first coffee...</small> 
            </a>
          </div>
      <div class="user-toolbar cell-xl-4 text-right-xl hidden-sm">
        <a title="Личный кабинет" class="compare-button button button-circle is-gray" href="\myshop.ru\account.php">
          <i class="icon compare-icon ion-person"></i>
        </a>
      <div class="shopcart-widget">
        <a title="Корзина" href="\myshop.ru\basket.php" class="shopcart-link button button-circle is-primary">
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
            <a title="Напитки" href="\myshop.ru\index.php\#drink" class="menu-link">
              <span class="link-text">Напитки</span> 
            </a>
      </li> 
      <li class="list-item menu-item text-left-xl " data-handle="eat">
        <a title="Десерты" href="\myshop.ru\myshop.ru\#eat" class="menu-link">
          <span class="link-text">Десерты</span>    
        </a>
      </li>
      <li class="list-item menu-item text-left-xl " data-handle="addres">
        <a title="Контакты" href="\myshop.ru\addres.php" class="menu-link">
          <span class="link-text">Контакты</span>   
        </a>
      </li>
    </ul> 
  </div>
  <div class="breadcrumb-wrapper container">
    <ul class="breadcrumb">
      <li class="breadcrumb-item home">
        <a class="breadcrumb-link" title='Главная' href="\myshop.ru\index.php">Главная</a>
      </li>
      <li class="breadcrumb-item"><span class="breadcrumb-link current-page">Регистрация</span></li>
    </ul>
  </div>

<div class="checkout-v1-wrapper">
      <div class='wrapper body fc'>
        <div class='page-title'>Регистрация</div>
        <div id="flash_messages"></div>
        <div id='top_info'></div>
        <div class="set wide_set">
          <form class="new_client" id="new_client" action="\myshop.ru\register.php" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
            <input value="1" type="hidden" name="client[registered]" id="client_registered" />
            <div class='set-block'>
                <div class="field fc">
                  <div class="field-label">
                    <label for="client_name" >Контактное лицо (ФИО):</label><span class="warning">*</span>
                  </div>
                  <div class="field-content">
                    <input class="textfield" type="text" id="client_name" name="client" value="" />
                    <div class="small"></div>
                  </div>
                </div>
                <div class="field fc">
                  <div class="field-label">
                    <label for="client_phone" >Контактный телефон:</label><span class="warning">*</span>
                  </div>
                  <div class="field-content">
                    <input class="textfield" type="tel" id="client_phone" name="phone" value="" />
                    <div class="small">Например: +7(926)111-11-11</div>
                  </div>
                </div>
                <div class="field fc">
                  <div class="field-label">
                    <label for="client_email" >E-mail:</label><span class="warning">*</span>
                  </div>
                  <div class="field-content">
                    <input class="textfield" type="text" id="client_email" name="email" value="" />
                    <div class="small"></div>
                  </div>
                </div>
              <div class="field fc">
                <div class="field-label">Пароль:<span class="warning">*</span></div>
                <div class="field-content"><input class="textfield" type="password" name="password" id="client_password" /></div>
              </div>
              <div class="field fc">
                <div class="field-label">Повторите пароль:<span class="warning">*</span></div>
                <div class="field-content"><input class="textfield" type="password" name="conf-password" id="client_password_confirmation" /></div>
              </div>
              <div class="field fc">
                <div class="field-label"></div>
                <div class="field-content"><input type="submit" name="commit" value="Зарегистрироваться" class="button" data-disable-with="Зарегистрироваться" /></div>
              </div>
            </div>
          </form>
        </div>
        </div>
      </div>
    </div>
    </div>
  <div class="footer">
    <center>
    (<a href='\myshop.ru\admin.php'>Панель управления</a>)
  </center>
  </div>
</html>