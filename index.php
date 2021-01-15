<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>test</title>
    <meta name='viewport' content='initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
    <meta name='viewport' content='width=device-width, user-scalable=no' />
    <script>
    <?php

    echo file_get_contents('c:/xampp/htdocs/client/vanilla.js');
    echo file_get_contents('c:/xampp/htdocs/client/util.js');

     ?>
     </script>


     <style>
     <?php

     echo file_get_contents('c:/xampp/htdocs/client/style/estandar.css');

      ?>
     </style>

  </head>
  <body>
    <script type="text/javascript">
    append('body', `
            Hola mundo


    `);

    </script>
  </body>

</html>
