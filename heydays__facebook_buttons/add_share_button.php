<?php
if ( ! defined("ABSPATH")) { exit; }

function heydays__add_share_button(){ 
		?>
		<iframe 
				src="http://www.facebook.com/plugins/like.php
					?href=<?php echo get_permalink(); ?>
					&amp;layout=standard
					&amp;show-faces=true
					&amp;width=450
					&amp;action=recommend
					&amp;font=arial
					&amp;share=true
					&amp;url=<?php echo get_the_guid(); ?>
					&amp;colorscheme=light" 
				scrolling="no" 
				frameborder="0" 
				allowTransparency="true" 
				id="facebook-like">
		</iframe>
		<?php
}
add_action('heydays__facebook_hook', 'heydays__add_share_button');

