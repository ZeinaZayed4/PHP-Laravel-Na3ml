<?php

namespace SMS;

class NotificationService
{
    public function sendNewPostNotification(SMS $sender): void
    {
        $sender->sendSMS('New post has been added!');
    }

    public function sendEditPostNotification(SMS $sender): void
    {
        $sender->sendSMS('The post has been updated!');
    }

    public function sendDeletePostNotification(SMS $sender): void
    {
        $sender->sendSMS('The post has been deleted!');
    }
}
