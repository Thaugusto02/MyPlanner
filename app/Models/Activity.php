<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'data',
        'hora',
        'descricao',
        'cor',
    ];

    public static function createActivity(array $data)
    {
        return self::create([
            'titulo' => $data['titulo'],
            'data' => $data['data'],
            'hora' => $data['hora'],
            'descricao' => $data['descricao'] ?? null,
            'cor' => $data['cor'] ?? null,
        ]);
    }
}