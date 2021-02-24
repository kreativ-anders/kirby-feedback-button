# Kirby Feedback Button

* [What do you get?](#what-do-you-get)
* [Why this Plug-In?](#why-this-plug-in)
* [External Requirements](#external-requirements)
* [Installation](#installation)
    * [Configuration](#configuration)
* [Notes](#notes)
* [Support](#support)  

## What do you get?
A little floating button in the lower right corner that show those links to your services you already use.

[See a demo on codepen.io](https://codepen.io/Manuel-Steinberg/pen/MWbJLWm) to see what we are talking about.

## Why this Plug-In?
There are tons of tools out there that provide a real-time chat functionality or immediately forward messages to your Slack channel. 

>But why using a third party service in the beginning? 
>The easiest way to create a bond with your customers/visitors is to provide a link to yur desired communication platform somewhere on your page! I do not want to check on another platform what´s going on.

### Why asking for feedback anyway?
Just because you think that might be good it does not mean your customers think the same. 

## External Requirements
This Plug-In requires Font Awesome. 
So ensure to load it somewhere in your templates or snippets, e.g.:

````php
<?= css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css') ?>
````

## Installation:
1. Download latest release.
2. Paste folder into plugins folder (*site/plugins/*) of Kirby.
3. Done!

*(In case you are really fancy you can also add Plug-Ins via git-submodule in the plugins folder. [Checkout Kirby docs how to do that](https://getkirby.com/docs/cookbook/setup/git#setting-up-kirby-as-a-git-submodule))*

### Configuration

#### Add options in your config.php
````php
'kreativ-anders.feedback-button.color' => 'black',       // HEX, RGB(A), COLOR ... WHATEVER YOU DESIRE
  'kreativ-anders.feedback-button.accounts' => [
    [ 'name'  => 'WhatsApp'
     ,'url' => 'https://wa.me/491512345678910'],         // JUST KEEP THE CORRECT URLs IN MIND
    [ 'name'  => 'Email'
     ,'url' => 'mailto:hello@kreativ-anders.de'],
  ]
````

**Supported Accounts** | **Comment**
---- | ----
WhatsApp | [How to link to WhatsApp from a different app (whatsapp.com)](https://faq.whatsapp.com/iphone/how-to-link-to-whatsapp-from-a-different-app/)
Twitter | 
LinkedIn | 
GitHub | 
Email | [Mailto Links (css-tricks.com)](https://css-tricks.com/snippets/html/mailto-links/)

### Load Plug-In CSS 
Add the following code somewhere in your template or snippets:

````php
<?= css('media/plugins/kreativ-anders/feedback-button/main.css') ?>
````

### Add Feedback Button
Add the following code somewhere in your template or snippets:

> Do not add the snippet twice. That yields to an ugly ghosting effect. 

````php
<?php snippet('feedback-button') ?>
````

### Done!

## Notes:
This Plug-In is built for Kirby CMS based on **Kirby´s Starterkit Version 3.5.0**. 

### Kirby CMS Licence 
**Kirby CMS requires a dedicated licence:**

*Go to https://getkirby.com/buy*

## Support

In case this Plug-in saved you some time and energy consider supporting kreativ-anders by donating via [PayPal](https://paypal.me/kreativanders) or becoming a **GitHub Sponsor**.
