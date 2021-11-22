<?php

namespace App\Http\Controllers\Admin;
 use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LogUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class LogUserController extends Controller
{

  public function pesquisar()
  {
    
      $response['anos'] =  $response['logs'] =DB::table('logs')
      ->selectRaw('YEAR(created_at) as ano')->distinct('YEAR(created_at)')->get();

      $response['utilizadores'] =  $response['logs'] =DB::table('logs')
      ->join('users', 'users.id', '=', 'logs.it_idUser')
      ->select('users.vc_primemiroNome' ,'users.vc_apelido')->DISTINCT ('logs.it_idUser')
          ->get();
      return view('admin/logs/pesquisar/index', $response);
  }
  public function recebelogs(Request $request)
  {
      $anoLectivo =  $request->vc_anolectivo;
      $utilizador = $request->vc_nome;
      return redirect("admin/logs/visualizar/index/$anoLectivo/$utilizador");
  }
  public function index( LogUser $logPesquisa,$anoLectivo,$utilizador)
  {
    $response['anoLectivo'] = $anoLectivo;
    $response['utilizador'] = $utilizador;
    $response['logs'] =  $logPesquisa->LogsForSearch($anoLectivo,$utilizador);
    return view('admin/logs/visualizar/index', $response);
  }

}
