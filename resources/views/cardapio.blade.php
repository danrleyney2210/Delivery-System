<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('cardapio.css')}}">
   

    <title>Página</title>
</head>
<body>
    <div class="header-top">
        <div class="content-body">
            <header>
                <div class="icon-button">
                    <a href="{{route('index')}}">
                    <img class="btn-icon" src="{{asset('image/back.svg')}}" alt="">
                    </a>
                    <h2>R$ 00,00</h2>
                    <img class="btn-icon" src="{{asset('image/carrinho.svg')}}" alt="">
                </div>
               
            </header>
 
        </div>
    </div>
    <section class="cardapio">
        <br>
        <h3 class="text-title">Hamburgues</h3>
        <div class="content-body">
            <div class="item-cardapio">
                <div class="image-item">
                    <img class="img-item" src="{{asset('image/item02.jpg')}}" alt="">
                </div>
                <div class="description-item">
                    <h3>Title 01</h3>
                    <p class="description-p">Descrição, pão, molho com tomate, 3 carnes,Descrição, pão, molho com tomate, 3 carnes,3 carnes,Descrição, pão, molho com tomate, 3 carnes </p>
                    <select   name="format" id="format">
                        <option selected disabled>Quantidade</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                    </select>
                    <button class="btn-item">Adcionar</button>
                </div>
            </div>
          
            <div class="item-cardapio">
                <div class="image-item">
                    <img class="img-item" src="{{asset('image/item01.jpg')}}" alt="">
                </div>
                <div class="description-item">
                    <h3>Title 01</h3>
                    <p class="description-p">   3 carnes,3 carnes,Descrição, pão, molho com tomate, 3 carnes </p>

                    <select   name="format" id="format">
                        <option selected disabled>Quantidade</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                    </select>
                    <button class="btn-item">Adcionar</button>
                </div>
            </div>
    </section>  
    <section class="cardapio">
        <h3 class="text-title">Combos</h3>
        <div class="content-body">
            <div class="item-cardapio">
                <div class="image-item">
                </div>
                <div class="description-item">
                    <h3>Title 01</h3>
                    <p class="description-p">Descrição, pão, molho com tomate, 3 carnes,Descrição, pão, molho com tomate, 3 carnes </p>
                    <select   name="format" id="format">
                        <option selected disabled>Quantidade</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                    </select>
                    <button class="btn-item">Adcionar</button>
                </div>
            </div>
          
            <div class="item-cardapio">
                <div class="image-item">
                </div>
                <div class="description-item">
                    <h3>Title 01</h3>
                    <p class="description-p">Descrição, pão, molho com tomate, 3 carnes,Descrição, pão, molho com tomate, 3 carnes </p>
                    <select   name="format" id="format">
                        <option selected disabled>Quantidade</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                    </select>
                    <button class="btn-item">Adcionar</button>
                </div>
            </div>
    </section>  

    <section class="cardapio">
        <h3 class="text-title">Bebidas</h3>
        <div class="content-body">
            <div class="item-cardapio">
                <div class="image-item">
                </div>
                <div class="description-item">
                    <h3>Title 01</h3>
                    <p class="description-p">Descrição, pão, molho com tomate, 3 carnes,Descrição, pão, molho com tomate, 3 carnes </p>
                    <select   name="format" id="format">
                        <option selected disabled>Quantidade</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                    </select>
                    <button class="btn-item">Adcionar</button>
                </div>
            </div>
          
            <div class="item-cardapio">
                <div class="image-item">
                </div>
                <div class="description-item">
                    <h3>Title 01</h3>
                    <p class="description-p">Descrição, pão, molho com tomate, 3 carnes,Descrição, pão, molho com tomate, 3 carnes </p>
                    <select   name="format" id="format">
                        <option selected disabled>Quantidade</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                    </select>
                    <button class="btn-item">Adcionar</button>
                </div>
            </div>
    </section>  
    

</body>
</html>