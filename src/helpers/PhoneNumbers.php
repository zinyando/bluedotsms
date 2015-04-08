<?php namespace Zinyando\Bluedotsms;

class PhoneNumbers{
  /**
   * Internationalizes a valid Zimbabwean phone number
   * @param int $number Phone number to internationalize
   * @return int
   */
  public function internationalizeZimbabweanPhoneNumber($number){
    $number = (int)$number;
    if (substr($number, 0, 3) == '263'){
      return $number;
    }
    else{
      return '263'.$number;
    }
  }
  /**
   * Validates if a given Zimbawean phone number is one of Telecel, Econet or Netone
   * @param int $number Phone number to validate
   * @return boolean
   */
  public function isValidZimbabweanPhoneNumber($number){
    if (!is_numeric($number)) return false;
    $number = (int)$number;
    if ($this->is_telecel($number) || $this->is_econet($number) || $this->is_netone($number) ) return true;
    return false;
  }
  /**
   * Check if a phone number is an EWZ number
   * @param int $number
   * @return boolean
   */
  private function is_econet($number){
    $floor1 = 770000000;
    $ceiling1 = 789999999;
    $floor2 = 263770000000;
    $ceiling2 = 263789999999;
    if ( ($number > $floor1) AND ($number < $ceiling1) ){
      return true;
    }
    if ( ($number > $floor2) AND ($number < $ceiling2) ){
      return true;
    }
    return false;
  }
  /**
   * Check if a phone number is a Telecel Zimbabwe number
   * @param int $number
   * @return boolean
   */
  private function is_telecel($number){
    $floor1 = 730000000;
    $ceiling1 = 739999999;
    $floor2 = 263730000000;
    $ceiling2 = 263739999999;
    if ( ($number > $floor1) AND ($number < $ceiling1) ){
      return true;
    }
    if ( ($number > $floor2) AND ($number < $ceiling2) ){
      return true;
    }
    return false;
  }
  /**
   * Check if a phone number is a Net*One Zimbabwe number
   * @param int $number
   * @return boolean
   */
  private function is_netone($number){
    $floor1 = 710000000;
    $ceiling1 = 719999999;
    $floor2 = 263710000000;
    $ceiling2 = 263719999999;
    if ( ($number > $floor1) AND ($number < $ceiling1) ){
      return true;
    }
    if ( ($number > $floor2) AND ($number < $ceiling2) ){
      return true;
    }
    return false;
  }

}
