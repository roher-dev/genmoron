<!-- Search form-->
<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) );  ?>">
	<input class="searchfield" type="text" name="s" id="s" value="<?php _e('Buscar ...', 'bresponZive'); ?>" onfocus="if (this.value == '<?php _e('Buscar ...', 'bresponZive'); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e('Buscar ...', 'bresponZive'); ?>';}">
	 
</form>