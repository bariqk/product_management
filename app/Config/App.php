<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class App extends BaseConfig
{
    public $baseURL = 'http://localhost:8080/';
    public $indexPage = 'index.php';
    public $uriProtocol = 'REQUEST_URI';
    public $defaultLocale = 'en';
    public $negotiateLocale = false;
    public $supportedLocales = ['en'];
    public $appTimezone = 'UTC';
    public $charset = 'UTF-8';
    public $forceGlobalSecureRequests = false;
    public $sessionDriver = 'CodeIgniter\Session\Handlers\FileHandler';
    public $sessionCookieName = 'ci_session';
    public $sessionExpiration = 7200;
    public $sessionSavePath = WRITEPATH . 'session';
    public $sessionMatchIP = false;
    public $sessionTimeToUpdate = 300;
    public $sessionRegenerateDestroy = false;
    public $cookiePrefix = '';
    public $cookieDomain = '';
    public $cookiePath = '/';
    public $cookieSecure = false;
    public $cookieHTTPOnly = true;
    public $cookieSameSite = 'Lax';
    public $proxyIPs = '';
    public $CSRFTokenName = 'csrf_test_name';
    public $CSRFHeaderName = 'X-CSRF-TOKEN';
    public $CSRFCookieName = 'csrf_cookie_name';
    public $CSRFExpire = 7200;
    public $CSRFRegenerate = true;
    public $CSRFRedirect = true;
    public $CSPEnabled = false;
}