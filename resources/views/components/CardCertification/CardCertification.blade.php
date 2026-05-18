@props([
    'certification'
])

<!-- Certificate Card -->
<div class="glass-panel rounded-xl p-stack-md glow-border group flex flex-col h-full hover:-translate-y-1 transition-transform duration-300">
    <div class="flex items-start justify-between mb-stack-md">
        <div class="w-12 h-12 rounded bg-surface-container-highest flex items-center justify-center border border-outline-variant/50 overflow-hidden">
            @if ($certification->issuerLogo?->url)
                <img src="{{ asset('storage/' . $certification->issuerLogo->url) }}" alt="{{ $certification->issuer }}" class="w-full h-full object-cover">
            @else
                <span class="material-symbols-outlined text-tertiary" style="font-variation-settings: 'FILL' 1;">cloud_done</span>
            @endif
        </div>
        <span class="font-label-mono text-label-mono text-on-surface-variant bg-surface-container-high px-2 py-1 rounded">{{ $certification->issue_date->format('Y') }}</span>
    </div>
    <h3 class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface mb-2 group-hover:text-primary transition-colors">{{ $certification->title }}</h3>
    <p class="font-body-sm text-body-sm text-on-surface-variant mb-stack-md flex-grow">{{ $certification->issuer }}</p>
    <div class="flex items-center gap-2 mt-auto pt-stack-sm border-t border-outline-variant/30">
        @if ($certification->verification_url)
            <a class="font-label-mono text-label-mono text-primary hover:text-primary-container transition-colors flex items-center gap-1" href="{{ route('certification.detail', $certification->slug) }}" wire:navigate target="_blank" rel="noopener noreferrer">
                View Credential
                <span class="material-symbols-outlined text-sm">open_in_new</span>
            </a>
        @endif
    </div>
</div>