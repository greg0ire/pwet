<?php

require_once __DIR__ . '/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->dispatcher->connect('routing.load_configuration', array('ProjectConfiguration', 'listenToRoutingLoadConfigurationEvent'));
  }

  static public function listenToRoutingLoadConfigurationEvent(sfEvent $event)
  {
    $r = $event->getSubject();
      $r->prependRoute('pwet',
      new sfRoute('/pwet',
      array('module' => 'default', 'action' => 'default')
      ));
  }
}
