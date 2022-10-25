<?php

namespace App\Http\Controllers;

use Livewire\Component;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jadwals;

class jadwal extends Controller
{

   
    public function index(){
        return view('jadwal');
    }

    public Model $model;
    public string $field;

    public bool $isActive;

    public function mount()
    {
        $this->isActive = (bool) $this->model->getAttribute($this->field);
    }

    public function render()
    {
        return view('livewire.toggle-switch');
    }

    public function updating($field, $value)
    {
        $this->model->setAttribute($this->field, $value)->save();
    }
}
