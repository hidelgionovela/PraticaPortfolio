<br>
<!-- <div class="container" style="position: relative;">   -->
    <?php
   
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

            <div class="col-3" >
                <img src="app/img/hidell.jpg" alt="hidelgio" style="width: 85%;  border-radius: 9px;" class="hidell">
            </div>

            <div class="col-9"  style="position:relative;">
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
    <br><br><hr style="color:aliceblue ;"><br><br>
<!-- </div> -->
