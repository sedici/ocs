<?php

/**
 * @file rebuildSearchIndex.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class rebuildSearchIndex
 * @ingroup tools
 *
 * @brief CLI tool to rebuild the paper keyword search database.
 */

//$Id: rebuildSearchIndex.php,v 1.6 2008/07/02 16:55:26 asmecher Exp $

require(dirname(__FILE__) . '/includes/cliTool.inc.php');

import('search.PaperSearchIndex');

class rebuildSearchIndex extends CommandLineTool {

	/**
	 * Print command usage information.
	 */
	function usage() {
		echo "Script to rebuild paper search index\n"
			. "Usage: {$this->scriptName}\n";
	}

	/**
	 * Rebuild the search index for all papers in all conferences.
	 */
	function execute() {
		PaperSearchIndex::rebuildIndex(true);
	}

}

$tool = &new rebuildSearchIndex(isset($argv) ? $argv : array());
$tool->execute();
?>
