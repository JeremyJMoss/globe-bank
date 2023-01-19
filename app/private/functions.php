<?php

    function url_for($string = ""){
        return WWW_ROOT . $string;
    }

    function u($string=""){
        return urlencode($string);
    }
    
    function raw_u($string=""){
        return rawurlencode($string);
    }

    function h($string=""){
        return htmlspecialchars($string);
    }

    function error_404(){
        header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
        exit();
    }

    function error_500(){
        header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
        exit();
    }
?>