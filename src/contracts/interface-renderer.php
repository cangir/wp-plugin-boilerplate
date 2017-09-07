<?php
/**
 * WP Plugin Boilerplate.
 *
 * @package   Plugin_Name
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name\Contracts;

interface Renderer_Interface {
	/**
	 * Renders current subject.
	 *
	 * @return mixed
	 */
	public function render();
}