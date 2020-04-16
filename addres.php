<!-- контакты -->
<!DOCTYPE html>
<html>
<head>
  <link href="https://assets3.insales.ru/assets/1/7308/1227916/1561988348/theme.css" rel="stylesheet" type="text/css" />
  <link href="https://assets3.insales.ru/assets/1/7308/1227916/1561988348/ie.css" rel="stylesheet" type="text/css" />
  <link href="//fonts.googleapis.com/css?family=Exo+2&subset=cyrillic,latin" rel="stylesheet" />
  <link href="//fonts.googleapis.com/css?family=Lobster&subset=cyrillic,latin" rel="stylesheet" />
  <link href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" crossorigin="anonymous" rel="stylesheet" />
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://api-maps.yandex.ru/2.1/?apikey=54878a4c-8086-4153-9869-5b08a148af16&lang=ru_RU" type="text/javascript">
    </script>
    <script type="text/javascript">
        ymaps.ready(init);
        function init(){
            var myMap = new ymaps.Map("map", {
                center: [59.93, 30.31],
                zoom: 14
            });
            var myPlacemark = new ymaps.Placemark(
            [59.93, 30.31]        
            );
            myMap.geoObjects.add(myPlacemark);
        }
    </script>
  <title>
    Контакты | CoffeeTime
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
          <span class="shopcart-counter js-shopcart-amount"></span>
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
        <a title="Десерты" href="\myshop.ru\index.php\#eat" class="menu-link">
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
      <li class="breadcrumb-item"><span class="breadcrumb-link current-page">Контакты</span></li>
    </ul>
  </div>

<div class="collection container">
  <div class="row">
    <div class="collection-inner cell-xl-12">
        <div class="page-header">
          <h1>Контакты</h1>
        </div>
      </div>
    </div>
  </div>
  <div>
    <table>
      <tr> 
        <td><h3>Мы находимся по адресу:</h3>
            <p> - Вознесенский проспект, 16</p>
            <h3>Режим работы:</h3>
            <p> - Круглосуточно</p>
        </td>
        <td width="200px"></td>
        <td><div id="map" style="width: 600px; height: 400px"></div></td>
      </tr>
    </table>
  </div>
</div>
  <div class="footer">
    <center>
    (<a href='\myshop.ru\admin.php'>Панель управления</a>)
  </center>
  </div>
</html>