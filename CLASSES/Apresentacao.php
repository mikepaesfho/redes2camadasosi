<?php

class Apresentacao extends Sessao
{
    public $name = 'Apresentação';
    public $criptDados; // criptografia de dados
    public $codifDados;//codificação e compactação de dados
    public $formatDados; //formatação dos dados
    public $convCaracteres; //conversão dos caracteres e códigos

    function encapsular()
    {
        $parent = parent::encapsular() . "<br>";
        return '
              <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">               
                                
                  <p class="card-text mb-auto">
                    Passou pela Camada de Apresentacão
                  </p>                
                </div>            
              </div>
            ' . $parent;
    }
}