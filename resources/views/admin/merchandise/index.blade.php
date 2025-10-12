@extends('layouts.app')

@section('title', 'Dashboard - Merchandise Management')

@section('content')
    <div class="space-y-6">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <h1 class="text-[24px] md:text-[26px] font-semibold text-slate-800">
                Merchandise Management
            </h1>
            <a href="{{ route('merchandise.create') }}"
                class="h-[42px] px-6 rounded-md text-[13px] font-medium bg-primary-500 hover:bg-primary-600 text-white transition flex items-center gap-2">
                <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Add New Merchandise
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-50 border border-green-200 text-green-600 px-4 py-3 rounded-lg text-sm">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white shadow-card rounded-xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-[#E3E9F2] bg-[#F8FAFE]">
                            <th class="text-left text-[13px] text-slate-600 font-medium px-6 py-4">Image</th>
                            <th class="text-left text-[13px] text-slate-600 font-medium px-6 py-4">Name</th>
                            <th class="text-left text-[13px] text-slate-600 font-medium px-6 py-4">Category</th>
                            <th class="text-left text-[13px] text-slate-600 font-medium px-6 py-4">Price</th>
                            <th class="text-left text-[13px] text-slate-600 font-medium px-6 py-4">Status</th>
                            <th class="text-left text-[13px] text-slate-600 font-medium px-6 py-4">Order</th>
                            <th class="text-left text-[13px] text-slate-600 font-medium px-6 py-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($merchandise as $item)
                            <tr class="border-b border-[#E3E9F2] hover:bg-slate-50/50 transition-colors">
                                <td class="px-6 py-4">
                                    <img src="{{ $item->image_url }}" alt="{{ $item->name }}"
                                        onerror="this.src='{{ asset('images/placeholder.png') }}'"
                                        class="w-16 h-16 object-cover rounded-lg border border-gray-200">
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-[13px] text-slate-800 font-medium">{{ $item->name }}</div>
                                    <div class="text-[12px] text-slate-500">{{ Str::limit($item->description, 50) }}</div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-[13px] text-slate-800">{{ $item->category }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-[13px] text-slate-800">Rp
                                        {{ number_format($item->price, 0, ',', '.') }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium capitalize
                                                                                                        {{ $item->is_active ? 'bg-green-100 text-green-800' : 'bg-slate-100 text-slate-800' }}">
                                        {{ $item->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-[13px] text-slate-800">{{ $item->order }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <a href="{{ route('merchandise.edit', $item) }}"
                                            class="text-slate-600 hover:text-primary-500 transition-colors">
                                            <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('merchandise.destroy', $item) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this merchandise?');"
                                            class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-600 transition-colors">
                                                <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-6 py-8 text-center">
                                    <div class="text-slate-500 text-[13px]">No merchandise found</div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($merchandise->hasPages())
                <div class="px-6 py-4 border-t border-[#E3E9F2]">
                    {{ $merchandise->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection