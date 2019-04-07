<?php

class Sessao extends Transporte
{
    public $name = 'Sessão';
    public $conexNo;// conexao com outro nó
    public $contrComunicacao; // controlar sessões de comunicação

    function encapsular()
    {
        $parent = parent::encapsular() . "<br>";
        return '
		          <div class="card flex-md-row mb-4 box-shadow h-md-250">
		            <div class="card-body d-flex flex-column align-items-start">              
		                             
		              <p class="card-text mb-auto">
						Passou pela Camada de Sessão
		              </p>                
		            </div>            
		          </div>
		        ' . $parent;
    }

}