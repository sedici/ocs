{**
 * index.tpl
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Conference presenter index.
 *
 * $Id: index.tpl,v 1.4 2008/04/04 17:06:54 asmecher Exp $
 *}
{assign var="pageTitle" value="common.queue.long.$pageToDisplay"}
{include file="common/header.tpl"}

<ul class="menu">
	<li{if ($pageToDisplay == "active")} class="current"{/if}><a href="{url op="index" path="active"}">{translate key="common.queue.short.active"}</a></li>
	<li{if ($pageToDisplay == "completed")} class="current"{/if}><a href="{url op="index" path="completed"}">{translate key="common.queue.short.completed"}</a></li>
</ul>

<br />

{include file="presenter/$pageToDisplay.tpl"}

{if $acceptingSubmissions}
	<p>
		{translate key="presenter.submit.startHere"}<br/>
		<a href="{url op="submit"}" class="action">{translate key="presenter.submit.startHereLink"}</a><br />
	</p>
{else}
	<p>
		{$notAcceptingSubmissionsMessage}
	</p>
{/if}

{include file="common/footer.tpl"}
