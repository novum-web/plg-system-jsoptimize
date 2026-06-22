<?php
/**
 * System - JS Optimize Plugin
 *
 * @copyright  Copyright (C) 2025 Novum Web. All rights reserved.
 * @license    GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;

/**
 * Minifies and defers JavaScript for improved PageSpeed scores.
 */
class PlgSystemJsoptimize extends CMSPlugin
{
	protected $autoloadLanguage = false;

	/**
	 * Defer/minify script tags before the document renders.
	 */
	public function onBeforeCompileHead()
	{
		$app = $this->getApplication();

		if (!$app->isClient('site'))
		{
			return;
		}

		if ((bool) $this->params->get('defer_js', 1))
		{
			$doc = $app->getDocument();

			foreach ((array) $doc->_scripts as $url => $attr)
			{
				if (strpos($url, 'media/system') === 0 || strpos($url, '/core.js') !== false)
				{
					continue;
				}

				$attr['defer']  = true;
				$attr['async']  = false;
				$doc->_scripts[$url] = $attr;
			}
		}
	}
}
