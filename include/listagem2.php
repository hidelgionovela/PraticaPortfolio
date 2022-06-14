<!-- <div class="container"> -->
  <?php

  $dados = buscaEspecial("SELECT * FROM dadospessoais;");
  


  ?>

  <div>
    <h2 class="text-danger">
      <?php
      for ($i = 0; $i < count($dados); $i++) {
        foreach ($dados[$i] as $k => $v) {
          if ($k == "titulo") {
      ?>
            <h2 class="text-danger" id="link2">
              <?php echo $v; ?>
            </h2>
      <?php
          }
        }
      }
      ?>
    </h2>
    <br>
  </div>

  <center>
    <table style=" width:100%;">

      <?php

      if (count($dados) > 0) {
        for ($i = 0; $i < count($dados); $i++) {

          foreach ($dados[$i] as $k => $v) {
            if ($k != "id" & $k != "titulo") {
              echo "<tr>";
      ?>
              <th class="text-danger" style="text-align:right;">
                <?php echo $k, " :"; ?>
              </th>
      <?php
              echo "<td>" . $v . "</td>";
              echo "</tr>";
            }
          }
        }
      }?>

    </table>
  </center>
  <br><hr style="color:aliceblue ;"><br><br>
<!-- </div> -->