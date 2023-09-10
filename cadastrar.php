<?php 
    require('vendor/autoload.php');

    define('TITLE', 'Cadastrar Vaga');

    use \App\Entity\Vaga;

    $obVaga = new Vaga;

    // validação do post
    if(isset($_POST['titulo'], $_POST['descricao'], $_POST['status'])){
        $obVaga->titulo = $_POST['titulo'];
        $obVaga->descricao = $_POST['descricao'];
        $obVaga->status = $_POST['status'];

        $obVaga->cadastrar();

        header('Location: index.php?status=success');
        exit;
    }

    include('includes/header.php');
    include('includes/formulario.php');
    include('includes/footer.php');