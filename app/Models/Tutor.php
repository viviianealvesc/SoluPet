<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model implements Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'endereco',
        'telefone',
        'email',
        'password',
    ];

    // Relacionamento com animais
    public function animais() {
        return $this->hasMany(Animal::class, 'id_tutor');
    }


    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthPasswordName()
    {
        return 'password';
    }

    public function getAuthIdentifier()
    {
        return $this->getKey(); 
    }

    public function getAuthPassword()
    {
        return $this->password; 
    }

    public function getRememberToken()
    {
        return $this->remember_token; 
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
