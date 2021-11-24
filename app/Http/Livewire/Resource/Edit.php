<?php

namespace App\Http\Livewire\Resource;

use App\Models\Resource;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Edit extends Component
{
    public $identifier, $name, $editDialog;

    public function update()
    {
        Resource::where('id', $this->identifier)->update([
            'name' => $this->name
        ]);

        session()->flash('flash.banner', 'The resource was successfully updated!');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->to('/resources');
    }

    public function delete()
    {
        $resource = Resource::where('id', $this->identifier)->first();

        if ($resource->type == 'file' || $resource->type == 'newsletter') {
            Storage::delete([
                $resource->url
            ]);
        }

        $resource->delete();

        session()->flash('flash.banner', 'The resource was successfully deleted!');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->to('/resources');
    }

    public function render()
    {
        $this->name = Resource::where('id', $this->identifier)->first()->name;

        return view('livewire.resource.edit');
    }
}
