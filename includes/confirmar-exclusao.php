<main>
    <section>
        
    </section>

    <h2 class="mt-3">Excluir Vaga</h2>

    <form method="post">
        <div class="form-group">
            <p>Você deseja realmente excluir a vaga <strong><?=$obVaga->titulo?></strong>?</p>
        </div>
        
        <div class="form-group mt-3">
            <a href="index.php"><button type="button" class="btn btn-success">Cancelar</button></a>
            <input type="submit" name="excluir" value="Excluir" class="btn btn-danger">
        </div>
    </form>
</main>