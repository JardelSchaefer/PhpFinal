<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Produto extends Model
{
    
    protected $table = 'produto';
    protected $primaryKey = 'codpro';
    protected $nome = 'nompro';
    protected $descricao = 'despro';
    protected $valor = 'vlrpro';
}