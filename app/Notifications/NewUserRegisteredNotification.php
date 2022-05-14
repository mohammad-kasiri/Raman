<?php

namespace App\Notifications;

use App\Models\User;
use App\Notifications\Formatter\Contract\Menu\HasMenuNotification;
use App\Notifications\Formatter\Contract\Menu\MenuNotificationOutput;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Morilog\Jalali\Jalalian;

class NewUserRegisteredNotification extends Notification implements HasMenuNotification
{
    use Queueable;

    private User $user;

    public function __construct(User $user)
    {

        $this->user = $user;
    }


    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        return [
            'user_id' => $this->user->id,
            'full_name' => $this->user->full_name,
            'created_at' => $this->user->created_at,
        ];
    }

    public static function adminMessage(DatabaseNotification $notification) : MenuNotificationOutput
    {
        return new MenuNotificationOutput(
            '<i class="fas fa-user-plus icon-lg"></i>' ,
            " کاربرجدید با نام ". $notification->data['full_name'] ." اضافه شد!" ,
            Jalalian::forge($notification->data['created_at'])->ago()
        );
    }
}
