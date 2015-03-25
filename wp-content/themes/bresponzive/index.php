<?php get_header(); ?>


<!-- #CatNav -->  

<div>
&nbsp;
</div>

<!--#blocks-wrapper-->
<div id="blocks-wrapper" class="clearfix">
	<!-- /#CatNav -->

<!--#blocks-left-or-right-->

	<div id="blocks-left" class="eleven columns clearfix">	

<!-- roher aca deberia ir el slider -->
<?php 
echo do_shortcode('[smartslider2 slider="2"]');
?>

   			<?php   
		if(isset($bresponZive_tpcrn_data['offline_feat_slide'])) { if($bresponZive_tpcrn_data['offline_feat_slide'] =='1')  include_once('includes/flex-slider.php'); }?>
									<h2 class="blogpost-wrapper-title"><?php _e('Post recientes','bresponZive');?> </h2>	
			<?php   get_template_part( 'includes/blog', 'loop' );?>
<!--homepage content-->
 							<?php dynamic_sidebar('Magazine Style Widgets)'); ?>
 
  			</div>
 			<!-- /blocks col -->
 <?php get_sidebar();  ?>

<!-- roher -->
<div class="fijos cinco">

	<div class="datos">

	<a href="http://www.institutogen.com.ar" title="Ir al sitio del Instituto GEN." target="_blank"><span class="bubble cinco">·</span><h2>Instituto<br/> GEN</h2><p></p></a>

	<a href="http://www.partidogen.org.ar/asuntos-legales/" title="Información sobre Asunto Legales." class="par"><span class="bubble seis">·</span><h2>Asuntos<br/> Legales</h2><p></p></a>

	<a href="http://www.partidogen.org.ar/el-congreso-del-gen-marco-la-cancha-del-frente-amplio-unen/" title="Información sobre Encuentros Nacionales."><span class="bubble siete">·</span><h2>Congreso Nacional<br/> Sep 2014</h2><p></p></a>

	<a href="http://www.partidogen.org.ar/transparencia-2/" title="Políticas de Transparencia"><span class="bubble ocho">·</span><h2>Politicas de<br/>transparencia</h2><p></p></a>

	<a href="http://margaritastolbizer.com.ar/informe-bloque-diputados-gen-sobre-empleo/" title="Más Información"><span class="bubble tres">·</span><h2>Informe Bloque Diputados GEN <br/>Sobre Empleo</h2><p></p></a>
	
	</div>
		
</div>

 <?php get_footer(); ?>
