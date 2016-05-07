<?php
namespace i330p2\template;
require_once PHP_ROOT . '/i330p2/Setup.php';
use common\template\component\TemplateField;
use common\template\Content;


/**
 * Class EmptyStaticPage
 */
class StaticPage extends Content{
	const FIELD_BODY = "body";
	const FIELD_TITLE = "title";

	public static function getTemplateRenderContents(array $fields): string {
		return <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
	<title>HTTC {$fields[self::FIELD_TITLE]}</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/css/main.css" />
	<link rel="stylesheet" type="text/css" href="/css/global.css" />
</head>
<body>

<div id="global-nav">

</div>
<div id="global-nav-push"></div>
<h1>hi ur a noob</h1>
{$fields[self::FIELD_BODY]}

</body>
</html>
HTML;
	}

	public static function getTemplateFields_Internal(): array {
		return [
				TemplateField::newBuilder()->called(self::FIELD_BODY)->asRequired()->build(),
				TemplateField::newBuilder()->called(self::FIELD_TITLE)->asRequired()->build()
		];
	}
}
