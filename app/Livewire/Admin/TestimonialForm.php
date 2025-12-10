<?php

namespace App\Livewire\Admin;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class TestimonialForm extends Component
{
    use WithFileUploads;

    public $testimonialId;
    public $client_name;
    public $client_position;
    public $client_company;
    public $testimonial_text;
    public $rating = 5.0;
    public $client_avatar;
    public $existing_avatar;
    public $is_active = true;
    public $display_order = 0;

    protected $rules = [
        'client_name' => 'required|string|max:255',
        'client_position' => 'required|string|max:255',
        'client_company' => 'required|string|max:255',
        'testimonial_text' => 'required|string',
        'rating' => 'required|numeric|min:0|max:5',
        'client_avatar' => 'nullable|image|max:2048',
        'is_active' => 'boolean',
        'display_order' => 'integer|min:0',
    ];

    public function mount($id = null)
    {
        if ($id) {
            $testimonial = Testimonial::findOrFail($id);
            $this->testimonialId = $testimonial->id;
            $this->client_name = $testimonial->client_name;
            $this->client_position = $testimonial->client_position;
            $this->client_company = $testimonial->client_company;
            $this->testimonial_text = $testimonial->testimonial_text;
            $this->rating = $testimonial->rating;
            $this->existing_avatar = $testimonial->client_avatar;
            $this->is_active = $testimonial->is_active;
            $this->display_order = $testimonial->display_order;
        }
    }

    public function save()
    {
        $this->validate();

        $data = [
            'client_name' => $this->client_name,
            'client_position' => $this->client_position,
            'client_company' => $this->client_company,
            'testimonial_text' => $this->testimonial_text,
            'rating' => $this->rating,
            'is_active' => $this->is_active,
            'display_order' => $this->display_order,
        ];

        // Handle avatar upload
        if ($this->client_avatar) {
            // Delete old avatar if exists
            if ($this->existing_avatar && Storage::disk('public')->exists($this->existing_avatar)) {
                Storage::disk('public')->delete($this->existing_avatar);
            }
            
            $path = $this->client_avatar->store('testimonials', 'public');
            $data['client_avatar'] = $path;
        }

        if ($this->testimonialId) {
            $testimonial = Testimonial::find($this->testimonialId);
            $testimonial->update($data);
            session()->flash('message', 'Testimonial berhasil diupdate!');
        } else {
            Testimonial::create($data);
            session()->flash('message', 'Testimonial berhasil ditambahkan!');
        }

        return redirect()->route('admin.testimonials.index');
    }

    public function render()
    {
        return view('livewire.admin.testimonial-form');
    }
}
