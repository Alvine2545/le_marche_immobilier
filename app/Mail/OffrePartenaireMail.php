<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OffrePartenaireMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name, $email, $msg, $type;
    public function __construct($name, $email, $type)
    {
        $this->name = $name;
        $this->email = $email;
        //$this->msg = $msg;
        $this->type = $type;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
         return new Envelope(
             subject: 'Offre Partenaire Mail',
         );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
         return new Content(
             view: 'mailsView.offrepartenaire-mail',
         );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }

    public function build()
    {
        // return $this->from('projetdevs@gmail.com')
        // ->subject(" invitation personnel ")
        // ->view('component.InvitationPersonnel');
        
        // On retourne le sujet et la  vue
        if ($this->type == 'accept') {
            //Demande acceptée
             return $this->subject('Confirmation de l\'offre de partenariat')->view('mailsView.offrepartenaire-mail');
        } elseif ($this->type == 'reject') {
            //Demande rejettée
             return $this->subject('Rejet de l\'offre de partenariat')->view('mailsView.offrepartenaire-mail');
        } elseif ($this->type =='delete') {
            //Demande supprimée
             return $this->subject('Suppression de l\'offre de partenariat')->view('mailsView.offrepartenaire-mail');
        }
        
       
    }
}
