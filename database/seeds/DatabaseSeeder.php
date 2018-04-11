<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $this->call(ProdutoTableSeeder::class);
  }
}

class ProdutoTableSeeder extends Seeder
{

  public function run()
  {

    DB::insert(
        'INSERT INTO produtos(nome, quantidade, valor, descricao) VALUES (?,?,?,?)',
        array('Microondas', 1, 500.99, 'Manda SMS quando termina de esquentar')
    );

    DB::insert(
        'INSERT INTO produtos(nome, quantidade, valor, descricao) VALUES (?,?,?,?)',
        array('Geladeira', 2, 200.00, 'Side by Side com gelo na porta')
    );

  }
}
