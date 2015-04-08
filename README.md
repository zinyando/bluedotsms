# BlueDOT SMS PHP
===============
A simple way to send SMS via the Bluedot SMS API.

## Usage

```php
use Zinyando\Bluedotsms\BluedotSms;

$Bluedot = new BluedotSms('username', 'password');
$message = SmsMessage('sender ID', 'recipient', 'message');
$response = $Bluedot->send($message);
```
