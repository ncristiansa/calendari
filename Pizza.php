<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <h3>Tu pedido</h3>
    <form method="post">
      <!-- ingredientes[] es nuestro Array donde añadiremos los ingredientes obviamente.-->
      <input type="checkbox" value="Masa" name="masa"><label>Masa</label><br>
      <input type="checkbox" value="Oregano" name="oregano"><label>Oregano</label><br>
      <input type="checkbox" value="Tomate" name="tomate"><label>Tomate</label><br>
      <input type="checkbox" value="Bacon" name="bacon"><label>Bacon</label><br>
      <input type="checkbox" value="Queso" name="queso"><label>Queso</label><br>
      <input type="checkbox" value="Pollo" name="pollo"><label>Pollo</label><br>
      <?php
        #Variables.
        #funciones:
          #isset -> Determina si una variable está definida y no es NULL.
          #is_array -> Comprueba si un valor existe en un array.
          #count -> cuenta el numero de elementos que contiene X.
        $contador= 0;
        if(isset($_POST['enviar'])){
          if(!isset($_POST["masa"]) || !isset($_POST["oregano"])){
            echo"Te falta ingredientes";
          }
          else{
            $contador=1;
            if(isset($_POST["tomate"])){
              $contador=$contador+0.5;
            }
            if(isset($_POST["bacon"])){
              $contador=$contador+0.5;
            }
            if(isset($_POST["queso"])){
              $contador=$contador+0.5;
            }
            if(isset($_POST["pollo"])){
              $contador=$contador+0.5;
            }
          }

        }
        else{
          echo"Selecciona los ingredientes.";
        }
        echo"<br>";
        echo"<input type='submit' name='enviar' value='Enviar'/>";
        echo"<br>";
        echo"Total a pagar: $contador";
        echo"<br>";
      ?>
    </form>
  </body>
</html>
