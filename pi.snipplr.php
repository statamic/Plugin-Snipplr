<?php
class Plugin_snipplr extends Plugin {

  var $meta = array(
    'name'       => 'Snipplr',
    'version'    => '0.9',
    'author'     => 'Jack McDade',
    'author_url' => 'http://jackmcdade.com'
  );

  static public function __callStatic($method, $args) {
    return "<div id=\"snipplr_embed_{$method}\" class=\"snipplr_embed\"><script type=\"text/javascript\" src=\"http://snipplr.com/js/embed.js\"></script><script type=\"text/javascript\" src=\"http://snipplr.com/json/{$method}\"></script>";
  }

}
