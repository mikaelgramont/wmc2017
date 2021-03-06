<?php
set_include_path(__DIR__.'/../php');
require_once('config.php');
require_once('content.php');
require_once('footer.php');
require_once('head.php');
require_once('header.php');
require_once('utils.php');
define('BASE_URL', Utils::getBaseUrl());
$currentPageId = Utils::getCurrentPageId($_SERVER['REQUEST_URI']);
$pageInfo = Utils::getPageInfo($MENU_ENTRIES, $currentPageId);
?>
<html>
	<head>
<?php echo Head::content(KEYWORDS, $pageInfo, 'css/style.css'); ?>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<header>
				<ul role="nav" class="navigation-menu">
<?php echo Header::menuContent($MENU_ENTRIES, $currentPageId) ?>
				</ul>
				<a aria-hidden="true" class="banner" href="<?php echo BASE_URL ?>">
				</a>
			</header>
			<main role="main" class="main">
				<section>
<?php echo Content::getPageContent($pageInfo); ?>
				</section>
			</main>
		</div>
<?php echo Footer::container() ?>
<?php echo Utils::analytics('UA-87612341-1'); ?>
	</body>
</html>