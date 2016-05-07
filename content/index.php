<?php
require_once PHP_ROOT . '/i330p2/Setup.php';
use i330p2\template\StaticPage;

$body = <<<HTML
this is some content
HTML;

StaticPage::createContent()
		->with(StaticPage::FIELD_TITLE, "Home")
		->with(StaticPage::FIELD_BODY, $body)
		->render();
