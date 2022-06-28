

<!-- <div class="container"> -->
    <?php

    $dados = buscaDados("SELECT *  FROM linguas;");
    $titulo = buscaDado("SELECT * FROM menu;");


    ?>

    <div>
        <h2  class="text-danger" >
        <?php
            echo $titulo['titulo5'];
            ?>
        </h2>
        <br>
    </div>
    <div class="formacao">

        <table style=" width:100%;  ">
            <tr class="bg-danger" style="color: white;">
               
         <?php
        //  print_r($dados);
           
           if (count($dados) > 0) 
           {
               for ($i = 0; $i < 1; $i++) {


                   foreach ($dados[$i] as $k => $v) {
                       if ($k != "id") {
                        ?> <th style = "text-align: center;"> <?php echo  $k; ?> </th> <?php
                       }
                   } 
                
               }
           } 
           ?>


            </tr>

            <?php
           
            if (count($dados) > 0) 
            {
                for ($i = 0; $i < count($dados); $i++) {
                    echo "<tr>";

                    foreach ($dados[$i] as $k => $v) {
                        if ($k != "id") {
                            ?> <td style = "text-align: center;"> <?php echo  $v; ?> </td> <?php
                        }
                    } ?>

                   
            <?php
                    echo "</tr>";
                }
            } 
            ?>



        </table>

        <br> <hr id="link6" <?php  if ($hidel==0) {?>
    style="color: black;"
<?php } else {?>
    style="color: white;"    
<?php } ?>
><br><br>
    </div>
<!-- </div> -->