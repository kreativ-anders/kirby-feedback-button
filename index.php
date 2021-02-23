<?php

Kirby::plugin('kreativ-anders/feedback-button', [

  'options'     => [
    'accounts'         => [
      [ 'name'  => 'WhatsApp'
       ,'url' => 'https://wa.me/491512345678910'],
      [ 'name'  => 'Email'
       ,'url' => 'mailto:name@provider.tld'],
    ],
    'color' => 'purple',
  ],
  'snippets' => [
    'feedback-button' => __DIR__ . '/snippets/feedback-button.php',    
  ]

]);

?>