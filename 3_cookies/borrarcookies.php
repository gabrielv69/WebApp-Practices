<?php
if(isset($_COOKIE)){
    //Elimino cookies
    foreach($_COOKIE as $name => $value){
        setcookie($name,'',0);
    }
}else{
    echo "<p>Cookie no seteada </p>";
}
?>

<a href= "index.php"> Ir a login </a> 