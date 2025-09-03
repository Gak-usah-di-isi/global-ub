@props(['id' => 'deleteModal'])

<!-- Modal Hapus -->
<div id="{{ $id }}" class="hidden fixed inset-0 z-[1100]">
    <div id="{{ $id }}Overlay" class="absolute inset-0 bg-black/40 backdrop-blur-[2px]"></div>
    <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[95%] max-w-[895px] h-auto p-[10px] rounded-xl shadow-[0_8px_32px_-4px_rgba(37,69,174,0.25)]"
        style="
          background: linear-gradient(
            55.31deg,
            #ffffff 13.63%,
            #dbe5ff 114.54%
          );
        "
        role="dialog" aria-modal="true" aria-labelledby="delTitle" aria-describedby="delDesc">
        <button id="{{ $id }}Close"
            class="absolute top-3 right-3 w-8 h-8 flex items-center justify-center rounded-md text-slate-400 hover:text-slate-600 hover:bg-white/40 transition"
            aria-label="Tutup modal">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6l12 12M18 6 6 18" />
            </svg>
        </button>

        <div class="w-full flex flex-col gap-5">
            <div class="pr-2 md:pr-40 pt-4 pl-2 md:pl-8">
                <h3 id="delTitle" class="text-[18px] md:text-[20px] font-semibold text-slate-800 mb-2">
                    {{ $title ?? 'Yakin ingin menghapus produk ?' }}
                </h3>
                <p id="delDesc" class="text-[13px] leading-relaxed text-slate-600">
                    {{ $description ?? 'Setelah dihapus, produk ini tidak bisa dikembalikan. Pastikan kamu yakin sebelum melanjutkan.' }}
                </p>
            </div>

            <div class="flex flex-col sm:flex-row sm:justify-end gap-3 px-2 md:pr-8 pb-4">
                <button id="btnCancel{{ ucfirst($id) }}"
                    class="h-10 px-6 rounded-md bg-slate-200/60 text-[#2545AE] text-[14px] font-medium hover:bg-slate-300/70 transition"
                    type="button">
                    Batal
                </button>
                <button id="btnConfirm{{ ucfirst($id) }}"
                    class="h-10 px-7 rounded-md bg-[#2545AE] text-white text-[14px] font-medium hover:bg-[#1f3d97] transition"
                    type="button">
                    Hapus
                </button>
            </div>
        </div>

        <div class="pointer-events-none absolute top-8 right-4 opacity-30 hidden md:block">
            <svg class="w-36 h-36 text-[#2545AE]/25" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 7h16" />
                <path d="M10 11v6" />
                <path d="M14 11v6" />
                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12" />
                <path d="M9 7V4h6v3" />
            </svg>
        </div>
    </div>
</div>
