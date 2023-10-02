<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;




class UserController extends Controller
{
    public function fetchUsers(Request $request)
    {
        $response = Http::get('https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0');
        $users = $response->json();
        $page = 1;
        if($request->page){
            $page = $request->page;
        }
        
        $perPage = 10; // Quantidade de itens por página
        $offset = ($page - 1) * 10;  // Offset desejado (página 3 se estivermos usando 'page' como parâmetro de página)

        $usersPaginated = array_slice($users['users'], $offset);
        $usersPaginate = new Paginator($usersPaginated, $perPage, $page);

    

        return view('user.index', ['users' => $usersPaginate]);
    }
}
