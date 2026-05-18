 @php
    $isEven = $loop->iteration % 2 == 0;
    $colorClasses = [
        ['dot' => 'bg-primary timeline-dot', 'text' => 'text-primary', 'date' => 'text-secondary'],
        ['dot' => 'bg-tertiary shadow-[0_0_10px_rgba(94,110,133,0.3)]', 'text' => 'text-tertiary', 'date' => 'text-tertiary'],
        ['dot' => 'bg-secondary shadow-[0_0_10px_rgba(86,94,116,0.3)]', 'text' => 'text-secondary', 'date' => 'text-tertiary'],
    ];
    $color = $colorClasses[$loop->index % 3];
    $period = $pengalaman->start_date->format('Y') . ' — ' . ($pengalaman->end_date ? $pengalaman->end_date->format('Y') : 'Present');
@endphp

<div class="relative z-10 mb-16 md:mb-24 flex flex-col md:flex-row items-start md:items-center w-full group">
    <!-- Mobile Dot -->
    <div class="absolute left-6 w-3 h-3 {{ $color['dot'] }} rounded-full transform -translate-x-1/2 mt-6 md:hidden"></div>

    @if(!$isEven)
        <!-- ODD ITEM: Right-aligned Text on Left, Card on Right -->
        <!-- Content Left (Text) -->
        <div class="hidden md:block md:w-1/2 pr-gutter text-right">
            <div class="font-label-mono text-label-mono {{ $color['date'] }} mb-2">{{ $period }}</div>
            <h3 class="font-headline-lg-mobile text-headline-lg-mobile  text-[#1a1c1c]">{{ $pengalaman->position }}</h3>
            <p class="font-body-sm text-body-sm {{ $color['text'] }} mb-2">{{ $pengalaman->company_name }}</p>
        </div>

        <!-- Desktop Dot -->
        <div class="hidden md:flex absolute left-1/2 w-4 h-4 {{ $color['dot'] }} rounded-full transform -translate-x-1/2 items-center justify-center">
            <div class="w-1.5 h-1.5 bg-white rounded-full"></div>
        </div>

        <!-- Content Right (Card) -->
        <div class="w-full md:w-1/2 pl-12 md:pl-gutter mt-2 md:mt-0">
            <!-- Mobile Header -->
            <div class="md:hidden mb-4">
                <div class="font-label-mono text-label-mono {{ $color['date'] }} mb-1">{{ $period }}</div>
                <h3 class="font-headline-lg-mobile text-headline-lg-mobile text-[#1a1c1c] leading-tight">{{ $pengalaman->position }}</h3>
                <p class="font-body-sm text-body-sm {{ $color['text'] }}">{{ $pengalaman->company_name }}</p>
            </div>

            <div class="glass-card rounded-lg p-6 transition-all duration-300">
                <div class="mt-3 text-[13px] md:text-[14px] leading-7 text-on-surface-variant
                            [&>p]:mb-3
                            [&>ul]:list-disc [&>ul]:list-inside [&>ul]:space-y-2
                            [&>ol]:list-decimal [&>ol]:list-inside [&>ol]:space-y-2">
                    {!! str($pengalaman?->description)->markdown() !!}
                </div>
                @if($pengalaman->technology)
                    <div class="mt-6 flex flex-wrap gap-2">
                        @foreach ($pengalaman->technology as $tech)
                            <span class="font-label-mono text-[11px] px-2 py-1 rounded bg-secondary/5 text-secondary border border-secondary/20">{{ $tech }}</span>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    @else
        <!-- EVEN ITEM: Card on Left, Text on Right -->
        <!-- Content Left (Card) -->
        <div class="w-full md:w-1/2 pl-12 md:pl-0 md:pr-gutter mt-2 md:mt-0 order-2 md:order-1">
            <!-- Mobile Header -->
            <div class="md:hidden mb-4">
                <div class="font-label-mono text-label-mono {{ $color['date'] }} mb-1">{{ $period }}</div>
                <h3 class="font-headline-lg-mobile text-headline-lg-mobile text-[#1a1c1c] leading-tight">{{ $pengalaman->position }}</h3>
                <p class="font-body-sm text-body-sm {{ $color['text'] }}">{{ $pengalaman->company_name }}</p>
            </div>

            <div class="glass-card rounded-lg p-6 transition-all duration-300 md:text-right">
                <div class="mt-3 text-[13px] md:text-[14px] leading-7 text-on-surface-variant
                            [&>p]:mb-3
                            [&>ul]:list-disc [&>ul]:list-inside [&>ul]:space-y-2
                            [&>ol]:list-decimal [&>ol]:list-inside [&>ol]:space-y-2">
                    {!! str($pengalaman?->description)->markdown() !!}
                </div>
                @if($pengalaman->technology)
                    <div class="mt-6 flex flex-wrap gap-2 md:justify-end">
                        @foreach ($pengalaman->technology as $tech)
                            <span class="font-label-mono text-[11px] px-2 py-1 rounded bg-secondary/5 text-secondary border border-secondary/20">{{ $tech }}</span>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        <!-- Desktop Dot -->
        <div class="hidden md:flex absolute left-1/2 w-4 h-4 {{ $color['dot'] }} rounded-full transform -translate-x-1/2 items-center justify-center order-1 md:order-2">
            <div class="w-1.5 h-1.5 bg-white rounded-full"></div>
        </div>

        <!-- Content Right (Text) -->
        <div class="hidden md:block md:w-1/2 pl-gutter text-left order-3">
            <div class="font-label-mono text-label-mono {{ $color['date'] }} mb-2">{{ $period }}</div>
            <h3 class="font-headline-lg-mobile text-headline-lg-mobile text-[#1a1c1c]">{{ $pengalaman->position }}</h3>
            <p class="font-body-sm text-body-sm {{ $color['text'] }} mb-2">{{ $pengalaman->company_name }}</p>
        </div>
    @endif
</div>