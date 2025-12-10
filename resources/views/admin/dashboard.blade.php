@extends('admin.layout')

@section('title', 'Dashboard')
@section('header', 'Dashboard')

@section('content')
<!-- Stats Grid -->
<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-icon primary">
            <i class='bx bx-package'></i>
        </div>
        <div class="stat-info">
            <h3>{{ $stats['total_products'] }}</h3>
            <p>Total Products</p>
        </div>
    </div>
    
    <div class="stat-card">
        <div class="stat-icon success">
            <i class='bx bx-check-circle'></i>
        </div>
        <div class="stat-info">
            <h3>{{ $stats['completed_projects'] }}</h3>
            <p>Completed Projects</p>
        </div>
    </div>
    
    <div class="stat-card">
        <div class="stat-icon warning">
            <i class='bx bx-time'></i>
        </div>
        <div class="stat-info">
            <h3>{{ $stats['in_progress_projects'] }}</h3>
            <p>In Progress</p>
        </div>
    </div>
    
    <div class="stat-card">
        <div class="stat-icon info">
            <i class='bx bx-envelope'></i>
        </div>
        <div class="stat-info">
            <h3>{{ $stats['total_contacts'] }}</h3>
            <p>Contact Messages</p>
        </div>
    </div>
</div>

<!-- Recent Products -->
<div style="background: white; border-radius: 12px; padding: 25px; box-shadow: 0 2px 15px rgba(0,0,0,0.08); margin-bottom: 25px;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2 style="font-size: 1.5rem; font-weight: 700; color: var(--dark);">Recent Products</h2>
        <a href="{{ route('admin.products.index') }}" class="btn btn-primary btn-sm">View All</a>
    </div>
    
    @if($recent_products->count() > 0)
    <div class="admin-table">
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Client</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recent_products as $product)
                <tr>
                    <td>
                        <strong>{{ $product->title }}</strong><br>
                        <small style="color: #6B7280;">{{ Str::limit($product->summary, 50) }}</small>
                    </td>
                    <td>
                        <span style="padding: 4px 12px; background: {{ $product->status == 'completed' ? '#D1FAE5' : '#FEF3C7' }}; color: {{ $product->status == 'completed' ? '#065F46' : '#92400E' }}; border-radius: 12px; font-size: 12px;">
                            {{ ucfirst(str_replace('_', ' ', $product->status)) }}
                        </span>
                    </td>
                    <td>{{ $product->client ?? '-' }}</td>
                    <td>{{ $product->created_at->format('d M Y') }}</td>
                    <td>
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <p style="text-align: center; color: #6B7280; padding: 2rem;">No products yet</p>
    @endif
</div>

<!-- Recent Contacts -->
<div style="background: white; border-radius: 12px; padding: 25px; box-shadow: 0 2px 15px rgba(0,0,0,0.08);">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2 style="font-size: 1.5rem; font-weight: 700; color: var(--dark);">Recent Contacts</h2>
        <a href="{{ route('admin.contacts.index') }}" class="btn btn-primary btn-sm">View All</a>
    </div>
    
    @if($recent_contacts->count() > 0)
    <div class="admin-table">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recent_contacts as $contact)
                <tr>
                    <td><strong>{{ $contact->name }}</strong></td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ Str::limit($contact->message, 60) }}</td>
                    <td>{{ $contact->created_at->format('d M Y H:i') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <p style="text-align: center; color: #6B7280; padding: 2rem;">No contact messages yet</p>
    @endif
</div>
@endsection
