@props([
    'title',
    'description',
    'class'
])

<!-- Empty State -->
<div class="bg-surface/80 border {{ $class }} border-outline-variant/20 rounded-2xl p-12 text-center w-full max-w-4xl mx-auto">
    <div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-primary/8 flex items-center justify-center">
        <span class="material-symbols-outlined text-4xl text-primary">rocket_launch</span>
    </div>
    <h3 class="text-on-surface font-bold text-xl mb-2">{{ $title }}</h3>
    <p class="text-on-surface-variant text-[15px] max-w-md mx-auto">{{ $description }}</p>
</div>