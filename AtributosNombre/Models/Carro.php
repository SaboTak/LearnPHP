<?php

    class Carro{

        // Constructor
        public function __construct(public string $Placa, public string $Modelo,public int $Ruedas,public string $Color,public bool $Usado ){
        }

        // Setters
        public function setPlaca(string $Placa){
            $this->placa =strtolower($Placa);
            return $this;
        }
        public function setModelo(string $Modelo){
            $this->modelo =strtolower($Modelo);
            return $this;
        }
        public function setRuedas(int $Ruedas){
            $this->ruedas =$Ruedas;
            return $this;
        }
        public function setColor(string $Color){
            $this->color =strtolower($Color);
            return $this;
        }
        public function setUsado(bool $Usado){
            $this->usado =$Usado;
            return $this;
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

?>