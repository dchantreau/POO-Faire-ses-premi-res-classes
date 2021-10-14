<?php

class Voiture
{   
    private int $nbWheels;

    private int $currentSpeed;

    private string $color;

    private int $nbSeats;

    private string $energy;

    private int $energyLevel;

    
    public function __construct( string $color,int $nbSeats,string $energy)
{
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
    
}

public function start(): string
{
    $this->currentSpeed = 1;

    return "Let's go !";
}

public function forward(): string
{
    $this->currentSpeed = 20;

    return "Go !";
}

public function break(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
}

public function getnbWheels(): int
{
    return $this->nbWheels = $nbWheels;

}

public function setnbWheels($nbWheels): void
{
    $this->nbWheels = $nbWheels;
}


public function getCurrentSpeed(): int
{
    return $this->currentSpeed;
}

public function setCurrentSpeed($currentSpeed): void
{
    $this->currentSpeed = $currentSpeed;
}

public function getColor(): string
{
    return $this->color;

}

public function setColor($color): void
{
    $this->color = $color;
}

public function getnbSeats(): int
{
    return $this->nbSeats;
}

public function setnbSeats($nbSeats): void
{
    $this->nbSeats = $nbSeats;

}

public function getenergy(): int
{
    return $this->energy;
}


public function setenergy($energy): void
{
    $this->energy = $energy;
}

public function getenergyLevel(): int
{
    return $this->energyLevel;
}


public function setenergyLevel($energyLevel): void
{
    $this->energyLevel = $energyLevel;
}

}
?>



