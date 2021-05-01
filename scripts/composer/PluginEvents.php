<?php

namespace WebCamp2021\Composer;

use Composer\Plugin\CommandEvent;

/**
 * Class PluginEvents.
 *
 * Executes custom code whenever any composer command is fired.
 */
class PluginEvents {

  /**
   * Script callback.
   *
   * @param \Composer\Plugin\CommandEvent $event
   *   Instance provided as argument by composer event dispatcher.
   */
  public static function commandExecution(CommandEvent $event) {
    $event->getOutput()->writeln('--------- Event ' . strtoupper($event->getName()) . ' has been fired ---------');
  }

}