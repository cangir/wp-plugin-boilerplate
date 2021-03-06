<?php
/**
 * WP Plugin Boilerplate.
 *
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name\Taxonomy;

use Plugin_Name\Foundation\Service_Provider;

/**
 * Class Taxonomy Service Provider.
 *
 * Registers defined taxonomy services.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name\Taxonomy
 * @author  Your Name <email@example.com>
 */
class Taxonomy_Service_Provider extends Service_Provider {
	/**
	 * Name of the provider.
	 *
	 * @var string
	 */
	const NAME = 'taxonomy';

	/**
	 * Registers taxonomy services at `init` hook.
	 *
	 * @return void
	 */
	public function boot() {
		add_action( 'init', [ $this, 'register' ] );
	}

	/**
	 * Defines services collection of the provider.
	 *
	 * @return array
	 */
	public function services() {
		return [
			Example_Taxonomy::class
		];
	}
}
