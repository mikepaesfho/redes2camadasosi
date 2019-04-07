<?php

class Enlace extends Fisica
{
    public $name = 'Enlace';
    public $endFisico; //endereçamento fisico MAC
    public $transmFrames; //transmissao de frames
    public $recebPacotes; // recebimento de pacotes, transforma-los em frames
    public $correcErros; //correção de erros
    public $detecErros; //detecção de erros
    public $PDU_Enlace;

    function encapsular()
    {
        $parent = parent::encapsular() . "<br>";
        return '
		          <div class="card flex-md-row mb-4 box-shadow h-md-250">
		            <div class="card-body d-flex flex-column align-items-start">               
		                              
		              <p class="card-text mb-auto">
						Passou pela Camada de Enlace
		              </p>                
		            </div>            
		          </div>
		        ' . $parent;
    }

}