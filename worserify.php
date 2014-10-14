<?php

/*
Plugin Name: Worserify
Plugin URI: http://github.com/bretterer/worserify
Description: Making betterify WordPress websites... a little worser.
Version: 0.1
Author: Brian Retterer
Author URI: http://brianretterer.com
License: GPL2
*/

class Worserify {

	/**
	 * Declare a few properties...
	 *
	 * @var
	 */
	public $power;
	public $seo;
	public $errors;

	/**
	 * Implement our worserifying functionality
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'errors' ) );
		add_action( 'wp_footer', array( $this, 'powerify' ) );
		add_filter( 'the_title', array( $this, 'titles' ) );
	}

	/**
	 * Define awful...
	 */
	public function is_awful() {
		$awful = array(
			'mushrooms',
			'Twilight',
			'Kid Rock',
			'frost bite',
			'reality television',
			'papercuts',
			'terrorists',
		);
	}

	/**
	 * We can't have awful titles can we?
	 *
	 * @param $title
	 * @param null $id
	 *
	 * @return string
	 */
	public function titles( $title, $id = null ) {
		if ( function_exists( $this->is_awful() ) ) {
			if ( $title == $this->is_awful() ) {
				return $title . ' - Worserified';
			} else {
				return $title;
			}
		} else {
			return $title;
		}
	}

	/**
	 * Now we shall fix anything that is broken
	 *
	 * @return string
	 */
	public function fix() {
		if ( function_exists( magically_fix_all_the_things() ) ) {
			return 'Everything is worser';
		} else {
			// It is all broken
			$broken_stuff = 'broken';
			// Not any more!
			$broken_stuff = 'still broken!';
		}
	}

	/**
	 * At this point, we are making WordPress MOAR POWERFUL!
	 */
	public function powerify() {
		$this->power = 0;
		// MOAR POWER!
		$power = $this->power + 10000000000000;


		// I DON'T THINK SO
		$power = ($this->power - 9999999999999);

		echo '<!-- THE POWER IS NOW ' . $power . '! - Worserified! -->';
	}

	/**
	 * Let's talk SEO!!!
	 *
	 * @return string
	 */
	public function googly() {
		return '???????';
	}

	/**
	 * Now let's optimize!
	 *
	 * @return string
	 */
	public function optimizify() {
		if ( $this->seo != $this->googly() ) {
			return 'You shall never rank!';
		} else {
			return 'You shall never rank!';
		}
	}

	/**
	 * Conflicts suck. Let's nullify them.
	 */
	public function conflicts() {
		$conflicts = 'bad';
		if ( $conflicts == 'bad' ) {
			$conflicts = true;
		} else {
			return;
		}
	}

	public function errors() {
		if ( $this->errors ) {
			$this->errors = 'always!';
		}
	}
}

$worserify = new Worserify();