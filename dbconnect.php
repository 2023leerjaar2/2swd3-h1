<?php 
try{
$conn = new mysqli("localhost", "root", "", "kamadoing");
} catch(Exception$e){
    echo "Verbinding Mislukt";
}
?>