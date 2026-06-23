<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Pasien - SIOPTIK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">

    <div class="max-w-7xl mx-auto px-6 py-10">
        <div class="flex justify-between items-center mb-8">
            <div>
                <a href="/" class="text-xs text-cyan-600 font-semibold hover:underline">← Kembali ke Beranda</a>
                <h1 class="text-3xl font-extrabold text-slate-900 mt-1">Manajemen Pasien</h1>
            </div>
            @if(session('success'))
                <div class="bg-emerald-50 border border-emerald-200 text-emerald-700 px-4 py-2 rounded-xl text-sm font-medium">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <div class="lg:col-span-4 bg-white p-6 rounded-2xl border border-slate-200/60 shadow-sm">
                <h3 class="text-lg font-bold text-slate-900 mb-4">Pendaftaran Pasien Baru</h3>
                <form action="{{ route('customers.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Nama Lengkap</label>
                        <input type="text" name="name" required class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-cyan-500 text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Nomor Telepon/WA</label>
                        <input type="text" name="phone" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-cyan-500 text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Alamat Rumah</label>
                        <textarea name="address" rows="3" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-cyan-500 text-sm"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-slate-900 hover:bg-slate-800 text-white py-3 rounded-xl text-sm font-semibold shadow-sm transition-all">
                        Simpan Data Pasien
                    </button>
                </form>
            </div>

            <div class="lg:col-span-8 bg-white rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-100">
                    <h3 class="text-base font-bold text-slate-900">Database Pasien Terdaftar</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50/70 border-b border-slate-100 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                <th class="px-6 py-3">Nama</th>
                                <th class="px-6 py-3">No. Telepon</th>
                                <th class="px-6 py-3">Alamat</th>
                                <th class="px-6 py-3">Terdaftar Pada</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-sm text-slate-600">
                            @forelse($customers as $customer)
                                <tr class="hover:bg-slate-50/50 transition-colors">
                                    <td class="px-6 py-4 font-semibold text-slate-900">{{ $customer->name }}</td>
                                    <td class="px-6 py-4">{{ $customer->phone ?? '-' }}</td>
                                    <td class="px-6 py-4 max-w-xs truncate">{{ $customer->address ?? '-' }}</td>
                                    <td class="px-6 py-4 text-xs text-slate-400">{{ $customer->created_at->format('d M Y') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-10 text-center text-slate-400 text-xs">Belum ada data pasien terdaftar.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>