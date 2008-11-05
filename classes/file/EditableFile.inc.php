<?php

/**
 * @file EditableFile.inc.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class EditableFile
 * @ingroup plugins_generic_translator
 *
 * @brief Hack-and-slash class to help with editing XML files without losing
 * formatting and comments (i.e. unparsed editing).
 *
 * $Id: EditableFile.inc.php,v 1.2 2008/07/02 16:55:22 asmecher Exp $
 */

class EditableFile {
	var $contents;
	var $filename;

	function EditableFile($filename) {
		import('file.FileWrapper');
		$this->filename = $filename;
		$wrapper =& FileWrapper::wrapper($this->filename);
		$this->setContents($wrapper->contents());
	}

	function &getContents() {
		return $this->contents;
	}

	function setContents(&$contents) {
		$this->contents =& $contents;
	}

	function write() {
		$fp = fopen($this->filename, 'w+');
		if ($fp === false) return false;
		fwrite($fp, $this->getContents());
		fclose($fp);
		return true;
	}

	function xmlEscape($value) {
		$escapedValue = XMLNode::xmlentities($value, ENT_NOQUOTES);
		if ($value !== $escapedValue) return "<![CDATA[$value]]>";
		return $value;
	}
}

?>
