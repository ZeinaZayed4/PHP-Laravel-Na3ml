<?php

namespace SMS;

class Vodafone implements SMS
{
    public function sendSMS($msg): void
    {
        // Vodafone integration API
        echo $msg . '<br />';
    }
}
