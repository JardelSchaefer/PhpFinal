<?php



namespace App\Http\Controllers;
use App\Util\LogConsulta;
use Illuminate\Http\Request;

class ClienteFormController extends Controller{
    public function ClienteForm() {
        return view('site.ClienteForm');

    }
}
