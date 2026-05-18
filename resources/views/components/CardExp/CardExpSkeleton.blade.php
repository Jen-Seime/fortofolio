@props(['isEven' => false])

<div class="relative z-10 mb-16 md:mb-24 flex flex-col md:flex-row items-start md:items-center w-full group">
    <!-- Mobile Dot Skeleton -->
    <div class="absolute left-6 w-3 h-3 bg-outline-variant/30 animate-pulse rounded-full transform -translate-x-1/2 mt-6 md:hidden"></div>

    @if(!$isEven)
        <!-- ODD ITEM: Right-aligned Text on Left, Card on Right -->
        <!-- Content Left (Text Skeleton) -->
        <div class="hidden md:block md:w-1/2 pr-gutter text-right">
            <div class="h-4 w-24 bg-outline-variant/20 animate-pulse rounded ml-auto mb-3"></div>
            <div class="h-7 w-48 bg-outline-variant/30 animate-pulse rounded ml-auto mb-3"></div>
            <div class="h-4 w-32 bg-outline-variant/20 animate-pulse rounded ml-auto mb-2"></div>
        </div>

        <!-- Desktop Dot Skeleton -->
        <div class="hidden md:flex absolute left-1/2 w-4 h-4 bg-outline-variant/30 animate-pulse rounded-full transform -translate-x-1/2 items-center justify-center">
        </div>

        <!-- Content Right (Card Skeleton) -->
        <div class="w-full md:w-1/2 pl-12 md:pl-gutter mt-2 md:mt-0">
            <!-- Mobile Header Skeleton -->
            <div class="md:hidden mb-4">
                <div class="h-4 w-24 bg-outline-variant/20 animate-pulse rounded mb-2"></div>
                <div class="h-7 w-48 bg-outline-variant/30 animate-pulse rounded mb-2"></div>
                <div class="h-4 w-32 bg-outline-variant/20 animate-pulse rounded"></div>
            </div>

            <div class="glass-card rounded-lg p-6">
                <!-- Description lines -->
                <div class="space-y-4 mb-6">
                    <div class="h-3 w-full bg-outline-variant/20 animate-pulse rounded"></div>
                    <div class="h-3 w-5/6 bg-outline-variant/20 animate-pulse rounded"></div>
                    <div class="h-3 w-4/6 bg-outline-variant/20 animate-pulse rounded"></div>
                </div>
                <!-- Tags -->
                <div class="flex flex-wrap gap-2 mt-6">
                    <div class="h-6 w-16 bg-outline-variant/20 animate-pulse rounded-lg"></div>
                    <div class="h-6 w-20 bg-outline-variant/20 animate-pulse rounded-lg"></div>
                    <div class="h-6 w-14 bg-outline-variant/20 animate-pulse rounded-lg"></div>
                </div>
            </div>
        </div>
    @else
        <!-- EVEN ITEM: Card on Left, Text on Right -->
        <!-- Content Left (Card Skeleton) -->
        <div class="w-full md:w-1/2 pl-12 md:pl-0 md:pr-gutter mt-2 md:mt-0 order-2 md:order-1">
            <!-- Mobile Header Skeleton -->
            <div class="md:hidden mb-4">
                <div class="h-4 w-24 bg-outline-variant/20 animate-pulse rounded mb-2"></div>
                <div class="h-7 w-48 bg-outline-variant/30 animate-pulse rounded mb-2"></div>
                <div class="h-4 w-32 bg-outline-variant/20 animate-pulse rounded"></div>
            </div>

            <div class="glass-card rounded-lg p-6 md:flex md:flex-col md:items-end">
                <!-- Description lines -->
                <div class="space-y-4 mb-6 w-full flex flex-col md:items-end">
                    <div class="h-3 w-full bg-outline-variant/20 animate-pulse rounded"></div>
                    <div class="h-3 w-5/6 bg-outline-variant/20 animate-pulse rounded"></div>
                    <div class="h-3 w-4/6 bg-outline-variant/20 animate-pulse rounded"></div>
                </div>
                <!-- Tags -->
                <div class="flex flex-wrap gap-2 mt-6 md:justify-end">
                    <div class="h-6 w-16 bg-outline-variant/20 animate-pulse rounded-lg"></div>
                    <div class="h-6 w-20 bg-outline-variant/20 animate-pulse rounded-lg"></div>
                    <div class="h-6 w-14 bg-outline-variant/20 animate-pulse rounded-lg"></div>
                </div>
            </div>
        </div>

        <!-- Desktop Dot Skeleton -->
        <div class="hidden md:flex absolute left-1/2 w-4 h-4 bg-outline-variant/30 animate-pulse rounded-full transform -translate-x-1/2 items-center justify-center order-1 md:order-2">
        </div>

        <!-- Content Right (Text Skeleton) -->
        <div class="hidden md:block md:w-1/2 pl-gutter text-left order-3">
            <div class="h-4 w-24 bg-outline-variant/20 animate-pulse rounded mb-3"></div>
            <div class="h-7 w-48 bg-outline-variant/30 animate-pulse rounded mb-3"></div>
            <div class="h-4 w-32 bg-outline-variant/20 animate-pulse rounded mb-2"></div>
        </div>
    @endif
</div>
