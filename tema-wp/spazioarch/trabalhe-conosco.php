<?php 
/*Template Name: Trabalhe Conosco*/
?>

<?php get_header(); ?>
<div class="fundo-topo-cont">
	<div class="container interna">
		<h1><?php the_title(); ?></h1>
	</div>
</div>
<div class="espaco-1em"></div>
<div class="container text-center">
    <h2>Faça Parte da Equipe Spazioarch</h2>
    <p class="form-trabalhe">Acha que pode contribuir para o sucesso da Spazioarch com suas habilidades e capacidade? Então, fique à vontade para enviar seu currículo e seja parte da equipe mais profissional e capacitada do mercado decorativo. Estamos à sua espera! </p>
    
    <?php echo do_shortcode( '[contact-form-7 id="89" title="Formulário Trabalhe Conosco"]' ); ?>

<p class="form-trabalhe">Após preencher os dados acima, clique acima em “enviar currículo” e você já estará cadastrado em nosso banco de dados. Assim que tivermos uma vaga para seu perfil, entraremos em contato. Agradecemos a escolha pela Spazioarch!  </p>
</div>

<div class="espaco-1em"></div>
<div class="orca-interno">
    <div class="text-center orca">
      <a href="<?php echo site_url();?>/orcamento/"><button type="button" class="btn btn-outline-light">SOLICITE UM ORÇAMENTO</button></a>
    </div>
</div>    
<div class="espaco-1em"></div>
<?php get_footer(); ?>