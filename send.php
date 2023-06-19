<?php
require_once("vendor/autoload.php");

use Minishlink\WebPush\Subscription;
use Minishlink\WebPush\WebPush;


$auth = [
    'VAPID' => [
        'subject' => 'mailto:me@website.com', // can be a mailto: or your website address
        'publicKey' => 'BLWKe9pIQa2mHgqh2eI4b_a-XgZFbFyvLqRA3-eUtKehdXtRGuqjIVKfkBmhm8ZtcMF_q0oEPKBVjZyqF9KzTdg', // (recommended) uncompressed public key P-256 encoded in Base64-URL
        'privateKey' => 'M0GqiHBWLHB12TwSnoVVTxFqo621Z_J1hHSNr7KbcGs', // (recommended) in fact the secret multiplier of the private key encoded in Base64-URL 
    ],
];

$webPush = new WebPush($auth);

$report = $webPush->sendOneNotification(
    Subscription::create(json_decode('{"endpoint":"https://fcm.googleapis.com/fcm/send/eOmO_2Z-nHA:APA91bHDoFG8hTpuf11C9t_rVP2IOIOcpDimDLF06DYI9NtRPnQlpRN89KeLP2rl6w8C7WryiEPzkCg3XBwQxmhfL36JNMKGdtNSwd4UegS-7sByuGlYjg6FubHASYrrHVcTfefZaV9W","expirationTime":null,"keys":{"p256dh":"BNBaksmindsZK9u_mghq-Omb1_9bN-hJVP8KjLWB6mlHPf_R3JLmyd-0LwYBGErAjItB2Pex6bAKYFFR_gDdYpo","auth":"H9M9HgHX4a3xmcChKQNWFA"}}',true))
    , '{"title":"Hi from php" , "body":"php is amazing!" , "url":"./?message=123"}', ['TTL' => 5000]);

    print_r($report);