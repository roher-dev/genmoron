</div>
<!--/#blocks-wrapper-->
 </div>
 <!--/#Wrapper-container -->
 </div>
 <!--/#Wrapper -->
<?php global $bresponZive_tpcrn_data; if(isset($bresponZive_tpcrn_data['shw_footer_widg'])){

if($bresponZive_tpcrn_data['shw_footer_widg'] == '1'){ ?>
<!--#footer-blocks-->
<div id="footer-blocks" class="container clearfix">

 	<div class="fb-container clearfix">
 		<div class="footer-block1">
  			<?php dynamic_sidebar('Footer Block 1');?>
			<div class="redes_sociales">
			<ul class="social-icons"><li class="twitter-icon"><a target="_blank"   href="https://twitter.com/PartidoGEN"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon-footer.png" width="24" height="24" alt="Twitter"></a></li><li class="facebook-icon"><a target="_blank" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon-footer.png" width="24" height="24" alt="Facebook"></a></li><li class="youtube-icon"><a target="_blank" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube-icon-footer.png" width="24" height="24" alt="YouTube"></a></li></ul><!-- .social-icons -->		</div>
 		</div>	
<!--			
 		<div class="footer-block2">
			<?php dynamic_sidebar('Footer Block 2');?>
		</div>
-->
<!--
 		<div class="footer-block3">
  			<?php dynamic_sidebar('Footer Block 3');?>
 		</div>
-->
		<div class="footer-block4">
  			<?php dynamic_sidebar('Footer Block 4');?>


              <ul id="menu-principal-1" class="footer-menu">
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-497"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-861"><a href="javascript:void(0);">GEN Mor&oacute;n</a></li>
<ul class="sub-menu">
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-386"><a href="<?php echo esc_url( home_url( '/' ) ); ?>pagina-2/quienes-somos/">Quienes Somos?</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-386"><a href="<?php echo esc_url( home_url( '/' ) ); ?>pagina-2/nuestros-principios/">Nuestros Principios</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-386"><a href="<?php echo esc_url( home_url( '/' ) ); ?>pagina-2/autoridades-locales/">Autoridades Locales</a></li>
</ul>

<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-496"><a href="javascript:void(0);">Juventud</a></li>
<ul class="sub-menu">
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-386"><a href="<?php echo esc_url( home_url( '/' ) ); ?>juventud/juventud-gen/">Juventud GEN</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-386"><a href="<?php echo esc_url( home_url( '/' ) ); ?>juventud/agenda-joven/">Agenda Joven</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-386"><a href="<?php echo esc_url( home_url( '/' ) ); ?>juventud/autoridades-locales/">Autoridades Locales</a></li>
</ul>

<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-582"><a href="javascript:void(0);">Nuestras Propuestas</a></li>
<ul class="sub-menu">
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-386"><a href="<?php echo esc_url( home_url( '/' ) ); ?>programa-de-accion-politica/">Programa de Acci&oacute;n</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-386"><a href="<?php echo esc_url( home_url( '/' ) ); ?>compromiso-legislativo-2013/">Compromiso</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-386"><a href="<?php echo esc_url( home_url( '/' ) ); ?>propuestas-locales/">Propuestas Locales</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-386"><a href="<?php echo esc_url( home_url( '/' ) ); ?>documentos/">Documentos</a></li>
</ul>

<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-118"><a href="javascript:void(0);">Con los vecinos</a></li>
<ul class="sub-menu">
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-386"><a href="<?php echo esc_url( home_url( '/' ) ); ?>seguridad/">Seguridad</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-386"><a href="<?php echo esc_url( home_url( '/' ) ); ?>la-cantabrica/">La Cant&aacute;brica</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-386"><a href="<?php echo esc_url( home_url( '/' ) ); ?>inundaciones/">Inundaciones</a></li>
</ul>

<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123"><a href="<?php echo esc_url( home_url( '/' ) ); ?>suma-tus-propuestas/">Contacto</a></li>

</ul>




 		</div>
      </div>
 </div>
<!--/#footer-blocks-->
<?php } }?>
 
 
<!-- #footer-->
 <div id="footer" class="container clearfix">
  <div class="foot-wrap container">  
	  <p class="copyright"><?php echo bloginfo( 'name' ); ?>&nbsp; &copy;&nbsp;<?php echo date("Y");?> Todos los derechos reservados.</p>
	  <p class="credit">Dise&ntilde;ado por <a title="" href="#"></a></p>
  </div></div><!--/#Footer -->

 
   <?php wp_footer(); ?>

 </body>
 </html>