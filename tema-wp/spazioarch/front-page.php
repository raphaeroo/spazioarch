<?php get_header(); ?>
 <!-- Fim Menus -->  
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/imagens/slider-home/1.jpg" alt="Quarto Planejado">
         <div class="carousel-caption d-none d-md-block">
             <h5 class="texto-slider">Quarto Planejado</h5>
         </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/imagens/slider-home/2.jpg" alt="Sala Planejada">
        <div class="carousel-caption d-none d-md-block">
             <h5 class="texto-slider">Sala Planejada</h5>
        </div>
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
            
            <!-- Fim Slider -->            


<!-- Começo Site -->

<!-- Links Quadrados -->
<div class="links-baixo-banner">
    <div class="container">
        <div class="espaco-1em"></div>
        <div class="row">
                <div class="col bto-bn-1 espaco-lateral img-botao">
                    <button type="submit" class="btn btn-primary bto-bn baixo-banner"><a class="a-quadros" href="<?php echo site_url();?>/cozinha/">Cozinha</a></button>
                </div>
                <div class="col bto-bn-2 espaco-lateral img-botao">
                     <button type="submit" class="btn btn-primary bto-bn baixo-banner"><a class="a-quadros" href="<?php echo site_url();?>/dormitorio/">Dormitório</a></button>
                 </div>
                <div class="col bto-bn-3 espaco-lateral img-botao">
                     <button type="submit" class="btn btn-primary bto-bn baixo-banner"><a class="a-quadros" href="<?php echo site_url();?>/ambientes/">Home Theater</a></button>
                 </div>
                <div class="col bto-bn-4 espaco-lateral img-botao">
                     <button type="submit" class="btn btn-primary bto-bn baixo-banner"><a class="a-quadros" href="<?php echo site_url();?>/ambientes/">Lavanderia</a></button>
                 </div>
                <div class="col bto-bn-5 espaco-lateral img-botao">
                     <button type="submit" class="btn btn-primary bto-bn baixo-banner"><a class="a-quadros" href="<?php echo site_url();?>/decoracao/">Decoração</a></button>
                 </div>
                <div class="col bto-bn-6 espaco-lateral img-botao">
                     <button type="submit" class="btn btn-primary bto-bn baixo-banner"><a class="a-quadros" href="<?php echo site_url();?>/banheiro/">Banheiro</a></button>
                 </div>
                <div class="col bto-bn-7 espaco-lateral img-botao">
                     <button type="submit" class="btn btn-primary bto-bn baixo-banner"><a class="a-quadros" href="<?php echo site_url();?>/obras/">Obras</a></button>
                </div>

        </div>
        <div class="espaco-1em"></div>
    </div>

</div>
<!-- Fim Links Quadrados -->
<!-- Formulário Fale Conosco -->
<div class="form-section" id="fale-conosco">
<div class="container">
    <div class="espaco-1em"></div>
    <div class="col-md-12 text-center">
        <h1 class="meio-sessao">Mobiliários Sob Medida</h1><h2 class="meio-sessao"><br />Fale Conosco e Faça Seu Orçamento </h2>
        <img class="divisor" src="<?php bloginfo('template_directory'); ?>/imagens/divisor.png" />        
    </div>
    <div class="espaco-1em"></div>
      <div class="row">
          <div class="col-md-2 col-sm-12"></div>
          <div class="col-md-8 col-sm-12" style="margin-left: 1.2em;">
            <?php echo do_shortcode( '[contact-form-7 id="81" title="Formulário Contato"]' ); ?>
         </div>
          <div class="col-md-2 col-sm-12"></div>
      </div>
            


    
</div>
</div>
</div>
<div class="espaco-1em"></div>
<!-- Fim Formulário Fale Conosco -->
<!-- Horários -->
<div class="horario">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-center">
                <div class="hora-cantareira">
                    <div class="vertical-center">
                 <span class="span-hora"><b>Horários de Funcionamento</b> <br />
                        Segunda - Sexta: 09:00 às 20:00<br />
                        Sábado: 09:00 às 17:00<br />
                        <b>Av. Nova Cantareira, N° 2911, Tucuruvi - SP.</b><br />
                        Telefones: (11) 2203 - 0703 / 2203 - 0630
                    </span>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 text-center">
                <div class="hora-analia">
                    <div class="vertical-center">
                     <span class="span-hora"><b>Horários de Funcionamento</b> <br />
                        Segunda - Sexta: 09:00 às 20:00<br />
                        Sábado: 09:00 às 17:00<br />
                        <b>Rua Emília Marengo, N° 315, Anália Franco - SP.</b><br />
                        Telefones: (11) 2679-4720 / (11) 2679-4721
                    </span>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="espaco-1em"></div>
<!-- Fim Horários -->
<!-- BLOG -->
<div id="blog">
    <div class="container">
         <div class="col-md-12 text-center">
        <h2 class="meio-sessao">Visite Nosso Blog </h2>
        <img class="divisor" src="<?php bloginfo('template_directory'); ?>/imagens/divisor.png" />        
        </div>
        <div class="espaco-1em"></div>
    <div class="row">
        <div class="col-md-6 col-sm-6 text-center">
           <a href="<?php echo site_url();?>/blog/"> 
            <div class="img-blog-1 align-baseline">
            </div>
            </a>
        </div>
        <div class="col-md-6 col-sm-6 text-center">
            <a href="<?php echo site_url();?>/blog/">  
            <div class="img-blog-2">
            </div>
            </a>
        </div>
      </div>
