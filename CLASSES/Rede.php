<?php

class Rede extends Enlace
{
    public $name = 'Rede';
    public $roteamPacotes; //roteamento de pacotes
    public $endLogico; // endereçamento logico
    public $contrTrafego; // controle de trafego
    public $mapEndFisicos; //mapeamento de endereços físicos
    public $mapEndLogicos; //mapeamento de endereços lógicos

    function encapsular()
    {
        $parent = parent::encapsular() . "<br>";
        return '
		          <div class="card flex-md-row mb-4 box-shadow h-md-250">
		            <div class="card-body d-flex flex-column align-items-start">   
		                             
		              <p class="card-text mb-auto">
						Passou pela Camada de Rede
		              </p>                
		            </div>            
		          </div>
		        ' . $parent;
    }

}