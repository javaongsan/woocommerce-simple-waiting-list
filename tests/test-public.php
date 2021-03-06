<?php
/**
 * WC Simple Waiting List Public Tests.
 *
 * @since   1.0.6
 * @package WC_Simple_Waiting_List
 */
class WCSWL_Public_Test extends WP_UnitTestCase {

	/**
	 * Test if our class exists.
	 *
	 * @since  1.0.6
	 */
	function test_class_exists() {
		$this->assertTrue( class_exists( 'WCSWL_Public' ) );
	}

	/**
	 * Test that we can access our class through our helper function.
	 *
	 * @since  1.0.6
	 */
	function test_class_access() {
		$this->assertInstanceOf( 'WCSWL_Public', wc_simple_waiting_list()->public );
	}

	/**
	 * Replace this with some actual testing code.
	 *
	 * @since  1.0.6
	 */
	function test_sample() {
		$this->assertTrue( true );
	}
}
