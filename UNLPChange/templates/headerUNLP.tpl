<html>
<link rel="stylesheet" href="{$baseUrl}/UNLPChange/styles/commonUNLP.css" type="text/css"/>
<link rel="stylesheet" href="{$baseUrl}/UNLPChange/styles/bothSidebarsUNLP.css" type="text/css" />
<link rel="stylesheet" href="{$baseUrl}/UNLPChange/styles/rightSidebarUNLP.css" type="text/css" />
<link rel="stylesheet" href="{$baseUrl}/UNLPChange/styles/leftSidebarUNLP.css" type="text/css" />
<link rel="stylesheet" href="{$baseUrl}/UNLPChange/styles/sidebarUNLP.css" type="text/css" />
<div id="UnlpHeader">
<!-- logo de la UNLP -->
	<div id="rev_logo"><a href="http://www.unlp.edu.ar"><img src="{$baseUrl}/templates/images/unlp.jpg" border="0"/></a></div>
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

