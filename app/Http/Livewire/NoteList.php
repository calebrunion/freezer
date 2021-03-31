<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Note;

class NoteList extends Component
{
    public $viewing;

    public function mount()
    {
        $this->viewing = Note::make();
    }

    public function render()
    {
        $notes = Note::all();
        return view('livewire.note-list', ['notes'=>$notes]);
    }

    public function showNote($id)
    {
        $this->viewing = Note::find($id);
    }
}
