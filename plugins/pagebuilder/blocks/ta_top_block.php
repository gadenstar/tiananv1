<?php
/**
 * This file control close container block
 *
 * @package    OneEngine
 * @package    EngineThemes
 */

if( ! class_exists( 'TA_Top_Block') ) :

class TA_Top_Block extends AQ_Block {

	function __construct() {
		$block_options = array(
			'name' 		=> '活动-顶部',
			'size' 		=> 'span12',
			'resizable' => 0,
		);
		parent::__construct( 'TA_Top_Block', $block_options );
	}

	function form( $instance ){
		$defaults = array(
			'show_row'	=> 'true',
		);
		$instance = wp_parse_args($instance, $defaults);
		extract( $instance );
		$row = array(
			'true'	=> 'Yes',
			'false' => 'No'
		);
		?>
		<p class="description">
			<?php _e( 'There is no setting here. Just make sure to add this block if you use container (open).', 'oneengine' ); ?>
		</p>
        <p class="description">
			<label for="<?php echo $this->get_field_id('show_row') ?>">
				<?php _e( 'Show/hide section "row" (if you add block item fullwidth here, please choose "No" for 2 block "Container (open)" and "Container (close)")', 'oneengine');?>
				<?php echo aq_field_select('show_row', $block_id, $row, $show_row) ?>
			</label>
		</p>
		<?php
	}

	function block($instance) {
		extract( $instance );
		echo '<nav class="uk-navbar">
    <ul class="uk-navbar-nav">
        <li class="uk-active"><a href="">...</a></li>
        <li><a href="">...</a></li>
        <li class="uk-parent"><a href="">...</a></li>
    </ul>
</nav>';
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

aq_register_block( 'TA_Top_Block' );

endif;
