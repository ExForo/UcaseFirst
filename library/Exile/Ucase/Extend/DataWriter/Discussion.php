<?php

class Exile_Ucase_Extend_DataWriter_Discussion extends XFCP_Exile_Ucase_Extend_DataWriter_Discussion
{
	public function _verifyTitle(&$title)
	{
		$response = parent::_verifyTitle($title);

		if ($response == true && !empty($title))
		{
			$title = utf8_ucfirst($title);
		}

		return true;
	}
}