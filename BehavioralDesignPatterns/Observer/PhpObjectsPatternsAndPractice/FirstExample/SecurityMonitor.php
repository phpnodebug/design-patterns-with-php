<?php
namespace Observer\FirstExample;

class SecurityMonitor implements Observer
{
    public function update(Observable $observable)
    {
        echo __CLASS__ . ": \t sending mail to sysadmin\n";
    }
}
