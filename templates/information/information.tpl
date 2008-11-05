{**
 * information.tpl
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Conference information page.
 *
 * $Id: information.tpl,v 1.8 2008/04/04 17:06:53 asmecher Exp $
 *}
{include file="common/header.tpl"}

{if !empty($conferenceContent)}
	<h2>{$conferenceTitle|escape}</h2>
	<p>{$conferenceContent|nl2br}</p>
{/if}

{if !empty($schedConfContent)}
	<h2>{$schedConfTitle|escape}</h2>
	<p>{$schedConfContent|nl2br}</p>
{/if}

{include file="common/footer.tpl"}
