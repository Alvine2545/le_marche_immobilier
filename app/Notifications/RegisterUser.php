<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailBase;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RegisteredUser extends VerifyEmailBase implements ShouldQueue
{
    use Queueable;

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Bienvenue sur mon site')
            ->greeting('Bonjour,')
            ->line('Votre compte a bien été créé.')
            ->line('Vous pouvez vous connecter en utilisant vos identifiants :')
            ->line('Adresse e-mail : ' . $notifiable->email)
            ->line('Mot de passe : ' . $this->password)
            ->action('Se connecter', url('/login'))
            ->line('Merci d\'utiliser notre application !');
    }
}
