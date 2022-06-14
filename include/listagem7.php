<!-- <div class="container"> -->
<?php

$dados = buscaDado("SELECT * FROM projetos;");
$titulo = buscaDado("SELECT * FROM menu;");

?>

<div>
    <center>
        <h2 class="text-danger" id="link7">
            <?php
            echo $titulo['titulo7'];
            ?>
        </h2>
    </center>
    <br>
</div>


<div class="row">

    <div class="col-5">
        <center>
            <h4 class="text-danger">1. Banco Digital</h4>
        </center><br>
        <img src="app/img/projecto1.1.png" alt="atm" style="width: 100%;">
        <p>Projecto de uma ATM Web(Banco Digital) feita em PHP e banco de dados MySql.</p>
        <br><br>
    </div>

    <div class="col-2">

    </div>

    <div class="col-5">
        <center>
            <h4 class="text-danger">2. Vagas para Devs</h4>
        </center><br>
        <img src="app/img/projecto5.png" alt="atm" style="width: 100%;">
        <p>Projecto de CRUD para uma empresa de recrutamento feito em Linguagem PHP e banco de dados MySql.</p>
    </div>

    <div class="col-5">
        <center>
            <h4 class="text-danger">3. Ciclo Vital</h4>
        </center><br>
        <img src="app/img/projecto3.1.png" alt="atm" style="width: 100%;">
        <p>Projecto de CRUD Para um centro de saude (Cliclo vital) feito em Linguagem C# e banco de dados SQL Server.</p>
    </div>

    <div class="col-2">

    </div>

    <div class="col-5">
        <center>
            <h4 class="text-danger">5. SameLevel Photography</h4>
        </center><br>
        <img src="app/img/projecto2.png" alt="atm" style="width: 100%;">
        <p>Projecto de Site Para um fotografo (SameLevel Photography) feito em HTML5 e CSS Sem base de dados</p>
    </div>

</div>

<br><br><br>
<hr style="color:aliceblue ;">
<div class="row">
    <?php
    $titulo = buscaDado("SELECT * FROM menu;");
    ?>
    <h3 style="text-align:center"> <?php echo $titulo['titulo9']; ?> </h3><br><br><br>
    <div class="col-5">
        <p style="text-align:center">Baixe aqui o Pdf do CV!</p>
        <p style="text-align:center"><a href="pdfCV.php"> <button type="button" class="btn btn-success">Baixar CV_PDF</button> </a> </p>
    </div>
    <div class="col-2"></div>
    <div class="col-5">
        <p style="text-align:center">Edite os dados do Site Aqui!</p>
        <p style="text-align:center" ;><a href="include/menu.php?id=<?php echo $id; ?>"> <button type="button" class="btn btn-primary">Editar Dados</button> </a> </p>
    </div>
</div>
<br><br><br>

</div>