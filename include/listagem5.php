

<!-- <div class="container"> -->
    <?php

    $dados = buscaDados("SELECT *  FROM linguas;");
    $titulo = buscaDado("SELECT * FROM menu;");


    ?>

    <div>
        <h2  class="text-danger" id="link5">
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

        <br><hr style="color:aliceblue ;"><br><br>
    </div>
<!-- </div> -->