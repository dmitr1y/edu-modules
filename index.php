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
            <!-- menu with modules-->
            <ul class="menuPoint">
                <li class="menuLi"><a href="#" onclick="changeSrc('modules/client/StrassenVizi/start.html')">StrassenVizi (js)</a></li>
                <li class="menuLi"><a href="#" onclick="changeSrc('tmp.php?pageNumber=2')">test</a></li>
                <li class="menuLi"><a href="#" onclick="changeSrc('modules/client/ProtocolVisualizer/ProtocolVisualizer.html')">Protocol Visualizer (java)</a></li>
                <li class="menuLi"><a href="#" onclick="changeSrc('modules/client/KIO.files/KIO_index.html')">KIO (flash)</a></li>
                <li class="menuLi"><a href="#" onclick="changeSrc('modules/client/wisetask_linux/')">wisetask (java)</a></li>
              <!--  <li class="menuLi"><a href="#" onclick="changeSrc('modules/client/')">KIO</a></li>
                <li class="menuLi"><a href="#" onclick="changeSrc('modules/client/')">KIO</a></li>-->
                <li class="menuLi"><a href="#" onclick="changeSrc('http://localhost:8081/')">discrete-eltech (node js)</a></li>
                <li class="menuLi">item</li>
            </ul>
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
