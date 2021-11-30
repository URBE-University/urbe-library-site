<?php

namespace App\Http\Livewire\Resource;

use App\Models\Resource;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $createDialog = false;
    public $type, $name, $resource;

    public function save()
    {
        $this->validateInput();

        if ($this->type == 'file') {
            $this->validate([
                'resource' => 'mimes:pdf'
            ]);
            $this->resource->storeAs('documents', $this->resource->getClientOriginalName());
        }

        if ($this->type == 'newsletter') {
            $this->validate([
                'resource' => 'mimes:pdf'
            ]);
            $this->resource->storeAs('newsletter', $this->resource->getClientOriginalName());

            // Create thumbnail and store it
            $res = new Resource();
            $thumbnail_name = $res->getThumbnail(Storage::path('newsletter/'.$this->resource->getClientOriginalName()));
        }

        switch ($this->type) {
            case 'file':
                $url = 'documents/' . $this->resource->getClientOriginalName();
                break;
            case 'newsletter':
                $url = 'newsletter/' . $this->resource->getClientOriginalName();
                $thumbnail = ($thumbnail_name == true) ? 'newsletter/' . $thumbnail_name : null;
                break;
            case 'link':
                $url = $this->resource;
                break;

            default:
                $url = null;
                break;
        }

        try {
            Resource::create([
                'type' => $this->type,
                'name' => $this->name,
                'url' => $url,
                'thumbnail' => $thumbnail,
            ]);
            session()->flash('flash.banner', 'The resource was successfully created!');
            session()->flash('flash.bannerStyle', 'success');
            return redirect()->to('/resources');
        } catch (\Throwable $th) {

            Log::error($th);
            session()->flash('flash.banner', 'There was an issue while creating the resource. Please contact IT for assistance.');
            session()->flash('flash.bannerStyle', 'error');
            return redirect()->to('/resources');
        }
    }

    public function validateInput()
    {
        $this->validate([
            'type' => 'required',
            'name' => 'required',
            'resource' => 'required',
        ]);
    }

    public function render()
    {
        return view('livewire.resource.create');
    }
}
