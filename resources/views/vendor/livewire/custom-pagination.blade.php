@php
if (! isset($scrollTo)) {
    $scrollTo = 'body';
}

$scrollIntoViewJsSnippet = ($scrollTo !== false)
    ? <<<JS
       (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView({behavior: 'smooth', block: 'start'})
    JS
    : '';
@endphp

@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="glass-panel rounded-2xl px-2 py-2 inline-flex items-center gap-1">

        {{-- Previous --}}
        @if ($paginator->onFirstPage())
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl text-on-surface-variant/40 cursor-not-allowed" aria-disabled="true">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </span>
        @else
            <button
                type="button"
                wire:click="previousPage('{{ $paginator->getPageName() }}')"
                x-on:click="{{ $scrollIntoViewJsSnippet }}"
                wire:loading.attr="disabled"
                class="inline-flex items-center justify-center w-10 h-10 rounded-xl text-on-surface-variant hover:bg-primary/10 hover:text-primary transition-all duration-200 cursor-pointer"
                aria-label="Previous Page"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </button>
        @endif

        {{-- Page Numbers --}}
        @foreach ($elements as $element)
            {{-- Dots Separator --}}
            @if (is_string($element))
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl text-on-surface-variant font-label-mono text-label-mono tracking-wider">
                    {{ $element }}
                </span>
            @endif

            {{-- Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-primary text-on-primary font-label-mono text-[13px] font-semibold shadow-md shadow-primary/25 transition-all duration-200"
                            aria-current="page"
                        >
                            {{ $page }}
                        </span>
                    @else
                        <button
                            type="button"
                            wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')"
                            x-on:click="{{ $scrollIntoViewJsSnippet }}"
                            wire:loading.attr="disabled"
                            class="inline-flex items-center justify-center w-10 h-10 rounded-xl text-on-surface-variant font-label-mono text-[13px] font-medium hover:bg-primary/10 hover:text-primary transition-all duration-200 cursor-pointer"
                        >
                            {{ $page }}
                        </button>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next --}}
        @if ($paginator->hasMorePages())
            <button
                type="button"
                wire:click="nextPage('{{ $paginator->getPageName() }}')"
                x-on:click="{{ $scrollIntoViewJsSnippet }}"
                wire:loading.attr="disabled"
                class="inline-flex items-center justify-center w-10 h-10 rounded-xl text-on-surface-variant hover:bg-primary/10 hover:text-primary transition-all duration-200 cursor-pointer"
                aria-label="Next Page"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        @else
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl text-on-surface-variant/40 cursor-not-allowed" aria-disabled="true">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </span>
        @endif

    </nav>
@endif
