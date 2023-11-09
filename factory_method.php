<?php

class Automobile
{
    private string $vehicleMake;
    private string $vehicleModel;
    private function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }
    public function getMakeAndModel(): string
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }

    public static function create_new_automobile(string $make, string $model): Automobile
    {
        return new Automobile($make, $model);
    }
}

