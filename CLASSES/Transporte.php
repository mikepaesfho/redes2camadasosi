<?php

class Transporte extends Rede
{
    public $name = 'Transporte';
    public $transmDados; // transmissão de dados
    public $segmDados;// segmentação de dados por pacotes
    public $entDados; // entrega de dados ponta a ponta

    function encapsular()
    {
        $parent = parent::encapsular() . "<br>";
        return '
		          <div class="card flex-md-row mb-4 box-shadow h-md-250">
		            <div class="card-body d-flex flex-column align-items-start">               
		                             
		              <p class="card-text mb-auto">
						Passou pela Camada de Transporte
		              </p>                
		            </div>            
		          </div>
		        ' . $parent;
    }

}