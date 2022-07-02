<!-- listagem dos dados pessoais -->
<?php
// buscando os dados da base de dados
$dados = buscaEspecial("SELECT * FROM dadospessoais;");



?>

<div>
  <h2 class="text-danger">

  <!-- imprimindo os dados do array dados vindo da base de dados -->
  
    <?php
    for ($i = 0; $i < count($dados); $i++) {
      foreach ($dados[$i] as $k => $v) {
        if ($k == "titulo") {
    ?>
          <h2 class="text-danger">
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
    } ?>

  </table>
</center>
<br>
<hr id="link3" <?php  if ($hidel==0) {?>
    style="color: black;"
<?php } else {?>
    style="color: white;"    
<?php } ?>
><br><br>
<!-- </div> -->