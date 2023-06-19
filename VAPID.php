<?php
require_once("vendor/autoload.php");

use Minishlink\WebPush\VAPID;

print_r(VAPID::createVapidKeys());

/*
[publicKey] => BLWKe9pIQa2mHgqh2eI4b_a-XgZFbFyvLqRA3-eUtKehdXtRGuqjIVKfkBmhm8ZtcMF_q0oEPKBVjZyqF9KzTdg
[privateKey] => M0GqiHBWLHB12TwSnoVVTxFqo621Z_J1hHSNr7KbcGs
*/