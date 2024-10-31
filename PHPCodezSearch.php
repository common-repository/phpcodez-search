<?php
/**
* Plugin Name: PHPCodez Search
* Plugin URI: http://phpcodez.com/
* Description: A Widget That Displays Search Form
* Version: 0.1
* Author: PHPCodez
* Author URI: http://phpcodez.com/
*/

add_action( 'widgets_init', 'wpc_search_widgets' );

function wpc_search_widgets() {
	register_widget( 'wpcsearchWidget' );
}


class wpcsearchWidget extends WP_Widget {

function wpcsearchWidget() {
	$widget_ops = array( 'classname' => 'wpcClass', 'description' => __('A Widget That Displays Search Form', 'wpcClass') );
	$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'wpc-search' );
	$this->WP_Widget( 'wpc-search', __('PHPCodez Search', ''), $widget_ops, $control_ops );
}

function widget( $args, $instance ) {
?>
	<div class="arch_box" style="margin-bottom:10px;">
	<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
		<label for="s" class="assistive-text">Search</label>
		<input type="text" class="field" name="s" id="s" placeholder="Search">
		<input type="submit" class="submit" name="submit" id="search" value="Search">
	</form>
	</div>
<?php
	}
function update( $new_instance, $old_instance ) {}
function form( $instance ) {?>
	<p>No Backend Options Available</p>
<?php
	}
}
?>