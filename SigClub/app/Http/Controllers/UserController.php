<?php

namespace App\Http\Controllers;


use App\Http\Requests\UserRequest;
use App\Models\ModelBook;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

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

    public function loginForm()
    {
        return view('/layout/login_cadastro/login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     * 
     * @return Response
     */
    public function login(Request $request)
    {
        $book = $this->objBook->all();
        //var_dump($request->all());
        //$credentials = $request->only('email', 'password');
        $credentials = $request->only('email', 'password');
       // $credentials = [
        //    'email'=>$request->email,
        //    'password'=>$request->password
        //];
        //var_dump($credentials);
        //var_dump(Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return view('layout/livro/livros', compact('book'));
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home.login');
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
    public function store(Request $request)
    {
        //var_dump($request);
        //exit();
        //$data['password'] = Hash::make($data['password']);
       // $cadastro = $this->objUser->create([
        //    'name'=>$request->name,
         //   'email'=>$request->email,
         //   'password'=>$request ->password,
          //  'celular' =>$request->celular,
            //'id'=>$request->id,
       // ]);

        $data = $request->all();
        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->celular = $data['celular'];
        $user->password = app('hash')->make($data['password']);
        $user->save();
        return view('/layout/login_cadastro/login'/*, compact('users')*/);



        if($cadastro)
        {
            //$users = $this->objUser->all();
        return view('/layout/login_cadastro/login'/*, compact('users')*/);
            
        }
    }

     
}
