<br>

<!-- listagem da autobiografia -->
<?php
// buscando os dados da base de dados 
$dados = buscaDado("SELECT * FROM autobi;");

?>

<div>

    <h2 class="text-danger" id="link1">
        <?php
        echo $dados['titulo'];
        ?>
    </h2>

    <br>
    <div class="row">

        <div class="col-3">
            <img src="app/img/hidell.jpg" alt="hidelgio" style="width: 85%;  border-radius: 9px;" class="hidell">
        </div>

        <div class="col-9" style="position:relative;">
            <h3 class="text-danger">
                <?php
                echo $dados['subTitulo'];
                ?>
            </h3>
            <p style="text-align:justify ;">
                <?php
                echo $dados['descricao'];
                ?>
            </p>
            <?php
            $id = $dados['id'];
            ?>

        </div>

    </div>

</div>
<br><br><br>
 <hr id="link2" <?php  if ($hidel==0) {?>
    style="color: black;"
<?php } else {?>
    style="color: white;"    
<?php } ?>
> <br><br>
<!-- </div> -->