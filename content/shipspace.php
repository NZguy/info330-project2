<?php
require_once PHP_ROOT . '/i330p2/Setup.php';
use i330p2\template\StaticPage;

$storyContents = array(
    array("http://static.carnivalcloud.com/~/media/Images/explore/onboard/outdoor/skyride-2.ashx", "SkyRide", "SkyRide is a bit like riding a bike you’ll never forget it."),
    array("http://static.carnivalcloud.com/~/media/Images/explore/onboard/cruise-entertainment/imax-1.ashx", "IMAX", "Catching a flick on your Carnival cruise just became a big, big deal."),
    array("http://static.carnivalcloud.com/~/media/Images/explore/fun-activities/havana-bar-1.ashx", "Havana Bar", "Step into the Havana Bar and enjoy an authentically Cuban experience as you cruise."),
    array("http://static.carnivalcloud.com/~/media/Images/explore/onboard/outdoor/serenity-1.ashx", "Adult Only Retreat", "I should change this content")
);

// Make the events div first and store the HTML in a variable
$storyHtml = "";
for ($i = 0; $i <= 3; $i++) {
    $storyHtml .= '
<div class="shipspace-story">
    <div class="shipspace-story-image"><img src="'.$storyContents[$i][0].'" alt="story image" /></div>
    <div class="shipspace-story-text">
        <h2>'.$storyContents[$i][1].'</h2>
        <p>'.$storyContents[$i][2].'</p>
    </div>
    <label class="shipspace-story-share" for="shipspace-story-share-button">
        <i class="fa fa-share-alt fa-2x" aria-hidden="true"></i>
    </label>
</div>';

}

$body = <<<HTML

<div id="shipspace-content">
    <div id="shipspace-profile-pic-container">
        <img src="https://s3-us-west-1.amazonaws.com/fm-msc/i330/user-avatar.gif" alt="Profile Picture" />
    </div>
    
    <h2>Duncan Andrew</h2>
    
    <a href="/connect"><div id="shipspace-connect-button">Connect Accounts</div></a>
    
    $storyHtml;
    
    <input type="checkbox" id="shipspace-story-share-button" /> 
    
    <label id="shipspace-story-share-close" for="shipspace-story-share-button"></label>
    
    <div id="shipspace-share-container">
        <h2>Share to</h2>
        <div id="shipspace-share-container-soc">
            <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
            <i class="fa fa-tumblr-square fa-2x" aria-hidden="true"></i>
            <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
            <i class="fa fa-snapchat-square fa-2x" aria-hidden="true"></i>
            <i class="fa fa-pinterest-square fa-2x" aria-hidden="true"></i>
            <i class="fa fa-vimeo-square fa-2x" aria-hidden="true"></i>
            <i class="fa fa-youtube-square fa-2x" aria-hidden="true"></i>
            <i class="fa fa-pied-piper-pp fa-2x" aria-hidden="true"></i>
            <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
            <i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i>
            <i class="fa fa-git-square fa-2x" aria-hidden="true"></i>
            <i class="fa fa-bitbucket-square fa-2x" aria-hidden="true"></i>
        </div>
    </div>
    
</div>

HTML;

StaticPage::createContent()
    ->with(StaticPage::FIELD_TITLE, "Home")
    ->with(StaticPage::FIELD_BODY, $body)
    ->render();