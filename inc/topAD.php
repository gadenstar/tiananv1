<?php if(vp_option('vpt_option.topAD_tg_is_home')==1) {

	if(is_home()){ ?>
		<div class="topAD ad_s" style="display:none">
				<a href="<?php echo vp_option('vpt_option.topAD_link');?>" target="_blank">
					<img src="<?php echo vp_option('vpt_option.topAD_img_s');?>" alt="">
				</a>
			</div>
			<div class="topAD ad_b" style="display:none">
				<a href="<?php echo vp_option('vpt_option.topAD_link');?>" target="_blank">
					<img src="<?php echo vp_option('vpt_option.topAD_img_b');?>" alt="">
				</a>
			</div>
	<?php 
	}else {
		?>
		<div class="topAD ad_s" style="display:block">
				<a href="<?php echo vp_option('vpt_option.topAD_link');?>" target="_blank">
					<img src="<?php echo vp_option('vpt_option.topAD_img_s');?>" alt="">
				</a>
			</div>
		<?php
	}
}else { ?>
		<div class="topAD ad_s" style="display:none">
				<a href="<?php echo vp_option('vpt_option.topAD_link');?>" target="_blank">
					<img src="<?php echo vp_option('vpt_option.topAD_img_s');?>" alt="">
				</a>
			</div>
			<div class="topAD ad_b" style="display:none">
				<a href="<?php echo vp_option('vpt_option.topAD_link');?>" target="_blank">
					<img src="<?php echo vp_option('vpt_option.topAD_img_b');?>" alt="">
				</a>
			</div>
<?php } ?>