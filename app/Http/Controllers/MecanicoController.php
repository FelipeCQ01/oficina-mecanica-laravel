<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mecanico;

class MecanicoController extends Controller
{
    public function index()
    {
        $mecanicos = Mecanico::all();
        return view('mecanicos.index',compact('mecanicos'));
    }

    public function show(Mecanico $mecanico)
    {
        return view('mecanicos.show' , compact ('mecanico'));
    }

    public function create()
    {
        return view('mecanicos.create');
    }

    public function store(Request $request)
    {
    $dados = $request->validate([
        'nome' => 'required|string|max:255',
        'registro' => 'required|string|max:255|unique:mecanicos,registro',
        'especialidade' => 'required|string|max:255',
        'telefone' => 'required|string|max:255',
    ],
    
    [
        'nome.required' => 'Informe o nome do mecânico.',
        'registro.required' => 'Informe o registro do mecânico.',
        'registro.unique' => 'Este registro já está cadastrado.',
        'especialidade.required' => 'Informe a especialidade.',
        'telefone.required' => 'Informe o telefone.',
    ]
    
    
    );

    // Mecanico::create() insere o registro.
    Mecanico::create($dados);

    //redirect() leva o usuário à listagem.
    return redirect()->route('mecanicos.index')
        ->with('success', 'Registro adiconado com sucesso!!');
    }

    public function edit($id)
    {
        $mecanico = Mecanico::findOrFail($id);
        return view('mecanicos.edit' , compact('mecanico'));
    }

    public function update(Request $request, $id)
    {
        $mecanico = Mecanico::findOrFail($id);
        $dados = $request->validate([
        'nome' => 'required|string|max:255',
        'registro' => 'required|string|max:255|unique:mecanicos,registro,'.$mecanico->id,
        'especialidade' => 'required|string|max:255',
        'telefone' => 'required|string|max:255',
       
        // Segundo argumento de validate():
        [
        'nome.required' => 'Informe o nome do mecânico.',
        'registro.required' => 'Informe o registro.',
        'registro.unique' => 'Este registro já está cadastrado.',
        'especialidade.required' => 'Informe a especialidade.',
        'telefone.required' => 'Informe o telefone.',
        ]
     ]);

        $mecanico->update($dados);

        return redirect()->route('mecanicos.index')->with('success', 'Mecânico atualizado!');
    }  // Não criar outro método update()!

    public function destroy($id)
    {
        $mecanico = Mecanico::findOrFail($id);
        
        /* if ($mecanico->servicos()->exists()) {
        return redirect()->route('mecanicos.index')->with('error', 'Mecânico possui serviços vinculados.'); }*/
        
        $mecanico->delete();
        return redirect()->route('mecanicos.index')->with('success', 'Mecânico excluído!');
    }
}