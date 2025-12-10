<div>
    <!-- Search & Filter -->
    <div style="padding: 20px; border-bottom: 1px solid var(--border);">
        <input 
            type="text" 
            wire:model.live.debounce.300ms="search" 
            placeholder="Search products..." 
            style="width: 100%; max-width: 400px; padding: 10px 15px; border: 2px solid var(--border); border-radius: 8px;"
        >
    </div>

    <!-- Products Table -->
    @if($products->count() > 0)
    <table style="width: 100%; border-collapse: collapse;">
        <thead style="background: linear-gradient(135deg, var(--primary), var(--primary-dark));">
            <tr>
                <th style="padding: 15px 20px; text-align: left; color: white; font-weight: 600;">Image</th>
                <th style="padding: 15px 20px; text-align: left; color: white; font-weight: 600;">Title</th>
                <th style="padding: 15px 20px; text-align: left; color: white; font-weight: 600;">Status</th>
                <th style="padding: 15px 20px; text-align: left; color: white; font-weight: 600;">Client</th>
                <th style="padding: 15px 20px; text-align: left; color: white; font-weight: 600;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr style="border-bottom: 1px solid var(--border);">
                <td style="padding: 15px 20px;">
                    @if($product->image_path)
                        <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->title }}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px;">
                    @else
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white;">
                            <i class='bx bx-image'></i>
                        </div>
                    @endif
                </td>
                <td style="padding: 15px 20px;">
                    <strong>{{ $product->title }}</strong><br>
                    <small style="color: #6B7280;">{{ Str::limit($product->summary, 50) }}</small>
                </td>
                <td style="padding: 15px 20px;">
                    <span style="padding: 4px 12px; background: {{ $product->status == 'completed' ? '#D1FAE5' : '#FEF3C7' }}; color: {{ $product->status == 'completed' ? '#065F46' : '#92400E' }}; border-radius: 12px; font-size: 12px;">
                        {{ ucfirst(str_replace('_', ' ', $product->status)) }}
                    </span>
                </td>
                <td style="padding: 15px 20px;">{{ $product->client ?? '-' }}</td>
                <td style="padding: 15px 20px;">
                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-primary" style="margin-right: 5px;">Edit</a>
                    <button wire:click="delete({{ $product->id }})" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <div style="padding: 20px;">
        {{ $products->links() }}
    </div>
    @else
    <div style="text-align: center; padding: 3rem; color: #6B7280;">
        No products found.
    </div>
    @endif
</div>
