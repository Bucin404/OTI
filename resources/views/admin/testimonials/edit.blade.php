@extends('admin.layout')

@section('title', 'Edit Testimonial')
@section('header', 'Edit Testimonial')

@section('content')
<div style="margin-bottom: 25px;">
    <a href="{{ route('admin.testimonials.index') }}" class="btn" style="display: inline-flex; align-items: center; gap: 8px;">
        <i class='bx bx-arrow-back'></i> Back to Testimonials
    </a>
</div>

<div style="background: white; border-radius: 12px; padding: 2rem; box-shadow: 0 2px 15px rgba(0,0,0,0.08);">
    @livewire('admin.testimonial-form', ['testimonialId' => $id])
</div>
@endsection
