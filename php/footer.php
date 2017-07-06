<?php
class Footer
{
	public static function container() {
		$facsi = self::_sponsorImage("facsi-groupe.png");
		$bovis = self::_sponsorImage("groupe-bovis.png");

		$sponsors = [
			'amc.png', 'arc.png', 'colab.png', 'hauts-de-france.png', 'hertz.png',
			'mbs.png', 'trampa.png', 'venette.png', 'weotv-picardie.png',
		];
		$sponsorsHTML = "";
		foreach ($sponsors as $sponsor) {
			$img = self::_sponsorImage($sponsor);
			$sponsorsHTML .= "<img src=\"${img}\" class=\"sponsor\" >\n";
		}

		return <<<HTML
		<footer>
			<p>Our partners</p>
			<p class="sponsor-list">
				<a href="http://www.facsi-groupe.fr/" target="_blank">
					<img src="${facsi}" class="sponsor" alt="Facsi Groupe" >
				</a>
				<a href="http://www.groupe-bovis.com/fr/agence/porteurs-2000-95/" target="_blank">
					<img src="${bovis}" class="sponsor" alt="Groupe Bovis" >
				</a>
			</p>
			<p class="sponsor-list">$sponsorsHTML</p>
		</footer>

HTML;

	}

	private static function _sponsorImage($name) {
		return BASE_URL . "images/sponsors/" . $name;
	}
}
