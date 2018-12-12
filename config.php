<?

$con=mysql_connect("127.0.0.1","root","");
//$con=mysql_connect("127.0.0.1","root","");
mysql_select_db("box", $con);
//if(!ob_start("ob_gzhandler")) ob_start();
date_default_timezone_set("Europe/Madrid");

function estado($estado,$tipo)
{
    if ($estado == 1) return '<span class="ui-li-count" style="background:orange">'.($tipo==1?"LAVANDO":"SECANDO").'</span>';
    if ($estado == 2) return '<span class="ui-li-count" style="background:green; color:white">ESPERA</span>';
    if ($estado == 3) return '<span class="ui-li-count" style="background:red; color:white">ALARMA</span>';
}

  function temperatura($percentage) {
    
    $colors = array("#c43c35", "#d65227", "#f27312" ,"#f57711", "#f8840a", "#e89b0a", "#bda119", "#9fa225", "#7ba332", "#47a546");
    $colors = array_reverse($colors);
    $number = floor($percentage / 10);
    /*
    if ($percentage >= 100) {
        return $colors[9];
    } else if ($percentage <= 9) {
        return $colors[0];
    }*/
 
    
    if ($percentage >= 70) $bn = "black";
    else $bn = "black";
 return "background:".$colors[$number]."; color: $bn";

    //return $colors[$number];
}
$_SESSION['hola'] = 1;
if (!isset($_SESSION['login']) && isset($_POST['txt-usuario']) && isset($_POST['txt-clave']))
{
    if ($_POST['txt-usuario'] == "admin" && mysql_num_rows(mysql_query("select * from configuracion where clave = '".md5($_POST['txt-clave'])."'"))==1) 
    {
    $_SESSION['login'] = 1;
    unset($_SESSION['intentos']);   
    }
    else if (!isset($_SESSION['intentos'])) $_SESSION['intentos'] = 1;
    else $_SESSION['intentos'] += 1;
    
}

if (isset($_GET['salir']))
{
    unset($_SESSION['login']);
    session_destroy();
    header("Location: index.php");
}

?>
