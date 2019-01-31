<?php 
/*Template Name: Blog*/
?>

<?php get_header(); ?>
<div class="fundo-topo-amb">
	<div class="container interna">
		<h1><?php the_title(); ?> | Inspire-se, Planeje-se e Decore</h1>
	</div>
</div>
<div class="espaco-1em"></div>

<div class="container">
<div class="row"> 
     
      <?php
        	$args = array( 
        		'post_type' => 'blog', 
        		'posts_per_page' => 30, 
        		'order' => 'asc', 
        		'orderby' => 'date' 
        	);
        				
            $loop = new WP_Query( $args );
            $i = 0;
            
        	while ( $loop->have_posts() ) : $loop->the_post(); ?>
        
        	  <!-- Service 1 -->
              <div class="col-md-4 col-sm-6">
                <div class="thumb-blog">
                  <a href="<?php the_permalink(); ?>"><div class="thumb-img"><div class="img_blog" style="background:url(<?php the_post_thumbnail_url( 'large' ); ?>);height: 220px;width: 100%;background-size: cover;background-position: center;background-repeat: no-repeat;"></div></div></a>
                  <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                  <?php the_excerpt('12'); ?>
                  
                  <div class="bto btn btn-primary"><a href="<?php the_permalink(); ?>">Saiba mais</a></div>
                </div>
              </div>
        
        <?php
        $i ++;
						 if($i % 3 == 0) { 
					echo '<div class="clearfix margin"></div>';
				   }
        
        	endwhile; 
        ?>

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