{**
 * overview.tpl
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Scheduled conference overview page.
 *
 * $Id: overview.tpl,v 1.8 2008/04/30 22:31:07 asmecher Exp $
 *}
{translate|assign:"pageTitleTranslated" key="schedConf.overview.title"}{include file="common/header.tpl"}

<div>{$overview|nl2br}</div>

{include file="common/footer.tpl"}
