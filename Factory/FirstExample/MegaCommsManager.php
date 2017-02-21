<?php
namespace Factory\FirstExample;

use Factory\FirstExample\ApptEncoder;
use Factory\FirstExample\CommsManager;
use Factory\FirstExample\MegaApptEncoder;

class MegaCommsManager extends CommsManager
{
    public function getHeaderText():string
    {
        return "Mega header.\n";
    }

    public function getApptEncoder():ApptEncoder
    {
        return new MegaApptEncoder;
    }

    public function getFooterText():string
    {
        return "Mega footer.\n";
    }
}