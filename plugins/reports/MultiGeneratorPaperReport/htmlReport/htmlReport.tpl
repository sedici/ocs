{**
 * htmlReport.tpl
 *
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 *htmlReport View.
 *
 *}
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>{translate key="plugin.reports.MultiGeneratorPaperReport.html.reportTitle"}</title>
{include file="../plugins/reports/MultiGeneratorPaperReport/htmlReport/templates/htmlstyle.tpl"}
{assign var="oldTrack" value=""}
</head>
 {foreach from=$paperIterator item=paper}
<p class="paper" id="{$paper->getId()}">
{if $paper->getTrackTitle() != $oldTrack}
{assign var="oldTrack" value=$paper->getTrackTitle()}
<h1 class="section" id="{$paper->getTrackId()}">{$paper->getTrackTitle()}</h1></br>
{/if}
<h2 class="title">{$paper->getTitle()}</h2></br>
<p class="Abstract">{$paper->getAbstract()}</p></br>
 	{foreach from=$paper->getAuthors() item=Author}
 	<p class="Author">{$Author->getFirstName()} {$Author->getMiddleName()} {$Author->getLastName()}</br>
 					{$Author->getEmail()}</br>
 					{$Author->getAffiliation()}</br>
 	</p>
 {/foreach}
 </p>
{/foreach}
	
