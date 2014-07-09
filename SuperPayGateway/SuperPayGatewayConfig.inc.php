<?php

class SuperPayGatewayConfig
{
  const DEFAULT_ENV = "production";
  const DEFAULT_TOKEN = "1401714918554";

  static protected $environment = self::DEFAULT_ENV;
  static protected $token = self::DEFAULT_TOKEN;

  private function __construct(){}

  static public function getToken(){
    return self::$token;
  }
  
  static public function setToken($value){
    if(self::$token == self::DEFAULT_TOKEN)
      self::$token = $value;
  }

  static public function getEnvironment(){
    return self::$environment;
  }
  
  static public function setEnvironment($value){
    if(self::$environment == self::DEFAULT_ENV)
      self::$environment = $value;
  }
}
