<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificacaoDocumentoEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Exemplo de E-mail')
                    ->view('emails.exemplo_template')
                    ->with([
                        'nome' => 'Vânio Macamo',
                        'mensagem' => 'Saudações, Acabam de ser enviados Documentos, Fase de Teste!',
                    ]);
    }
    
}
