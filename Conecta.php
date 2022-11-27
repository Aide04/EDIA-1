<? PHP
$Servidor="localhoost"
$Usuario="root"
$Password=" "
$bd="EDIA"
$Conecta=mysquli_connect($Servidor,$Usuario,$Password,$bd);
if($Conecta->connect_error){
    die("Error al conectar la base de datos ".$Conecta->connect_error);
    }
    ?>