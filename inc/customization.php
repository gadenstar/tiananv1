	<style type="text/css">
		<?php if (vp_metabox("custom_page.toggle_filtering")==1): ?>
			<?php if(vp_metabox("custom_page.filtering_group.0.filter_type")=="color"): ?>
				.page-header {
					background: <?php echo vp_metabox("custom_page.filtering_group.0.page_color");?>;
				}
				<?php endif; ?>
			<?php if(vp_metabox("custom_page.filtering_group.0.filter_type")=="img"): ?>
				.page-header {
						background: url('<?php echo vp_metabox("custom_page.filtering_group.0.page_img");?>');
						background-position: 50% 50%;
	 					background-size: cover;
					}
			<?php endif; ?>
		<?php endif; ?>

		.nii-page-title {
			text-align: <?php echo vp_metabox("custom_page.page_title_pos");?>;
		}
		
		<?php if(vp_option('vpt_option.topAD_tg')==1): ?>
			.topAD {
				background: <?php echo vp_option('vpt_option.topAD_bg_color');?> 
			}
		<?php endif; ?>
		<?php 
			if(vp_option('vpt_option.custom_css')!=''): 
			echo vp_option('vpt_option.custom_css');
		 	endif; ?>
	</style>