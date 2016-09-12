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
                    print('Не удалось соединиться : ' . mysql_error());
                } else {
                    print ('База подключена');
                }
               
                $result = mysqli_query($link,"SELECT * FROM `userTable` WHERE `userLogin` = `admin`");
              print  $r = mysqli_fetch_array($result);

                $name = $r['userLogin'];
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
        <div id="content">            
            <!-- content container-->
            <iframe src="intro.html">Требуется поддержка iframe</iframe>

        </div>

        <div class="menu">      
            <!-- menu with moduls-->
            <ul class="menuPoint">
                <li><a href="#" onclick="changeSrc('StrassenVizi/start.html')">StrassenVizi</a></li> 
                <li><a href="#" onclick="changeSrc('tmp.php?pageNumber=2')">test</a></li>
                <li><a href="#" onclick="changeSrc('ProtocolVisualizer/ProtocolVisualizer.html')">Protocol Visualizer</a></li>
                <li><a href="#" onclick="changeSrc('discrete-eltech-master/index.js')">discrete-eltech</a></li>
                <li>item</li>
            </ul>
        </div>
    </body>
</html>
