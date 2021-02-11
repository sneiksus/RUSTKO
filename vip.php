<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
</head>

<body>
<header>
        <div class="container-fluid">
            <div class="row r1 align-items-center justify-content-between ">
                <div class="col-xl-3">
                    <nav>
                        <a href="index.php"><i class="fas fa-play"></i> Играть</a>
                        <a href="shop.php"><i class="fas fa-shopping-bag"></i> Магазин</a>
                        <a href="vip.php"><i class="fas fa-crown"></i> VIP</a>
                        <!-- <a href=""><i class="fas fa-newspaper"></i> Новости</a> -->
                    </nav>
                </div>
                <div class="col-xl-3">
                <a href=" index.php"><img src="./assets/logo.png"  href="index.php" id="logo" alt="logo"></a>
                </div>
                <div class="col-xl-push-2">
                  
                <?php
require 'steamauth/steamauth.php';

if(isset($_SESSION['steamid']))
{
    require 'steamauth/userInfo.php';
    $servername = "freedb.tech";
$username = "freedbtech_rustend";
$password = "rustend";
$dbname = "freedbtech_rustend";
try
{
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
/* set the PDO error mode to exception */
//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$chck = 'select 1 from `'.$steamprofile['steamid'].'` LIMIT 1';

if ( !$conn->query( "DESCRIBE `".$steamprofile['steamid']."`"))
{
    $sql = "CREATE TABLE `".$steamprofile['steamid']."` (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        item VARCHAR(50) NOT NULL,
        amount INT NOT NULL)";
    $conn->query($sql);
    $sql = "INSERT INTO `".$steamprofile['steamid']."` (item, amount) VALUES ('bablo', 0)";
    $conn->query($sql);
}
$sql = "SELECT amount
FROM `".$steamprofile['steamid']."`
WHERE item = 'bablo';";
$result = $conn->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
}
catch(PDOException $e)
{

    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
    echo "<div id='profile'>
                    <i class='pric'>".$row["amount"]."<img src='./assets/coal-money.svg'></img></i>
                    <a id='add' ><i class='fas fa-plus-square'></i></a>
                    <img id='picu' src='".$steamprofile['avatar']."' alt='Cinque Terre'>
                    <a id='logout' href='steamauth/logout.php'><i class='fas fa-sign-out-alt'></i></a>
                 </div>";
}
else{
    echo "<a id='auth'  href='?login'>ВОЙТИ ЧЕРЕЗ STEAM <i class='fab fa-steam'></i></a>";
}

?>
                    
                </div>
            </div>
        </div>
    </header>
    <section class="vipki">
        <div class="alert alert-danger fixed-top  collapse" role="alert">
      Вы не авторизованы!
    </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-3">

                    <div class="bronze">
                      <img class="znak" src="./assets/bonze-medal.svg" alt="bronze">
                      <h3 class="zhl">BRONZE</h3>
                      <p class="opor">Возможности</p>
                      <ul class="previleg">
                        <li>Что-то там вам дадут</li>
                        <li>Что-то там вам дадут</li>
                        <li>Что-то там вам дадут</li>
                        <li>Что-то там вам дадут</li>
                      </ul>
                      <hr class="ciara">
                      <p class="lngth">Стоимость на 7 дней</p>
                      <i class="pric">69 <img src="./assets/coal-money.svg"></img></i>
                      <?php
                       if(isset($_SESSION['steamid']))
                     echo  "<a id='GB' class='kup' href='bronze.php'>Купить</a>";
                     else
                     echo  "<a id='GB' href='javascript:void(0)' class='kup'onclick='alert()'>Купить</a>";
                      ?>
                    </div>
                </div>  
                <div class="col-xl-3">

                    <div class="silver">
                      <img class="znak" src="./assets/silver-medal.svg" alt="bronze">
                      <h3 class="zhl">SILVER</h3>
                      <p class="opor">Возможности</p>
                      <ul class="previleg">
                        <li>Что-то там вам дадут</li>
                        <li>Что-то там вам дадут</li>
                        <li>Что-то там вам дадут</li>
                        <li>Что-то там вам дадут</li>
                        <li>Что-то там вам дадут</li>
                        <li>Что-то там вам дадут</li>
                        <li>Что-то там вам дадут</li>
                      </ul>
                      <hr class="ciara">
                      <p class="lngth">Стоимость на 7 дней</p>
                      <i class="pric">69 <img src="./assets/coal-money.svg"></img></i>
                      <?php
                     if(isset($_SESSION['steamid']))
                     echo  "<a id='GB' class='kup' href='silver.php'>Купить</a>";
                     else
                     echo  "<a id='GB' href='javascript:void(0)' class='kup'onclick='alert()'>Купить</a>";
                      ?>
                    </div>
                </div>  
                <div class="col-xl-3">

                    <div class="gold">
                      <img class="znak" src="./assets/gold-medal.svg" alt="bronze">
                      <h3 class="zhl">GOLD</h3>
                      <p class="opor">Возможности</p>
                      <ul class="previleg">
                        <li>Что-то там вам дадут</li>
                        <li>Что-то там вам дадут</li>
                        <li>Что-то там вам дадут</li>
                        <li>Что-то там вам дадут</li>
                        <li>Что-то там вам дадут</li>
                        <li>Что-то там вам дадут</li>
                        <li>Что-то там вам дадут</li>
                        <li>Что-то там вам дадут</li>
                        <li>Что-то там вам дадут</li>
                        <li>Что-то там вам дадут</li>
                        <li>Что-то там вам дадут</li>
                      </ul>
                      <hr class="ciara">
                      <p class="lngth">Стоимость на 7 дней</p>
                      <i class="pric">69 <img src="./assets/coal-money.svg"></img></i>
                      <?php
                       if(isset($_SESSION['steamid']))
                     echo  "<a id='GB' class='kup' href='gold.php'>Купить</a>";
                     else
                     echo  "<a id='GB' href='javascript:void(0)' class='kup'onclick='alert()'>Купить</a>";
                      ?>
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
    
    <link rel="stylesheet" href="./css_js/style.css">
    <link rel="stylesheet" href="./css_js/bootstrap.min.css">
    <script src="./css_js/jquery-3.5.1.min.js"></script>
    <script src="./css_js/bootstrap.min.js"></script>
    <script>
        function alert(){
            $('.alert').show();
            setTimeout(function() {
                $('.alert').hide();
               }, 2000);
           
        }
   
    </script>
</body>

</html>