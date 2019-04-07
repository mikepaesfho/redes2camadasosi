<?php

class Fisica
{
    public $name = 'Física';
    public $transmBits; //transmissão de bits com o meio
    public $recepBits; //recepcao de bits pelo meio
    public $sinalizacao; //transporta os sinais para as camadas superiores
    public $PDU_Fisica;

    function encapsular()
    {
        return '
		          <div class="card flex-md-row mb-4 box-shadow h-md-250">
		            <div class="card-body d-flex flex-column align-items-start">               
		                           
		              <p class="card-text mb-auto">
						Passou pela Camada Fisica
		              </p>                
		            </div>            
		          </div>
		        ';
    }

}