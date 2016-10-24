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
            <div class = "container_form-signin">
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
               
                $result = mysqli_query($link,"SELECT * FROM `userTable` WHERE `userLogin` = `admin`");
//              print  $r = mysqli_fetch_array($result);

//                $name = $r['userLogin'];
              // print $name;
                
                ?>
                <form class = "form-signin" role = "form" 
                      action = "/index.php" method = "post">
                    <h4 class = "form-signin-heading"></h4>
                    <input type = "text" class = "form-control" 
                           name = "username" placeholder = "username = admin" 
                           required autofocus></br>
                    <input type = "password" class = "form-control"
                           name = "password" placeholder = "password = admin" required>
                    <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
                            name = "login">Login</button>
                </form>
                Click here to clean <a href = "logout.php" tite = "Logout">Session.
            </div> <!-- /container -->
        </div>
<div class="menu">
    <nav id="primary_nav_wrap">
        <ul>
            <li class="current-menu-item"><a href="#">Home</a></li>
                <ul>
                    <li><a href="#">Sub Menu 1</a></li>
                    <li><a href="#">Sub Menu 3</a></li>
                    <li><a href="#">Sub Menu 4</a></li>
                    <li><a href="#">Sub Menu 5</a></li>
                </ul>
            </li>
            <li><a href="#">Онлайн модули</a>
                <ul>
                    <li><a href="#" onclick="changeSrc('modules/client/StrassenVizi/start.html')">[OK] StrassenVizi (js)</a></li>
                    <li><a href="#" onclick="changeSrc('tmp.php?pageNumber=2')">[OK] test</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/KIO.files/KIO_index.html')">[OK] KIO (flash)</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/alternative-exam-gh-pages/index.html')">[OK] поиск взаимно-однозначных соотношений</a></li>
                    <li><a href="#" onclick="changeSrc('modules/server/posts-lattice-master/public/index.php')">[ERR] замкнутые классы</a></li>
                    <li><a href="#" onclick="changeSrc('modules/server/discrete-eltech-master/public/')">[ERR] discrete-eltech (node js)</a></li>
                </ul>
            </li>
            <li><a href="#">Офлайн модули</a>
                <ul>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/ProtocolVisualizer/')">[download,WINDOWS only] Protocol Visualizer (java)</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/wisetask_linux/')">[download] wisetask (java)</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/AltExam-v1.0/')">[download] AltExam-v1.0</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/Ant-Algo/')">[download] Ant-Algo</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/BernsideTheorem/')">[download] BernsideTheorem</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/DM-alt_exam-2016-spies/')">[download] DM-alt_exam-2016-spies</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/lastV/')">[download] lastV</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/Machine_Experiment/')">[download] Machine_Experiment</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/PolynomFactorization/')">[download] PolynomFactorization</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/RSAsys/')">[download] RSAsys</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/Аддитивные-цепочки/')">[download] Аддитивные цепочки</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/АЛГОРИТМ-РАБОТЫ-ЭЛЕКТРОННЫХ-ПЛАТЕЖЕЙ/')">[download] АЛГОРИТМ РАБОТЫ ЭЛЕКТРОННЫХ ПЛАТЕЖЕЙ</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/Бакаляр-факторизация')">[download] Бакаляр факторизация</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/Муравьиный-алгоритм/')">[download] Муравьиный алгоритм</a></li>
                    <li><a href="#" onclick="changeSrc('modules/client/forDownload/устный-счет/')">[download] устный счет</a></li>
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
