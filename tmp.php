<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php print $_GET["pageName"];?></title>
    </head>
    <body>
        <h1>
        <?php
        // put your code here
        print 'received param: ';
        print $_GET["pageNumber"];
        ?>
        </h1>
    </body>
</html>
