<?php 
declare(strict_types=1);

namespace Sergei\TestOne;

class User
{
    public int $age;
    public string $name;
    public array $fav_music;

    public function __construct(int $age, string $name)
    {
        $this->age = $age;
        $this->name = $name;
    }

    public function tellName()
    {
        return $this->name;
    }
    
}