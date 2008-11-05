{**
 * submitHeader.tpl
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Header for the paper submission pages.
 *
 * $Id: submitHeader.tpl,v 1.6 2008/04/06 15:44:35 asmecher Exp $
 *}
{assign var="pageCrumbTitle" value="presenter.submit"}
{include file="common/header.tpl"}

<ul class="steplist">

	{if $showAbstractSteps}
		<li{if $submitStep == 1} class="current"{/if}>
			{if $submitStep != 1 && $submissionProgress >= 1}<a href="{url op="submit" path="1" paperId=$paperId}">{/if}
			{translate key="presenter.submit.start"}{if $submitStep != 1 && $submissionProgress >= 1}</a>{/if}
		</li>

		<li{if $submitStep == 2} class="current"{/if}>
			{if $submitStep != 2 && $submissionProgress >= 2}<a href="{url op="submit" path="2" paperId=$paperId}">{/if}
			{translate key="presenter.submit.metadata"}{if $submitStep != 2 && $submissionProgress >= 2}</a>{/if}
		</li>
	{/if}

	{if $showPaperSteps}
		<li{if $submitStep == 3} class="current"{/if}>
			{if $submitStep != 3 && $submissionProgress >= 3}<a href="{url op="submit" path="3" paperId=$paperId}">{/if}
			{translate key="presenter.submit.upload"}{if $submitStep != 3 && $submissionProgress >= 3}</a>{/if}
		</li>

		{if $currentSchedConf->getSetting('acceptSupplementaryReviewMaterials')}
			<li{if $submitStep == 4} class="current"{/if}>
				{if $submitStep != 4 && $submissionProgress >= 4}<a href="{url op="submit" path="4" paperId=$paperId}">{/if}
				{translate key="presenter.submit.supplementaryFiles"}{if $submitStep != 4 && $submissionProgress >= 4}</a>{/if}
			</li>

			<li{if $submitStep == 5} class="current"{/if}>
				{if $submitStep != 5 && $submissionProgress >= 5}<a href="{url op="submit" path="5" paperId=$paperId}">{/if}
				{translate key="presenter.submit.confirmation"}{if $submitStep != 5 && $submissionProgress >= 5}</a>{/if}
			</li>
		{else}
			<li{if $submitStep == 5} class="current"{/if}>
				{if $submitStep != 5 && $submissionProgress >= 5}<a href="{url op="submit" path="5" paperId=$paperId}">{/if}
				{translate key="presenter.submit.confirmationSkipSupp"}{if $submitStep != 5 && $submissionProgress >= 5}</a>{/if}
			</li>
		{/if}
	{/if}

</ul>
