<!DOCTYPE html>
<html lang="en">
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
                <input type="email" name="campoEmail" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
                <div class="invalid-feedback">
                    <php?
                    if(isset($erroEmail)){
                        if($erroEmail !== "nenhum")){
                            echo $erroEmail;
                        }
                    }
                    >
                   </div>
                <br>
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input type="nome" name="campoNome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <br>
                <label for="exampleInputPassword1" class="form-label">Sobrenome</label>
                <input type="text" name="campoSobrenome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <br>
                <label for="exampleInputPassword1" class="form-label"> Senha</label>
                <input type="password" name="campoSenha" class="form-control" id="exampleInputPassword1">
                <label for="exampleInputPassword1" class="form-label">Confirmar senha</label>
                <input type="password" name="confirmarSenha" class="form-control" id="exampleInputPassword1">
                <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Não sou um robo</label> <br>
                <br>

                <button type="submit"  class="btn btn-primary">enviar</button> <br>

            </form>
        </div>
    </div>
</div>

<?php
if($_SERVER['REQUEST_METHOD']=="POST") {
    $email= $_POST['campoEmail'];
    $name= $_POST['campoNome'];
    $senha= $_POST['campoSenha'];
    $sobrenome= $_POST['campoSobrenome'];
    $confirmarsenha= $_POST['confirmarsenha'];
    
    if(empty ($email) ){
        $erroEmail= "Informe seu email";
    }else{
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $erroEmail= "Digite um email valido";
        }
        else{
            $erroEmail ="Nenhum";
        }
    }
    if(empty ($name)){
        $erroNome= "Informe seu nome";
    }else{
    }

        if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
          $erroNome= "Digite um nome valido";
    }else{
        $erroNome = "Nenhum";
        }

    if(empty($senha)  ){
            $erroSenha= "Informe uma senha";
    }else{
        if(strlen ($senha) < 6 ){
        $erroSenha= "digite sua senha maior de seis digitos";
        }else{
            $erroSenha="Nenhum";
        }
    }
    if(empty($confirmarSenha)){
        $erroConfirmarSenha= "Confirme sua senha";
    }else{
    
        if($repitaSuaSenha != $senha){
            $erroRepitaSenha ="As senhas precisam ser iguais";
        }else{ 
            $ErroRepitaSenha= "Nenhum";
      }      
   if($erroEmail=="Nehum" && $erroNome=="nenhum" && $erroSobrenome=="Nenhum" && $erroSenha== "Nenhum" && $erroConfirmarSenha=="nenhum" ) {
    header(' location: Onrigado.html');

    }
    
}   
}

?>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>