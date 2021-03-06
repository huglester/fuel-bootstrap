<?php

/**
 * NOTICE:
 *
 * If you need to make modifications to the default configuration, copy
 * this file to your app/config folder, and make them in there.
 *
 * This will allow you to upgrade fuel without losing your custom config.
 */

return array(
	/**
	 * use_min - Whether to autoload bootstrap assets.
	 */
	'autoload' => true,

	/**
	 * path - The path where bootstrap files are.
	 *
	 * Leave empty for main assets folder.
	 */
	'path' => '',

	/**
	 * use_min - Whether to load minified version.
	 */
	'use_min' => true,

	/**
	 * This config key specifies the name of a callback which is called before
	 * rendering the navigation.
	 * The callback allows you to overwrite / modify the links.
	 *
	 * This parameter expects a string, which is the name of a closure, with the
	 * following prototype:
	 * function($links)
	 * and should return the links after being processed.
	 * $links = the links for the navigation being rendered
	 */
	'navigation_links_callback' => null,
);
