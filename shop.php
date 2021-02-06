<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
    <script src="./css_js/script.js"></script>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row r1 align-items-center justify-content-between ">
                <div class="col-xl-3">
                    <nav>
                        <a href="index.html"><i class="fas fa-play"></i> Играть</a>
                        <a href="shop.html"><i class="fas fa-shopping-bag"></i> Магазин</a>
                        <a href="vip.html"><i class="fas fa-crown"></i> VIP</a>
                        <!-- <a href=""><i class="fas fa-newspaper"></i> Новости</a> -->
                    </nav>
                </div>
                <div class="col-xl-3">
                    <a href=" #"><img src="./assets/logo.png" id="logo" alt="logo"></a>
                </div>
                <div class="col-xl-push-2">
                    <a id="auth" href=" #">ВОЙТИ ЧЕРЕЗ STEAM <i class="fab fa-steam"></i></a>
                    <!-- <div id="profile">
                    <i class="pric">69 <img src="./assets/coal-money.svg"></img></i>
                    <a id="add" href=""><i class="fas fa-plus-square"></i></a>
                    <img id="picu" src="./assets/logo.png" class="rounded" alt="Cinque Terre">
                    <a id="logout" href=""><i class="fas fa-sign-out-alt"></i></a>
                </div> -->
                </div>
            </div>
        </div>
    </header>
    <section class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-2">
                    <input type="text" placeholder="Поиск" class="srch-input" id="usr">
                    <a id="find" href=""><i id="find-ic" class="fas fa-search"></i></a>
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all" role="tab" aria-controls="v-pills-all" aria-selected="true">Все</a>
                    <a class="nav-link" id="v-pills-kits-tab" data-toggle="pill" href="#v-pills-kits" role="tab" aria-controls="v-pills-kits" aria-selected="false">Наборы</a>
                    <a class="nav-link" id="v-pills-resources-tab" data-toggle="pill" href="#v-pills-resources" role="tab" aria-controls="v-pills-resources" aria-selected="false">Ресурсы</a>
                    <a class="nav-link" id="v-pills-weapon-tab" data-toggle="pill" href="#v-pills-weapon" role="tab" aria-controls="v-pills-weapon" aria-selected="false">Оружие</a>
                    <a class="nav-link " id="v-pills-ammo-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Боеприпасы</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Еда</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Медикаменты</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Одежда</a>
                    <a class="nav-link " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Для дома</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Ловушки</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Компоненты</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Рецепты</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Электричество</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Прочее</a>
                  </div>
                 
                </div>
                <div class="col-xl-10">

                    <div class="tab-content" id="v-pills-tabContent">
                       
              
                      <?php
         if(file_exists ( "./assets/shopItems.txt" )){
            $f = fopen("./assets/shopItems.txt", 'r') or die("no file");
            while(($line = fgets($f)) !== false)
            {
             $pieces = explode(";", $line);
             echo "<div class='item'>
             <div class='firsr'>
                 <i class='pric float-left'>".$pieces[2]." <img src='./assets/coal-money.svg'></img></i>
                 <i class='pric float-right'>x".$pieces[5]."</i>
             </div>
             <div class='midlr'>
               <a class='it-im-a' id='it-c' onclick=\"buy('{$pieces[1]}',{$pieces[2]},'{$pieces[4]}','{$pieces[3]}')\"><img alt='item' src='./assets/items/{$pieces[3]}'></img></a>  
             </div>
             <div class='endr'>
                 <p  class='pric'>".$pieces[1]."</p>
                 <i>".$pieces[4]."</i>
             </div>
         </div>";
            }
            fclose($f);
         }
         
         ?>
                      </div>
                      <div class="tab-pane fade" id="v-pills-kits" role="tabpanel" aria-labelledby="v-pills-kits-tab">
                     
                      </div>
                      <div class="tab-pane fade" id="v-pills-resources" role="tabpanel" aria-labelledby="v-pills-resources-tab">
                      <?php
         if(file_exists ( "./assets/shopItems.txt" )){
            $f = fopen("./assets/shopItems.txt", 'r') or die("no file");
            while(($line = fgets($f)) !== false)
            {
             
             $pieces = explode(";", $line);
             if($pieces[4]=='Resources')
             echo "<div class='item'>
             <div class='firsr'>
                 <i class='pric float-left'>".$pieces[2]." <img src='./assets/coal-money.svg'></img></i>
                 <i class='pric float-right'>x".$pieces[5]."</i>
             </div>
             <div class='midlr'>
               <a class='it-im-a' id='it-c' href='javascript:void(0)'><img alt='item' src="."./assets/items/".$pieces[3]." ></a>  
             </div>
             <div class='endr'>
                 <p  class='pric'>".$pieces[1]."</p>
                 <i>".$pieces[0]."</i>
             </div>
         </div>";
            }
            fclose($f);
         }
         
         ?> 
                      </div>
                      <div class="tab-pane fade" id="v-pills-weapon" role="tabpanel" aria-labelledby="v-pills-settings-weapon">
                      <?php
         if(file_exists ( "./assets/shopItems.txt" )){
            $f = fopen("./assets/shopItems.txt", 'r') or die("no file");
            while(($line = fgets($f)) !== false)
            {
             
             $pieces = explode(";", $line);
             if($pieces[4]=='Weapon')
             echo "<div class='item'>
             <div class='firsr'>
                 <i class='pric float-left'>".$pieces[2]." <img src='./assets/coal-money.svg'></img></i>
                 <i class='pric float-right'>x".$pieces[5]."</i>
             </div>
             <div class='midlr'>
               <a class='it-im-a' id='it-c' href='javascript:void(0)'><img alt='item' src="."./assets/items/".$pieces[3]." ></a>  
             </div>
             <div class='endr'>
                 <p  class='pric'>".$pieces[1]."</p>
                 <i>".$pieces[0]."</i>
             </div>
         </div>";
            }
            fclose($f);
         }
         
         ?> 
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div id="mdd" class="modal-content">
                <button  type="button" class="close " data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
               <img src="./assets/logo.png" alt="logo"></img>
               <p>Благодарим вас за покупку!</p>
               <i>Товар</i>
               <a>GOLD VIP</a>
               <i>Количество</i>
               <a>x1</a>
               <i>Стоимость</i>
               <a>69 <img id="coal2" src="./assets/coal-money.svg"></img></a>
               <p>Чтобы получить товар зайдите на наш сервер и пропишитие команду /donat</p>
              </div>
            </div>
          </div>  
          <div class="modal fade" id="buyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div id="mdd" class="modal-content">
                <button  type="button" class="close " data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <p id="nm">Патрон 5,56</p>
                  <i id="ct">Боеприпасы</i>
                  <img id="image" src="./assets/ammo.rifle.png" alt="logo"></img>
               <i id="am">Количество</i>
               <input id="number" type="number" max="50" min="1" step="1" value="1">
               <i>Стоимость</i>
               <i id="mn" class="pric  float-left">69 <img src="./assets/coal-money.svg"></img></i>
               <a id="prp"  href="javascript:void(0)">Купить</a>
              </div>
            </div>
          </div>  
    </section>
    <footer>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-xl-3 offset-xl-5">
                    <p class="cprght">RUSTEND 2021 © Все права защищены. </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-1 medias">
                    <a href=""><i class="fab fa-vk"></i></a>
                    <a href=""><i class="fab fa-steam-square"></i></a>
                    <a href=""><i class="fab fa-discord"></i></a>
                </div>
            </div>
        </div>
        
    </footer>
    <script>
    function buy(name, price, categ, image){
        document.getElementById('nm').innerHTML = name;
        document.getElementById('ct').innerHTML = categ;
        document.getElementById('mn').innerHTML = price + '<img src="./assets/coal-money.svg"></img>';
        document.getElementById('image').src ='./assets/items/'+ image;
   $('#buyModal').modal('show'); 
        }
    </script>
    <link rel="stylesheet" href="./css_js/style.css">
    <link rel="stylesheet" href="./css_js/bootstrap.min.css">
    <script src="./css_js/jquery-3.5.1.min.js"></script>
    <script src="./css_js/bootstrap.min.js"></script>
   
</body>

</html>