<?php
class Content
{
	public static function getPageContent($pageInfo) {
		if (!$pageInfo) {
			return '';
		}
	ob_start();
    include '../pages/' . $pageInfo->file;
    $content = ob_get_contents();
    ob_end_clean();
	return $content.PHP_EOL;
	}	
}
