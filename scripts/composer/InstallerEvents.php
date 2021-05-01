<?php

namespace WebCamp2021\Composer;

use Composer\Installer\InstallerEvent;

/**
 * Class InstallerEvents.
 *
 * Executes custom code once before packages are installed/updated.
 */
class InstallerEvents {

  /**
   * Script callback.
   *
   * @param \Composer\Installer\InstallerEvent $event
   *   Instance provided by composer event dispatcher.
   */
  public static function preOpsExecution(InstallerEvent $event) {
    $event->getIO()->write('--------- Event ' . strtoupper($event->getName()) . ' has been fired ---------');
  }

}
