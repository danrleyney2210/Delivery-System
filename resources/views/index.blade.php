<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('global.css')}}">
   

    <title>Página</title>
</head>
<body>
    <div class="header-top">
        <div class="content-body">
            <header>
                <h2 class="title-delivery">App Delivery2</h2>
                <p class="text-delivery">Slogam do seu estabelecimento aqui!</p>
            </header>
        </div>
    </div>  
    <section class="menu">
        <div class="content-body">
            <h5>Faça seu pedido!</h5>
        </div>
        <div class="content-body">
            <div class="menu-item ">
                <a class="link-menu" href="{{route('cardapio')}}">
                    <img class="icon-menu" src="{{asset('image/burger.svg')}}" alt="">
                    <p class="text-menu">Hamburguer</p>
                 </a>
            </div>
            <div class="menu-item ">
                <img class="icon-menu" src="{{asset('image/combo.svg')}}" alt="">
                <p class="text-menu">Combos</p>
            </div>
            <div class="menu-item ">
                <img class="icon-menu" src="{{asset('image/bebidas.svg')}}" alt="">
                <p class="text-menu">Bebidas</p>
            </div>
            <div  class="menu-item ">
                <a class="link-menu" href="{{route('pedidos')}}">
                    <img class="icon-menu" src="{{asset('image/comprar.svg')}}" alt="">
                    <p class="text-menu">Pedidos</p>
            </a> 
            </div>
        </div>
    </section>
    
    <footer>
        <div class="content-body">
            <p class="text-footer">Todos os Direitos reservados para @Dev-2020</p>
        </div>
    </footer>

</body>
</html>