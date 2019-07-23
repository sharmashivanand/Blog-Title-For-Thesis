<?php
/*
Name: Blog Title for Thesis
Author: Shivanand Sharma
Description: Smart Box that allows you to output the page title of the blog page (on the blog page).
Version: 1.0
Requires: 2.84
Class: blog_title_for_thesis
License: MIT
Copyright Shivanand Sharma
*/
class blog_title_for_thesis extends thesis_box {
	public $templates = array( 'home' );

	protected function translate() {
		$this->title = __( 'Blog Title', 'btfs' );
	}

	public function html( $args = array() ) {
		global $thesis, $wp_query;
		extract( $args = is_array( $args ) ? $args : array() );
		$title         = get_the_title( get_option( 'page_for_posts', true ) );
		if ( $title ) {
			echo '<h1 class="archive_title blog_title headline">', trim( $thesis->api->efn( apply_filters( $this->_class, $title ) ) ), "</h1>\n";
		}
	}
}
