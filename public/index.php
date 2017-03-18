<?php
set_include_path(__DIR__.'/../php');
require_once('config.php');
require_once('content.php');
require_once('footer.php');
require_once('head.php');
require_once('header.php');
require_once('utils.php');

$currentPageId = Utils::getCurrentPageId($_SERVER['SCRIPT_URL']);
$pageInfo = Utils::getPageInfo($MENU_ENTRIES, $currentPageId);
?>
<html>
	<head>
<?php echo Head::content(KEYWORDS, $pageInfo, 'css/style.css'); ?>
	</head>
	<body>
		<div class="wrapper">
			<header>
				<ul role="nav" class="navigation-menu">
<?php echo Header::menuContent($MENU_ENTRIES, $currentPageId) ?>
				</ul>
				<img src="images/banner.jpg" alt="Banner of the championships.">
			</header>
			<main role="main" class="main">
<?php echo Content::getPageContent($pageInfo); ?>
			</main>
<?php echo Footer::container() ?>
		</div>
	</body>
</html>