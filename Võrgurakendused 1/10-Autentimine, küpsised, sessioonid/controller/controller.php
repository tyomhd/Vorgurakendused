
<?php
ini_set("session.cookie_lifetime",30*60);
session_start();

$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);

require_once('head.html');

$dir = 'pildid/';
$images = glob($dir . '*.jpg');
$imgList = array();
foreach($images as $img){
    $imgList[]=$img;
}

if(!empty($_GET)){
    $page=$_GET['page'];
} else {
    $page="pealeht";
}

switch($page) {
    case "pealeht":
        require_once('pealeht.html');
        break;
    case "galerii":
        require_once('galerii.html');
        break;
    case "vote":
        if (!isset($_SESSION['LAST_ACTIVITY'])){
            require_once('vote.html');
        }
        else if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 86400)) {
            session_unset();
            session_destroy();
            require_once('vote.html');
        } else {
            echo "<p style=\"color:red; text-align: center; font-weight: bold\">Sorry! you have voted for number ".$_SESSION['VOTED_FOR']." already</p>";
            $_POST['pilt'] = $_SESSION['VOTED_FOR'];
            require_once('tulemus.html');
        }
        break;
    case "tulemus":
        require_once('tulemus.html');
        break;}

require_once('foot.html');




?>
