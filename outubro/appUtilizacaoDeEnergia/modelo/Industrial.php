<?php

    require_once("IConsumidorEnergia.php");

    class Industrial implements IConsumidorEnergia{
        private float $consumoDiario;

    function getValorFatura()
    {
        $valorIndustrial = 0;
        if ($this->consumoDiario > 500) {
            $valorIndustrial = $this->consumoDiario*2.30;
        }elseif ($this -> consumoDiario <500) {
            $valorIndustrial =$this-> consumoDiario*1.80;
        } return $valorIndustrial;
    }

        /**
         * Get the value of consumoDiario
         */
        public function getConsumoDiario(): float
        {
                return $this->consumoDiario;
        }

        /**
         * Set the value of consumoDiario
         */
        public function setConsumoDiario(float $consumoDiario): self
        {
                $this->consumoDiario = $consumoDiario;

                return $this;
        }
    }