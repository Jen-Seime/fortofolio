<!-- Main Content -->
<main class="relative z-10 pt-32 pb-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto" wire:init="loadProjects">
    <!-- Header Section -->
    <header class="mb-stack-lg text-center md:text-left">
        <h1 class="font-headline-xl font-bold text-[clamp(28px,5vw,44px)] leading-[1.15] text-primary skill-fade-in mb-stack-sm" style="--delay: 0.1s"><span class=" text-on-surface">Featured</span> Projects</h1>
        <p class="font-body-md text-[15px] text-on-surface-variant skill-fade-in max-w-2xl" style="--delay: 0.2s">
            A curated selection of my technical work, showcasing problem-solving through clean code, modern architectures, and scalable solutions.
        </p>
    </header>

    <!-- Filters & Search -->
    <div class="items-center gap-stack-md mb-stack-lg glass-panel p-stack-sm rounded-xl">
        <div class="flex flex-wrap gap-2">
            <button wire:click="selectCategory(null)"
                class="px-4 py-2 rounded-lg font-label-mono text-label-mono border transition-colors {{ is_null($category) ? 'bg-primary/10 text-primary border-primary/20' : 'text-on-surface-variant hover:bg-surface-variant hover:text-on-surface border-transparent' }}">
                All
            </button>
            @foreach ($categories as $cat)
            <button wire:click="selectCategory({{ $cat->id }})"
                class="px-4 py-2 rounded-lg font-label-mono text-label-mono border transition-colors {{ $category == $cat->id ? 'bg-primary/10 text-primary border-primary/20' : 'text-on-surface-variant hover:bg-surface-variant hover:text-on-surface border-transparent' }}">
                {{ $cat->name }}
            </button>
            @endforeach
        </div>


    </div>

    <!-- Projects Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">



        <!-- Loading Skeletons -->
        @for ($i = 0; $i < 6; $i++)
            <div wire:loading.delay wire:target="selectCategory, category, loadProjects">
            <x-CardItem.CardSkeleton />
    </div>
    @endfor

    <!-- Project Cards -->
    @forelse ($this->loadProjects() as $index => $project)
    <div wire:loading.remove wire:target="selectCategory, category, loadProjects" class="contents">
        <x-CardItem.CardProject wire:key="{{ $project->id }}" :project="$project" :index="$index" />
    </div>
    @empty
    <x-EmptyState.EmptyState />
    @endforelse
    </div>

    <div class="mt-10 flex justify-center">
        {{ $this->loadProjects()->links('vendor.livewire.custom-pagination') }}
    </div>
</main>