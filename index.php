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
<div class="header">
    <div class="logo">EduModule</div>
    <div class="container_form-signin">
        <?php
        // phpinfo();
        if (function_exists('mysqli_connect')) {
            print "mysql_connect exists.<br />\n";
        } else {
            print "mysql_connect not exists.<br />\n";
        }
        $link = mysqli_connect('localhost', 'root', '5989613', 'eduModuls');
        if (!$link) {
            print('Не удалось соединиться : ');
        } else {
            print ('База подключена');
        }

        $result = mysqli_query($link, "SELECT * FROM `userTable` WHERE `userLogin` = `admin`");
        //              print  $r = mysqli_fetch_array($result);

        //                $name = $r['userLogin'];
        // print $name;

        ?>
        <form class="form-signin" role="form"
              action="/index.php" method="post">
            <h4 class="form-signin-heading"></h4>
            <input type="text" class="form-control"
                   name="username" placeholder="username = admin"
                   required autofocus></br>
            <input type="password" class="form-control"
                   name="password" placeholder="password = admin" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit"
                    name="login">Login
            </button>
        </form>
        Click here to clean <a href="logout.php" tite="Logout">Session.
    </div> <!-- /container -->
</div>
<div class="menu">
    <nav id="primary_nav_wrap">
        <ul>
            <li class="current-menu-item"><a href="/">Home</a></li>

            <li><a href="#">Онлайн модули</a>
                <ul>
                    <li><a href="#" onclick="changeSrc('modules/client/StrassenVizi/start.html')">[OK] StrassenVizi
                            (js)</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/KIO.files/KIO_index.html')">[OK] KIO (flash)</a>
                    </li>
                    <li><a href="#" onclick="changeSrc('modules/client/alternative-exam-gh-pages/index.html')">[OK]
                            поиск взаимно-однозначных соотношений</a></li>
                    <li><a href="#" onclick="changeSrc('http://xn--80atdza4d.xn--80aqijq.xn--p1ai/')">[ERR]
                            замкнутые классы</a></li>
                    <li><a href="#" onclick="changeSrc('http://edumodules.ru:8081/')">[ERR]
                            discrete-eltech (node js)</a></li>
                </ul>
            </li>
            <li><a href="#">Офлайн модули</a>
                <ul>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/ProtocolVisualizer/')">Визуализатор
                            протоколов</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/wisetask/')">wisetask
                            (java)</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/AltExam-v1.0/')">AltExam-v1.0</a>
                    </li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/Ant-Algo/')">Ant-Algo</a></li>
                    <li><a href="#"
                           onclick="changeSrc('modules/client/forDownload/BernsideTheorem/')">BernsideTheorem</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/DM-alt_exam-2016-spies/')">DM-alt_exam-2016-spies</a>
                    </li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/lastV/')">lastV</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/Machine_Experiment/')">Machine_Experiment</a>
                    </li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/PolynomFactorization/')">PolynomFactorization</a>
                    </li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/RSAsys/')">RSAsys</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/Аддитивные-цепочки/')">Аддитивные
                            цепочки</a></li>
                    <li><a href="#"
                           onclick="changeSrc('modules/client/forDownload/АЛГОРИТМ-РАБОТЫ-ЭЛЕКТРОННЫХ-ПЛАТЕЖЕЙ/')">АЛГОРИТМ
                            РАБОТЫ ЭЛЕКТРОННЫХ ПЛАТЕЖЕЙ</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/Бакаляр-факторизация')">Бакаляр
                            факторизация</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/Муравьиный-алгоритм/')">Муравьиный
                            алгоритм</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/устный-счет/')">устный счет</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/ГЕНЕРАЦИЯ БОЛЬШИХ ПРОСТЫХ ЧИСЕЛ/')">ГЕНЕРАЦИЯ
                            БОЛЬШИХ ПРОСТЫХ ЧИСЕЛ</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/spies/')">Шпионы</a></li>
                    <li><a href="#"
                           onclick="changeSrc('modules/client/forDownload/Биометрическая идентификация личности по голосу')">Биометрическая
                            идентификация личности по голосу</a></li>
                </ul>
            </li>
            <li><a href="#">Контакты</a>
            </li>
        </ul>
    </nav>
    <!-- menu with modules-->
</div>
<div id="content">
    <!-- content container-->
    <iframe src="intro.html">Требуется поддержка iframe</iframe>

</div>
<div class="footer">
    EduModules &#169; 2016
</div>

</body>
</html>
