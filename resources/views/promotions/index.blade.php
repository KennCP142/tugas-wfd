@extends('layouts.app')


@section('title', 'Daftar Promosi - PromoHub')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Daftar Promosi</h1>
    
    <div class="mb-4 flex justify-between items-center">
        <p class="text-gray-600">Menampilkan semua promosi terbaru</p>
        <a href="{{ route('promotions.create') }}" class="btn btn-primary">
            Tambah Promosi Baru
        </a>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($promotions as $promotion)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="h-48 overflow-hidden">
                    <img src="{{ Storage::url($promotion->image) }}" alt="{{ $promotion->title }}" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2 truncate">{{ $promotion->title }}</h2>
                    <p class="text-gray-600 mb-4 line-clamp-3">{{ Str::limit($promotion->description, 100) }}</p>
                    <div class="flex justify-between items-center">
                        <a href="{{ route('promotions.show', $promotion) }}" class="text-blue-600 hover:text-blue-800">
                            Lihat Detail
                        </a>
                        <span class="text-sm text-gray-500">
                            {{ $promotion->created_at->format('d M Y') }}
                        </span>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-3 bg-gray-100 p-8 rounded-lg text-center">
                <p class="text-gray-500">Tidak ada promosi yang ditemukan</p>
                <a href="{{ route('promotions.create') }}" class="btn btn-primary mt-4 inline-block">Tambah Promosi Baru</a>
            </div>
        @endforelse
    </div>
    
    <div class="mt-6">
        {{ $promotions->links() }}
    </div>
@endsection