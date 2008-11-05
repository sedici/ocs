{**
 * paperContext.tpl
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Prompt for track "context" for article import
 *
 * $Id: paperContext.tpl,v 1.1 2008/05/14 00:35:46 asmecher Exp $
 *}
{assign var="pageTitle" value="plugins.importexport.native.import.papers"}
{include file="common/header.tpl"}

<p>{translate key="plugins.importexport.native.import.papers.description"}</p>

<form action="{plugin_url path="import"}" method="post">
<input type="hidden" name="temporaryFileId" value="{$temporaryFileId|escape}"/>

{translate key="track.track"}&nbsp;&nbsp;
<select name="trackId" id="trackId" size="1" class="selectMenu">{html_options options=$trackOptions selected=$trackId}</select>

<p><input type="submit" value="{translate key="common.import"}" class="button defaultButton"/></p>
</form>

{include file="common/footer.tpl"}
