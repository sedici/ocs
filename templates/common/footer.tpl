{**
 * footer.tpl
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site footer.
 *
 * $Id: footer.tpl,v 1.8 2008/06/27 20:07:07 michael Exp $
 *}
{if $pageFooter}
<br /><br />
{$pageFooter}
{/if}

{if $postCreativeCommons}
	<br />
	{translate key="common.ccLicense" ccLicenseImageUrl=`$baseUrl`/templates/images/ccLicense.png}
{/if}

{call_hook name="Templates::Common::Footer::PageFooter"}
</div><!-- content -->
</div><!-- main -->
</div><!-- body -->

</div><!-- container -->

{get_debug_info}

<div id="footer">
<p>Todos los derechos reservados &copy; 2008 - <a href="http://www.unlp.edu.ar" target="_blank">Universidad Nacional de La Plata</a> - Powered by <a href="http://pkp.sfu.ca/?q=ocs" target="_blank">Open Congress Systems</a></p>
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


</body>
</html>
