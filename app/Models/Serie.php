<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory; // Trait para criação de dados.

    // Por padrão, o nome da tabela é o nome da classe + s (Serie => series)
    // protected $table = 'seriados'; 

    // Este comando serve para NÃO inserir as colunas updated_at e created_at.
    // public $timestamps = false; 
}
