<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class = "mt-3">Cadastrar Vaga</h2>

    <form method="post" action="">
        <div class="form-group">
            <label for="">Titulo</label>
            <input type="text" class="form-control" name="titulo">
        </div>

        <div class="form-group">
            <label for="">Descrição</label>
            <textarea type="text" class="form-control" name="descricao" rows="5"></textarea>
        </div>

        <div class="form-group">
            <label for="">Status</label>



            <div>

                <div class="form-check form-check-inline">
                    <label for="" class="form-control">
                        <input type="radio" name="activo" value="s" checked> Activo
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <label for="" class="form-control">
                        <input type="radio" name="inactivo" value="n"> Inactivo
                    </label>
                </div>

            </div>

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success" class = "mt-3"> Enviar</button>
        </div>

    </form>

</main>