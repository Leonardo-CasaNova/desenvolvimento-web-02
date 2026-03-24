<?php

declare(strict_types=1);

namespace App\Service;

use Faker\Factory;

class FakeUserService
{
    public function gerarUsuarios(int $quantidade = 10): array
    {
        $faker = Factory::create('pt_BR');
        $usuarios = [];

        for ($i = 0; $i < $quantidade; $i++) {
            $usuarios[] = [
                'nome' => $faker->name(),
                'email' => $faker->email(),
                'cidade' => $faker->city(),
            ];
        }

        return $usuarios;
    }
}
