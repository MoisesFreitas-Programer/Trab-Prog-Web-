<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\ModelBook;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class BookController extends Controller
{
    private $objUser;
    private $objBook;



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(ModelBook $objBook, User $objUser)
     {
         $this->objUser = new User();
         $this->objBook = new ModelBook();
     }

    public function index()
    {
        $book = $this->objBook->all();
        //dd(Auth::user());
        if(Auth::check() === true)
        {
            return view('home', compact('book'));
        } 
            
        return redirect()->route ('home.login');
        
        //return view('/layout/livro/livros', compact('book'));
        //dd($this->objBook->find(2)->relUsers); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $this->objUser->all();
        return view('/layout/livro/create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $cadastro = $this->objBook->create([
            'title'=>$request->title,
            'pages'=>$request->pages,
            'id_user'=>$request->id_user,
        ]);

        if($cadastro)
        {
            $book = $this->objBook->all();
            return view('/layout/livro/livros', compact('book'));
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = $this->objBook->find($id);
        return view('/layout/livro/show', compact('book'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = $this->objBook->find($id);
        $users = $this->objUser->all();
        return view('/layout/livro/create', compact('book', 'users'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $id)
    {
        $this->objBook->where(['id' => $id])->update([
            'title'=>$request->title,
            'pages'=>$request->pages,
            'id_user'=>$request->id_user,
        ]);


        $book = $this->objBook->all();
        return view('/layout/livro/livros', compact('book'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
