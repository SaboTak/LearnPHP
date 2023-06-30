<?php

    class Carro{

        // Atributos
        public string $placa;
        public string $modelo;
        public int $ruedas;
        public string $color;
        public bool $usado;

        // Constructor
        public function __construct(string $Placa, string $Modelo, int $Ruedas, string $Color, bool $Usado ){
            $this->placa =strtolower($Placa);
            $this->modelo =strtolower($Modelo);
            $this->ruedas =$Ruedas;
            $this->color =strtolower($Color);
            $this->usado =$Usado;

        }

        // Setters
        public function setPlaca(string $Placa){
            $this->placa =strtolower($Placa);
        }
        public function setModelo(string $Modelo){
            $this->modelo =strtolower($Modelo);
        }
        public function setRuedas(int $Ruedas){
            $this->ruedas =$Ruedas;
        }
        public function setColor(string $Color){
            $this->color =strtolower($Color);
        }
        public function setUsado(bool $Usado){
            $this->usado =$Usado;
        }

        // Getters
        public function getPlaca(): string{
            return ucwords($this->placa);
        }
        public function getModelo(): string{
            return ucwords($this->modelo);
        }
        public function getRuedas(): int{
            return $this->ruedas;
        }
        public function getColor(): string{
            return ucwords($this->color);
        }
        public function getUsado(): bool{
            return $this->usado;
        }


    }

    class Moto extends Carro{
        public $dueno;

        public function setRuedas(int $ruedasMoto){
            parent::setRuedas($ruedasMoto); // "parent::NombreDelMetodoPadreASobreEscribir" sirve para llamar un metodo padre y hacer exactamente lo mismo que ese metodo pero sin necesidad de escribir todo de nuevo.
        }
    }

    // Uso de Traits
    trait ModeloEuropeo{
        public function placaEuropea(){

        }
    }

    class Cuatrimoto extends Carro{
        use ModeloEuropeo;
    }

?>