<?php

if (!c::get('ka.google.verificationCode', false)) {

	return '';

} else {

	kirby()->routes(array(
		array(
			'pattern' => c::get('ka.google.verificationCode'),
			'action' => function () {
				return new Response('google-site-verification: ' . c::get('ka.google.verificationCode'));
			}
		)

	));
}