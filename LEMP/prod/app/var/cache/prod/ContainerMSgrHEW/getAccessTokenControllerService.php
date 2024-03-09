<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQDfqMTbOQp57oac'."\n".'wu+6myPCnmuP5+GwHebFtJxsMxaPMFLCVDmt2nB5nw1RwQrP746cDgaepeI03Xuf'."\n".'Uc+Wo7zioRq4FU/+jbTIZd0vCywSTqp/dliopWM8TzFcijrYRWFip+EAPqylY5rv'."\n".'AQhH2VNDdJkSe5sFe8RwBfbg/2VHotBDmJN5NJflSFumgh/ZAcnqWr+lEO1QfoXG'."\n".'/WcrCE1mlm3eDhKZP3ffWS7QA6/nL+StsnKdFFeb+zasi+f+k3XQ+3bsTVMvSuzf'."\n".'rMtPAZJF9EOvvy3Zv4Du3MzD0voAooR2mu2MoBB3vK0q04/KGalQSkxrlDD77S/O'."\n".'Vq9tjhlhAgMBAAECggEADbj4Iw8z4llNLw8S0Fs2bXl01gZ/JWQgRZ8YPddAmhZ3'."\n".'7W5nf5A4eG3Wzl5OwIVNNavyogdBgsbYD+VgHDj9nNYPop3EI7UkE2uUj49a6+Ch'."\n".'u2JSfD5xgUDGoYvlomFXYUs1leNCin87AVEJ5gaigjAEOEsXLtXyLoFfLVzeJO/u'."\n".'ATIxqrEculGqHDC1sZAMC714OnuIUquklsPzYi4N1fVzoKrgKDLJUVJB2fCHXxK7'."\n".'DUHa724knqb9CdrC3ZfR/hjZxrlnXMl1/uPKNYC5+E8fDkk7APby+6bpCcRZer3r'."\n".'J1gFeqqN3C8XFyz3DnjuoCwtA0plIfJhFCxyk5y9cQKBgQD2YAGkvqxjJkL1wrfR'."\n".'99P2PL4jVltkbgmtPG8PxHl2ZYu4q/Q67pw8KIjchKqM/5QKib4KRHAPv8XjdO4b'."\n".'qDz13LGpmt2adw4HGs0IaHDX0vZVokyXCNaBGuHlJK62VjDF+ZeVy1kXchoyxX29'."\n".'6tQYJS98s+JyWC1PuHN5gcqe5QKBgQDoZZUYT0TywtDo/KGhEsqIgKGDzJdu5WMh'."\n".'WU7bb2EwxZ+VrG86ucsuuC2EYwH1SB6dFfREnJFutZaP9uGObny5xJzUihZkmuYy'."\n".'2I9491BEupwuArvJSmMtX9xNIBqSSYUKnamV2Vc817weMN8BNi0c+MH8YZedYmVX'."\n".'S9ez+a+szQKBgCDYYb+1z8OUGT8sS1dJo89i/7I0VBDKfq3Crce7WLoJBZyECBZH'."\n".'Mzrt6HkFkrsjY3gYLuatgwcGePo+33N+dUoNtv22cK6kCpG15/mj+s87B64Y6f8E'."\n".'pZwmmlDzF/uk9/GcubG1n1X51zZHj+DeypHBe1gznw/BY6EKJRLg08NlAoGAbRus'."\n".'OUKWO2eNz6U0eTwqTJYfvpJikpUtym10oX+UYOKXvxy7CBZMt32PGTWmqLMYdGXn'."\n".'TgM4IIMu0h513XowIsOVYhAG3WsAIuUbzw5F6E64nr13ztSW5am485jcAMx1ovtM'."\n".'sGbfF1iuIHqPaLE30v9TjBuBpEmbDLY16nCSsw0CgYBXtHpAglOXcrIeXx5oUioG'."\n".'Rd29efOF7w9+eA2ClMnSR+OYVrJucuZPAsOG7FWv8Lw8RIr/UIL/uAD3XCWAnVQE'."\n".'LYYc6MqQX7nF8KUglPuUEwka5Pkms1PPkf+/C9BbQlqGJpgQdHwrJLucgwZHUywG'."\n".'mSA9sJgR8UgHsSk15QzHFA=='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def00000c94058cd10f606cecbf2e4f4761b4df8da7bfe80c1046ca5904b628a4a39c16aa866f939f9cd783b39fe6a1b133aa879c8d25acce2c436aa18f235d51e950293');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);