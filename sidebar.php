<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package nii_framework
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }
?>

<div id="secondary" class="nii-block dark-sidebar uk-width-medium-1-4 widget-area" role="complementary">
<?php if(is_page()): ?>
	<div class="uk-panel uk-panel-box uk-panel-box-primary">
		<aside id="recent-posts-2" class="uk-panel uk-panel-header widget widget_recent_entries">
				<?php
					if($post->post_parent){
					    $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
						$parent_title = get_the_title($post->post_parent);
					}else{
					    $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
						$parent_title = get_the_title('');
					}
					echo '<div class="widget-header"><h1 class="uk-panel-title widget-title"><span>'.$parent_title.'</span></h1></div>';
					if ($children) {
					    echo '<ul>';
					        echo $children;
					    echo '</ul>';
				} ?>
		</aside>
	</div>
<?php endif; ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
