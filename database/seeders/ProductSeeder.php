<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'SMOOHT HT Android',
                'slug' => 'smooht-ht-android',
                'summary' => 'Hand Talky berbasis Android yang sangat mudah digunakan dengan dukungan aplikasi karya anak bangsa',
                'description' => 'Hand Talky berbasis Android yang sangat mudah digunakan, dengan dukungan aplikasi karya anak bangsa, maka produk ini sangat sesuai dengan kebutuhan di Indonesia. Produk ini menggunakan Jaringan GSM dan WIFI ACCESS dalam Berkomunikasi. Dilengkapi dengan fitur Single Call, Group Call, GPS Positioning, dan Quick Search for Member.',
                'tech_stack' => 'Android, GSM Network, WiFi, GPS',
                'client' => null,
                'project_url' => null,
                'image_path' => null,
                'started_at' => '2023-01-15',
                'ended_at' => '2023-06-30',
                'status' => 'completed',
            ],
            [
                'title' => 'Mobile Presence (Absensi Mobile)',
                'slug' => 'mobile-presence-absensi-mobile',
                'summary' => 'Sistem pencatatan kehadiran karyawan secara online menggunakan perangkat seluler',
                'description' => 'Sistem pencatatan kehadiran karyawan yang dilakukan secara online menggunakan perangkat seluler. Sistem ini dapat membantu perusahaan mengelola data karyawan, waktu kerja, dan kehadiran. Fitur: Presence Face Recognition, Lokasi GPS, Atensi, Tugas, Patrol, Monitoring User, Easy to Use, Anywhere Presence.',
                'tech_stack' => 'Mobile App, Face Recognition, GPS, Cloud Database',
                'client' => null,
                'project_url' => null,
                'image_path' => null,
                'started_at' => '2023-03-01',
                'ended_at' => '2023-08-15',
                'status' => 'completed',
            ],
            [
                'title' => 'K3 Monitoring Report',
                'slug' => 'k3-monitoring-report',
                'summary' => 'Proses rutin pengumpulan dan analisis data kinerja HSSE di perusahaan',
                'description' => 'Proses rutin dimana data dengan informasi terkait kinerja HSSE (Health, Safety, Security & Environment) di suatu perusahaan dikumpulkan, dianalisis dan dilaporkan secara periodik setiap bulan. Sistem ini memiliki 4 level user: User (Membuat Laporan), Manager (Mereview Laporan), Admin (Approve Laporan dan Manage Company), Super Admin (Monitoring Laporan, Manage User dan Manage Company).',
                'tech_stack' => 'Web Application, Database Management, Reporting System',
                'client' => null,
                'project_url' => null,
                'image_path' => null,
                'started_at' => '2023-05-01',
                'ended_at' => '2023-11-30',
                'status' => 'completed',
            ],
            [
                'title' => 'Smartpole IKN',
                'slug' => 'smartpole-ikn',
                'summary' => 'Tiang lampu pintar dengan berbagai teknologi canggih untuk Ibu Kota Nusantara',
                'description' => 'Smartpole adalah sebuah tiang lampu pintar yang dilengkapi dengan berbagai teknologi canggih untuk mendukung fungsi-fungsi tambahan selain pencahayaan. Selain sebagai penerangan jalan, smartpole dilengkapi dengan berbagai sensor dan device IoT untuk monitoring dan smart city applications. Proyek ini diimplementasikan untuk Dashboard Monitoring Smartpole Ibu Kota Nusantara.',
                'tech_stack' => 'IoT Sensors, Smart Lighting, Network Infrastructure, Cloud Dashboard',
                'client' => 'Ibu Kota Nusantara',
                'project_url' => null,
                'image_path' => null,
                'started_at' => '2023-08-01',
                'ended_at' => null,
                'status' => 'in_progress',
            ],
            [
                'title' => 'Monitoring Air Limbah',
                'slug' => 'monitoring-air-limbah',
                'summary' => 'Sistem monitoring limbah dengan IoT untuk deteksi parameter secara real-time',
                'description' => 'Monitoring limbah dilakukan dengan memanfaatkan sistem IoT (Internet of Things) yang terhubung langsung ke sensor. Sistem ini mampu mendeteksi berbagai parameter dan ukuran yang terdapat pada limbah tertentu secara real-time, dipasang di berbagai titik strategis untuk memastikan data yang diperoleh lebih akurat dan menyeluruh.',
                'tech_stack' => 'IoT Sensors, Real-time Monitoring, Industrial Cable, Cloud Platform',
                'client' => null,
                'project_url' => null,
                'image_path' => null,
                'started_at' => '2023-09-15',
                'ended_at' => '2024-02-28',
                'status' => 'completed',
            ],
            [
                'title' => 'Smart Paging Intercom',
                'slug' => 'smart-paging-intercom',
                'summary' => 'Sistem komunikasi canggih yang mengintegrasikan komunikasi suara dua arah dengan paging',
                'description' => 'Smartpaging Intercom adalah sistem komunikasi canggih yang mengintegrasikan komunikasi suara dua arah (interkom) dengan kemampuan pengiriman pesan atau pengumuman secara luas (paging). Sistem ini memungkinkan komunikasi efisien di berbagai area dengan kontrol terpusat melalui dashboard.',
                'tech_stack' => 'Intercom System, Paging Technology, Network Audio, Control Dashboard',
                'client' => null,
                'project_url' => null,
                'image_path' => null,
                'started_at' => '2024-01-10',
                'ended_at' => '2024-05-20',
                'status' => 'completed',
            ],
            [
                'title' => 'AI Smoke and Fire Detection',
                'slug' => 'ai-smoke-fire-detection',
                'summary' => 'Sistem deteksi asap dan kebakaran menggunakan Artificial Intelligence',
                'description' => 'Sistem AI yang dapat mendeteksi perubahan suhu yang signifikan untuk mencegah kebakaran di area kritis. Dilengkapi dengan kemampuan identifikasi asap secara otomatis menggunakan teknologi AI untuk deteksi dini dan pencegahan kebakaran.',
                'tech_stack' => 'Artificial Intelligence, Computer Vision, Thermal Sensors, Alert System',
                'client' => null,
                'project_url' => null,
                'image_path' => null,
                'started_at' => '2024-02-01',
                'ended_at' => '2024-06-30',
                'status' => 'completed',
            ],
            [
                'title' => 'AI Wearpack and Helmet Detection',
                'slug' => 'ai-wearpack-helmet-detection',
                'summary' => 'Sistem AI untuk memeriksa kepatuhan keselamatan pekerja dengan deteksi wearpack dan helmet',
                'description' => 'Memanfaatkan analitik bertenaga AI untuk memeriksa kepatuhan keselamatan dan risiko dalam lingkungan kerja. Sistem ini dapat mendeteksi apakah pekerja menggunakan wearpack dan helmet dengan benar, serta memberikan alert real-time jika terdapat pelanggaran protokol keselamatan.',
                'tech_stack' => 'Artificial Intelligence, Computer Vision, Object Detection, Alert System',
                'client' => null,
                'project_url' => null,
                'image_path' => null,
                'started_at' => '2024-03-15',
                'ended_at' => '2024-07-30',
                'status' => 'completed',
            ],
            [
                'title' => 'Visitor Management System',
                'slug' => 'visitor-management-system',
                'summary' => 'Sistem manajemen akses pengunjung terintegrasi dengan access control dan parking management',
                'description' => 'Sistem komprehensif untuk manajemen pengunjung yang mencakup Access Control, Time & Attendance, dan Consumption management. Dilengkapi dengan berbagai hardware seperti Tripod Turnstile Gate, Full Height Turnstile, Face Recognition, Gate Barrier Parking, dan berbagai aksesoris pendukung. Sistem ini menyediakan solusi keamanan akses kontrol lengkap untuk gedung dan fasilitas.',
                'tech_stack' => 'Access Control System, Face Recognition, Turnstile Gate, Parking Barrier, TCP/IP Network',
                'client' => null,
                'project_url' => null,
                'image_path' => null,
                'started_at' => '2024-04-01',
                'ended_at' => null,
                'status' => 'in_progress',
            ],
            [
                'title' => 'Dashboard Monitoring PLN Indonesia Power',
                'slug' => 'dashboard-monitoring-pln',
                'summary' => 'Dashboard monitoring untuk PLN Indonesia Power',
                'description' => 'Software development untuk dashboard monitoring PLN Indonesia Power. Sistem ini memungkinkan monitoring real-time berbagai parameter operasional dan memberikan visualisasi data yang komprehensif untuk pengambilan keputusan yang lebih baik.',
                'tech_stack' => 'Laravel, Vue.js, Real-time Dashboard, Data Visualization',
                'client' => 'PLN Indonesia Power',
                'project_url' => null,
                'image_path' => null,
                'started_at' => '2023-06-01',
                'ended_at' => '2023-12-15',
                'status' => 'completed',
            ],
            [
                'title' => 'CCTV Artificial Intelligence',
                'slug' => 'cctv-artificial-intelligence',
                'summary' => 'Sistem CCTV dengan teknologi AI untuk monitoring pintar',
                'description' => 'Sistem CCTV yang dilengkapi dengan teknologi Artificial Intelligence untuk deteksi objek, pengenalan wajah, dan analisis perilaku. Sistem ini dapat memberikan alert otomatis untuk aktivitas mencurigakan dan memudahkan monitoring keamanan 24/7.',
                'tech_stack' => 'CCTV, Artificial Intelligence, Computer Vision, Video Analytics',
                'client' => null,
                'project_url' => null,
                'image_path' => null,
                'started_at' => '2024-05-01',
                'ended_at' => null,
                'status' => 'in_progress',
            ],
        ];

        foreach ($projects as $project) {
            Product::create($project);
        }
    }
}
