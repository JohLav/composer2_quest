<?php
    
    require_once "../vendor/autoload.php";
    
    use app\Hello;
    
$hello = new Hello('Hello World!');
echo $hello->talk();