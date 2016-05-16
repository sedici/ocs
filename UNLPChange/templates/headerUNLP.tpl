{**
 * headerUNLP.tpl
 *
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 * Added by PREBI SEDICI team at UNLP; http://sedici.unlp.edu.ar
 *
 *}

<html>
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1">
<link rel="stylesheet" href="{$baseUrl}/UNLPChange/styles/commonUNLP.css" type="text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
{if $leftSidebarCode || $rightSidebarCode}<link rel="stylesheet" href="{$baseUrl}/UNLPChange/styles/sidebarUNLP.css" type="text/css" />{/if}
{if $leftSidebarCode}<link rel="stylesheet" href="{$baseUrl}/UNLPChange/styles/leftSidebarUNLP.css" type="text/css" />{/if}
{if $rightSidebarCode}<link rel="stylesheet" href="{$baseUrl}/UNLPChange/styles/rightSidebarUNLP.css" type="text/css" />{/if}
{if $leftSidebarCode && $rightSidebarCode}<link rel="stylesheet" href="{$baseUrl}/UNLPChange/styles/bothSidebarsUNLP.css" type="text/css" />{/if}


<div id="UnlpHeader">
<!-- logo de la UNLP -->
	<div id="rev_logo"><a href="http://www.unlp.edu.ar"><img src="{$baseUrl}/templates/images/unlp.png" border="0"/></a></div>
	<div id="rev_menu">
	<ul>
		<li><a href="{$baseUrl}">Portal de Congresos</a></li>
		<li><a href="http://sedici.unlp.edu.ar">Servicio de Difusi&oacute;n de la Creaci&oacute;n Intelectual</a></li>
		<li><a href="javascript:openHelp('{if $helpTopicId}{get_help_id key="$helpTopicId" url="true"}{else}{url page="help"}{/if}')">{translate key="navigation.conferenceHelp"}</a></li>
	</ul>
	</div>
</div>
<!-- FIN LOGO UNLP -->
</html>

