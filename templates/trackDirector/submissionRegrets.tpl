{**
 * submissionRegrets.tpl
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Show submission regrets/cancels/earlier stages
 *
 *
 * $Id: submissionRegrets.tpl,v 1.9 2008/04/04 17:06:56 asmecher Exp $
 *}
{translate|assign:"pageTitleTranslated" key="trackDirector.regrets.title" paperId=$submission->getPaperId()}
{assign var=pageTitleTranslated value=$pageTitleTranslated|escape}
{assign var="pageCrumbTitle" value="trackDirector.regrets.breadcrumb"}
{include file="common/header.tpl"}

<ul class="menu">
	<li><a href="{url op="submission" path=$submission->getPaperId()}">{translate key="submission.summary"}</a></li>
	{if $submission->getReviewMode() == REVIEW_MODE_BOTH_SEQUENTIAL}
		<li><a href="{url op="submissionReview" path=$submission->getPaperId()}">
			{translate key="submission.abstractReview"}</a>
		</li>
		<li><a href="{url op="submissionReview" path=$submission->getPaperId()}">
			{translate key="submission.paperReview"}</a>
		</li>
	{else}
		<li><a href="{url op="submissionReview" path=$submission->getPaperId()}">{translate key="submission.review"}</a></li>
	{/if}
	<li class="current"><a href="{url op="submissionHistory" path=$submission->getPaperId()}">{translate key="submission.history"}</a></li>
</ul>

{include file="trackDirector/submission/summary.tpl"}

<div class="separator"></div>

{include file="trackDirector/submission/rounds.tpl"}

{include file="common/footer.tpl"}
