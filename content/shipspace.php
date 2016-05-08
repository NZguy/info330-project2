<?php
require_once PHP_ROOT . '/i330p2/Setup.php';
use i330p2\template\StaticPage;

$body = <<<HTML

<div id="shipspace-content">
    <div id="shipspace-profile-pic-container">
        <img src="https://s3-us-west-1.amazonaws.com/fm-msc/i330/user-avatar.gif" alt="Profile Picture" />
    </div>
    
    <h2>Duncan Andrew</h2>
    
    <a href="/connect"><div id="shipspace-connect-button">Connect Accounts</div></a>
</div>

HTML;

StaticPage::createContent()
    ->with(StaticPage::FIELD_TITLE, "Home")
    ->with(StaticPage::FIELD_BODY, $body)
    ->render();