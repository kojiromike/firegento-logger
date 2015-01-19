<?php

class FireGento_Shell_LogTest extends Mage_Shell_Abstract
{
    public function run()
    {
        Mage::log('test');
    }
}
$s = new FireGento_Shell_LogTest;
$s->run();
