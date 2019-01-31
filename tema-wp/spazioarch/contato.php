<?php 
/*Template Name: Contato*/
?>

<?php get_header(); ?>
<div class="fundo-topo-cont">
	<div class="container interna">
		<h1><?php the_title(); ?></h1>
	</div>
</div>
<div class="espaco-1em"></div>

<div class="container">
        <div class="col-md-12 text-center">
        <h2 class="meio-sessao">Fale Conosco e Faça Seu Orçamento </h2>
        <img class="divisor" src="<?php bloginfo('template_directory'); ?>/imagens/divisor.png" />        
    </div>
    <div class="espaco-1em"></div>
    <div class="row">
        <div class="col-md-4 col-12">
            <h2 style="font-size: 1.2rem;"><b>Av. Nova Cantareira, 2911 – Tucuruvi</b></h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14638.531786161799!2d-46.614354!3d-23.473701!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef65d3b6a5f77%3A0x88b2fb85d7125710!2sAv.+Nova+Cantareira%2C+2911+-+Tucuruvi%2C+S%C3%A3o+Paulo+-+SP%2C+02340-000!5e0!3m2!1spt-BR!2sbr!4v1543343217652" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div class="espaco-1em"></div>
             <h2 style="font-size: 1.2rem;"><b>R. Emília Marengo, 315 – Anália Franco</b></h2>  
             <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14629.741388274255!2d-46.564185!3d-23.552803!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5e8551f6d737%3A0xfdb0daa2b755dc9b!2sR.+Em%C3%ADlia+Marengo%2C+315+-+Vila+Reg.+Feijo%2C+S%C3%A3o+Paulo+-+SP%2C+03336-010!5e0!3m2!1spt-BR!2sbr!4v1543343322636" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-md-8 col-12">
                <div class="espaco-1em"></div>
           	<?php echo do_shortcode( '[contact-form-7 id="81" title="Formulário Contato"]' ); ?>
            
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