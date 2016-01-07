{**
 * downloadPDF.tpl
 *
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 * Added by PREBI SEDICI team at UNLP; http://sedici.unlp.edu.ar
 *
 *}
<a href="{url page="paper" op="view" path=$paperId|to_array:$galley->getId()}.pdf" class="action" target="_parent">{$galley->getGalleyLabel()|escape}</a>
