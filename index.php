<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>test</title>
    <meta name='viewport' content='initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
    <meta name='viewport' content='width=device-width, user-scalable=no' />
    <script>
    <?php

    $path = 'c:/dd/deploy_area/client';
    // $path = 'c:/xampp/htdocs/client';

    echo file_get_contents($path.'/vanilla.js');
    echo file_get_contents($path.'/util.js');

     ?>
     </script>


     <style>
     <?php

     echo file_get_contents($path.'/style/underpost.css');

      ?>
     </style>

     <style>

     .input-txt {

       width: 80%;
       font-size: 14px;
       background: white;
       color: black;
       margin: auto;
       padding: 5px;

     }

     ::selection {

        color: black;
        background: #dfbb5f;

      }

     .button-send {

       background: #d59507;
       width: 200px;
       text-align: center;
       cursor: pointer;
       margin: auto;
       padding: 10px;

     }

     .button-send:hover {

       background: #7a5709;

     }

     .c-global {

       background: #e3cb2c;
       min-height: 400px;

     }

     ::placeholder {

        color: black;
        opacity: 1; /* Firefox */

      }

      .txt-msj {

        height: 200px;
        max-width: 80%;
        min-width: 80%;
        font-family: arial;
        padding: 5px;
        font-size: 14px;
        margin: auto;

      }

     </style>

  </head>
  <body>
    <script type="text/javascript">
    (function(){

      console.log('home init');

      s('body').style.overflowY = 'auto';

      let w_column = 33.3;

      append('body', `

      <br>

      <br>

      <div class='in' style='text-align: center; font-weight: bold; font-size: 16px;'>

          GESTOR DE NOTAS v1.0

      </div>

      <br>

      <div class='fl' style='width: 90%; margin: auto;'>

        <div class='in fll c1 c-global' style='width: `+w_column+`%;'>

          <br>

          <input
            type='text'
            class='in input-txt'
            spellcheck='false'
            autocomplete='new-password'
            placeholder=' Ingrese Titulo'
            value=''
           />

           <br>

           <textarea class='in txt-msj' placeholder=' Ingrese Una Nota'></textarea>

           <br>

           <div class='in button-send'>

             ENVIAR

           </div>

        </div>

        <div class='in fll c2 c-global' style='width: `+w_column+`%;'>



        </div>

        <div class='in fll c3 c-global' style='width: `+w_column+`%;'>



        </div>

      </div>

      <br>

      <br>

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



        s('.input-txt').value = '';

      };



    }());

    </script>
  </body>

</html>
