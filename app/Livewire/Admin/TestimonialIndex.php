<?php

namespace App\Livewire\Admin;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class TestimonialIndex extends Component
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
            $testimonial = Testimonial::find($this->deleteId);
            
            if ($testimonial) {
                // Delete avatar image if exists
                if ($testimonial->client_avatar && Storage::disk('public')->exists($testimonial->client_avatar)) {
                    Storage::disk('public')->delete($testimonial->client_avatar);
                }
                
                $testimonial->delete();
                session()->flash('message', 'Testimonial berhasil dihapus!');
            }
            
            $this->deleteId = null;
        }
    }

    public function toggleActive($id)
    {
        $testimonial = Testimonial::find($id);
        if ($testimonial) {
            $testimonial->is_active = !$testimonial->is_active;
            $testimonial->save();
            session()->flash('message', 'Status testimonial berhasil diubah!');
        }
    }

    public function render()
    {
        $testimonials = Testimonial::query()
            ->when($this->search, function($query) {
                $query->where('client_name', 'like', '%' . $this->search . '%')
                      ->orWhere('client_company', 'like', '%' . $this->search . '%')
                      ->orWhere('client_position', 'like', '%' . $this->search . '%');
            })
            ->orderBy('display_order', 'asc')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('livewire.admin.testimonial-index', [
            'testimonials' => $testimonials
        ]);
    }
}
