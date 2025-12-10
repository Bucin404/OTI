<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_products' => Product::count(),
            'total_contacts' => Contact::count(),
            'completed_projects' => Product::where('status', 'completed')->count(),
            'in_progress_projects' => Product::where('status', 'in_progress')->count(),
        ];

        $recent_products = Product::latest()->take(5)->get();
        $recent_contacts = Contact::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recent_products', 'recent_contacts'));
    }
}
