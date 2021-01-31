<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>test</title>
    <meta name='viewport' content='initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
    <meta name='viewport' content='width=device-width, user-scalable=no' />
    <script>
    <?php

    echo file_get_contents('c:/dd/deploy_area/client/vanilla.js');
    echo file_get_contents('c:/dd/deploy_area/client/util.js');

     ?>
     </script>


     <style>
     <?php

     echo file_get_contents('c:/dd/deploy_area/client/style/estandar.css');

      ?>
     </style>

  </head>
  <body>
    <script type="text/javascript">
    (function(){

      console.log('home init');


      let w_column = 31;

      append('body', `


      <div class='fl' style='width: 90%; margin: auto;'>

        <div class='in fll c1' style='width: `+w_column+`%; padding: 10px; background: blue; font-size: 20px; color: white;'>

          A

        </div>

        <div class='in fll c2' style='width: `+w_column+`%; padding: 10px; background: red; font-size: 20px; color: white;'>

         B

        </div>

        <div class='in fll c3' style='width: `+w_column+`%; padding: 10px; background: green; font-size: 20px; color: white;'>

         C

        </div>

      </div>

      `);

      function rr(){

        if( (data.lastW!=s('body').clientWidth) || (data.lastH!=s('body').clientHeight) ){

          data.lastW=s('body').clientWidth;
          data.lastH=s('body').clientHeight;

          if(data.lastW>500){

            data.movil = false;

          }else{

            data.movil = true;

          }

          console.log('movil -> '+data.movil);

          //--------------------------------------------------------------------------
          //--------------------------------------------------------------------------


          if(data.lastW>=980){


            s('.c1').style.width = w_column+'%';
            s('.c2').style.width = w_column+'%';
            s('.c3').style.width = w_column+'%';


          }else{

            s('.c1').style.width = '100%';
            s('.c2').style.width = '100%';
            s('.c3').style.width = '100%';

          }



          //--------------------------------------------------------------------------
          //--------------------------------------------------------------------------

        }

      }

      var data = {

        movil: false,
        lastH: null,
        lastW: null

      };
      rr();
      setInterval(function(e){
        rr();
      }, 100);



    }());

    </script>
  </body>

</html>
