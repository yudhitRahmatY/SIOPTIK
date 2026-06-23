<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIOPTIK - Sistem Informasi Manajemen Optik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#f8fafc] text-slate-800 antialiased selection:bg-slate-900 selection:text-white">

    <div class="absolute inset-x-0 top-0 -z-10 h-[600px] bg-gradient-to-b from-slate-100/70 to-transparent pointer-events-none"></div>

    <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <a href="{{ url('/') }}" class="flex items-center gap-3">
                    <svg class="w-9 h-9 text-[#0f172a]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="6" cy="12" r="3"></circle>
                        <circle cx="18" cy="12" r="3"></circle>
                        <line x1="9" y1="12" x2="15" y2="12"></line>
                    </svg>
                    <span class="font-extrabold text-xl tracking-wider text-[#0f172a]">SI<span class="text-slate-500 font-medium">OPTIK</span></span>
                </a>

                <div class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-600">
                    <a href="{{ url('/') }}" class="text-slate-900 border-b-2 border-slate-900 pb-1">Beranda</a>
                    <a href="{{ route('customers.index') }}" class="hover:text-slate-900 transition">Pasien</a>
                    <a href="#" class="hover:text-slate-900 transition opacity-50 cursor-not-allowed" title="Segera Hadir">Resep</a>
                    <a href="#" class="hover:text-slate-900 transition opacity-50 cursor-not-allowed" title="Segera Hadir">Stok</a>
                    <a href="#" class="hover:text-slate-900 transition opacity-50 cursor-not-allowed" title="Segera Hadir">Penjualan</a>
                </div>

                <div class="flex items-center gap-3">
                    <a href="{{ route('customers.index') }}" class="hidden sm:inline-flex bg-slate-900 hover:bg-slate-800 text-white px-5 py-2.5 rounded-full text-xs font-semibold tracking-wide shadow-sm transition-all">
                        Masuk Dashboard
                    </a>
                    <a href="{{ route('customers.index') }}" class="bg-cyan-600 hover:bg-cyan-700 text-white px-5 py-2.5 rounded-full text-xs font-semibold tracking-wide shadow-sm transition-all">
                        Daftar Pasien Baru
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <header class="max-w-7xl mx-auto px-6 lg:px-8 pt-12 pb-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-7 text-left space-y-6">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-100 border border-slate-200 text-xs font-semibold text-slate-600">
                    <span class="flex h-2 w-2 rounded-full bg-emerald-500"></span>
                    Sistem Informasi Manajemen Optik Terintegrasi
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-[#0f172a] tracking-tight leading-[1.1]">
                    Tingkatkan Pelayanan & <br class="hidden sm:inline" />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-slate-900 to-slate-700">Efisiensi Optik Anda</span>
                </h1>
                <p class="text-base sm:text-lg text-slate-600 max-w-xl leading-relaxed">
                    Kelola data pasien, resep mata (OD/OS), inventaris frame & lensa, serta transaksi kasir secara modern dalam satu platform kerja.
                </p>
                <div class="pt-4 flex flex-wrap gap-4">
                    <a href="{{ route('customers.index') }}" class="inline-flex items-center gap-2 bg-cyan-600 hover:bg-cyan-700 text-white px-6 py-3.5 rounded-xl text-sm font-semibold shadow-md shadow-cyan-600/10 transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        Kelola Pasien & Resep
                    </a>
                    <a href="{{ route('customers.index') }}" class="inline-flex items-center gap-2 bg-white hover:bg-slate-50 text-slate-800 border border-slate-200/80 px-6 py-3.5 rounded-xl text-sm font-semibold shadow-sm transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                        Pantau Stok & Penjualan
                    </a>
                </div>
            </div>

            <div class="lg:col-span-5 relative">
                <div class="absolute -inset-1 rounded-[2rem] bg-gradient-to-tr from-cyan-500 to-slate-900 opacity-10 blur-xl"></div>
                <div class="relative overflow-hidden rounded-[2rem] border border-slate-200 bg-white p-3 shadow-xl">
                    <img src="https://images.unsplash.com/photo-1511499767150-a48a237f0083?auto=format&fit=crop&q=80&w=800" 
                         alt="Interior Toko Kacamata Modern" 
                         class="w-full h-[320px] sm:h-[400px] object-cover rounded-[1.5rem]" />
                </div>
            </div>

        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 lg:px-8 pb-24">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-3 gap-5">
                
                <a href="{{ route('customers.index') }}" class="group bg-white p-6 rounded-2xl border border-slate-200/60 shadow-sm hover:border-cyan-500/50 hover:shadow-md transition-all text-left block">
                    <div class="w-11 h-11 rounded-xl bg-slate-900 text-white flex items-center justify-center mb-5 group-hover:bg-cyan-600 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 group-hover:text-cyan-600 transition-colors">Pencatatan Resep Akurat</h3>
                    <p class="text-slate-500 text-xs mt-2 leading-relaxed">Penyimpanan detil metrik refraksi mata OD/OS, SPH, CYL, AXIS, serta jarak pupil (PD).</p>
                </a>

                <div class="group bg-white p-6 rounded-2xl border border-slate-200/60 shadow-sm opacity-75">
                    <div class="w-11 h-11 rounded-xl bg-slate-400 text-white flex items-center justify-center mb-5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                    </div>
                    <h3 class="text-base font-bold text-slate-400">Inventaris Frame & Lensa</h3>
                    <p class="text-slate-400 text-xs mt-2 leading-relaxed">Kelola spesifikasi merk bingkai, tipe lensa, kategori, dan pelacakan batas minimum stok.</p>
                </div>

                <div class="group bg-white p-6 rounded-2xl border border-slate-200/60 shadow-sm opacity-75">
                    <div class="w-11 h-11 rounded-xl bg-slate-400 text-white flex items-center justify-center mb-5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-base font-bold text-slate-400">Point of Sales (POS)</h3>
                    <p class="text-slate-400 text-xs mt-2 leading-relaxed">Kasir penjualan instan, pelacakan pesanan kacamata lab, uang muka (DP), dan invoice otomatis.</p>
                </div>

            </div>

            <div class="lg:col-span-4 bg-white p-6 rounded-2xl border border-slate-200/60 shadow-sm space-y-4">
                <h4 class="text-sm font-bold text-slate-900 tracking-wide">Statistik Cepat</h4>
                <div class="space-y-3">
                    <div class="flex justify-between items-center p-3 rounded-xl bg-slate-50 border border-slate-100">
                        <span class="text-xs font-medium text-slate-500">Pasien Terdaftar</span>
                        <span class="text-sm font-bold text-slate-900">{{ \App\Models\Customer::count() }} <span class="text-[10px] text-emerald-500 font-normal">Total</span></span>
                    </div>
                    <div class="flex justify-between items-center p-3 rounded-xl bg-slate-50 border border-slate-100">
                        <span class="text-xs font-medium text-slate-500">Pemesanan Lab</span>
                        <span class="text-sm font-bold text-slate-400">0</span>
                    </div>
                    <div class="flex justify-between items-center p-3 rounded-xl bg-slate-50 border border-slate-100">
                        <span class="text-xs font-medium text-slate-500">Status Sistem</span>
                        <span class="text-sm font-bold text-emerald-600">Online</span>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <footer class="border-t border-slate-200 bg-white py-8">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-center gap-4 text-sm text-slate-500">
            <div class="flex items-center gap-2 font-semibold text-slate-700">
                <span>👓</span> SIOPTIK
            </div>
            <div class="text-xs">
                &copy; {{ date('Y') }} SIOPTIK. All rights reserved.
            </div>
        </div>
    </footer>

</body>
</html>