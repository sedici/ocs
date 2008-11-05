{**
 * setupHeader.tpl
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Header for conference setup pages.
 *
 * $Id: setupHeader.tpl,v 1.6 2008/04/04 17:06:54 asmecher Exp $
 *}
{assign var="pageCrumbTitle" value="manager.schedConfSetup.schedConfSetup"}
{url|assign:"currentUrl" op="schedConfSetup"}
{include file="common/header.tpl"}


<ul class="steplist">
	<li{if $setupStep == 1} class="current"{/if}><a href="{url op="schedConfSetup" path="1"}">1. {translate key="manager.schedConfSetup.details"}</a></li>
	<li{if $setupStep == 2} class="current"{/if}><a href="{url op="schedConfSetup" path="2"}">2. {translate key="manager.schedConfSetup.submissions"}</a></li>
	<li{if $setupStep == 3} class="current"{/if}><a href="{url op="schedConfSetup" path="3"}">3. {translate key="manager.schedConfSetup.review"}</a></li>
</ul>

