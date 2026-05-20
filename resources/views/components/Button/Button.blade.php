@props([
    'title' => '',
    'icon' => '',
    'type' => 'button'
])
<button
    type="{{ $type }}"
    
    wire:loading.attr="disabled"
    {{ $attributes->merge([
        'class' => 'group relative bg-primary text-on-primary font-semibold text-[14px] px-7 py-3.5 rounded-2xl shadow-lg shadow-primary/20 hover:shadow-xl hover:shadow-primary/30 active:scale-[0.97] transition-all duration-300 flex items-center gap-2 overflow-hidden disabled:opacity-75 disabled:cursor-not-allowed'
    ]) }}
>
    <span class="relative z-10">{{ $title }}</span>
    
    <!-- Icon: hidden when loading -->
    @if($icon)
        <span wire:loading.remove wire:target="kirimPesan" class="material-symbols-outlined text-[18px] relative z-10 group-hover:translate-x-1 transition-transform duration-300">{{ $icon }}</span>
    @endif

    <!-- Spinner Loading: shown only when loading -->
    <svg wire:loading wire:target="kirimPesan" class="animate-spin h-[18px] w-[18px] text-current relative z-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
    </svg>

    <div class="absolute inset-0 bg-gradient-to-r from-primary to-primary-container opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
</button>