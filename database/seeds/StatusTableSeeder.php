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
        Status::create(['nome' => 'Recebido', 'color' => 'alert-primary']);
        Status::create(['nome' => 'Pagamento Aprovado', 'color' => 'alert-success']);
        Status::create(['nome' => 'Enviado', 'color' => 'alert-info']);
        Status::create(['nome' => 'Entregue', 'color' => 'alert-warning']);
        Status::create(['nome' => 'Cancelado', 'color' => 'alert-danger']);
    }
}
