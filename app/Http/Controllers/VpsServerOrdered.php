<?php
use NotificationChannels\Messagebird\MessagebirdChannel;
use NotificationChannels\Messagebird\MessagebirdMessage;
use Illuminate\Notifications\Notification;

class VpsServerOrdered extends Notification
{
    public function via($notifiable)
    {
        return [MessagebirdChannel::class];
    }

    public function toMessagebird($notifiable)
    {
        return (new MessagebirdMessage("Your {$notifiable->service} was ordered!"))->setRecipients(+447418310508);;
    }
}