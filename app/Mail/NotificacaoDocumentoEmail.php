<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificacaoDocumentoEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $nome;
    public $mensagem;
    public $descricao;
    /**
     * Create a new message instance.
     *
     * @return void
     */
   public function __construct($subject,  $nome, $mensagem, $descricao)
   {
     $this->subject = $subject;
     $this->nome = $nome;
     $this->mensagem = $mensagem;
     $this->descricao = $descricao;
   }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)
                    ->view('emails.exemplo_template')
                    ->with([
                        'nome' => $this->nome,
                        'mensagem' => $this->mensagem,
                        'descricao' => $this->descricao,
                    ]);
    }
}
