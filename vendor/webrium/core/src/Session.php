<?php
namespace webrium\core;

use webrium\core\Directory;

class Session
{

  public static $session_startAppStatus=false;
  private static $save_path=false;

  public static function set_path($path)
  {
    self::$save_path=$path;
  }

  public static function start()
  {
    if (Session::$session_startAppStatus == false) {

      if (self::$save_path!=false) {
        \session_save_path(self::$save_path);
      }

      \session_start();

      Session::$session_startAppStatus=true;
    }
  }

  public static function set($param,$value=false)
  {
    Session::start();
    if (is_array($param)) {
      foreach ($param as $key => $value) {
        $_SESSION[$key]=$value;
      }
    }
    else {
      $_SESSION[$param]=$value;
    }

  }

  public static function get($name=false)
  {
    Session::start();

    if (isset($_SESSION[$name]) ==false || $_SESSION[$name]==null) {
      return false;
    }
    return $_SESSION[$name];
  }

  public static function all()
  {
    Session::start();
    return $_SESSION;
  }

  public static function remove($name)
  {
    Session::start();
    if (isset($_SESSION[$name]) ==false || $_SESSION[$name]==null) {
      return false;
    }
    unset($_SESSION[$name]);
    return true;
  }

  public static function clear()
  {
    Session::start();
    \session_unset();
    \session_destroy();
  }

  public static function lifetime($sec){
    ini_set('session.cookie_lifetime', $sec);
    ini_set('session.gc_maxlifetime' , $sec);
  }

}
