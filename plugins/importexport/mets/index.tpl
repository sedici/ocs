{**
 * index.tpl
 *
 * Copyright (c) 2003-2005 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * List of operations this plugin can perform
 *
 *}

{assign var="pageTitle" value="plugins.importexport.METSExport.displayName"}
{include file="common/header.tpl"}

<br/>

<h3>{translate key="plugins.importexport.METSExport.export"}</h3>
<ul class="plain">
	<li>&#187; <a href="{plugin_url path="schedConfs"}">{translate key="plugins.importexport.METSExport.export.schedConfs"}</a></li>
</ul>

{include file="common/footer.tpl"}
