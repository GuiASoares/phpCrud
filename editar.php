<?php 
    require('vendor/autoload.php');

    define('TITLE', 'Editar Vaga');

    use \App\Entity\Vaga;

    // Validação do ID
    if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
        header('Location: index.php?status=error');
        exit;
    }

    // consulta a vaga
    $obVaga = Vaga::getVaga($_GET['id']);
    
    // validação de vaga
    if(!$obVaga instanceof Vaga){
        header('Location: index.php?status=error');
        exit;
    }

    if(isset($_POST['titulo'], $_POST['descricao'], $_POST['status'])){

        $obVaga->titulo = $_POST['titulo'];
        $obVaga->descricao = $_POST['descricao'];
        $obVaga->status = $_POST['status'];

        $obVaga->atualizar();

        header('Location: index.php?status=success');
        exit;
    }

    include('includes/header.php');
    include('includes/formulario.php');
    include('includes/footer.php');