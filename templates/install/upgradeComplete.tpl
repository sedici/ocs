{**
 * upgradeComplete.tpl
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display confirmation of successful upgrade.
 * If necessary, will also display new config file contents if config file could not be written.
 *
 * $Id: upgradeComplete.tpl,v 1.4 2008/04/04 17:06:53 asmecher Exp $
 *}
{assign var="pageTitle" value="installer.ocsUpgrade"}
{include file="common/header.tpl"}

{translate key="installer.upgradeComplete" version=$newVersion->getVersionString()}

{if !empty($notes)}
<h4>{translate key="installer.releaseNotes"}</h4>
{foreach from=$notes item=note}
<p><pre style="font-size: 125%">{$note|escape}</pre></p>
{/foreach}
{/if}

{if $writeConfigFailed}
{translate key="installer.overwriteConfigFileInstructions"}

<form action="#">
<p>
{translate key="installer.contentsOfConfigFile"}:<br />
<textarea name="config" cols="80" rows="20" class="textArea" style="font-family: Courier,'Courier New',fixed-width">{$configFileContents|escape}</textarea>
</p>
</form>
{/if}

{if $manualInstall}
{translate key="installer.manualSQLInstructions"}

<form action="#">
<p>
{translate key="installer.installerSQLStatements"}:<br />
<textarea name="sql" cols="80" rows="20" class="textArea" style="font-family: Courier,'Courier New',fixed-width">{foreach from=$installSql item=sqlStmt}{$sqlStmt|escape};


{/foreach}</textarea>
</p>
</form>
{/if}

{include file="common/footer.tpl"}
