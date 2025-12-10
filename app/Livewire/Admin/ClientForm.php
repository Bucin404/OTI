<?php

namespace App\Livewire\Admin;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ClientForm extends Component
{
    use WithFileUploads;

    public $clientId;
    public $company_name;
    public $industry_sector;
    public $description;
    public $logo;
    public $existing_logo;
    public $icon_class = 'bx bx-building';
    public $is_featured = false;
    public $display_order = 0;

    protected $rules = [
        'company_name' => 'required|string|max:255',
        'industry_sector' => 'required|string|max:255',
        'description' => 'required|string',
        'logo' => 'nullable|image|max:2048',
        'icon_class' => 'required|string|max:255',
        'is_featured' => 'boolean',
        'display_order' => 'integer|min:0',
    ];

    public function mount($id = null)
    {
        if ($id) {
            $client = Client::findOrFail($id);
            $this->clientId = $client->id;
            $this->company_name = $client->company_name;
            $this->industry_sector = $client->industry_sector;
            $this->description = $client->description;
            $this->existing_logo = $client->logo_path;
            $this->icon_class = $client->icon_class;
            $this->is_featured = $client->is_featured;
            $this->display_order = $client->display_order;
        }
    }

    public function save()
    {
        $this->validate();

        $data = [
            'company_name' => $this->company_name,
            'industry_sector' => $this->industry_sector,
            'description' => $this->description,
            'icon_class' => $this->icon_class,
            'is_featured' => $this->is_featured,
            'display_order' => $this->display_order,
        ];

        // Handle logo upload
        if ($this->logo) {
            // Delete old logo if exists
            if ($this->existing_logo && Storage::disk('public')->exists($this->existing_logo)) {
                Storage::disk('public')->delete($this->existing_logo);
            }
            
            $path = $this->logo->store('clients', 'public');
            $data['logo_path'] = $path;
        }

        if ($this->clientId) {
            $client = Client::find($this->clientId);
            $client->update($data);
            session()->flash('message', 'Client berhasil diupdate!');
        } else {
            Client::create($data);
            session()->flash('message', 'Client berhasil ditambahkan!');
        }

        return redirect()->route('admin.clients.index');
    }

    public function render()
    {
        return view('livewire.admin.client-form');
    }
}
