<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NoticiaRequest;
use App\Models\Noticia;
use App\Models\User;

class NoticiaController extends Controller
{

    private $user;
    private $noticia;

    public function __construct()
    {

        $this->user = new User();
        $this->noticia = new Noticia();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = $this->noticia->all();
        return view('noticias/index', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=$this->user->all();

        return view('noticias/create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticiaRequest $request)
    {
        $new = $this->noticia->create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'url' => $request->url,
            'user_id' => $request->user_id
        ]);

        if ($new) return redirect('noticias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia = $this->noticia->find($id);
        return view('noticias/show', compact('noticia'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noticia = $this->noticia->find($id);
        $users = $this->user->all();
        return view('noticias/create', compact('noticia', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NoticiaRequest $request, $id)
    {
        $this->noticia->where(['id' => $id])->update([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'url' => $request->url,
            'user_id' => $request->user_id
        ]);
        return redirect('noticias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->noticia->destroy($id);
        return redirect('noticias');
    }
}
