<?php
/*
Plugin Name: WP Post Image
Plugin URI: http://www.xrvel.com/
Description: Add image / thumbnail to your post easily on the beginning of the post. You add thumbnail to post by post custom value.
Author: Xrvel
Version: 1.1.0
Author URI: http://www.xrvel.com/
*/

function xrvel_xpi_get_options() {
	$opt = get_option('xrvel_xpi_options');
	if ($opt == false || $opt == '') {
		$opt = array(
			'width' => 150,
			'height' => 150
		);
	} else {
		if (!is_array($opt)) {
			$opt = unserialize($opt);
		}
	}
	return $opt;
}

function xrvel_xpi_options() {
	if (!current_user_can('manage_options')) {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}
	if (isset($_POST['go'])) {
		$width = 100;
		$height = 100;
		if (isset($_POST['x_width'])) {
			$width = intval($_POST['x_width']);
		}
		if (isset($_POST['x_height'])) {
			$height = intval($_POST['x_height']);
		}
		$opt = array(
			'width' => $width,
			'height' => $height
		);
		update_option('xrvel_xpi_options', serialize($opt));
		_e('<div id="message" class="updated fade"><p>Options updated.</p></div>');
	}
	$opt = xrvel_xpi_get_options();
	echo '<div class="wrap">';
	?>
	<h2>WP Post Image</h2>
	<form name="form1" method="post" action="">
	<input type="hidden" name="go" value="1" />
	<p>
		Default width :<br />
		<input type="text" name="x_width" value="<?php echo htmlentities($opt['width']); ?>" maxlength="10" />
	</p>
	<p>
		Default height :<br />
		<input type="text" name="x_height" value="<?php echo htmlentities($opt['height']); ?>" maxlength="10" />
	</p>
	<p class="submit">
		<input type="submit" name="Submit" class="button-primary" value="Save Changes" />
	</p>
	</form>
	<ol>
		<li>
			To add image to post, add custom post with name <code>xrvel_xpi_image_src</code> for example <code>http://www.example.com/image.jpg</code>
		</li>
		<li>
			To add caption below the image, add custom post with name <code>xrvel_xpi_image_caption</code> for example <code>This is the caption</code>
		</li>
		<li>
			To define image hyperlink, add custom post with name <code>xrvel_xpi_image_link</code> for example <code>http://www.example.com/index.php</code>. (Default value is empty and hyperlink is disabled)
		</li>
		<li>
			To define image width, add custom post with name <code>xrvel_xpi_image_height</code> for example <code><?php echo $opt['height']; ?></code>. (Default value is defineable)
		</li>
		<li>
			To define image width, add custom post with name <code>xrvel_xpi_image_width</code> for example <code><?php echo $opt['width']; ?></code>. (Default value is defineable)
		</li>
		<li>
			To define image &quot;alt&quot;, add custom post with name <code>xrvel_xpi_image_alt</code> for example <code>This is the alt</code>. (Default value is &quot;Image&quot;)
		</li>
		<li>
			To define image &quot;title&quot;, add custom post with name <code>xrvel_xpi_image_title</code> for example <code>This is the title</code>. (Default value is &quot;Image&quot;)
		</li>
		<li>
			To define image CSS float, add custom post with name <code>xrvel_xpi_image_float</code> for example <code>right</code>. (Default value is &quot;left&quot;)
		</li>
	</ol>
	</form>
	<p>
		Plugin by <a href="http://www.xrvel.com" target="_blank">Xrvel</a>
	</p>
	<?php
	echo '</div>';
}

function xrvel_xpi_add_pages() {
	add_options_page('WP Post Image', 'WP Post Image', 'manage_options', 'wp-post-image', 'xrvel_xpi_options');
}

function xrvel_xpi_text_mod($text) {
	global $post;

	$opt = xrvel_xpi_get_options();

	$image_src = '';
	$image_caption = '';
	$image_link = '';
	$image_float = 'left';
	$image_height = $opt['height'];
	$image_width = $opt['width'];
	$image_alt = 'Image';
	$image_title = 'Image';

	$test_val = (string)get_post_meta($post->ID, 'xrvel_xpi_image_src', true);
	if ('' != $test_val) {
		$image_src = $test_val;
	}

	if ('' == $image_src) {
		return $text;
	}

	$test_val = (string)get_post_meta($post->ID, 'xrvel_xpi_image_link', true);
	if ('' != $test_val) {
		$image_link = $test_val;
	}

	$test_val = (string)get_post_meta($post->ID, 'xrvel_xpi_image_caption', true);
	if ('' != $test_val) {
		$image_caption = $test_val;
	}

	$test_val = (string)get_post_meta($post->ID, 'xrvel_xpi_image_float', true);
	if ('' != $test_val) {
		$image_float = $test_val;
	}

	$test_val = (string)get_post_meta($post->ID, 'xrvel_xpi_image_height', true);
	if ('' != $test_val) {
		$image_height = intval($test_val);
	}

	$test_val = (string)get_post_meta($post->ID, 'xrvel_xpi_image_width', true);
	if ('' != $test_val) {
		$image_width = intval($test_val);
	}

	$test_val = (string)get_post_meta($post->ID, 'xrvel_xpi_image_alt', true);
	if ('' != $test_val) {
		$image_alt = $test_val;
	}

	$test_val = (string)get_post_meta($post->ID, 'xrvel_xpi_image_title', true);
	if ('' != $test_val) {
		$image_title = $test_val;
	}
	$image_code = '<div class="xrvel_xpi_box" style="float:'.$image_float.';margin-bottom:1em;margin-right:1em;width:'.($image_width + 10).'px;"><div style="padding:0.3em">';
	if ($image_link != '') {
		$image_code .= '<a href="'.$image_link.'">';
	}
	$image_code .= '<img width="'.$image_width.'" height="'.$image_height.'" border="0" style="height:'.$image_height.'px;width:'.$image_width.'px"';
	if ('' != $image_alt) {
		$image_code .= ' alt="'.htmlentities($image_alt).'"';
	}
	if ('' != $image_title) {
		$image_code .= ' title="'.htmlentities($image_title).'"';
	}
	$image_code .= ' src="'.$image_src.'" />';
	if ($image_link != '') {
		$image_code .= '</a>';
	}
	if ($image_caption != '') {
		$image_code .= '<div class="xrvel_xpi_caption" style="color:#999;font-size:0.7em">'.$image_caption.'</div>';
	}
	$image_code .= '</div></div>';

	$text = $image_code.' '.$text.'<div style="clear:both"></div>';

	return $text;
}

add_filter('the_content', 'xrvel_xpi_text_mod');
add_action('admin_menu', 'xrvel_xpi_add_pages');
?>