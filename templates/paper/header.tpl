{**
 * header.tpl
 *
 * Copyright (c) 2000-2010 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Paper View -- Header component.
 *
 * $Id$
 *}
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>{$paper->getFirstAuthor(true)|escape}</title>
	<meta http-equiv="Content-Type" content="text/html; charset={$defaultCharset|escape}" />
	<meta name="description" content="{$paper->getLocalizedTitle()|strip_tags|escape}" />
	{if $paper->getLocalizedSubject()}
		<meta name="keywords" content="{$paper->getLocalizedSubject()|escape}" />
	{/if}

	{include file="paper/dublincore.tpl"}
	{include file="paper/googlescholar.tpl"}

	<link rel="stylesheet" href="{$baseUrl}/lib/pkp/styles/common.css" type="text/css" />
	<link rel="stylesheet" href="{$baseUrl}/styles/common.css" type="text/css" />
	<link rel="stylesheet" href="{$baseUrl}/styles/paperView.css" type="text/css" />

	{foreach from=$stylesheets item=cssUrl}
		<link rel="stylesheet" href="{$cssUrl}" type="text/css" />
	{/foreach}

	<script type="text/javascript" src="{$baseUrl}/lib/pkp/js/general.js"></script>
	{$additionalHeadData}
</head>
<body>

<div id="container">
<div id="header">
<!-- logo de la UNLP -->
	<div id="rev_logo"><a href="http://www.unlp.edu.ar"><img src="{$baseUrl}/templates/images/unlp.jpg" border="0"/></a></div>
	<div id="rev_menu">
	<ul>
		<li><a href="{$baseUrl}">Portal de Congresos</a></li>
		<li><a href="http://sedici.unlp.edu.ar">Servicio de Difusi&oacute;n de la Creaci&oacute;n Intelectual</a></li>
		<li><a href="javascript:openHelp('{if $helpTopicId}{get_help_id key="$helpTopicId" url="true"}{else}{url page="help"}{/if}')">{translate key="navigation.conferenceHelp"}</a></li>
	</ul>
	</div>
<!-- FIN LOGO UNLP -->
<div id="headerTitle">
<div id="banner">
<h1>
{if $displayPageHeaderLogo && is_array($displayPageHeaderLogo)}
	<img src="{$publicFilesDir}/{$displayPageHeaderLogo.uploadName|escape:"url"}" width="{$displayPageHeaderLogo.width|escape}" height="{$displayPageHeaderLogo.height|escape}" {if $displayPageHeaderLogoAltText != ''}alt="{$displayPageHeaderLogoAltText|escape}"{else}alt="{translate key="common.pageHeaderLogo.altText"}"{/if} />
{/if}
{if $displayPageHeaderTitle && is_array($displayPageHeaderTitle)}
	<img src="{$publicFilesDir}/{$displayPageHeaderTitle.uploadName|escape:"url"}" width="{$displayPageHeaderTitle.width|escape}" height="{$displayPageHeaderTitle.height|escape}" {if $displayPageHeaderTitleAltText != ''}alt="{$displayPageHeaderTitleAltText|escape}"{else}alt=""{/if} />
{elseif $displayPageHeaderTitle}
	{$displayPageHeaderTitle}
{elseif $alternatePageHeader}
	{$alternatePageHeader}
{elseif $customLogoTemplate}
	{include file=$customLogoTemplate}
{elseif $siteTitle}
	{$siteTitle}
{else}
	{$applicationName}
{/if}

</h1>

</div>
{include file="common/navbar.tpl"}
</div> <!-- BANNER -->

</div>  <!-- headerTitle -->

<div id="body">
<div id="main">

<div id="breadcrumb">
	<a href="{url page="index"}" target="_parent">{translate key="navigation.home"}</a> &gt;
	<a href="{url schedConf=""}" target="_parent">{$conference->getConferenceTitle()|escape}</a> &gt;
	<a href="{url page="index"}" target="_parent">{$schedConf->getSchedConfTitle()|escape}</a> &gt;
	<a href="{url page="schedConf" op="presentations"}" target="_parent">{$track->getLocalizedTitle()|escape}</a> &gt;
	<a href="{url page="paper" op="view" path=$paperId|to_array:$galleyId}" class="current" target="_parent">{$paper->getFirstAuthor(true)|escape}</a>
</div>

<div id="content">
