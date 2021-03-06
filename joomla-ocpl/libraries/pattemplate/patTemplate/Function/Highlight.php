<?PHP
/**
 * Generic highlighting function using PEAR::Text_Highlighter
 *
 * $Id: Highlight.php 8287 2007-08-01 08:38:59Z eddieajau $
 *
 * @package		patTemplate
 * @subpackage	Functions
 * @author		Stephan Schmidt <schst@php.net>
 */

// Check to ensure this file is within the rest of the framework
defined('JPATH_BASE') or die();

/**
 * patTemplate function that highlights PHP code in your templates
 *
 * $Id: Highlight.php 8287 2007-08-01 08:38:59Z eddieajau $
 *
 * @package		patTemplate
 * @subpackage	Functions
 * @author		Stephan Schmidt <schst@php.net>
 */
class patTemplate_Function_Highlight extends patTemplate_Function
{
	/**
	* name of the function
	* @access	private
	* @var		string
	*/
	var $_name = 'Highlight';

	/**
	* call the function
	*
	* @access	public
	* @param	array	parameters of the function (= attributes of the tag)
	* @param	string	content of the tag
	* @return	string	content to insert into the template
	*/
	function call($params, $content)
	{
		if (!include_once 'Text/Highlighter.php') {
			return false;
		}
		include_once 'Text/Highlighter/Renderer/Html.php';

		if (!isset($params['type'])) {
			return $content;
		}
		$type = $params['type'];
		unset($params['type']);

		if (isset($params['numbers']) && defined($params['numbers'])) {
			$params['numbers'] = constant($params['numbers']);
		}

		$renderer	= &new Text_Highlighter_Renderer_HTML($params);
		$highlighter = &Text_Highlighter::factory($type);
		$highlighter->setRenderer($renderer);
		return $highlighter->highlight(trim($content));
	}
}
?>
