<?php 
/*Template Name: Area de Servico*/
?>

<?php get_header(); ?>
<div class="fundo-topo-amb">
	<div class="container interna">
		<h1><?php the_title(); ?></h1>
	</div>
</div>
<div class="espaco-1em"></div>
<div class="container">
   
	<div class="row meio-interna">
	     <div class="espaco-1em"></div>
		<div class="col-md-4">
			<ul class="links-esquerdos">
				<a href="<?php echo site_url();?>/area-de-servico/"><li class="bto-interno">Área de Serviço</li></a>
				<a href="<?php echo site_url();?>/banheiro/"><li class="bto-interno">Banheiro</li></a>
				<a href="<?php echo site_url();?>/cabeceira-de-cama/"><li class="bto-interno">Cabeceira de Cama</li></a>
				<a href="<?php echo site_url();?>/closet/"><li class="bto-interno">Closet</li></a>
				<a href="<?php echo site_url();?>/cozinha/"><li class="bto-interno">Cozinha</li></a>
				<a href="<?php echo site_url();?>/decoracao/"><li class="bto-interno">Decoração</li></a>
				<a href="<?php echo site_url();?>/dormitorio"><li class="bto-interno">Dormitório</li></a>
				<a href="<?php echo site_url();?>/escritorio/"><li class="bto-interno">Escritório</li></a>
			</ul>
		</div>
		<div class="col-md-8 col-sm-12 categoria-interna">
		<h2><?php the_title(); ?></h2>
		<p>	 
		
		  <?php
                        if ( have_posts() ) {
                                while ( have_posts() ) { the_post();

                                        the_content(); //Exibe todo o conteúdo de uma página WordPress

                                }
                        }
                    ?>

		
		</p>
		</div>
	</div>
</div>
<div class="espaco-1em"></div>
<div class="orca-interno">
    <div class="text-center orca">
      <a href="<?php echo site_url();?>/orcamento/"><button type="button" class="btn btn-outline-light">SOLICITE UM ORÇAMENTO</button></a>
    </div>
</div>
<div class="espaco-1em"></div>
<?php get_footer(); ?>