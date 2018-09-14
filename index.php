<?php
    $q = 'pages/';
    $q .= empty( $_GET['q'] ) ? 'main.php' : $_GET['q'];
    
    if( $q !== 'pages/vudi.jpeg' && file_exists($q) ) include $q; // в нашем случае проверка что не наша картинка
    
    else if( $q === 'pages/vudi.jpeg' ) header('Location: pages/vudi.jpeg ');  // для картинок так, а то абракадабра

    else include "pages/main.php";

