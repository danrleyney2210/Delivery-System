<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('pedidos.css')}}">
   

    <title>Pedidos</title>
</head>
<body>
    <div class="header-top">
        <div class="content-body">
            <header>
                <div class="icon-button">
                    <a href="{{route('cardapio')}}">
                        <img class="btn-icon" src="{{asset('image/back.svg')}}" alt="">
                    </a>
                    <h2 class="title-header">SEU CARRINHO</h2>
                    <a href="{{route('index')}}">
                        <img class="btn-icon" src="{{asset('image/home.svg')}}" alt="">
                    </a>

                </div>
            </header>
        </div>
    </div>  

    <section class="pedidos">
        <div class="content-body">
            <div class="content-pedidos">

                <h3 class="title-pedidos">Seus pedidos</h3>
                <table class="table-pedidos">
                    <thead>
                        <tr>
                            <th>Quantidade</th>
                            <th>Produto</th>
                            <th>Valor</th>
                            <th class="hour">Data</th>
                            <th class="hour">Horário</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>X-Tudo</td>
                            <td>R$17,00</td>
                            <td class="hour" >17-010-20</td>
                            <td class="hour">21:30</td>
                            <td>
                                <img class="table-icon" src="{{asset('image/trash.svg')}}"  alt="">
                            </td>
                         </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
   
    <section class="dados-cliente">
        <div class="content-body">
            <div class="form-client">
                <h3 class="title-pedidos">Preencha abaixo para finalizar</h3>
                <form action="" method="" >
                    
                    <input class="controls" type="text" name="nome" placeholder="Digite seu nome">
                    <input class="controls" type="text" name="nome" placeholder="CPF">
                    <input class="controls" type="text" name="nome" placeholder="Número celular">
                    <input class="controls" type="text" name="nome" placeholder="CEP">
                    <input class="controls" type="text" name="nome" placeholder="Cidade">
                    <input class="controls" type="text" name="nome" placeholder="Rua ">
                    <input class="controls" type="text" name="nome" placeholder="Número da Casa ">
                    <hr><br>
                    <input  class="checkbox" name="" value="entrega" type="checkbox" >  Entrega     
                    <input  class="checkbox"  name="" value="retirada" type="checkbox">  Retirada
               
                    <textarea name="" id="" cols="30" rows="10" placeholder="Alguma observação quanto ao seu pedido ou ponto de referência da sua localização?"></textarea>
                    <button class="btn-finish">Finalizar</button>
                </form>
            </div>
        </div>
    </section>
    

</body>
</html>