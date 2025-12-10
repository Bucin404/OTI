@extends('admin.layout')

@section('title', 'Manage Testimonials')
@section('header', 'Testimonials Management')

@section('content')
<div style="margin-bottom: 25px; display: flex; justify-content: space-between; align-items: center;">
    <div>
        <h2 style="font-size: 1.75rem; font-weight: 700; color: var(--dark);">All Testimonials</h2>
        <p style="color: #6B7280;">Manage client testimonials and feedback</p>
    </div>
    <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">
        <i class='bx bx-plus'></i> Add New Testimonial
    </a>
</div>

<div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 15px rgba(0,0,0,0.08);">
    @livewire('admin.testimonial-index')
</div>
@endsection
