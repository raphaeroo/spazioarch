<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KQKWMKV');</script>
		<!-- End Google Tag Manager -->
        <link rel="icon" href="<?php bloginfo('template_directory'); ?>/imagens/favicon.png" type="image/png">
        <title>Spazioarch | <?php the_title(); ?></title>
        <!-- Bootstrap e Add-Ons CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/owlcarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fontawesome/fontawesome-min.css">

        
         <!-- css principal -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">  

        <?php wp_head(); ?>
		<meta name="google-site-verification" content="zJ50GJsdetlOUCLVm-sTTMy_lhaue6chP_Cm4DeN1js" />
        </head>
    <body>
		<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQKWMKV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- BOTOES LATERAIS -->
<div class="icon-bar">
  <a href="https://www.facebook.com/spazioarch" target="_blank" class="facebook"><i class="fab fa-facebook"></i></a> 
  <a href="https://www.youtube.com/channel/UCX2yZKmf6XJ301o8nK9UUow" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a> 
</div>


        <!-- PopUp 
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<style type="text/css">
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
}
.cnt223 a{
text-decoration: none;
}
.popup{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
}
.cnt223{
    transition: 4s;
width: 600px;
min-height: 150px;
margin: 100px auto;
background: #f3f3f3;
position: relative;
z-index: 103;
padding: 15px 35px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
}
@media (max-width: 600px){
    .cnt223{

width: 100%;

}
}
.cnt223 p{
clear: both;
    color: #555555;
    /* text-align: justify; */
    font-size: 20px;
    font-family: sans-serif;
}
.cnt223 p a{
color: #d91900;
font-weight: bold;
}
.cnt223 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}
</style>
<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});


 

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>
<div class='popup'>
<div class='cnt223'>
    <p>
<a href='' class='close'><i class="fas fa-window-close"></i></a>
</p>
<br />
<img src="<?php bloginfo('template_directory'); ?>/imagens/popup.jpg" style="width: 100%;" />

</div>
</div>
        
        
        
        <!-- fim PopUp -->
         <div class="largura-total">
        <header>
        <!-- Slider + Menus -->
       
            <!-- Slider -->
             <!-- Menus -->
            <div class="container">
                <nav class="navbar navbar-expand-lg menu-posicao">

  <a class="navbar-brand" href="<?php echo site_url();?>">
    <img class="logo-spazio" src="<?php bloginfo('template_directory'); ?>/imagens/logo.png" class="d-inline-block align-top" alt=""/>
       
  </a>


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="texto-branco"><i class="fas fa-bars"></i></span>
  </button>
  <div class="collapse navbar-collapse ajuste" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link lista-menu" href="<?php echo site_url();?>">Início </a>
      </li>
      <li class="nav-item">
        <a class="nav-link lista-menu" href="<?php echo site_url();?>/ambientes/">Ambientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link lista-menu" href="<?php echo site_url();?>/sobre/">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link lista-menu" href="<?php echo site_url();?>/agendamento/">Agendamento</a>
      </li>
      <li class="nav-item">
        <a class="nav-link lista-menu" href="<?php echo site_url();?>/obras/">Obras</a>
      </li>
      <li class="nav-item">
        <a class="nav-link lista-menu" href="<?php echo site_url();?>/blog/">Blog</a>
      </li>
  <!--    <li class="nav-item">
        <a class="nav-link lista-menu" href="#">Informações</a>
      </li> -->
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle lista-menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contato
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url();?>/contato/">Fale Conosco</a>
          <a class="dropdown-item" href="<?php echo site_url();?>/trabalhe-conosco/">Trabalhe Conosco</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link lista-menu" href="<?php echo site_url();?>/bancadas-especiais/">Bancadas Especiais</a>
      </li>
    </ul>
  </div>
</nav>
       </div>
             </header>