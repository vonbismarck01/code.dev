<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css" rel="stylesheet">

</head>
<body>



<div class="container">
    <div class="row">
        <div class="col">
            <form action="" method="post">
                <h1>Faça o seu cadastro</h1>
                <br>
                <label for="exampleInputEmail1" class="form-label">Endereço de email <i class="mdi mdi-information-outline" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Tooltip on right"></i> </label>
                <br>
                <input type="email" name="campoEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
                <br>
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <br>
                <input type="email" name="campoEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <br>
                <label for="exampleInputPassword1" class="form-label">Sobrenome</label>
                <input type="password" name="campoSenha" class="form-control" id="exampleInputPassword1">
                <label for="exampleInputPassword1" class="form-label">Telefone</label>
                <input type="password" name="campoSenha" class="form-control" id="exampleInputPassword1">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <div id="emailHelp" class="form-text">Nunca compartilharemos seu e-mail com mais ninguém.</div>
                <input type="password" name="campoSenha" class="form-control" id="exampleInputPassword1">
                <label for="exampleInputPassword1" class="form-label">Confirmar senha</label>
                <input type="password" name="campoSenha" class="form-control" id="exampleInputPassword1">
                <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Não sou um robo</label> <br>
                ,<br>

                <button type="submit"  class="btn btn-primary">enviar</button> <br>

            </form>
        </div>
    </div>
</div>




<?php
if(isset($_POST['campoEmail'])) {
    $name= $_POST['campoEmail'];
    $senha= $_POST['campoSenha'];
    if( $name == "bismarckroyalvkb@gmail.com" && $senha == 123){
        //echo"certo";
       header('location:receber_post.php');
    }else{
        echo "errado";
    }
}

?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" >

  
</body>
</html>