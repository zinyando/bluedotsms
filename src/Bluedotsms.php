<?php namespace Zinyando\Bluedotsms;

use GuzzleHttp\Client;
use Zinyando\Bluedotsms\PhoneNumbers;

class Bluedotsms {

  private $username, $password, $sender;

  public function __construct($username, $password) {
    $this->username = $username;
    $this->password = $password;
  }

  public function send($sender, $recipient, $message){
    $this->sender = $sender;
    $this->recipient = $recipient;
    $this->message = $message;

    $PhoneNumbers = new PhoneNumbers();

    $url = 'http://'.rawurlencode($this->username).':'.$this->password.'@api.bluedotsms.com:12003/smsp-in?originator'.'='.rawurlencode($sender).'&mobile_number'.'='.$recipient.'&text='.rawurlencode($message).'&request_delivery=true';
    $client = new Client();
    $response = $client->post($url);
  }

}