</div>
<div class="espaco-1em"></div>
<!-- Fim BLOG -->
<!-- Catálogo -->
<div class="catalogo">
    <div class="container">
        <div class="row espaco-1em">
            <div class="col-md-8 col-sm-12 catalogo-esquerdo espaco-1em">
            <h4>Confira nosso catálogo</h4>
            <div class="espaco-meio-em"></div>
            <p>Confira nosso catálogo virtual e conheça mais a qualidade do nosso mobiliário   
                fabricado em MDF 100% ecológico,   com 10 anos de garantia. Basta escanear
                o QR Code ao lado para conhecer mais sobre a qualidade do trabalho da Spazioarch
                ou <br> <a href="https://spazioarch.com.br/catalogo-spazio/" target="_blank"><span>clique aqui.</span></a>
            </p>
            </div>
            <div class="col-md-4 col-sm-12 catalogo-direito espaco-1em">
                <img src="<?php bloginfo('template_directory'); ?>/imagens/qr-catalogo.png" />
            </div>
        </div>
    </div>
</div>
<div class="espaco-1em"></div>
<!-- Fim Catálogo -->
<!-- promoções -->
<div id="promocoes">
    <div class="container">
         <div class="col-md-12 text-center">
        <h2 class="meio-sessao">Últimas Promoções</h2>
        <img class="divisor" src="<?php bloginfo('template_directory'); ?>/imagens/divisor.png" />        
        </div>
        <div class="espaco-1em"></div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="promo-e">
                    <img src="<?php bloginfo('template_directory'); ?>/imagens/promocoes/promo1.jpg" />
                    <div class="espaco-1em"></div>
                    <h4>Sorteio panela elétrica</h4>
                    <p>Faça como milhares de pessoas e concorra aos melhores eletrodomésticos. Para ganhar prêmios incríveis, curta nossa página no facebook e fique por dentro das novidades.</p>
                    <h4>Mega feirão planejados</h4>
                    <p>Mega Feirão Planejados Final de Ano!
                        Desconto de 50%, 25% e 15%
                        A Spazioarch traz para você mais um vez, o feirão de planejados, com descontos imperdíveis.
                        É a sua oportunidade de comprar seu móvel sob medida pelo menor preço. Deixe sua casa mais linda para as festas de final de ano.
                        Garantia de 10 anos e com total suporte ao cliente
                        Fale conosco e Agende uma visita Temos WhatsApp: (11) 94788-7208.
                    </p>
                  <!--  <button type="submit" class="bto btn btn-primary">Ver Mais</button> -->
                    <div class="espaco-1em"></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-md-6 promo-d">
                        <img src="<?php bloginfo('template_directory'); ?>/imagens/promocoes/promo2.png" />
                    </div>
                    <div class="promo-d col-md-6">
                        <h4>Faça uma cozinha e ganhe um cooktop</h4>
                        <p>Aqui na Spazioarch é assim: fez a cozinha planejada conosco, ganhou um lindo cooktop para decorar sua cozinha.
                        </p>
                    </div>
                </div>
                <div class="espaco-1em"></div>
                <div class="row">
                    <div class="col-md-6 promo-d">
                        <img src="<?php bloginfo('template_directory'); ?>/imagens/promocoes/promo3.jpg" />
                    </div>
                    <div class="promo-d col-md-6">
                        <h4>Sorteio Cafeteira</h4>
                        <p>Gostaria de ganhar uma cafeteira? 
                            A Spazioarch está realizando um sorteio de uma linda Cafeteira! 
                        </p>
                        <p>Para participar, basta seguir os seguintes passos: </p>
                        <ul><li>Curta a Página da Spazioarch</li>
                            <li>Compartilhe essa publicação com #spazioarch</li>
                            <li>Marque 2 amigos nos comentários</li>
                        </ul>
                    </div>
                </div>
                <div class="espaco-1em"></div>
                <div class="row">
                    <div class="col-md-6 promo-d">
                        <img src="<?php bloginfo('template_directory'); ?>/imagens/promocoes/promo4.png" />
                    </div>
                    <div class="promo-d col-md-6">
                        <h4>Coifa + Cooktop</h4>
                        <p>Nas compras acima de R$ 10 mil, você leva na hora uma belíssima coifa e um cooktop para deixar sua cozinha ainda mais bonita.
                        </p>
                    </div>
                </div>
                    <div class="espaco-1em"></div>
                <div class="row">
                    <div class="col-md-6 promo-d">
                        <img src="<?php bloginfo('template_directory'); ?>/imagens/promocoes/promo5.jpg" />
                    </div>
                    <div class="promo-d col-md-6">
                        <h4>Promoção casa completa Spazioarch</h4>
                        <p>por apenas R$ 8999,00!
                            Agende sua visita, temos condições especiais para você!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="espaco-1em"></div>
<!-- Fim promoções -->

<div id="opiniao">
    <div class="espaco-1em"></div>
    <div class="container">
         <div class="col-md-12 text-center">
        <h2 class="meio-sessao-branco">Opiniões de Nossos Clientes</h2>
        <img class="divisor" src="<?php bloginfo('template_directory'); ?>/imagens/divisor2.png" />        
        </div>
        <div class="espaco-1em"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
               <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                         <div class="carousel-item active">
                            <img class="depo-res" src="<?php bloginfo('template_directory'); ?>/imagens/depoimentos/1.png" alt="Quarto Planejado">
                        </div>
                        <div class="carousel-item">
                             <img class="depo-res" src="<?php bloginfo('template_directory'); ?>/imagens/depoimentos/2.png" alt="Sala Planejada">
                         </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
</div>
<div class="espaco-1em"></div>
<?php get_footer(); ?>