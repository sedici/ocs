{**
 * importSuccess.tpl
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display a list of the successfully-imported entities.
 *
 * $Id: importSuccess.tpl,v 1.1 2008/05/14 00:35:46 asmecher Exp $
 *}
{assign var="pageTitle" value="plugins.importexport.native.import.success"}
{include file="common/header.tpl"}

<p>{translate key="plugins.importexport.native.import.success.description"}</p>

{if $papers}
<h3>{translate key="paper.papers"}</h3>
<ul>
	{foreach from=$papers item=paper}
		<li>{$paper->getPaperTitle()|strip_unsafe_html}</li>
	{/foreach}
	</ul>
{/if}

{include file="common/footer.tpl"}
