<?php

namespace App\Http\Livewire\Resource;

use App\Models\Resource;
use Livewire\Component;

class Docs extends Component
{
    public $resources, $query;

    public function render()
    {
        $this->resources = Resource::where('name', 'like', '%' . $this->query . '%')->get();

        return view('livewire.resource.docs');
    }
}
