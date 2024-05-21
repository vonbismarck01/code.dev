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

<?php
    if($_SERVER['REQUEST_METHOD']=="POST") {
        $email= $_POST['campoEmail'];
        $name= $_POST['campoNome'];
        $senha= $_POST['campoSenha'];
        $sobrenome= $_POST['campoSobrenome'];
        $confirmarsenha= $_POST['confirmarSenha'];
        
        //VALIDAÇÃO DE EMAIL
        if(empty ($email) ){
            $erroEmail= "Informe seu email";
        }else{
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $erroEmail= "Digite um email valido";
            }else{
                $erroEmail= "Nenhum";
            }
        }

        //VALIDAÇÃO DE NOME
        if(empty ($name)){
            $erroNome= "Informe seu nome";
        }else{
            if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                $erroNome= "Digite um nome valido";
            }else{
                $erroNome = "Nenhum";
                }
        }
        //VALIDAÇÃO DE SOBRENOME
        if(empty ($sobrenome)){
            $erroSobrenome= "Informe seu sobrenome";
        }else{
            if(!preg_match("/^[a-zA-Z-' ]*$/",$sobrenome)){
                $erroSobrenome= "Digite um sobrenome valido";
            }else{
                $erroSobrenome = "Nenhum";
                }
        }
        

        //VALIDAÇÃO DE SENHA
        if(empty($senha)  ){
                $erroSenha= "Informe uma senha";
        }else{
            if(strlen ($senha) < 6 ){
            $erroSenha= "digite sua senha maior de seis digitos";
            }else{
                $erroSenha="Nenhum";
            }
        }
        //VALIDAÇÃO DE CONFIRMAR SENHA
        if(empty($confirmarSenha)){
            $erroConfirmarSenha= "Confirme sua senha";
        }else{
        
            if($repitaSuaSenha != $senha){
                $erroRepitaSenha ="As senhas precisam ser iguais";
            }else{ 
                $ErroRepitaSenha= "Nenhum";
            }      
            
            
        }   

        if($erroEmail=="Nehum" && $erroNome=="nenhum" && $erroSobrenome=="Nenhum" && $erroSenha== "Nenhum" && $erroConfirmarSenha=="nenhum" ) {
            header('location: Obrigado.html');
            
        }
    }
?>


<div class="container">
    <div class="row">
        <div class="col">
            <form  method="post" novalidate>
                <h1>Faça o seu cadastro</h1>
                <br>
                <label for="exampleInputEmail1" class="form-label">Endereço de email <i class="mdi mdi-information-outline" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Informe seu email"></i> </label>
                <br>
                <input type="email" name="campoEmail" class="form-control <?php if(isset($erroEmail)){if($erroEmail != "Nenhum"){;echo "is-invalid";}}?>" id="campoEmail">
                <!-- <input type="email" name="campoEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
                <div class="invalid-feedback">
                    <br>
                    <?php
                      if(isset($erroEmail)){
                        if($erroEmail != "Nenhum"){;
                        echo $erroEmail ;
                      }
                      }
                    ?>
                </div>
                <br>
                <label for="exampleInputEmail1" class="form-label">Nome<i class="mdi mdi-information-outline" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Digitre seu primeiro nome"></i> </label>
                <input type="nome" name="campoNome" class="form-control <?php if(isset($erroNome)){if($erroNome != "Nenhum"){;echo "is-invalid";}}?>" id="campoNome">
                <!-- <input type="nome" name="campoNome" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">-->
                <div class="invalid-feedback">
               <br>
                <?php
                      if(isset($erroNome)){
                        if($erroNome != "Nenhum"){;
                        echo $erroNome;
                      }
                      }
               ?>
                 </div>
                <br>
                <label for="exampleInputPassword1" class="form-label">Sobrenome <i class="mdi mdi-information-outline" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Digite o seu segundo nome"></i> </label>
                <input type="text" name="campoSobrenome" class="form-control  <?php if(isset($erroSobrenome)){if($erroSobrenome != "Nenhum"){;echo "is-invalid";} }?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div class="invalid-feedback">
            
                <?php
                      if(isset($erroSobrenome)){
                        if($erroSobrenome != "Nenhum"){;
                        echo $erroSobrenome;
                      }
                      }
                      ?>
                 </div>
              
                <br>

                <!-- CAMPO SENHA DO FORMULARIO -->
                <label for="exampleInputPassword1" class="form-label"> Senha <i class="mdi mdi-information-outline" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Sua senha"></i>  </label>
                <input type="password" name="campoSenha" class="form-control   <?php if(isset($erroSenha)){if($erroSenha != "Nenhum"){;echo "is-invalid"; }}?>" id="exampleInputPassword1"> 
                <div class="invalid-feedback">
                  
                  <?php
                      if(isset($erroSenha)){
                        if($erroSenha != "Nenhum"){;
                        echo $erroSenha;
                      }
                      }
                      ?>
                </div>
                
                <label for="exampleInputPassword1" class="form-label">Confirmar senha <i class="mdi mdi-information-outline" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Repita sua senha"></i> </label>
                <input type="password" name="confirmarSenha" class="form-control " id="exampleInputPassword1"> 
                <div class="invalid-feedback">
                  Please choose a username.
                  <?php
                      if(isset($errocConfirmarSenha)){
                        if($erroConfirmarSenha != "Nenhum"){;
                        echo $erroConfirmarSenha;
                      }
                      }
                      ?>
                   </div>
                <br>
                <div class="mb-3 form-check">
                <br>
                <input type="checkbox" class="form-check-input is-invalid" id="exampleCheck1">
                <label class="form-check-label " for="exampleCheck1">Não sou um robo</label> <br>
                <br>

                <button type="submit"  class="btn btn-primary">Enviar &nbsp<i class="mdi mdi-send"></i> <br>

            </form>
        </div>
    </div>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))</script>

</body>
</html>