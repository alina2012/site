<?php
	/**
    * @file
    * Order list
    */ 
?>
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
            <a title="CoffeeTime" href=".\" class="logotype-link">
              <span class="logotype-text">CoffeeTime</span>
              <small class="logotype-subtitle">...adventure awaits, but first coffee...</small> 
            </a>
          </div>
      <div class="user-toolbar cell-xl-4 text-right-xl hidden-sm">
        <a title="Личный кабинет" class="compare-button button button-circle is-gray" href=".\account.php">
          <i class="icon compare-icon ion-person"></i>
        </a>
      <div class="shopcart-widget">
        <a title="Корзина" href=".\basket.php" class="shopcart-link button button-circle is-primary">
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
            <a title="Напитки" href=".\#drink" class="menu-link">
              <span class="link-text">Напитки</span> 
            </a>
      </li> 
      <li class="list-item menu-item text-left-xl " data-handle="eat">
        <a title="Десерты" href=".\#eat" class="menu-link">
          <span class="link-text">Десерты</span>    
        </a>
      </li>
      <li class="list-item menu-item text-left-xl " data-handle="addres">
        <a title="Контакты" href=".\addres.php" class="menu-link">
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
      <?php 
if(!(isset($_COOKIE['token']))){
  ?>
      <li class="breadcrumb-item"><span class="breadcrumb-link current-page">Вход в кабинет покупателя</span></li>
    </ul>
  </div>
  <div class="checkout-v1-wrapper">
      <div class='wrapper body fc'>
        <div class='page-title'>Вход в кабинет покупателя</div>
        <div id="flash_messages"></div>
        <div id='top_info'></div>
        <div class="set wide_set">
          <form action="./login.php" accept-charset="UTF-8" method="post">
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
              <a href=".\forgot.php">Восстановить пароль</a>
              </div>
            </div>
            <div class='field fc'>
              <div class='field-content'>
              <a href=".\signup.php">Зарегистрироваться</a>
              </div>
            </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php 
  };
  if(isset($_COOKIE['token'])){
    require_once("bd.php");
    require_once("src/Classes/Models/Sum.php");
    require_once("src/Classes/Models/DB.php");
    $sum = new \App\Models\Sum();
    $database = new \App\Models\DB();
   	/**
    * @var $token
    * Authorization token
    */
    $token = $_COOKIE['token'];
    /**
    * @var $email
    * User email
    */
    $email = $database->getRecord($db, "users", "token", $token, "login");
  ?>
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
                      echo "|<a href='./change.php'>
                      <span class='b'>Заказы покупателей</span>
                    </a>";
                    } ?>
                  </div>
                  <div class='profile fr'>
                    <b></b>
                    (<a href='\logout.php'>Выход</a>)
                  </div>
                </div>
              <div class='page-title'>Кабинет покупателя.</div>
              <div id="flash_messages"></div>
              <div id='top_info'></div>
      <div class='set wide_set'>
      <div class='set-title'>История заказов</div>
      <div class='set-title'>Вы можете следить за статусом заказа в личном кабинете или написать нашему telegram - боту (@Coffee_TimeBot)</div>
      <div class='set-block'>
        <?php 
        $data7 = $database->getRecord($db, "order_table", "email", $email, "composition");
        if($data7 = NULL){
          ?>
          <p>Вы не сделали ещё ни одного заказа</p>
          <?php 
        } else {
          ?>
          <div class="cart-list cell-xl-12">
        <div class="cart-header row">
          <div class="cart-head item-image cell-xs-12 cell-md-4 cell-lg-2 cell-xl-2">Номер заказа</div>
          <div class="cart-head item-caption cell-xs-12 cell-md-4 cell-lg-2 cell-xl-3">
            Состав
          </div>
          <div class="cart-head item-counter cell-xs-12 cell-md-4 cell-lg-3 cell-xl-2">
          </div>
          <div class="cart-head item-total js-item-total-price cell-xs-12 cell-md-4 cell-xl-2">
            Итоговая цена
          </div>
          <div class="cart-head item-remove cell-xs-12 cell-md-4 cell-xl-1">
            Статус
          </div>
        </div>
        <br>
        <hr>
        <br>
        </div>
        <?php
        $res = mysqli_query($db, "SELECT * FROM order_table WHERE email='$email'");
          while($data1 = mysqli_fetch_array($res)){
      /**
    	* @var $comp
    	* Order composition from the database
    	*/
          $comp = $data1['composition'];
          $my_new_array = json_decode($comp, true);
          $out='';
      	/**
    	* @var $price
    	* Order cost
    	*/
          $price = 0;
          echo '<div class="cart-list cell-xl-12"><div class="cart-header row"><div class="cart-head item-image cell-xs-12 cell-md-4 cell-lg-2 cell-xl-2">'.$data1['order_id'].'</div>';
          foreach($my_new_array as $key => $value) { 
            /**
		    * @var $name
		    * Name of product
		    */  
            $name = $database->getRecord($db, "descript", "data_id", $key, "description");
            $out .= $name;
            $out .= '. ';
            
             if(isset($value['price1']) && !isset($value['price2'])){
          /**
			    * @var $pr
			    * Cost of product
			    */
              $pr = $value['price1'];
          /**
			    * @var $count
			    * Count of product
			    */
              $count = $value['quantity1'];
              $price = $sum->add($price, $pr, $count);
            }
            if(isset($value['price2']) && !isset($value['price1'])){
          /**
			    * @var $pr
			    * Cost of product
			    */
               $pr = $value['price2'];
          /**
			    * @var $count
			    * Count of product
			    */
              $count = $value['quantity2'];
              $price = $sum->add($price, $pr, $count);
            }
            if(isset($value['price1']) && isset($value['price2'])){
          /**
			    * @var $pr1
			    * Cost of product
			    */
              $pr1 = $value['price1'];
          /**
			    * @var $count1
			    * Count of product
			    */
              $count1 = $value['quantity1'];
              $price = $sum->add($price, $pr1, $count1);
          /**
			    * @var $pr2
			    * Cost of product
			    */
              $pr2 = $value['price2'];
          /**
			    * @var $count2
			    * Count of product
			    */
              $count2 = $value['quantity2'];
              $price = $sum->add($price, $pr2, $count2);
            }
          }
          echo '<div class="cart-head item-caption cell-xs-12 cell-md-4 cell-lg-2 cell-xl-3">'.$out.'</div>';
          echo '<div class="cart-head item-counter cell-xs-12 cell-md-4 cell-lg-3 cell-xl-2"></div>';
          echo '<div class="cart-head item-total js-item-total-price cell-xs-12 cell-md-4 cell-xl-2">'.$price.'</div>';
          $status = $data1['status'];
      /**
			* @var $data3
			* Status description
			*/  
      $data3 = $database->getRecord($db, "status_description", "num", $status);
          echo '<div class="cart-head item-remove cell-xs-12 cell-md-4 cell-xl-1">'.$data3['description'].'</div>';
          echo '</div><br><hr></div>';
        };
        ?>
      </div>
      </div>
  <?php 
    };
  };
  ?>
  </div>
</div>
</div>
  <div class="footer">
    <center>
    (<a href='\admin.php'>Панель управления</a>)
  </center>
  </div>
</html>