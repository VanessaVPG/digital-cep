<?php
    require_once "vendor/autoload.php";
    use User\DigitalCep\Search;
    $busca = new Search;
    $resultado = $busca -> getAddressFromZipCode('88136000');
    print_r($resultado);
?>