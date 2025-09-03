@props(['id' => 'actionPopover'])

<!-- Popover Aksi -->
<div id="{{ $id }}" class="hidden absolute z-[1000]">
    <div class="relative">
        <div class="absolute inset-0 -m-[2px] rounded-lg bg-[#2545AE] opacity-10 blur-md"></div>
        <div class="relative w-[200px] rounded-lg bg-white p-4 flex flex-col gap-4 shadow-[0_1px_2px_rgba(16,24,40,0.05),0_4px_20px_-2px_rgba(37,69,174,0.28)]"
            role="menu" aria-label="Aksi Produk">
            <button type="button" role="menuitem"
                class="group action-delete flex w-full items-center gap-4 rounded-md px-2 py-3 text-[13px] font-medium text-[#2545AE] hover:bg-[#F1F5FF] hover:text-[#12379f] focus:outline-none focus:ring-2 focus:ring-primary-500/30 transition">
                <img src="/icons/Outline copy 3.png" alt="Hapus" class="w-5 h-5 shrink-0" />
                <span>Hapus Produk</span>
            </button>
            <button type="button" role="menuitem"
                class="group action-edit flex w-full items-center gap-4 rounded-md px-2 py-3 text-[13px] font-medium text-[#2545AE] hover:bg-[#F1F5FF] hover:text-[#12379f] focus:outline-none focus:ring-2 focus:ring-primary-500/30 transition">
                <img src="/icons/Outline copy 4.png" alt="Edit" class="w-5 h-5 shrink-0" />
                <span>Edit Produk</span>
            </button>
        </div>
    </div>
</div>
