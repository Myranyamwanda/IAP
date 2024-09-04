<!DOCTYPE html>
<html>
    <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>This is my first page</h1>
        <?php
         require "load.php";
         $ObjLayouts->heading();
         $ObjMenus->main_menu();
        ?>
    </body>
</html>