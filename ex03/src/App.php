<?php

declare(strict_types=1);

namespace App;

use App\Service\FakeUserService;

class App
{
    private FakeUserService $servico;

    public function __construct()
    {
        $this->servico = new FakeUserService();
    }

    public function executar(): array
    {
        return $this->servico->gerarUsuarios(10);
    }
}
