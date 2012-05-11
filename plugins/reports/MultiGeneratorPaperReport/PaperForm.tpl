{**
 * PaperForm.tpl
 *
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * $Id$
 *}
{strip}
{assign var="pageTitle" value="plugins.reports.MultiGeneratorPaperReport.title"}
{include file="common/header.tpl"}
{/strip}
{translate key="plugins.reports.MultiGeneratorPaperReport.pluginReportSetting"}
{assign var="option" value={html_options_translate value=$custom_options}


<div class="separator"></div>

<br />

<form method="post" action="{plugin_url path="settings"}">
{include file="common/formErrors.tpl"}

<div width="100%" class="data">
	<div valign="top" width="100%" class="value"><span>{translate key="plugins.report.MultiGeneratorPaperReport.instruct1"}</span></div>
	<div valign="top" witdh="100%" class="value">
		{foreach  from=$custom_options key=key item=value}
				<input type="radio" name="reportClass" value="{$key}">{translate key="$value"}</input>
		{/foreach}
	</div>
	</div>
<br/>
<input type="submit" name="GenerateReport" class="button defaultButton" value="{translate key="plugins.report.MultiGeneratorPaperReport.locale.button"}"/>
</form>
{include file="common/footer.tpl"}