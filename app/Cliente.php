<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Cliente extends Model
{
     
    protected $table = 'cliente';
    protected $primaryKey = 'codcli';
    protected $nome = 'nomcli';
    protected $cpf = 'cpfcli';
    protected $endereco = 'endcli';
    protected $numero = 'numcli';
    protected $bairro = 'baicli';
    protected $cidade = 'cidcli';
    protected $uf = 'ufcli';
    protected $telefone = 'telcli'; 
}