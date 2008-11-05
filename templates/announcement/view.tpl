{**
 * view.tpl
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v1. For full terms see the file docs/COPYING.
 *
 * View full announcement text. 
 *
 * $Id: view.tpl,v 1.5 2008/04/04 17:06:53 asmecher Exp $
 *}
{assign var="pageTitleTranslated" value=$announcementTitle}
{assign var="pageId" value="announcement.view"}
{include file="common/header.tpl"}

<table width="100%">
	<tr>
		<td>{$announcement->getAnnouncementDescription()|nl2br}</td>
	</tr>
</table>

{include file="common/footer.tpl"}
