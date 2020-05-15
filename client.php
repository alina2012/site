	<?php
	/**
	 * @file
	 * User account
	 */
	?>
<!DOCTYPE html>
<html ng-app="newApp">
<head>
  <link href="https://assets3.insales.ru/assets/1/7308/1227916/1561988348/theme.css" rel="stylesheet" type="text/css" />
  <link href="https://assets3.insales.ru/assets/1/7308/1227916/1561988348/ie.css" rel="stylesheet" type="text/css" />
  <link href="//fonts.googleapis.com/css?family=Exo+2&subset=cyrillic,latin" rel="stylesheet" />
  <link href="//fonts.googleapis.com/css?family=Lobster&subset=cyrillic,latin" rel="stylesheet" />
  <link href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" crossorigin="anonymous" rel="stylesheet" />
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-resource/1.7.8/angular-resource.min.js"></script>
  <script src="script.js" type="text/javascript"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
    Личный кабинет | CoffeeTime
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
      
      <li class="breadcrumb-item"><span class="breadcrumb-link current-page">Кабинет покупателя</span></li>
        </ul>
      </div>
          <div class="checkout-v1-wrapper">
            <div class='wrapper body fc'>
                <div class='userbar fc'>
                  <div class='links fl'>
                    <a href='\'>
                      <span class='b'>Вернуться в магазин</span>
                    </a>|<a href='\client.php'>
                      <span>Контактные данные</span>
                    </a>|<a href='\account.php'>
                      <span class='b'>Заказы</span>
                    </a> <?php if(isset($_COOKIE['admin'])){
                      echo "|<a href='\change.php'>
                      <span class='b'>Заказы покупателей</span>
                    </a>";
                    } ?>
                  </div>
                  <div class='profile fr'>
                    <b></b>
                    (<a href='\logout.php'>Выход</a>)
                  </div>
                </div>
              <div class='page-title'>Кабинет покупателя. Контакты.</div>
              <div id="flash_messages"></div>
        <div id='top_info'></div>
        <div class="set wide_set">
<div class="set-title">Контактные данные</div>
<div class='set-block'>
  <div id="flash_messages"></div>
  <div ng-controller="newController">
      <form id="contacts" accept-charset="UTF-8" method="post">
        <input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="_method" value="put" />
          <div class="field fc">
            <div class="field-label"><label for="client_name" >Контактное лицо (ФИО):</label></div>
            <div class="field-content"><input class="textfield" type="text" id="client_name" value={{name}} /></div>
          </div>
          <div class="field fc">
            <div class="field-label"><label for="client_phone" >Контактный телефон:</label></div>
            <div class="field-content"><input class="textfield" type="tel" id="client_phone" value={{phone}} /></div>
          </div>
          <div class="field fc">
            <div class="field-label"><label for="client_email" >E-mail:</label></div>
            <div class="field-content"><input class="textfield" type="text" id="client_email" value={{email}} /></div>
          </div>
        <div id="change_password_fields" >
          <div class="field fc">
            <div class="field-label">Старый пароль:</div>
            <div class="field-content"><input class="textfield" type="password" id="client_old_password" /></div>
          </div>
          <div class="field fc">
            <div class="field-label">Пароль:</div>
            <div class="field-content"><input class="textfield" type="password" id="client_password" /></div>
          </div>
          <div class="field fc">
            <div class="field-label">Повторите пароль:</div>
            <div class="field-content"><input class="textfield" type="password" id="client_password_confirmation" /></div>
          </div>
        </div>
        <div class="field fc">
          <div class="field-label"></div>
          <div class="field-content"><input type="submit" value="Сохранить изменения" name="commit" class="button"/></div>
        </div>
    </form>
  </div>
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
    angular.module('newApp', ['ngResource'])
        .controller('newController',  ['$scope', '$http',function($scope, $http) {
                $http.get('get.php')
                     .then(function (response) {
                      var data = response.data;
                        $scope.name = data.name;
                        $scope.phone = data.phone;
                        $scope.email = data.login;
                        },
                        function (response){
                            console.log(response);
                        });
   
        }]);
        $(function(){
          $(".button").click(function(){
            var name = $("#client_name").val();
            var email = $("#client_email").val();
            var phone = $("#client_phone").val();
            var old_pas = $("#client_old_password").val();
            var new_pas = $("#client_password").val();
            var pas_con = $("#client_password_confirmation").val();
            $.ajax({
              type: "POST", 
              url: "update.php",  
                data: {name: name, email: email, phone: phone, old_pas: old_pas, new_pas: new_pas, pas_con: pas_con}, 
              success:function(){
                  $("#client_old_password").val() = '';
                  $("#client_password").val() = '';
                  $("#client_password_confirmation").val() = '';
              }

          })
            location.reload();
          });
        });
</script>
</body>
</html>