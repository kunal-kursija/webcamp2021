<?php

namespace WebCamp2021\Composer;

use Composer\Installer\PackageEvent;

/**
 * Class PackageEvents.
 *
 * Execute custom code before the packages are installed.
 */
class PackageEvents {

  /**
   * Script callback.
   *
   * @param \Composer\Installer\PackageEvent $event
   *   Instance provided as argument by composer event dispatcher.
   */
  public static function prePackageInstall(PackageEvent $event) {
    $event->getIO()->write('--------- Event ' . strtoupper($event->getName()) . ' has been fired ---------');
  }

}
