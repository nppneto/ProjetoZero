<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $nome;
    protected $email;
    protected $assunto;
    protected $mensagem;

    function __construct() { }

    public function setNome($nome) { $this->nome = $nome; }
    public function setEmail($email) { $this->email = $email; }
    public function setAssunto($assunto) { $this->assunto = $assunto; }
    public function setMensagem($mensagem) { $this->mensagem = $mensagem; }

    public function getNome(){ return $this->nome; }
    public function getEmail(){ return $this->email; }
    public function getAssunto(){ return $this->assunto; }
    public function getMensagem(){ return $this->mensagem; }
}
