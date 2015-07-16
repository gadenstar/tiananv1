<?php
/**
 * This file control text block
 *
 * @package    OneEngine
 * @package    EngineThemes
 */

// TEXT BLOCK
if( ! class_exists( 'OE_Text_Block' ) ) :

class OE_Text_Block extends AQ_Block {

	//set and create block
	function __construct() {
		$block_options = array(
			'name' => __( 'Text', 'oneengine'),
			'size' => 'span6',
		);
		
		//create the block
		parent::__construct('OE_Text_Block', $block_options);
	}

 	function form($instance) {
		
		$defaults = array(
			'text' 			=> '',
			'margin_top' 	=> '10',
			'margin_bottom' => '10',	
		);
		$instance = wp_parse_args($instance, $defaults);
		extract($instance);
		global $include_animation ;
		?>
        <p class="description">
            <label for="<?php echo $this->get_field_id('margin_top') ?>">
                Margin top 
                <?php echo aq_field_input('margin_top', $block_id, $margin_top, 'min', 'number') ?> px
            </label>&nbsp;-&nbsp;
            <label for="<?php echo $this->get_field_id('margin_bottom') ?>">
                Margin bottom
                <?php echo aq_field_input('margin_bottom', $block_id, $margin_bottom, 'min', 'number') ?> px
            </label>
        </p>
        <div class="sortable-body">
            <p class="description">
                <label for="<?php echo $this->get_field_id('animation') ?>">
                    Animation style<br/>
                    <?php echo aq_field_select('animation', $block_id, $include_animation , $animation) ?>
                </label>
            </p>
            <p class="description">
                <label for="<?php echo $this->get_field_id('duration') ?>">
                    Duration for Animation (Ex : 900ms)
                    <?php echo aq_field_input('duration', $block_id, $duration, 'min', 'number') ?> ms
                </label>&nbsp;&nbsp; - &nbsp;
                <label for="<?php echo $this->get_field_id('delay') ?>">
                    Time Delay (Ex : 900ms)
                    <?php echo aq_field_input('delay', $block_id, $delay, 'min', 'number') ?> ms
                </label>
            </p>
        </div>
        <p class="description">
			<label for="<?php echo $this->get_field_id('text') ?>">
				Content
				<?php echo aq_field_textarea('text', $block_id, $text, $size = 'full') ?>
			</label>
		</p>			
		<?php
	}

	function block($instance) {
		extract($instance);
		$output='';
		$animation_effect ='';
		$duration_effect ='';
		if($animation) $animation_effect = 'animated '.$animation.'';
		if($duration && $animation != '') $duration_effect = '-webkit-animation-duration: '.$duration.'ms; -moz-animation-duration: '.$duration.'ms; -o-animation-duration: '.$duration.'ms;animation-duration: '.$duration.'ms; animation-delay:'.$delay.'ms; -webkit-animation-delay:'.$delay.'ms; -moz-animation-delay:'.$delay.'ms;-o-animation-delay:'.$delay.'ms;';
		
		$output .= '<div class="animation-wrapper">'; 
		$output .= do_shortcode(htmlspecialchars_decode('<p class="'.$animation_effect.'" style="margin-top:'.$margin_top.'px;margin-bottom:'.$margin_bottom.'px; '.$duration_effect.'">'.$text.'</p>'));
		$output .= '</div>';
		echo $output;
	}
	
 	function before_block($instance) {
		extract($instance);
		return;
	}

	function after_block($instance) {
 		extract($instance);
 		return;
	}

}

aq_register_block( 'OE_Text_Block' );
endif;