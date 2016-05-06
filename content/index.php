<?php
require_once PHP_ROOT . '/i330p2/Setup.php';
use i330p2\template\StaticPage;

$body = <<<HTML

<button id="hamburger1">&#9776</button>
<div id="nav" class="close">
	<button id="hamburger2">&#9776</button>
	<ul>
		<li>Profile</li>
		<li>Events</li>
		<li>BoatSpace</li>
		<li>Help</li>
	</ul>
</div>

HTML;

StaticPage::createContent()
		->with(StaticPage::FIELD_TITLE, "Home")
		->with(StaticPage::FIELD_BODY, $body)
		->render();
