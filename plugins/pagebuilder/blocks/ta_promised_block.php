<?php
/**
 * This file control close container block
 *
 * @package    OneEngine
 * @package    EngineThemes
 */

if( ! class_exists( 'TA_Promised_Block') ) :

class TA_Promised_Block extends AQ_Block {

	function __construct() {
		$block_options = array(
			'name' 		=> '活动-我们的承诺',
			'size' 		=> 'span12',
			'resizable' => 0,
		);
		parent::__construct( 'TA_Promised_Block', $block_options );
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
		echo '<div class="uk-block hexbox  arrow-b uk-cover-background uk-hidden-small">
	<div class="uk-container uk-container-center">

		<div class="uk-grid uk-text-center">
			<div class=" uk-width-medium-1-1 uk-width-large-1-2 uk-vertical-align uk-visible-large hexbox-title">
				<div class="uk-text-center uk-vertical-align-middle">
					<div class="">
						<h2 class="uk-h1 l">天安家装</h2>
						<h2 class="uk-h1 r">郑重承诺</h2>
					</div>
				</div>
			</div>
			<div class="uk-width-medium-1-1 uk-width-large-1-2 uk-hidden-small">
				<div class="boxinner">
					<div class="hex hex-1 hex-gap">
						<div class="inner">
								<h4>完美效果</h4>
								<hr>
								<p>保证装修效果与设计方案完美统一</p>
						</div>
						<a href="####"></a>
						<div class="corner-1"></div>
						<div class="corner-2"></div>
					</div>
					<div class="hex hex-2">
						<div class="inner">
								<h4>高品用材</h4>
								<hr>
								<p>与客户选材、设计用材完全保持一致</p>
						</div>
						<a href="####"></a>
						<div class="corner-1"></div>
						<div class="corner-2"></div>
					</div>
					<div class="hex hex-3">
						<div class="inner">
								<h4>极致价值</h4>
								<hr>
								<p>直接节省近25%-35%成本</p>
						</div>
						<a href="####"></a>
						<div class="corner-1"></div>
						<div class="corner-2"></div>
					</div>
					<div class="hex hex-4">
						<div class="inner">
								<h4>国标售后</h4>
								<hr>
								<p>装修隐蔽工程两年内保修终身维护</p>
						</div>
						<a href="####"></a>
						<div class="corner-1"></div>
						<div class="corner-2"></div>
					</div>

					<div class="hex hex-5">
						<div class="inner">
								<h4>同频施工</h4>
								<hr>
								<p>与合同期限绝对保持一致</p>
						</div>
						<a href="####"></a>
						<div class="corner-1"></div>
						<div class="corner-2"></div>
					</div>
					<div class="hex hex-6 hex-gap">
						<div class="inner">
								<h4>国际品质</h4>
								<hr>
								<p>绿色环保，100%达标</p>
						</div>
						<a href="####"></a>
						<div class="corner-1"></div>
						<div class="corner-2"></div>
					</div>
					<div class="hex hex-7">
						<div class="inner">
								<h4>国宾服务</h4>
								<hr>
								<p>尊享的7星级管家服务为您全程服务</p>
						</div>
						<a href="####"></a>
						<div class="corner-1"></div>
						<div class="corner-2"></div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>';
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

aq_register_block( 'TA_Promised_Block' );

endif;
