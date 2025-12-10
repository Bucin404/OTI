<?php

namespace App\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;

    public $search = '';
    public $deleteId = null;

    protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
    }

    public function deleteProduct()
    {
        if ($this->deleteId) {
            $product = Product::find($this->deleteId);
            
            if ($product) {
                // Delete image if exists
                if ($product->image_path && \Storage::disk('public')->exists($product->image_path)) {
                    \Storage::disk('public')->delete($product->image_path);
                }
                
                $product->delete();
                session()->flash('message', 'Product deleted successfully!');
            }
            
            $this->deleteId = null;
        }
    }

    public function render()
    {
        $products = Product::when($this->search, function ($query) {
            $query->where('title', 'like', '%' . $this->search . '%')
                  ->orWhere('summary', 'like', '%' . $this->search . '%')
                  ->orWhere('tech_stack', 'like', '%' . $this->search . '%');
        })
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        return view('livewire.admin.product-index', [
            'products' => $products
        ]);
    }
}
