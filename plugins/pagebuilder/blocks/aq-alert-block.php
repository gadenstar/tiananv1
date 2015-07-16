<?php
/** Notifications block **/

if(!class_exists('AQ_Alert_Block')) :
	class AQ_Alert_Block extends AQ_Block {
		
		//set and create block
		function __construct() {
			$block_options = array(
				'name' => __('Alerts', 'aqpb-l10n'),
				'size' => 'span6',
			);
			
			//create the block
			parent::__construct('aq_alert_block', $block_options);
		}
		
		function form($instance) {
			
			$defaults = array(
				'content' => '',
				'type' => 'default',
				'show' 			=> '1',
				'style' => ''
			);
			$instance = wp_parse_args($instance, $defaults);
			extract($instance);
			
			$type_options = array(
				'default' => 'Standard',
				'success' => 'Success',
				'warning' => 'Warning',
				'danger' => 'Danger'
			);
			
			?>
			
			<p class="description">
				<label for="<?php echo $this->get_field_id('title') ?>">
					Title (optional)<br/>
					<?php echo aq_field_input('title', $block_id, $title) ?>
				</label>
			</p>
			<p class="description">
				<label for="<?php echo $this->get_field_id('content') ?>">
					Alert Text (required)<br/>
					<?php echo aq_field_textarea('content', $block_id, $content) ?>
				</label>
			</p>
			<p class="description half">
				<label for="<?php echo $this->get_field_id('type') ?>">
					Alert Type<br/>
					<?php echo aq_field_select('type', $block_id, $type_options, $type) ?>
				</label>
			</p>
			<p class="description half last">
				<label for="<?php echo $this->get_field_id('style') ?>">
					Additional inline css styling (optional)<br/>
					<?php echo aq_field_input('style', $block_id, $style) ?>
				</label>
			</p>
			<p class="description">
				<label for="<?php echo $this->get_field_id('show') ?>">
					<?php _e( '显示"关闭"按钮?', 'oneengine');?>
					<?php echo aq_field_checkbox('show', $block_id, $show) ?>
				</label>
			</p>
			<?php
			
		}
		
		function block($instance) {


			extract($instance);
			$close_btn='';
			if($show == 1 || $show == 'true') $close_btn = '<a href="" class="uk-alert-close uk-close"></a>';
			echo '<div class="uk-alert uk-alert-'.$type.'" style="'. $style .'" data-uk-alert>';
			echo $close_btn;
			echo '<p>' . do_shortcode(htmlspecialchars_decode($content)) . '</p></div>';
			
			
		}
		
	}

aq_register_block( 'AQ_Alert_Block' );
endif;