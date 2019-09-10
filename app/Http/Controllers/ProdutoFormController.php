<?php


namespace App\Http\Controllers;
use App\Util\LogConsulta;
use Illuminate\Http\Request;

class ProdutoFormController extends Controller{
     public function ProdutoForm() {
        return view('site.ProdutoForm');

    }
}
