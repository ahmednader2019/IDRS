<?php

namespace App\Notifications;

use App\Models\DriverInf;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class add_inf extends Notification
{
    use Queueable;
    private $DriverInf ;

    /**
     * Create a new notification instance.
     */
    public function __construct(DriverInf  $DriverInf )
    {
      $this->DriverInf= $DriverInf ;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    // public function toMail(object $notifiable): MailMessage
    // {
    //     return (new MailMessage)
    //                 ->line('The introduction to the notification.')
    //                 ->action('Notification Action', url('/'))
    //                 ->line('Thank you for using our application!');
    // }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
    public function toDatabase($notifiable)
    {
        return [
          'id' => $this->DriverInf->id,
          'title' => '  a new registered user is added by : ',
          'user' => Auth::user()->name,
        ];
    }
}
