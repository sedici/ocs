<?php

/**
 * @file index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Wrapper for Announcement Feed plugin. Based on Web Feed Plugin.
 *
 * @package plugins.generic.announcementFeed
 *
 * $Id: index.php,v 1.1 2008/06/27 16:27:42 michael Exp $
 */

require_once('AnnouncementFeedPlugin.inc.php');

return new AnnouncementFeedPlugin(); 

?> 
