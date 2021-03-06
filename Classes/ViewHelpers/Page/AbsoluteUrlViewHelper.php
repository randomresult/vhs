<?php
namespace FluidTYPO3\Vhs\ViewHelpers\Page;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Claus Due <claus@namelesscoder.net>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Returns a full, absolute URL to this page with all arguments
 *
 * @author Claus Due <claus@namelesscoder.net>
 * @package Vhs
 * @subpackage ViewHelpers\Page
 */
class AbsoluteUrlViewHelper extends AbstractViewHelper {

	/**
	 * @return string
	 */
	public function render() {
		$url = GeneralUtility::getIndpEnv('TYPO3_REQUEST_URL');
		if (0 !== strpos($url, GeneralUtility::getIndpEnv('TYPO3_SITE_URL'))) {
			$url = GeneralUtility::getIndpEnv('TYPO3_SITE_URL') . $url;
		}
		return $url;
	}

}
