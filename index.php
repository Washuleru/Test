<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>test</title>
    <meta name='viewport' content='initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
    <meta name='viewport' content='width=device-width, user-scalable=no' />
    <script>
    <?php

    // $path = 'c:/dd/deploy_area/client';
    $path = 'c:/xampp/htdocs/client';

    echo file_get_contents($path.'/vanilla.js');
    echo file_get_contents($path.'/util.js');

     ?>
     </script>


     <style>
     <?php

     echo file_get_contents($path.'/style/estandar.css');

      ?>
     </style>

     <style>

     .input-txt {

       width: 250px;
       height: 40px;
       text-align: center;
       background: #dce357;
       color: black;

     }

     .button-send {

       background: #d59507;
       width: 200px;
       text-align: center;
       cursor: pointer;

     }

     .button-send:hover {

       background: #7a5709;

     }



     </style>

  </head>
  <body>
    <script type="text/javascript">
    (function(){

      console.log('home init');


      let w_column = 33.3;

      append('body', `


      <div class='fl' style='width: 90%; margin: auto;'>

        <div class='in fll c1' style='width: `+w_column+`%; background: blue; font-size: 20px; color: white;'>

          A

        </div>

        <div class='in fll c2' style='width: `+w_column+`%; background: red; font-size: 20px; color: white;'>

         B

        </div>

        <div class='in fll c3' style='width: `+w_column+`%; background: green; font-size: 20px; color: white;'>

         <input
           type='text'
           class='in input-txt'
           spellcheck='false'
           autocomplete='new-password'
           placeholder=' ingrese texto'
           value=''
          />

          <div class='inl'>

            <div class='in button-send' style='padding: 30px;'>

              ENVIAR


            </div>

          </div>

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


      s('.button-send').onclick = function(){


        htmls('.c1', `

          `+s('.input-txt').value+`

        `);

        s('.input-txt').value = '';

      };



    }());

    </script>
  </body>

</html>
