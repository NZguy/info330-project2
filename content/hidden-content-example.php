<?php
require_once PHP_ROOT . '/i330p2/Setup.php';
use i330p2\template\StaticPage;

$body = <<<HTML

<link type="text/css" rel="stylesheet" href="/css/hidden-content-example.css" />

<div>
	<!-- Labels act like a click proxy for <input>s. They'll either give focus to (if it's a text
	 box), or act as a proxy to a radio or checkbox. What this means is, clicking the label acts
	 like clicking the input thing, whatever it is. This should always be present somewhere to
	 be able to toggle on/off the checkbox. Also, there can be more than 1 label pointing to a
	 checkbox. You just have to make sure the for="id" exists and that's it. -->
	<label for="example-content-controller">Click me!</label>
</div>

<!-- We use this checkbox like a boolean variable in javascript. Essentially when it's in one state
 (checked or unchecked) the controlled content's display is "none" (invisible). When it's in
 the other state, the controlled content's display is "block" (visible). It doesn't matter which
 way you associate the checkbox state to (eg. It doesn't matter if checked means visible or if
 unchecked means visible. You code that in the css later.) For simplicity's sake, though, I use 
 unchecked as invisible, and checked as visible. -->
<input type="checkbox" id="example-content-controller" />

<!-- This div is here to explain stuff later -->
<div>Move div. Get out da way.</div>

<!-- And finally, our content. Remember, inside this can be any sorts of styled stuff you want.
 It's the outside container we really care about. Lets move onto the CSS. -->
<div id="example-content">
	This is the content being controlled
</div>
HTML;

StaticPage::createContent()
		->with(StaticPage::FIELD_TITLE, "Home")
		->with(StaticPage::FIELD_BODY, $body)
		->render();
