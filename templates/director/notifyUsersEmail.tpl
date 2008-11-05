{$body}

{$conference->getConferenceTitle()}
{$schedConf->getSchedConfTitle()}
{translate key="schedConf.presentations"}
{url page="schedConf" op="view" path=$schedConf->getSchedConfId()}

{foreach name=tracks from=$publishedPapers item=track key=trackId}
{if $track.title}{$track.title}{/if}

--------
{foreach from=$track.papers item=paper}
{$paper->getPaperTitle()|strip_tags}{if $paper->getPages()} ({$paper->getPages()}){/if}

{foreach from=$paper->getPresenters() item=presenter name=presenterList}
	{$presenter->getFullName()}{if !$smarty.foreach.presenterList.last},{/if}{/foreach}


{/foreach}

{/foreach}
{literal}{$templateSignature}{/literal}
