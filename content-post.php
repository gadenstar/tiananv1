<?php
/**
 * @package nii_framework
 */
?>

<li id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
		<div class="centent">
			<header>

				<h2 class="uk-h3 uk-text-bold entry-title"><?php
					$category = get_the_category();
					if($category[0]){
					echo '<a href="'.get_category_link($category[0]->term_id ).'" class="cat">'.$category[0]->cat_name.'</a>';
					}
				?> <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title( ); ?></a></h2>
			</header>
			<p class="note">
					<?php
						/* translators: %s: Name of current post */
						/*the_content( sprintf(
							__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'nii_framework' ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						) );*/
						$content = get_the_content();
						 $trimmed_content = wp_trim_words( $content, 100, '...' );
						echo $trimmed_content;
					
					?>
			</p>

			<div class="meta">
				<span><?php echo get_the_date('Y/m/d' ); ?></span> |
				<span class="views"><?php post_views('阅读(', ')'); ?></span>
				<a href="<?php the_permalink(); ?>" class="btn more uk-float-right">阅读全文</a>
			</div>
		</div>
</li><!-- #post-## -->