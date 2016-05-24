<?php

class XenForo_Option_ImageLibrary
{
	public static function renderOption(XenForo_View $view, $fieldPrefix, array $preparedOption, $canEdit)
	{
		$preparedOption['formatParams'] = XenForo_Helper_TimeZone::getTimeZones();

		return XenForo_ViewAdmin_Helper_Option::renderOptionTemplateInternal(
			'option_template_imageLibrary',
			$view, $fieldPrefix, $preparedOption, $canEdit
		);
	}

	public static function verifyOption(&$optionValue, XenForo_DataWriter $dw, $fieldName)
	{
		// TODO: verify that the chosen library exists.

		return true;
	}
}