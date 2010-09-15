{**
 * footer.tpl
 *
 * Copyright (c) 2000-2010 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site footer.
 *
 *}
{strip}
{include file="core:common/footer.tpl"}
{/strip}
<div id="footer">
<p>Todos los derechos reservados &copy; 2008 - {$smarty.now|date_format:"%Y"}  <a href="http://www.unlp.edu.ar" target="_blank">Universidad Nacional de La Plata</a> <br> Powered by <a href="http://pkp.sfu.ca/?q=ocs" target="_blank">Open Congress Systems</a> and <a href="http://www.prebi.unlp.edu.ar"> Proyecto de Enlace de Bibliotecas </a></p>
{if $enableDebugStats}
	<div id="footerContent">
		<div class="debugStats">
		{translate key="debug.executionTime"}: {$debugExecutionTime|string_format:"%.4f"}s<br />
		{translate key="debug.databaseQueries"}: {$debugNumDatabaseQueries|escape}<br/>
		{if $debugNotes}
			<strong>{translate key="debug.notes"}</strong><br/>
			{foreach from=$debugNotes item=note}
				{translate key=$note[0] params=$note[1]}<br/>
			{/foreach}
		{/if}
		</div>
	</div><!-- footerContent -->
{/if}
</div><!-- footer -->

