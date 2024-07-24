<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">

    <title> SISTEMA DE CADASTRO </title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">

      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="?page=novo">Novo usuário</a>
        <a class="nav-link" href="?page=listar">Listar usuários</a>
      </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col mt-5">
    <?php
        include("config.php");
        switch(@$_REQUEST["page"]){
            case "novo":
                include("novo-usuario.php");
            break;
            case "listar":
                include("listar-usuario.php");
            break;
            case 'salvar':
                include("salvar-usuario.php");
            break;
            case "editar":
                include("editar-usuario.php");
            break;
        default:
            print "<h1>Bem vindos! </h1>";
    }
?>



</div>
   
   
   
   
   
<script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>