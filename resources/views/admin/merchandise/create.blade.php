@extends('layouts.app')

@section('title', 'Dashboard - Create Merchandise')

@section('content')
    <div class="space-y-6">
        <nav class="text-[12px] font-medium flex items-center gap-1 text-slate-500">
            <a href="{{ route('merchandise.index') }}" class="hover:text-slate-700 cursor-pointer">
                Merchandise
            </a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" strokeWidth="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9 6 6 6-6 6" />
            </svg>
            <span class="text-slate-700">Create Merchandise</span>
        </nav>

        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <h1 class="text-[24px] md:text-[26px] font-semibold text-slate-800">
                Create Merchandise
            </h1>
            <div class="flex gap-3">
                <a href="{{ route('merchandise.index') }}"
                    class="h-[42px] px-6 rounded-md text-[13px] font-medium bg-[#E0E6F2] hover:bg-[#d6deec] text-slate-700 transition flex items-center">
                    Back
                </a>
                <button type="submit" form="create-form"
                    class="h-[42px] px-7 rounded-md text-[13px] font-semibold bg-primary-500 hover:bg-primary-600 text-white transition">
                    Create Merchandise
                </button>
            </div>
        </div>

        @if ($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded-lg text-sm">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="create-form" action="{{ route('merchandise.store') }}" method="POST" enctype="multipart/form-data"
            class="space-y-8">
            @csrf
            <section class="bg-white shadow-card rounded-xl p-6 md:p-8">
                <h2 class="section-title">Merchandise Information</h2>

                <div class="space-y-7">
                    <div>
                        <label for="name" class="field-label req">
                            Merchandise Name
                        </label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}"
                            placeholder="Enter merchandise name"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('name') border-red-300 @enderror" />
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="category" class="field-label req">
                            Category
                        </label>
                        <input id="category" name="category" type="text" value="{{ old('category') }}"
                            placeholder="Enter category"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('category') border-red-300 @enderror" />
                        @error('category')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="price" class="field-label req">
                            Price
                        </label>
                        <input id="price" name="price" type="number" value="{{ old('price') }}" placeholder="Enter price"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('price') border-red-300 @enderror" />
                        @error('price')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="description" class="field-label">
                            Description
                        </label>
                        <textarea id="description" name="description" rows="4" placeholder="Enter description"
                            class="mt-2 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 py-3 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors resize-vertical @error('description') border-red-300 @enderror">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="image" class="field-label req">
                            Merchandise Image
                        </label>
                        <div class="mt-2">
                            <input id="image" name="image" type="file" accept=".jpg,.jpeg,.png,.gif"
                                class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100 border border-[#E3E9F2] rounded-lg @error('image') border-red-300 @enderror" />
                        </div>
                        @error('image')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="help-text">
                            Supported formats: JPG, JPEG, PNG, GIF. Max size: 2MB
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="shopee_link" class="field-label">
                                Shopee Link
                            </label>
                            <input id="shopee_link" name="shopee_link" type="url" value="{{ old('shopee_link') }}"
                                placeholder="Enter Shopee product link"
                                class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('shopee_link') border-red-300 @enderror" />
                            @error('shopee_link')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="tokopedia_link" class="field-label">
                                Tokopedia Link
                            </label>
                            <input id="tokopedia_link" name="tokopedia_link" type="url" value="{{ old('tokopedia_link') }}"
                                placeholder="Enter Tokopedia product link"
                                class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('tokopedia_link') border-red-300 @enderror" />
                            @error('tokopedia_link')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="order" class="field-label">
                            Display Order
                        </label>
                        <input id="order" name="order" type="number" value="{{ old('order', 0) }}"
                            placeholder="Enter display order"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('order') border-red-300 @enderror" />
                        @error('order')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="help-text">
                            Lower numbers will be displayed first
                        </p>
                    </div>

                    <div>
                        <label class="flex items-center">
                            <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}
                                class="w-4 h-4 text-primary-600 border-gray-300 rounded focus:ring-primary-500">
                            <span class="ml-2 text-[13px] text-slate-800">Active</span>
                        </label>
                        <p class="help-text">
                            Inactive merchandise will not be displayed on the website
                        </p>
                    </div>
                </div>
            </section>
        </form>
    </div>

    <style>
        .field-label {
            font-size: 13px;
            font-weight: 500;
            color: #1e293b;
        }

        .req:after {
            content: " *";
            color: #dc2626;
            font-weight: 600;
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 18px;
        }

        .help-text {
            font-size: 11px;
            color: #64748b;
            margin-top: 6px;
        }
    </style>
@endsection