<?php

class Exile_Ucase_Listener
{
	public static function templatePostRenderAdjustTitleCase($templateName, &$content, array &$containerData, XenForo_Template_Abstract $template)
	{
		$content = $template->create('exileUcase_option_template_adjustTitleCase', $template->getParams())->__toString();
	}

	public static function extendDataWriterDiscussion($class, array &$extend)
	{
		$extend[] = 'Exile_Ucase_Extend_DataWriter_Discussion';
	}
}