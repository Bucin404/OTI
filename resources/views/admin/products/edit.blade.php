@extends('admin.layout')

@section('title', 'Edit Product')
@section('header', 'Edit Product')

@section('content')
<div style="margin-bottom: 25px;">
    <a href="{{ route('admin.products.index') }}" class="btn">
        <i class='bx bx-left-arrow-alt'></i> Back to Products
    </a>
</div>

<div style="background: white; border-radius: 12px; padding: 30px; box-shadow: 0 2px 15px rgba(0,0,0,0.08);">
    @livewire('admin.product-form', ['productId' => $productId])
</div>
@endsection
