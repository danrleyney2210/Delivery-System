<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/8f9a0fa77a.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <img src="img/logo.png" alt="">
                <h2 class="title title-main">Delivery System</h2>
                <p class="description description-main">Para conecta-se conosco</p> 
                
            </div><!--First-colum-->
            <div class="second-column">
                <h2 class="title title-main-2">Sejam bem vindos!</h2>
                <div class="list-media">
                    <ul class="list-social-media">
                        <a class="link-social" href="#">
                            <li class="item-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social" href="#">
                            <li class="item-media">
                                <i class="fab fa-linkedin"></i>
                            </li>
                        </a>
                        <a class="link-social" href="#">
                            <li class="item-media">
                                <i class="fab fa-facebook-square"></i>
                            </li>
                         </a>
                    </ul>
                </div><!--List-Media-->
                <p class="description description-2">Ou use seu email para entrar</p>
                <form class="form" method="POST" action="">
                    <label class="label-input icon-modify" for="">
                        <i class="far fa-user icon-login"></i>
                        <input type="Name" placeholder="  Nome">
                    </label>
                  
                    <label class="label-input icon-modify" for="">
                        <i class="fas fa-key icon-login"></i>
                        <input type="password" placeholder="  Password">
                    </label>
                    <p class="description description-2">Ainda não é inscrito?  <a href="{{route('register')}}"> Cadastre-se</a></p>
                    
                    <button class="btn btn-second">Entrar</button>
                </form>
                
            </div><!--Second-colum-->
           
           
        </div><!--content First-content-->    
           
    </div><!--Container-->
    
</body>
</html>