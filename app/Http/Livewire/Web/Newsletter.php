<?php

namespace App\Http\Livewire\Web;

use App\Models\Resource;
use Livewire\Component;

class Newsletter extends Component
{
    public $issues, $search;

    public function render()
    {
        $this->issues = Resource::where('name', 'like', '%'.$this->search.'%')->where('type', 'newsletter')->get();

        return view('livewire.web.newsletter');
    }
}
