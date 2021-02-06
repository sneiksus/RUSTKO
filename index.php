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
                    <img id='picu' src='".$steamprofile['avatar']."' class='rounded' alt='Cinque Terre'>
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
    <section class="main">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center ">
                <div class="col-xl-6">
                    <video width="320" height="240" controls>
                        <source src="movie.mp4" type="video/mp4">
                        Your browser does not support the video tag
                    </video>
                </div>
            </div>
            <div class="row justify-content-center align-items-center ">
                    <div class="serv">
                        <div class="fr row justify-content-between">
                            <div>
                                <p class="serv-name">Rust END</p>
                                <p class="max-players"><i class="fas fa-users"></i> MAX 3</p>
                            </div>
                            <div>
                                <a href=""><i class="far fa-2x fa-copy"></i></a>
                            </div>
                        </div>
                        <div class=" row justify-content-center">
                            <a class="pla" href=""><i class="fas fa-2x fa-play"></i></a>
                        </div>
                        <div class="fr row justify-content-between">
                            <div>
                                <p class="players"><i class="fas fa-user-friends"></i><i class="curent_players">87</i>
                                    /100</p>
                            </div>
                            <div>
                                <p class="map"><i class="fas fa-globe"></i> Procedural Map</p>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row ">
                <div class="col-xl-5 offset-xl-3">
                    <p class="descr">Описание</p>
                    <p class="description">Сервере очень крутой. Всем свои корешам рекомендую, в натуре чётко, реально
                        ми постарались.</p>
                </div>
            </div>
            <div class="row ">
                <div class="col-xl-3 offset-xl-3">
                    <div class="coment">
                        <p class="come-1">Шоковка</p>
                        <p class="come-2">Игрок</p>
                        <p class="come-3">Сервере очень крутой, играем всей семьёй.
                            Только уже зашел нарубил дерева, камня
                            пам пам и уже домик готов, и пошел рейдить
                            школоту.</p>
                    </div>
                </div>
                    <div class="col-xl-3 cs">
                    <div class="coment">
                        <p class="come-1">Шоковка</p>
                        <p class="come-2">Игрок</p>
                        <p class="come-3">Сервере очень крутой, играем всей семьёй.
                            Только уже зашел нарубил дерева, камня
                            пам пам и уже домик готов, и пошел рейдить
                            школоту.</p>
                    </div>
                </div>
                </div>
                <div class="row ">
                    <div class="col-xl-3 offset-xl-3">
                        <div class="coment">
                            <p class="come-1">Шоковка</p>
                            <p class="come-2">Игрок</p>
                            <p class="come-3">Сервере очень крутой, играем всей семьёй.
                                Только уже зашел нарубил дерева, камня
                                пам пам и уже домик готов, и пошел рейдить
                                школоту.</p>
                        </div>
                    </div>
                        <div class="col-xl-3 cs">
                        <div class="coment">
                            <p class="come-1">Шоковка</p>
                            <p class="come-2">Игрок</p>
                            <p class="come-3">Сервере очень крутой, играем всей семьёй.
                                Только уже зашел нарубил дерева, камня
                                пам пам и уже домик готов, и пошел рейдить
                                школоту.</p>
                        </div>
                    </div>
                    </div>
                    <div class="row ent">
                        <div class="col-xl-3 offset-xl-3">
                            <div class="coment">
                                <p class="come-1">Шоковка</p>
                                <p class="come-2">Игрок</p>
                                <p class="come-3">Сервере очень крутой, играем всей семьёй.
                                    Только уже зашел нарубил дерева, камня
                                    пам пам и уже домик готов, и пошел рейдить
                                    школоту.</p>
                            </div>
                        </div>
                            <div class="col-xl-3 cs">
                            <div class="coment">
                                <p class="come-1">Шоковка</p>
                                <p class="come-2">Игрок</p>
                                <p class="come-3">Сервере очень крутой, играем всей семьёй.
                                    Только уже зашел нарубил дерева, камня
                                    пам пам и уже домик готов, и пошел рейдить
                                    школоту.</p>
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
    <script>
    function auth(e){
   $.post( "index.php", {auth: 1});
    }
    </script>
    <link rel="stylesheet" href="./css_js/style.css">
    <link rel="stylesheet" href="./css_js/bootstrap.min.css">
    <script src="./css_js/jquery-3.5.1.min.js"></script>
    <script src="./css_js/bootstrap.min.js"></script>
</body>

</html>