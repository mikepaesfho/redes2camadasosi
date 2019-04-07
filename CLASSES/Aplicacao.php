<?php

class Aplicacao extends Apresentacao
{
    public $name = 'Aplicação';
    public $comunProcessos;  //comunicação entre processos
    public $gerenRede;// gerenciamento de rede
    public $compRecursos; //compartilhamento de recursos
    public $servRede; //prover serviços de rede
    public $servDiretorios; //serviços de diretorios -  acessar arquivos
    public $funcEspecializadas;

    function encapsular()
    {
        $parent = parent::encapsular() . "<br>";
        return '
                  <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">             
                                    
                      <p class="card-text mb-auto">
                        Passou pela camada Aplicacao
                      </p>                
                    </div>            
                  </div>
            ' . $parent;

    }

}