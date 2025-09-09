<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pilot extends Model
{
    /**
     * PILOT ATTRIBUTES
     * $this->id - int - The unique identifier for the pilot.
     * $this->name - string - The name of the pilot.
     * $this->city - string - The origin city of the pilot (LA or Tokio).
     * $this->nitro_level - int - The nitro level of the pilot.
     */
    protected $fillable = [
        'name',
        'city',
        'nitro_level',
    ];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getCity(): string
    {
        return $this->attributes['city'];
    }

    public function setCity(string $city): void
    {
        $this->attributes['city'] = $city;
    }

    public function getNitroLevel(): int
    {
        return $this->attributes['nitro_level'];
    }

    public function setNitroLevel(int $nitroLevel): void
    {
        $this->attributes['nitro_level'] = $nitroLevel;
    }
}
