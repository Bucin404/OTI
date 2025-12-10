@extends('admin.layout')

@section('title', 'Contact Messages')
@section('header', 'Contact Messages')

@section('content')
<div style="margin-bottom: 25px;">
    <h2 style="font-size: 1.75rem; font-weight: 700; color: var(--dark);">All Contact Messages</h2>
    <p style="color: #6B7280;">View messages from visitors</p>
</div>

<div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 15px rgba(0,0,0,0.08);">
    @php
        $contacts = \App\Models\Contact::latest()->paginate(15);
    @endphp
    
    @if($contacts->count() > 0)
    <div class="admin-table">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>IP Address</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td><strong>{{ $contact->name }}</strong></td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ Str::limit($contact->message, 80) }}</td>
                    <td>{{ $contact->ip_address ?? '-' }}</td>
                    <td>{{ $contact->created_at->format('d M Y H:i') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div style="padding: 20px;">
        {{ $contacts->links() }}
    </div>
    @else
    <p style="text-align: center; color: #6B7280; padding: 3rem;">No contact messages yet</p>
    @endif
</div>
@endsection
