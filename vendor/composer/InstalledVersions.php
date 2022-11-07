<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.0.0+no-version-set',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => '__root__',
  ),
  'versions' => 
  array (
    '__root__' => 
    array (
      'pretty_version' => '1.0.0+no-version-set',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'brick/math' => 
    array (
      'pretty_version' => '0.9.3',
      'version' => '0.9.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ca57d18f028f84f777b2168cd1911b0dee2343ae',
    ),
    'fgrosse/phpasn1' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'eef488991d53e58e60c9554b09b1201ca5ba9296',
    ),
    'paragonie/constant_time_encoding' => 
    array (
      'pretty_version' => 'v2.5.0',
      'version' => '2.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9229e15f2e6ba772f0c55dd6986c563b937170a8',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.1|2.0',
      ),
    ),
    'psr/event-dispatcher' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-client' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
    ),
    'psr/http-factory' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/log' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fe5ea303b0887d5caefd3d431c3e61ad47037001',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0|3.0',
      ),
    ),
    'spomky-labs/aes-key-wrap' => 
    array (
      'pretty_version' => 'v7.0.0',
      'version' => '7.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fbeb834b1f83aa8fbdfbd4c12124f71d4c1606ae',
    ),
    'symfony/config' => 
    array (
      'pretty_version' => 'v6.1.0',
      'version' => '6.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ed8d12417bcacd2d969750feb1fe1aab1c11e613',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v6.1.0',
      'version' => '6.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c9646197ef43b0e2ff44af61e7f0571526fd4170',
    ),
    'symfony/dependency-injection' => 
    array (
      'pretty_version' => 'v6.1.0',
      'version' => '6.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fc1fcd2b153f585934e80055bb3254913def2a6e',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '07f1b9cc2ffee6aaafcf4b710fbc38ff736bd918',
    ),
    'symfony/error-handler' => 
    array (
      'pretty_version' => 'v6.1.0',
      'version' => '6.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd02c662651e5de760bb7d5e94437113309e8f8a0',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v6.1.0',
      'version' => '6.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a0449a7ad7daa0f7c0acd508259f80544ab5a347',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '02ff5eea2f453731cfbc6bc215e456b781480448',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.0|3.0',
      ),
    ),
    'symfony/filesystem' => 
    array (
      'pretty_version' => 'v6.1.0',
      'version' => '6.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3132d2f43ca799c2aa099f9738d98228c56baa5d',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v6.1.0',
      'version' => '6.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '18f8a2a3ab703428143c27c055fd743ab7e7dcb1',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v6.1.0',
      'version' => '6.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a57c7084bd0604d80d70c89c6662512c698352d1',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6fd1b9a79f6e3cf65f9e679b23af304cd9e010d4',
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '433d05519ce6990bf3530fba6957499d327395c2',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '219aa369ceff116e673852dce47c3a41794c14bd',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9344f9cb97f3b19424af1a21a3b0e75b0a7d8d7e',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd66cd8ab656780f62c4215b903a420eb86358957',
    ),
    'symfony/service-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.1|2.0|3.0',
      ),
    ),
    'symfony/string' => 
    array (
      'pretty_version' => 'v6.1.0',
      'version' => '6.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd3edc75baf9f1d4f94879764dda2e1ac33499529',
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v6.1.0',
      'version' => '6.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '98587d939cb783aa04e828e8fa857edaca24c212',
    ),
    'web-token/encryption-pack' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-bundle' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-checker' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-console' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-core' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-encryption' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-encryption-algorithm-aescbc' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-encryption-algorithm-aesgcm' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-encryption-algorithm-aesgcmkw' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-encryption-algorithm-aeskw' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-encryption-algorithm-dir' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-encryption-algorithm-ecdh-es' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-encryption-algorithm-experimental' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-encryption-algorithm-pbes2' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-encryption-algorithm-rsa' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-framework' => 
    array (
      'pretty_version' => 'v3.0.5',
      'version' => '3.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bd2c116ebd11c2c535d0be6efea4dedaf3564a50',
    ),
    'web-token/jwt-key-mgmt' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-nested-token' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-signature' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-signature-algorithm-ecdsa' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-signature-algorithm-eddsa' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-signature-algorithm-experimental' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-signature-algorithm-hmac' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-signature-algorithm-none' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-signature-algorithm-rsa' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/jwt-util-ecc' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
    'web-token/signature-pack' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.0.5',
      ),
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}


if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}




private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {

 foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
