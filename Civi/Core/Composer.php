<?php

namespace Civi\Core\Composer;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class Composer {

  public static function installAsset(PackageEvent $event) {
    $vendor_dir = $event->getComposer()->getConfig()->get('vendor-dir');
    shell_exec("echo $vendor_dir");
  }

}
