<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create(['nome' => 'Recebido', 'color' => 'bg-light-blue-active']);
        Status::create(['nome' => 'Pagamento Aprovado', 'color' => 'bg-green-active']);
        Status::create(['nome' => 'Enviado', 'color' => 'bg-yellow']);
        Status::create(['nome' => 'Entregue', 'color' => 'bg-navy-active']);
        Status::create(['nome' => 'Cancelado', 'color' => 'bg-red-active']);
    }
}
