<?php
/**
 * Info Banner
 *
 * Plugin to show usefull banner on top of message list
 *
 * @version 1.0
 * @author dharman
 * @url http://roundcube.net/plugins/info_banner
 */
class info_banner extends rcube_plugin
{
	public $task = 'mail';
	private $map;

	function init()
	{
		$this->include_script('info_banner.js');
		$this->add_hook('template_object_messages', array($this, 'addInfoBanner'));
		$this->add_texts('localization/', true);
	}

	function addInfoBanner($p) {
		$p['content'] = '<div id="infobanner" style="text-align:center; background-color:#F9EDBE;">'.$this->gettext('spamExpiration').'</div>'.$p['content'];
		
		return $p;
	}
}