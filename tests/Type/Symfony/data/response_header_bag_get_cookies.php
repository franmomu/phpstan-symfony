<?php declare(strict_types = 1);

use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use function PHPStan\Testing\assertType;

$headerBag = new ResponseHeaderBag();
$headerBag->setCookie(Cookie::create('cookie_name'));

assertType('array<int, Symfony\Component\HttpFoundation\Cookie>', $headerBag->getCookies());
assertType('array<int, Symfony\Component\HttpFoundation\Cookie>', $headerBag->getCookies(ResponseHeaderBag::COOKIES_FLAT));
assertType('array<string, array<string, array<string, Symfony\Component\HttpFoundation\Cookie>>>', $headerBag->getCookies(ResponseHeaderBag::COOKIES_ARRAY));
