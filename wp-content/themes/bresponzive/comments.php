<div id="comments" class="clearfix  eleven columns ">
	<?php if ( post_password_required() ) : ?>

		<p class="nopassword"><?php _e( 'Este post requiere password. Ingrese el password para ver los comentarios.', 'bresponZive' ); ?></p>

	</div><!--comments -->

	<?php  return;
	endif;
	?>
  	<?php if ( have_comments() ) : ?>
 		<h2 class="comments-title">
 			<?php
 				printf( _n( ' Existe <em>1</em> Comentario.', 'Existen <em>%1$s</em> Comentarios.', get_comments_number(), 'bresponZive' ),
 					number_format_i18n( get_comments_number() ));
 			?>
 		</h2>
 
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : /* existen comentarios a navegar en */?>
 
		<div class="comment-nav-above">
  			<div class="previous"><?php previous_comments_link( __( '&larr; Comentarios anteriores', 'bresponZive' ) ); ?></div>
 			<div class="next"><?php next_comments_link( __( 'Nuevos comentarios &rarr;', 'bresponZive' ) ); ?></div>
 		</div>

		<?php endif; /*-- check for comment navigation--*/ ?>



		<ol class="commentlist clearfix   ">

			<?php wp_list_comments( array( 'type' => 'comment','callback' => 'bresponZive_themepacific_themepacific_comment' ) ); ?>

		</ol>
		
		<ol class="sepa_pinglist clearfix   ">
		
		<?php wp_list_comments( array( 'type' => 'pingback', 'callback' => 'bresponZive_themepacific_themepacific_comment' ) ); ?>
		
		</ol>
		
 		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

<div class="comment-nav-below">
  			<div class="previous"><?php previous_comments_link( __( '&larr; Comentarios anteriores', 'bresponZive' ) ); ?></div>
 			<div class="next"><?php next_comments_link( __( 'Nuevos comentarios &rarr;', 'bresponZive' ) ); ?></div>
 		</div>

		<?php endif; /*--check for comment navigation--*/ ?>
 
	<?php
 
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :

	?>

		<p class="nocomments"><?php _e( '&#123; Los comentarios estan cerrados &#125;', 'bresponZive' ); ?></p>

	<?php endif; ?>

 
	<?php

	$comment_form = array( 
		'fields' => apply_filters( 'comment_form_default_fields', array(
			'author' => '<div class="comment-form-author">' .
						'<input id="author" name="author" placeholder="Nombre *" type="text" value="' .
						esc_attr( $commenter['comment_author'] ) . '" size="30" tabindex="1" />' .
						'<label for="author">' . __( 'Nombre','bresponZive' ) . '</label> ' .
						( $req ? '<span class="required">*</span>' : '' ) .	
						'<div class="clear"></div>' .
						'</div><!-- #form-section-author .form-section -->',
			'email'  => '<div class="comment-form-email">' .
						'<input id="email" name="email" placeholder="Email *" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" tabindex="2" />' .
						'<label for="email">' . __( 'Email' ,'bresponZive') . '</label> ' .
						( $req ? '<span class="required">*</span>' : '' ) .
						'<div class="clear"></div>' .
						'</div><!-- #form-section-email .form-section -->',
			'url'    => '<div class="comment-form-url">' .
						'<input id="url" name="url" type="text" placeholder="Website" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" tabindex="3" />' .
						'<label for="url">' . __( 'Website','bresponZive' ) . '</label>' .
						'<div class="clear"></div>' .
						'</div><!-- #form-section-url .form-section -->' ) ),
		'comment_field' => '<div class="comment-form-comment">' .
					'<textarea id="comment" name="comment" aria-required="true" placeholder="Ingrese su comentario.."></textarea>' .
					'</div><!-- #form-section-comment .form-section -->',
		'comment_notes_before' => '',
		'comment_notes_after' => '',
		'title_reply' => __('Por favor déjenos su comentario','bresponZive') ,
	);
	comment_form($comment_form, $post->ID); 
	 ?>
 </div><!-- /comments -->
