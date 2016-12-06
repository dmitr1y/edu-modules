<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <link rel="stylesheet" type="text/css" href="main.css">
    <meta charset="UTF-8">
    <title>Edu modules </title>
</head>
<body>
<script src="menu.js"></script>
<script src="jquery-3.1.1.min.js"></script>
<div class="header">
    <div class="logo">EduModule</div>
<!--    <div class="container_form-signin">-->
<!--        --><?php
//        // phpinfo();
//        if (function_exists('mysqli_connect')) {
//            print "mysql_connect exists.<br />\n";
//        } else {
//            print "mysql_connect not exists.<br />\n";
//        }
//        $link = mysqli_connect('localhost', 'root', '5989613', 'eduModuls');
//        if (!$link) {
//            print('Не удалось соединиться : ');
//        } else {
//            print ('База подключена');
//        }
//
//        $result = mysqli_query($link, "SELECT * FROM `userTable` WHERE `userLogin` = `admin`");
//        //              print  $r = mysqli_fetch_array($result);
//
//        //                $name = $r['userLogin'];
//        // print $name;
//
//        ?>
<!--        <form class="form-signin" role="form"-->
<!--              action="/index.php" method="post">-->
<!--            <h4 class="form-signin-heading"></h4>-->
<!--            <input type="text" class="form-control"-->
<!--                   name="username" placeholder="username = admin"-->
<!--                   required autofocus></br>-->
<!--            <input type="password" class="form-control"-->
<!--                   name="password" placeholder="password = admin" required>-->
<!--            <button class="btn btn-lg btn-primary btn-block" type="submit"-->
<!--                    name="login">Register-->
<!--            </button>-->
<!--        </form>-->
<!--        Click here to clean <a href="logout.php" tite="Logout">Session.-->
<!--    </div> <!-- /container -->

</div>
<div id="menu" class="default">
    <ul class="nav">
        <li><a href="/">Главная</a></li>
        <li class="drop">Онлайн модули
            <ul>
                <li><a href="#" onclick="changeSrc('modules/client/StrassenVizi/start.html')">Визуализатор алгоритма Штрассена (js)</a></li>
                <li><a href="#" onclick="changeSrc('modules/client/KIO.files/KIO_index.html')">Data Mining</a></li>
                <li><a href="#" onclick="changeSrc('modules/client/alternative-exam-gh-pages/index.html')">Тренажёр поиска взаимно-однозначных соотношений</a></li>
                <li><a href="#" onclick="changeSrc('http://xn--80atdza4d.xn--80aqijq.xn--p1ai/')">Замкнутые классы булевых функций</a></li>
                <li><a href="#" onclick="changeSrc('modules/server/boolean/public/index.php')">Замкнутые классы булевых функций</a></li>
                <li><a href="#" onclick="changeSrc('http://edumodules.ru:8081/')">[ERR]Тренажёр на алгоритм Евклида и связанные с ним задачи</a></li>
            </ul>
        </li>
        <li class="drop">Офлайн модули
            <ul>
                <li><a href="#" onclick="changeSrc('modules/client/forDownload/ProtocolVisualizer/')">Визуализатор протоколов</a></li>
                <li><a href="#" onclick="changeSrc('modules/client/forDownload/wisetask/')">wisetask (java)</a></li>
                <li><a href="#" onclick="changeSrc('modules/client/forDownload/AltExam-v1.0/')">работа с длинными числами</a></li>
                <!--                    Компьютерная система для работы с длинными числами, представленными своими остатками-->
                <li><a href="#" onclick="changeSrc('modules/client/forDownload/Ant-Algo/')">Визуализация решения задачи Коммивояжера </a></li>
                <!--                    Визуализация решения задачи Коммивояжера с помощью муравьиного алгоритма-->
                <li><a href="#" onclick="changeSrc('modules/client/forDownload/BernsideTheorem/')">Вычисление всех геометрически различных раскрасок</a></li>
                <!-- Вычисление всех геометрически различных раскрасок правильных многогранников/многоугольников с использованием Теоремы Бернсайда -->
                <li><a href="#" onclick="changeSrc('modules/client/forDownload/DM-alt_exam-2016-spies/')">DM-alt_exam-2016-spies</a></li>
                <li><a href="#" onclick="changeSrc('modules/client/forDownload/lastV/')">lastV</a></li>
                <li><a href="#" onclick="changeSrc('modules/client/forDownload/Machine_Experiment/')">Machine_Experiment</a></li>
                <li><a href="#" onclick="changeSrc('modules/client/forDownload/PolynomFactorization/')">PolynomFactorization</a></li>
                <li><a href="#" onclick="changeSrc('modules/client/forDownload/RSAsys/')">RSAsys</a></li>
                <li><a href="#" onclick="changeSrc('modules/client/forDownload/Аддитивные-цепочки/')">Аддитивные цепочки</a></li>
                <li><a href="#" onclick="changeSrc('modules/client/forDownload/АЛГОРИТМ-РАБОТЫ-ЭЛЕКТРОННЫХ-ПЛАТЕЖЕЙ/')">АЛГОРИТМ РАБОТЫ ЭЛЕКТРОННЫХ ПЛАТЕЖЕЙ</a></li>
                <li><a href="#" onclick="changeSrc('modules/client/forDownload/Бакаляр-факторизация')">Бакаляр факторизация</a></li>
                <li><a href="#" onclick="changeSrc('modules/client/forDownload/Муравьиный-алгоритм/')">Муравьиный алгоритм</a></li>
                <li><a href="#" onclick="changeSrc('modules/client/forDownload/устный-счет/')">устный счет</a></li>
                <li><a href="#" onclick="changeSrc('modules/client/forDownload/ГЕНЕРАЦИЯ БОЛЬШИХ ПРОСТЫХ ЧИСЕЛ/')">ГЕНЕРАЦИЯ БОЛЬШИХ ПРОСТЫХ ЧИСЕЛ</a></li>
                <li><a href="#" onclick="changeSrc('modules/client/forDownload/spies/')">Шпионы</a></li>
                <li><a href="#" onclick="changeSrc('modules/client/forDownload/Биометрическая идентификация личности по голосу/')">Биометрическая идентификация личности по голосу</a></li>
                <li><a href="#" onclick="changeSrc('modules/client/forDownload/разложение квадрата натурального числа в цепную дробь/')">Разложение квадрата натурального числа в цепную дробь</a></li>
            </ul>
        </li>
        <li><a href=#>Контакты</a></li>
    </ul>
</div>
<script type="text/javascript">

    $(document).ready(function(){
        var iframe = $('#content_frame', parent.document.body);
        iframe.height($(document.body).height());
        var $menu = $("#menu");

        $(window).scroll(function(){
            if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("default")
                        .addClass("fixed transbg")
                        .fadeIn('fast');
                });
            } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("fixed transbg")
                        .addClass("default")
                        .fadeIn('fast');
                });
            }
        });
    });
</script>
<div id="content">
    <!-- content container-->
    <iframe id="content_frame" src="intro.html">Требуется поддержка iframe</iframe>

</div>
<div class="footer">
    EduModules &#169; 2016
</div>

</body>
</html>
