<?php
/**
 * Theme Customizer textarea control.
 *
 * @package AudioTheme_Framework
 * @subpackage Settings
 *
 * @since 1.1.0
 */
class TwentyThirteenME_Customize_Subsection_Control extends WP_Customize_Control {
	/**
	 * @access public
	 * @var string
	 */
	public $type = 'subsection';

	/**
	 * @access public
	 * @var int
	 */
	public $label = '';

	/**
	 * Constructor.
	 *
	 * Overrides the parent constructor to add an action to print custom styles for the subsection headings, then calls the parent constructor to continue setup.
	 *
	 * @since 1.1.0
	 *
	 * @param WP_Customize_Manager $manager
	 * @param string $id
	 * @param array $args
	 */
	public function __construct( $manager, $id, $args = array() ) {
		$this->label = ( isset( $args['label'] ) ) ? esc_html( $args['label'] ) : '';
		parent::__construct( $manager, $id, $args );

		if ( ! has_action( 'customize_controls_print_styles', array( $this, 'styles' ) ) ) {
			add_action( 'customize_controls_print_styles', array( $this, 'styles' ) );
		}
	}

	/**
	 * Render the control's content.
	 *
	 * @since 1.1.0
	 */
	public function render_content() {
		?>
		<div class="twentythirteenme-customize-subsection"><?php echo $this->label; ?></div>
		<?php
	}

	/**
	 * Print custom styles for displaying subsections.
	 *
	 * @since 1.1.0
	 */
	public function styles() {
		?>
		<style type="text/css">
		.customize-control-subsection:first-child {
			margin-top: -10px;
		}
		.customize-control-subsection:first-child .twentythirteenme-customize-subsection {
			margin-top: 0;
		}
		.twentythirteenme-customize-subsection {
			margin: 5px -20px;
			padding: 8px 20px;
			font-weight: bold;
			background: #eaeaea;
		}
		</style>
		<?php
	}
}
