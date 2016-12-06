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
    <script src="jquery-3.1.1.min.js"></script>
    <script src="header.js"></script>
    <script src="menu.js"></script>
    <title>Edu modules </title>
</head>
<body>


<div class="header">
    <div class="logo">EduModule</div>
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
</div>

<script type="text/javascript">


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
