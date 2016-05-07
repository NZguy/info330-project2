<?php
require_once PHP_ROOT . '/i330p2/Setup.php';
use i330p2\template\StaticPage;

// Php automatically spits out what's in the variable when it's between quotes
// Remember to treat what's in between <<<HTML and HTML; like quotes.
// This is the same as saying
// $body = "This is text before \r\n $eventHtml \r\n this is text after";
// Remember, \r\n means "newline"
$body = <<<HTML

<div id="filter-content">
    <h2>Age Group</h2>
    <select id="filter-age">
        <option>Kids (5+)</option>
        <option>Teens (13+)</option>
        <option>Adults (21+)</option>
        <option>Seniors (60+)</option>
    </select>
    
    <h2>Party Size</h2>
    <select id="filter-size">
        <option>Solo (1)</option>
        <option>Couple (2)</option>
        <option>Family</option>
        <option>etc idk</option>
    </select>
    
    <h2>Time</h2>
    <select id="filter-time">
        <option>Morning</option>
        <option>Mid Day</option>
        <option>Day</option>
        <option>Afternoon</option>
        <option>Late Night</option>
    </select>
    
    <h2>Interests</h2>
    <form id="filter-interests">
        <label><input type="checkbox" />Sports</label>
        <label><input type="checkbox" />Relaxing</label>
        <label><input type="checkbox" />Relaxing</label>
        <label><input type="checkbox" />Relaxing</label>
        <label><input type="checkbox" />Relaxing</label>
        <label><input type="checkbox" />Relaxing</label>
        <label><input type="checkbox" />Relaxing</label>
        <label><input type="checkbox" />Relaxing</label>
    </form>
<div/>
	
HTML;

StaticPage::createContent()
    ->with(StaticPage::FIELD_TITLE, "Events")
    ->with(StaticPage::FIELD_BODY, $body)
    ->render();
