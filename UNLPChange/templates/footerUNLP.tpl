{**
 * footerUNLP.tpl
 *
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 * Added by PREBI SEDICI team at UNLP; http://sedici.unlp.edu.ar
 *
 *}

<div id="footer">
<p>Todos los derechos reservados &copy; 2008 - {$smarty.now|date_format:"%Y"}  
<a href="http://www.unlp.edu.ar" target="_blank">Universidad Nacional de La Plata</a> 
<br> Powered by <a href="http://pkp.sfu.ca/?q=ocs" target="_blank">Open Congress Systems</a> 
and 
<a href="http://www.prebi.unlp.edu.ar"> PREBI </a>-<a href="http://sedici.unlp.edu.ar"> SEDICI </a></p>
{literal}
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15165518-13']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>{/literal}
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</div><!-- footer -->
