<?php
require "includes/cabecalho.php"; 
require "includes/funcoes-noticias.php"; 

// Capturando via URL/GET o que foi digitado no campo de busca
$termoDigitado = $_GET['busca'];

// Carregando os dados da busca no banco de dados pelo termo digitado
$dadosDaBusca = buscar($conexao, $termoDigitado);
var_dump($dadosDaBusca);
?>

<div class="row bg-white rounded shadow my-1 py-4">
    <h2 class="col-12 fw-light">
        Você procurou por 
        <span class="badge bg-dark"> <?=$termoDigitado?> </span> e
        obteve <span class="badge bg-info">X</span> resultados
    </h2>
    
    <div class="col-12 my-1">

        <article class="card">
            <div class="card-body">
                <h3 class="fs-4 card-title fw-light">Título da notícia...</h3>
                <p class="card-text">
                    <time>Data da notícia</time> - 
                    Resumo da notícia.
                </p>
                
                <a href="noticia.php" class="btn btn-primary btn-sm">Continuar lendo</a>
            </div>
        </article>

    </div>

</div>     

<?php 
require "includes/rodape.php";
?>

