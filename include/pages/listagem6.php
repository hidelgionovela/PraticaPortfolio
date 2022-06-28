<!-- <div class="container"> -->
<?php

$dados = buscaEspecial("SELECT * FROM habilidades;");
$titulo = buscaDado("SELECT * FROM menu;");

?>

<div>
  <h2 class="text-danger">
    <?php
    echo $titulo['titulo6'];
    ?>
  </h2>
  <br>
</div>
<center>

  <table style=" width:100%;">

    <?php

    if (count($dados) > 0) {

      for ($i = 0; $i < 1; $i++) {
        echo "<tr>";

        foreach ($dados[$i] as $k => $v) {
          if ($k != "id") {

    ?><th rowspan="<?php echo count($dados) + 1 ?>" style="text-align: center;" class="text-danger">
              <?php echo $k; ?> </th> <?php
                                    }
                                  }
                                }

                                for ($i = 0; $i < count($dados); $i++) {
                                  echo "<tr>";

                                  foreach ($dados[$i] as $k => $v) {
                                    if ($k != "id") {

                                      echo "<td>" . $v . "</td>";
                                    }
                                  }



                                      ?>


    <?php
                                  echo "</tr>";
                                }
                              }
    ?>

  </table>

</center>

<br>
<hr id="link7" <?php if ($hidel == 0) { ?> style="color: black;" <?php } else { ?> style="color: white;" <?php } ?>><br><br><br>
<!-- </div> -->