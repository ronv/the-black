<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

c::set('ka.sitemap.excludeSites', array('error', 'sitemap'));
c::set('ka.sitemap.showInvisibleSites', false);
c::set('ka.sitemap.importantSites', array('contact'));

c::set('debug',true);

c::set('panel.install', true);

c::set('ka.google.verificationCode', 'google9d...e8.html');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/
