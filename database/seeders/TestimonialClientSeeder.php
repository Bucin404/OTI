<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;
use App\Models\Client;

class TestimonialClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Clients first
        $clients = [
            [
                'company_name' => 'PLN Indonesia Power',
                'industry_sector' => 'Energy Sector',
                'description' => 'BUMN yang bergerak di bidang pembangkit tenaga listrik dengan kapasitas 7,000+ MW. Menggunakan Dashboard Monitoring PLN untuk optimasi operasional.',
                'icon_class' => 'bx bx-bolt',
                'is_featured' => true,
                'display_order' => 1,
            ],
            [
                'company_name' => 'IKN Nusantara',
                'industry_sector' => 'Smart City',
                'description' => 'Proyek ibu kota negara baru Indonesia yang menerapkan konsep smart city dengan teknologi terkini. Implementasi Smartpole IKN untuk infrastruktur cerdas.',
                'icon_class' => 'bx bx-buildings',
                'is_featured' => true,
                'display_order' => 2,
            ],
            [
                'company_name' => 'PT Industri Manufaktur',
                'industry_sector' => 'Manufacturing',
                'description' => 'Perusahaan manufaktur dengan 500+ karyawan yang tersertifikasi ISO. Menggunakan sistem K3 Monitoring untuk keselamatan kerja.',
                'icon_class' => 'bx bx-factory',
                'is_featured' => true,
                'display_order' => 3,
            ],
            [
                'company_name' => 'Bank Nusantara',
                'industry_sector' => 'Banking',
                'description' => 'Bank dengan 50+ cabang di seluruh Indonesia yang menerapkan teknologi digital untuk meningkatkan pelayanan. Visitor Management System untuk keamanan kantor.',
                'icon_class' => 'bx bx-building-house',
                'is_featured' => true,
                'display_order' => 4,
            ],
            [
                'company_name' => 'PT Petrokimia',
                'industry_sector' => 'Petrochemical',
                'description' => 'Perusahaan petrokimia yang fokus pada keselamatan industrial. Implementasi AI Detection untuk smoke and fire monitoring.',
                'icon_class' => 'bx bx-droplet',
                'is_featured' => true,
                'display_order' => 5,
            ],
            [
                'company_name' => 'PT Logistik Nusantara',
                'industry_sector' => 'Logistics',
                'description' => 'Perusahaan logistik dengan jaringan distribusi nasional. Mobile Presence App untuk tracking kehadiran karyawan di berbagai lokasi.',
                'icon_class' => 'bx bx-package',
                'is_featured' => true,
                'display_order' => 6,
            ],
        ];

        foreach ($clients as $clientData) {
            Client::create($clientData);
        }

        // Create Testimonials
        $testimonials = [
            [
                'client_name' => 'Ahmad Rizki',
                'client_position' => 'HSE Manager',
                'client_company' => 'PT Industri Manufaktur',
                'testimonial_text' => 'Sistem K3 Monitoring dari OTI sangat membantu kami dalam meningkatkan keselamatan kerja di lapangan. Interface yang user-friendly dan fitur real-time monitoring sangat memudahkan tim kami.',
                'rating' => 5.0,
                'is_active' => true,
                'display_order' => 1,
            ],
            [
                'client_name' => 'Budi Santoso',
                'client_position' => 'IT Manager',
                'client_company' => 'PLN Indonesia Power',
                'testimonial_text' => 'Dashboard monitoring PLN yang dikembangkan OTI memberikan insight yang valuable untuk operasional kami. Support tim yang responsif juga menjadi nilai plus.',
                'rating' => 5.0,
                'is_active' => true,
                'display_order' => 2,
            ],
            [
                'client_name' => 'Siti Nurhaliza',
                'client_position' => 'Project Manager',
                'client_company' => 'IKN Development',
                'testimonial_text' => 'Implementasi Smartpole IKN berjalan lancar berkat expertise tim OTI. Produk berkualitas dengan teknologi terkini, sesuai dengan visi smart city kami.',
                'rating' => 4.5,
                'is_active' => true,
                'display_order' => 3,
            ],
            [
                'client_name' => 'Andi Wijaya',
                'client_position' => 'HR Director',
                'client_company' => 'PT Logistik Nusantara',
                'testimonial_text' => 'Aplikasi Mobile Presence memudahkan tracking kehadiran karyawan kami yang tersebar di berbagai lokasi. Fitur GPS dan foto real-time sangat membantu proses monitoring.',
                'rating' => 5.0,
                'is_active' => true,
                'display_order' => 4,
            ],
            [
                'client_name' => 'Rudi Hartono',
                'client_position' => 'Plant Manager',
                'client_company' => 'PT Petrokimia',
                'testimonial_text' => 'Sistem AI Detection untuk smoke and fire dari OTI menjadi solusi tepat untuk meningkatkan keamanan pabrik kami. Akurasi deteksi yang tinggi dan notifikasi real-time sangat membantu tim safety.',
                'rating' => 5.0,
                'is_active' => true,
                'display_order' => 5,
            ],
            [
                'client_name' => 'Dewi Lestari',
                'client_position' => 'Office Manager',
                'client_company' => 'Bank Nusantara',
                'testimonial_text' => 'Visitor Management System membuat proses penerimaan tamu di kantor kami menjadi lebih profesional dan terorganisir. Data terintegrasi dengan baik dan laporan mudah diakses.',
                'rating' => 5.0,
                'is_active' => true,
                'display_order' => 6,
            ],
        ];

        foreach ($testimonials as $testimonialData) {
            Testimonial::create($testimonialData);
        }
    }
}
