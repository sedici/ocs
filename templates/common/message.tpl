{**
 * message.tpl
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Generic message page.
 * Displays a simple message and (optionally) a return link.
 *
 * $Id: message.tpl,v 1.4 2008/04/04 17:06:53 asmecher Exp $
 *}
{include file="common/header.tpl"}

<p>{translate key=$message}</p>

{if $backLink}
<p>&#187; <a href="{$backLink}">{translate key="$backLinkLabel"}</a></p>
{/if}

{include file="common/footer.tpl"}
