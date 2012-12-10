<?php

class pwetTask extends sfBaseTask
{
  protected function configure()
  {
    // // add your own arguments here
    // $this->addArguments(array(
    //   new sfCommandArgument('my_arg', sfCommandArgument::REQUIRED, 'My argument'),
    // ));

    $this->addOptions(array(
      new sfCommandOption('application', null, sfCommandOption::PARAMETER_REQUIRED, 'frontend'),
      new sfCommandOption('env', null, sfCommandOption::PARAMETER_REQUIRED, 'The environment', 'dev')
      // add your own options here
    ));

    $this->namespace        = '';
    $this->name             = 'pwet';
    $this->briefDescription = '';
    $this->detailedDescription = <<<EOF
The [pwet|INFO] task does things.
Call it with:

  [php symfony pwet|INFO]
EOF;
  }

  protected function execute($arguments = array(), $options = array())
  {
    sfContext::createInstance($this->configuration);
  }
}
