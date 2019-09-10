 <?php
namespace App\Console\Commands;
use Illuminate\Console\Command;
use App;
class PupularTabela extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:popular';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Preenche as tabelas';
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $arrayCategorias [] = "Eletronicos";
        $arrayCategorias [] = "Materiais";
        $arrayCategorias [] = "Software";
        $arrayCategorias [] = "Mao de Obra";
        $arrayCategorias [] = "Clientes";
       
        foreach ($arrayCategorias as $cat) {
             $categoria = new App\Categoria();
        $categoria->nomcat = $cat;
        $categoria->save();
        }
 
        $arrayClientes[0]['nome'] = "Alexandre";
        $arrayClientes[0]['cpf'] = "10190210230";
        $arrayClientes[0]['endereco'] = "Rua augusto kaplot";
        $arrayClientes[0]['numero'] = "232";
        $arrayClientes[0]['bairro'] = "Centro";
        $arrayClientes[0]['cidade'] = "Brusque";
        $arrayClientes[0]['uf'] = "SC";
        $arrayClientes[0]['telefone'] = "33902019";
        
        $arrayClientes[1]['nome'] = "Abdel";
        $arrayClientes[1]['cpf'] = "23134512123";
        $arrayClientes[1]['endereco'] = "Rua Pereira";
        $arrayClientes[1]['numero'] = "214";
        $arrayClientes[1]['bairro'] = "Sao joao";
        $arrayClientes[1]['cidade'] = "Guabiruba";
        $arrayClientes[1]['uf'] = "SC";
        $arrayClientes[1]['telefone'] = "23134523";
        
        $arrayClientes[2]['nome'] = "Jardel";
        $arrayClientes[2]['cpf'] = "21465753312";
        $arrayClientes[2]['endereco'] = "Rua Arnoldo Ristow";
        $arrayClientes[2]['numero'] = "432";
        $arrayClientes[2]['bairro'] = "Zantao";
        $arrayClientes[2]['cidade'] = "Brusque";
        $arrayClientes[2]['uf'] = "SC";
        $arrayClientes[2]['telefone'] = "21245646";
        
         $arrayClientes[3]['nome'] = "Deivid";
        $arrayClientes[3]['cpf'] = "23212535677";
        $arrayClientes[3]['endereco'] = "Rua Arnoldo Ristow";
        $arrayClientes[3]['numero'] = "432";
        $arrayClientes[3]['bairro'] = "Zantao";
        $arrayClientes[3]['cidade'] = "Brusque";
        $arrayClientes[3]['uf'] = "SC";
        $arrayClientes[3]['telefone'] = "25345534";
        
         $arrayClientes[4]['nome'] = "Joao";
        $arrayClientes[4]['cpf'] = "54332143254";
        $arrayClientes[4]['endereco'] = "Rua augusto kaplot";
        $arrayClientes[4]['numero'] = "232";
        $arrayClientes[4]['bairro'] = "Centro";
        $arrayClientes[4]['cidade'] = "Brusque";
        $arrayClientes[4]['uf'] = "SC";
        $arrayClientes[4]['telefone'] = "232141354312";
      
        foreach ($arrayClientes as $cli) {
            $cliente = new App\Cliente();
        $cliente->nomcli = $cli['nome'];
        $cliente->cpfcli = $cli['cpf'];
        $cliente->endcli = $cli['endereco'];
        $cliente->numcli = $cli['numero'];
        $cliente->barcli = $cli['bairro'];
        $cliente->cidcli = $cli['cidade'];
        $cliente->ufcli = $cli['uf'];
        $cliente->telcli = $cli['telefone'];
        $cliente->save();
        }
            
            $arrayProdutos[0]['nome'] = "Monitor";
            $arrayProdutos[0]['descricao'] = "Pra voce ver";
            $arrayProdutos[0]['codcat'] = "38";
            $arrayProdutos[0]['valor'] = "200";
            
            $arrayProdutos[1]['nome'] = "Mouse";
            $arrayProdutos[1]['descricao'] = "movimenta o cursor";
            $arrayProdutos[1]['codcat'] = "39";
            $arrayProdutos[1]['valor'] = "221";
            
            
            $arrayProdutos[2]['nome'] = "Teclado";
            $arrayProdutos[2]['descricao'] = "Para digitar";
            $arrayProdutos[2]['codcat'] = "44";
            $arrayProdutos[2]['valor'] = "120";
            
            
            $arrayProdutos[3]['nome'] = "Headset";
            $arrayProdutos[3]['descricao'] = "Para ouvir";
            $arrayProdutos[3]['codcat'] = "43";
            $arrayProdutos[3]['valor'] = "800";
            
            
            $arrayProdutos[4]['nome'] = "Fonte";
            $arrayProdutos[4]['descricao'] = "Para conduzir energia";
            $arrayProdutos[4]['codcat'] = "40";
            $arrayProdutos[4]['valor'] = "400";
            
            
            foreach ($arrayProdutos as $pro) {
                $produto = new App\Produto();
                $produto->nompro = $pro['nome'];
                $produto->despro = $pro['descricao'];
                $produto->codcat = $pro['codcat'];
                $produto->vlrpro = $pro['valor'];
                $produto->save();
            }
            
    }
}