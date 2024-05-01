<?php

namespace Database\Seeders;

use App\Models\TipoAnotacao;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            EspecializacaoSeeder::class,
            AtuaAreaSeeder::class,
            ProfissionalSeeder::class,
            PacienteSeeder::class,
            ConsultaSeeder::class,
            AgendamentoSeeder::class,
            TipoAnotacao::class,
        ]);

    }
}
