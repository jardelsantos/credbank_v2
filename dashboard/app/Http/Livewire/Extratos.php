<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Extrato;

class Extratos extends Component
{
    public $extratos, $lancamento,$categoria,
            $descricao,$tipo,$valor, $extrato_id;
    public $isOpen = 0;
    public function render()
    {
        $this->extratos = Extrato::all();
        return view('livewire.extratos');
    }
    public function create(){
        $this->resetInputFields();
        $this->openModal();
    }
    public function openModal(){
        $this->isOpen = true;
    }
    public function closeModal(){
        $this->isOpen = false;
    }
    public function resetInputFields(){
        $this->lancamento = '';
        $this->categoria = '';
        $this->descricao = '';
        $this->tipo = '';
        $this->valor = '';
        $this->extrato_id = '';
    }
    public function store(){
        $this->validate([
            'lancamento' => 'required',
            'categoria' => 'required',
            'descricao' => 'required',
            'tipo' => 'required',
            'valor' => 'required'
        ]);
        Extrato::updateOrCreate(
            ['id' => $this->extrato_id],
            [
                'lancamento' => $this->lancamento,
                'categoria' => $this->categoria,
                'descricao' => $this->descricao,
                'tipo' => $this->tipo,
                'valor' => $this->valor
            ]
        );
        session()->flash(
            'message',
            $this->extrato_id ?
                'Extrato Atualizado' : 'Criado Registro'
        );
        $this->closeModal();
        $this->resetInputFields();

    }
    public function edit($id){
        $extrato = Extrato::findOrFail($id);

        $this->extrato_id = $id;

        $this->lancamento = $extrato->lancamento;
        $this->categoria = $extrato->categoria;
        $this->descricao = $extrato->descricao;
        $this->tipo = $extrato->tipo;
        $this->valor = $extrato->valor;

        $this->openModal();
    }
    public function delete($id){
        Extrato::find($id)->delete();
        session()->flash('message', 'Registro Apagado');
    }
}
