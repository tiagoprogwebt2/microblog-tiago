<?php 
require "includes/cabecalho.php"; 
require "includes/funcoes-noticias.php"; 
$listaDeNoticias = lerTodasNoticias($conexao);
?>  

<div class="row my-1 mx-md-n1">

<?php foreach($listaDeNoticias as $noticia) { ?>
    <!-- INÍCIO Card -->
		<div class="col-md-6 my-1 px-md-1">
            <article class="card shadow-sm h-100">
                <a href="noticia.php" class="card-link">
                    <img src="imagens/abstrato.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h3 class="fs-4 card-title">Título da notícia...</h3>
                        <p class="card-text">Resumo da notícia.</p>
                    </div>
                </a>
            </article>
		</div>
		<!-- FIM Card -->
<?php } ?>
        
</div>        

<?php 
require "includes/rodape.php";
?>

