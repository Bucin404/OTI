<?php

namespace App\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class ProductForm extends Component
{
    use WithFileUploads;

    public $productId;
    public $title;
    public $slug;
    public $summary;
    public $description;
    public $tech_stack;
    public $client;
    public $project_url;
    public $image;
    public $existing_image;
    public $started_at;
    public $ended_at;
    public $status = 'completed';

    public $statusOptions = [
        'completed' => 'Completed',
        'in_progress' => 'In Progress',
        'on_hold' => 'On Hold',
    ];

    protected $rules = [
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:products,slug',
        'summary' => 'nullable|string',
        'description' => 'nullable|string',
        'tech_stack' => 'nullable|string',
        'client' => 'nullable|string|max:255',
        'project_url' => 'nullable|url',
        'image' => 'nullable|image|max:2048',
        'started_at' => 'nullable|date',
        'ended_at' => 'nullable|date|after_or_equal:started_at',
        'status' => 'required|in:completed,in_progress,on_hold',
    ];

    public function mount($productId = null)
    {
        if ($productId) {
            $product = Product::findOrFail($productId);
            $this->productId = $product->id;
            $this->title = $product->title;
            $this->slug = $product->slug;
            $this->summary = $product->summary;
            $this->description = $product->description;
            $this->tech_stack = $product->tech_stack;
            $this->client = $product->client;
            $this->project_url = $product->project_url;
            $this->existing_image = $product->image_path;
            $this->started_at = $product->started_at?->format('Y-m-d');
            $this->ended_at = $product->ended_at?->format('Y-m-d');
            $this->status = $product->status;
        }
    }

    public function updatedTitle()
    {
        $this->slug = Str::slug($this->title);
    }

    protected function rules()
    {
        $rules = $this->rules;
        
        if ($this->productId) {
            $rules['slug'] = 'required|string|max:255|unique:products,slug,' . $this->productId;
        }
        
        return $rules;
    }

    public function save()
    {
        $this->validate();

        $data = [
            'title' => $this->title,
            'slug' => $this->slug,
            'summary' => $this->summary,
            'description' => $this->description,
            'tech_stack' => $this->tech_stack,
            'client' => $this->client,
            'project_url' => $this->project_url,
            'started_at' => $this->started_at,
            'ended_at' => $this->ended_at,
            'status' => $this->status,
        ];

        // Handle image upload
        if ($this->image) {
            // Delete old image if exists
            if ($this->existing_image && \Storage::disk('public')->exists($this->existing_image)) {
                \Storage::disk('public')->delete($this->existing_image);
            }
            
            $path = $this->image->store('products', 'public');
            $data['image_path'] = $path;
        }

        if ($this->productId) {
            $product = Product::findOrFail($this->productId);
            $product->update($data);
            session()->flash('message', 'Product updated successfully!');
        } else {
            Product::create($data);
            session()->flash('message', 'Product created successfully!');
        }

        return redirect()->route('admin.products.index');
    }

    public function render()
    {
        return view('livewire.admin.product-form');
    }
}
