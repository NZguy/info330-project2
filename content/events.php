<?php
require_once PHP_ROOT . '/i330p2/Setup.php';
use i330p2\template\StaticPage;

$eventContents = array(
	array("http://static.carnivalcloud.com/~/media/Images/explore/onboard/outdoor/skyride-2.ashx", "SkyRide", "SkyRide is a bit like riding a bike — you’ll never forget it."),
	array("http://static.carnivalcloud.com/~/media/Images/explore/onboard/cruise-entertainment/imax-1.ashx", "IMAX", "Catching a flick on your Carnival cruise just became a big, big deal."),
	array("http://static.carnivalcloud.com/~/media/Images/explore/fun-activities/havana-bar-1.ashx", "Havana Bar", "Step into the Havana Bar and enjoy an authentically Cuban experience as you cruise."),
	array("http://static.carnivalcloud.com/~/media/Images/explore/onboard/outdoor/serenity-1.ashx", "Serenity Adult Only Retreat", "Serenity's the faraway place... that's actually quite close to it all.")
);

// Make the events div first and store the HTML in a variable
$eventHtml = "";
for ($i = 0; $i <= 3; $i++) {
	$eventHtml .= ' 

 <div class="event">
	<div class="event-image">
		<img src="'.$eventContents[$i][0].'" alt="event image"/>
	</div>
	<div class="event-text">
		<h2>'.$eventContents[$i][1].'</h2>
		<p>'.$eventContents[$i][2].'</p>
	</div>
</div>';

}

// Php automatically spits out what's in the variable when it's between quotes
// Remember to treat what's in between <<<HTML and HTML; like quotes.
// This is the same as saying
// $body = "This is text before \r\n $eventHtml \r\n this is text after";
// Remember, \r\n means "newline"
$body = <<<HTML

<select id="event-order">
	<option>Trending</option>
	<option>Top</option>
	<option>New</option>
	<option>Coming up</option>
</select>
	
<?-- Link should make the categories div appear -->	
<a href="#">
	<div id="event-categories-button">
		<label for="event-categories-controller">Categories</label>
	</div>
</a>

<input type="checkbox" id="event-categories-controller" /> 

<div id="event-categories-container">
	<h2>Categories</h2>
	<div class="event-category">
		<label for="event-category-a">All</label>
		<input type="radio" name="category" id="event-category-a" class="radioo" />
	</div>
	<div class="event-category">
		<label for="event-category-b">Adults</label>
		<input type="radio" name="category" id="event-category-b" class="radioo" />
	</div>
	<div class="event-category">
		<label for="event-category-c">Kids</label>
		<input type="radio" name="category" id="event-category-c" class="radioo" />
	</div>
	<div class="event-category">
		<label for="event-category-d">Singles</label>
		<input type="radio" name="category" id="event-category-d" class="radioo" />
	</div>
	<div class="event-category">
		<label for="event-category-e">Families</label>	
		<input type="radio" name="category" id="event-category-e" class="radioo" />
	</div>
	<div class="event-category">	
		<label for="event-category-f">Everyone</label>
		<input type="radio" name="category" id="event-category-f" class="radioo" />
	</div>
	<div id="event-filter-button">Additional Filters</div>
	
	<!--
	<form id="event-category-radios">
		<input type="radio" name="category" id="event-category-a" class="radioo" />
		<input type="radio" name="category" id="event-category-b" class="radioo" />
		<input type="radio" name="category" id="event-category-c" class="radioo" />
		<input type="radio" name="category" id="event-category-d" class="radioo" />
		<input type="radio" name="category" id="event-category-e" class="radioo" />
		<input type="radio" name="category" id="event-category-f" class="radioo" />
	</form>
	-->
	
</div>

$eventHtml
	
HTML;

StaticPage::createContent()
    ->with(StaticPage::FIELD_TITLE, "Events")
    ->with(StaticPage::FIELD_BODY, $body)
    ->render();
