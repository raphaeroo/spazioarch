<?php 
/*Template Name: Agendamento*/
?>

<?php get_header(); ?>
<div class="fundo-topo-agen">
	<div class="container interna">
		<h1><?php the_title(); ?></h1>
	</div>
</div>
<div class="espaco-1em"></div>

<div class="container">
			<?php echo do_shortcode( '[contact-form-7 id="76" title="Formulário Agendamento"]' ); ?>	
</div>

<div class="espaco-1em"></div>
<div class="orca-interno">
    <div class="text-center orca">
      <a href="<?php echo site_url();?>/orcamento/"><button type="button" class="btn btn-outline-light">SOLICITE UM ORÇAMENTO</button></a>
    </div>
</div>    
<div class="espaco-1em"></div>
<?php get_footer(); ?>