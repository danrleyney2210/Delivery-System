<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/register.css') }}" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/8f9a0fa77a.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <div class="container">
        
        <div class="content first-content">
           
            <div class="second-column">
                <h3 class="title title-main-2">Cadastrar</h3>
                <p class="description description-2">Preencha todos os campos abaixo!</p>
                <form class="form" method="POST" action="">
                    <label class="label-input icon-modify" for="">
                        <i class="far fa-user icon-login"></i>
                        <input type="Name" placeholder="  Nome">
                    </label>

                    <label class="label-input icon-modify" for="">
                        <i class="far fa-user icon-login"></i>
                        <input type="Name" placeholder=" Usuário">
                    </label>
                  
                    <label class="label-input icon-modify" for="">
                        <i class="fas fa-key icon-login"></i>
                        <input type="password" placeholder="Senha">
                    </label>
                    <label class="label-input icon-modify" for="">
                        <i class="fas fa-key icon-login"></i>
                        <input type="password" placeholder="Confirmar senha">
                    </label>
              
                    
                    <button class="btn btn-second">Cadastrar</button>
                </form>
                <p class="description"><a href="index.html">Página inicial</a></p>
            </div><!--Second-colum-->
           
           
        </div><!--content First-content-->    
           
    </div><!--Container-->
    
</body>
</html>