<?php 
    require('vendor/autoload.php');

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

    if(isset($_POST['excluir'])){

        $obVaga->excluir();

        header('Location: index.php?status=success');
        exit;
    }

    include('includes/header.php');
    include('includes/confirmar-exclusao.php');
    include('includes/footer.php');