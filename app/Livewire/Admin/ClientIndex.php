<?php

namespace App\Livewire\Admin;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class ClientIndex extends Component
{
    use WithPagination;

    public $search = '';
    public $deleteId = null;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        if ($this->deleteId) {
            $client = Client::find($this->deleteId);
            
            if ($client) {
                // Delete logo if exists
                if ($client->logo_path && Storage::disk('public')->exists($client->logo_path)) {
                    Storage::disk('public')->delete($client->logo_path);
                }
                
                $client->delete();
                session()->flash('message', 'Client berhasil dihapus!');
            }
            
            $this->deleteId = null;
        }
    }

    public function toggleFeatured($id)
    {
        $client = Client::find($id);
        if ($client) {
            $client->is_featured = !$client->is_featured;
            $client->save();
            session()->flash('message', 'Status featured client berhasil diubah!');
        }
    }

    public function render()
    {
        $clients = Client::query()
            ->when($this->search, function($query) {
                $query->where('company_name', 'like', '%' . $this->search . '%')
                      ->orWhere('industry_sector', 'like', '%' . $this->search . '%');
            })
            ->orderBy('display_order', 'asc')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('livewire.admin.client-index', [
            'clients' => $clients
        ]);
    }
}
