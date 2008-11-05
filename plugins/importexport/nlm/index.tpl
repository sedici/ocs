{**
 * index.tpl
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * List of operations this plugin can perform
 *
 * $Id: index.tpl,v 1.0 2006/04/26 15:11:02 mj Exp $
 *}
{assign var="pageTitle" value="plugins.importexport.nlm.displayName"}
{include file="common/header.tpl"}

<br/>

<h3>{translate key="plugins.importexport.nlm.export"}</h3>
<ul class="plain">
	<li>&#187; <a href="{plugin_url path="papers"}">{translate key="plugins.importexport.nlm.export.papers"}</a></li>
</ul>

{include file="common/footer.tpl"}
