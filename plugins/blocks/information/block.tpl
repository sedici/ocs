{**
 * block.tpl
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site sidebar menu -- information links.
 *
 * $Id: block.tpl,v 1.3.2.1 2008/10/08 21:06:53 asmecher Exp $
 *}
{if !empty($forReaders) || !empty($forPresenters)}
<div class="block" id="sidebarInformation">
	<span class="blockTitle">{translate key="plugins.block.information.link"}</span>
	<ul>
		{if !empty($forReaders)}<li><a href="{url page="information" op="readers"}">{translate key="navigation.infoForReaders"}</a></li>{/if}
		{if !empty($forPresenters)}<li><a href="{url page="information" op="presenters"}">{translate key="navigation.infoForPresenters"}</a></li>{/if}
	</ul>
</div>
{/if}

