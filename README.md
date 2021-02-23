# Kirby Feedback Button

* [What do you get?](#what-do-you-get)
* [Why an Add-On?](#why-an-add-on)
* [Installation](#installation)
* [Notes](#notes)
    * [Kirby CMS Licence](#kirby-cms-licence)
* [Support](#support)  


## What do you get?
A functional, lean, and unstyled Kirby User Management Add-On (Pre-Release) for Kirby CMS.

**Supported Accounts** | **Comment**
---- | ----
WhatsApp | [How to link to WhatsApp from a different app (whatsapp.com)](https://faq.whatsapp.com/iphone/how-to-link-to-whatsapp-from-a-different-app/)
Twitter | 
LinkedIn | 
GitHub | 
Email | [Mailto Links (css-tricks.com)](https://css-tricks.com/snippets/html/mailto-links/)


## Why an Add-On?
IMHO a Plug-in does not make sense due to interoperability. 
Also this kind of Add-On adapts way more easy to **YOUR** project.

## Installation:
1. Download latest release.
2. Paste folder into plugins folder of Kirby.
3. Done!

## Configuration

### config.php
````php
'kreativ-anders.feedback-button.color' => 'black',`      // HEX, RGB(A), COLOR ... WHATEVER YOU DESIRE
  'kreativ-anders.feedback-button.accounts' => [
    [ 'name'  => 'WhatsApp'
     ,'url' => 'https://wa.me/491512345678910'],         // JUST KEEP THE CORRECT URLs IN MIND
    [ 'name'  => 'Email'
     ,'url' => 'mailto:hello@kreativ-anders.de'],
  ]
````

## Notes:
This Add-On is built for Kirby CMS based on **Kirby´s Starterkit Version 3.5.0**. 

### Kirby CMS Licence 
**Kirby CMS requires a dedicated licence:**

*Go to https://getkirby.com/buy*

## Support

In case this Add-On saved you some time and energy consider supporting kreativ-anders by donating via [PayPal](https://paypal.me/kreativanders) or becoming a **GitHub Sponsor**.
