<?php
class Header
{
	public static function menuContent($items, $currentUrl) {
		$output = '';
		foreach ($items as $item) {
			$label = ucfirst($item->title);
			if (empty($label)) {
				continue;
			}
			$class = $currentUrl == $item->url ? 'selected' : '';
			$output .= <<<HTML
				<li class="{$class}">
					<a href="{$item->url}">{$label}</a>
				</li>

HTML;
		}
		return $output;
	}

}
