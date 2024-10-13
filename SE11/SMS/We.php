<?php

namespace SMS;

class We implements SMS
{
    public function sendSMS($msg): void
    {
        // We integration SDK
        echo $msg . '<br />';
    }
}
