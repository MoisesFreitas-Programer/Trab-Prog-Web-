<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\ModelBook;
use App\User;

class UserController extends Controller
{
    private $objUser;
    private $objBook;

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function __construct(ModelBook $objBook, User $objUser)
    {
        $this->objUser = new User();
        $this->objBook = new ModelBook();
    }

    public function index()
    {
        return view('/layout/login_cadastro/cadastro');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$users = $this->objUser->all();
        return view('/layout/login_cadastro/cadastro'/*, compact('users')*/);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function store(UserRequest $request)
    {
        //var_dump($request);
        //exit();
        $cadastro = $this->objUser->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request ->password,
            'celular' =>$request->celular,
            //'id'=>$request->id,
        ]);

        if($cadastro)
        {
            //$users = $this->objUser->all();
        return view('/layout/login_cadastro/login'/*, compact('users')*/);
            
        }
    }
}
