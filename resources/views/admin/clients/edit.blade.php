@extends('admin.layout')

@section('title', 'Edit Client')
@section('header', 'Edit Client')

@section('content')
<div style="margin-bottom: 25px;">
    <a href="{{ route('admin.clients.index') }}" class="btn" style="display: inline-flex; align-items: center; gap: 8px;">
        <i class='bx bx-arrow-back'></i> Back to Clients
    </a>
</div>

<div style="background: white; border-radius: 12px; padding: 2rem; box-shadow: 0 2px 15px rgba(0,0,0,0.08);">
    @livewire('admin.client-form', ['clientId' => $id])
</div>
@endsection
