<?php

namespace App\Util\Webfinger;

use App\User;
use App\Util\Lexer\Nickname;

class WebfingerUrl {

  public static function generateWebfingerUrl($url)
  {
    $url = Nickname::normalizeProfileUrl($url);
    $domain = $url['domain'];
    $username = $url['username'];
    $path = "https://{$domain}/.well-known/webfinger?resource={$username}@{$domain}";
    return $path;
  }

}