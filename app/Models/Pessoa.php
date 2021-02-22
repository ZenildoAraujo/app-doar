<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pessoa extends Model
{
    protected $guarded = ['id'];
    
    protected $fillable = [
        'usuario_id',
        'nome_pessoa',
        'telefone',
        'provincia',
        'municipio',
        'data_nascimento',
        'genero',
        'num_bi'
    ];
    
    use HasFactory;
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
