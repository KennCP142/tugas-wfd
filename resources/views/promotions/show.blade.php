@extends('layouts.app')

@section('title', $promotion->title . ' - PromoHub')

@section('content')
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="md:flex">
            <div class="md:w-1/2">
                <img src="{{ Storage::url($promotion->image) }}" alt="{{ $promotion->title }}" class="w-full h-full object-cover">
            </div>
            <div class="p-6 md:w-1/2">
                <div class="flex justify-between items-start mb-4">
                    <h1 class="text-3xl font-bold">{{ $promotion->title }}</h1>
                    <div class="text-sm text-gray-500">
                        Dibuat pada: {{ $promotion->created_at->format('d M Y') }}
                    </div>
                </div>
                
                <div class="prose max-w-none mb-6">
                    <p>{{ $promotion->description }}</p>
                </div>
                
                <div class="flex space-x-3 mt-8">
                    <a href="{{ route('promotions.edit', $promotion) }}" class="btn btn-primary">
                        Edit Promosi
                    </a>
                    
                    <form action="{{ route('promotions.destroy', $promotion) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus promosi ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                    
                    <a href="{{ route('promotions.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection