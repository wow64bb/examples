<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Francois Suter <francois@typo3.org>
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
***************************************************************/

/**
 * This class XCLASSes SC_db_new to modify the layout of the New Record Wizard
 *
 * @author		Francois Suter <francois@typo3.org>
 * @package		TYPO3
 * @subpackage	tx_examples
 *
 * $Id$
 */
class ux_SC_db_new extends SC_db_new {
	/**
	 * This methods adds a section at the bottom of the New Record Wizard
	 *
	 * USAGE: Core APIs > TYPO3 API overview > PHP Class Extension > Which classes? > Example - Adding a small feature in the interface
	 *
	 * @return	void
	 */
	function regularNew() {
		parent::regularNew();
		$this->code .= $this->doc->section($GLOBALS['LANG']->sL('LLL:EXT:examples/locallang.xml:help'), $GLOBALS['LANG']->sL('LLL:EXT:examples/locallang.xml:make_choice'), 0, 1);
	}
}
?>
