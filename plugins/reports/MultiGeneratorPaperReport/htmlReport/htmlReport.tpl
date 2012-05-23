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
<link rel="stylesheet" href="{$baseUrl}/plugins/reports/MultiGeneratorPaperReport/htmlReport/htmlReport.css" type="text/css" />
{assign var="oldTrack" value=""}
</head>
 {foreach from=$paperIterator item=paper}
{if $paper->getTrackTitle() != $oldTrack}
{assign var="oldTrack" value=$paper->getTrackTitle()}
<h1>{$paper->getTrackTitle()}</h1>
{/if}
<h2>{$paper->getTitle()}</h2></br>
<div id="Abstract">{$paper->getAbstract()}</div></br>
 	{foreach from=$paper->getAuthors() item=Author}
 	<div id="Author">{$Author->getFirstName()} {$Author->getMiddleName()} {$Author->getLastName()}</br>
 					{$Author->getEmail()}</br>
 					{$Author->getAffiliation()}</br>
 	</div>
 {/foreach}
{/foreach}
	
