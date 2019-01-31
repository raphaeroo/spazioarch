<?php get_header(); ?>
<div class="fundo-topo-amb">
	<div class="container interna">
		<h1><?php the_title(); ?></h1>
	</div>
</div>
<div class="espaco-1em"></div>
<div class="container">

<div class="row">
    <div class="col-md-8 col-sm-12  interno-blog">
    <?php 
                if ( have_posts() ) {
                	while ( have_posts() ) {
                		the_post(); 
                		    the_content();
                	} // end while
                } // end if
            ?>
</div>
    <div class="col-md-4 col-sm-12">
       <img class="thumb-blog" src="<?php the_post_thumbnail_url( 'large' ); ?>" style="height: auto; width: 100%;" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" /> 
    </div>
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