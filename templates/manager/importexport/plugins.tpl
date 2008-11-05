{**
 * plugins.tpl
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * List available import/export plugins.
 *
 * $Id: plugins.tpl,v 1.5 2008/04/04 17:06:54 asmecher Exp $
 *}
{assign var="pageTitle" value="manager.importExport"}
{include file="common/header.tpl"}

<ul>
	{foreach from=$plugins item=plugin}
	<li><a href="{url op="importexport" path="plugin"|to_array:$plugin->getName()}">{$plugin->getDisplayName()|escape}</a>:&nbsp;{$plugin->getDescription()|escape}</li>
	{foreachelse}
		<li>{translate key="manager.importExport.noPlugins"}</li>
	{/foreach}
</ul>

{include file="common/footer.tpl"}
