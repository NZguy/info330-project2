<?php
require_once PHP_ROOT . '/i330p2/Setup.php';
use i330p2\template\StaticPage;

// Make the events div first and store the HTML in a variable
$eventHtml = "";
for ($i = 1; $i <= 6; $i++) {
	$eventHtml .= ' <div class="event">
                        <div class="event-image">
                            <img src="http://static.carnivalcloud.com/~/media/Images/explore/onboard/outdoor/skyride-2.ashx" alt="event image"/>
                        </div>
                        <div class="event-text">
                            <h2>Title</h2>
                            <p>Description</p>
                        </div>
                    </div>';
}

// Php automatically spits out what's in the variable when it's between quotes
// Remember to treat what's in between <<<HTML and HTML; like quotes.
// This is the same as saying
// $body = "This is text before \r\n $eventHtml \r\n this is text after";
// Remember, \r\n means "newline"
$body = <<<HTML
	
	$eventHtml
	
HTML;

StaticPage::createContent()
    ->with(StaticPage::FIELD_TITLE, "Events")
    ->with(StaticPage::FIELD_BODY, $body)
    ->render();
