<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/style.css">
    <title><?=bloginfo();?></title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <div class="top-header">
        <div class="container">
            <div class="logo">
                <img src="<?=get_template_directory_uri();?>/assets/img/logo.png">
                <a href="/">МБОУ СОШ №5</a>
            </div>
            <nav class="navbar">
                <? wp_nav_menu('menu=top-menu')?>
            </nav>
        </div>
    </div>
    <div class="offer">
       <div class="container">
            <div class="title">
                <h1>Рады вас видеть на нашем сайте МБОУ СОШ №5</h1>
                <img src="<?=get_template_directory_uri();?>/assets/img/school.png">
            </div>
            <div class="descriptions">
                <h1><i style="display: block">"Если ребенку удается добиться успеха в школе, у него есть все шансы на успех в жизни"</i> У. Глассер</h1>
                <img src="<?=get_template_directory_uri();?>/assets/img/education.png">
            </div>
       </div>
    </div>
</header>