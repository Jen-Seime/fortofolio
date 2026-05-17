<!-- Project Detail Page -->
<main class="relative z-10 pt-28 pb-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto"
    x-data="{ activeThumb: 0, lightbox: false }">

    <!-- ============================================ -->
    <!-- BACK NAVIGATION                              -->
    <!-- ============================================ -->
    <div class="mb-8 skill-fade-in" style="--delay: 0.05s">
        <a href="{{ route('project') }}"
            class="group inline-flex items-center gap-2 text-on-surface-variant hover:text-primary transition-colors duration-300 font-body-sm text-[14px]">
            <span
                class="w-8 h-8 rounded-lg bg-surface-container group-hover:bg-primary/10 flex items-center justify-center transition-all duration-300 group-hover:-translate-x-1">
                <span class="material-symbols-outlined text-[18px]">arrow_back</span>
            </span>
            Back to Projects
        </a>
    </div>

    <!-- ============================================ -->
    <!-- HERO / COVER SECTION                         -->
    <!-- ============================================ -->
    <section class="mb-16 skill-fade-in" style="--delay: 0.15s">

        <!-- Cover Image -->
        <div class="relative rounded-2xl overflow-hidden group cursor-pointer"
            @click="lightbox = true">
            <div class="aspect-[21/9] md:aspect-[21/8] w-full overflow-hidden bg-surface-container-high">
                @if($project->image)
                <img src="{{ asset('storage/' . $project->image->url) }}"
                    alt="{{ $project->title }}"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                @else
                <div
                    class="w-full h-full bg-gradient-to-br from-surface-container-high to-surface-container flex items-center justify-center text-on-surface-variant">
                    <span class="material-symbols-outlined text-7xl opacity-30">code</span>
                </div>
                @endif
            </div>

            <!-- Gradient overlay -->
            <div
                class="absolute inset-0 bg-gradient-to-t from-on-surface/50 via-on-surface/5 to-transparent">
            </div>

            <!-- View fullscreen hint -->
            <div
                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div
                    class="glass-panel px-4 py-2 rounded-xl flex items-center gap-2 text-on-surface text-[13px] font-medium">
                    <span class="material-symbols-outlined text-[18px]">fullscreen</span>
                    View Full Image
                </div>
            </div>

            <!-- Category badge -->
            @if($project->category_role)
            <div class="absolute top-4 left-4 z-10">
                <span
                    class="inline-flex items-center gap-1.5 bg-primary/90 text-on-primary text-[11px] font-bold uppercase tracking-wider px-3 py-1.5 rounded-lg shadow-lg backdrop-blur-sm">
                    <span class="material-symbols-outlined text-[14px]">category</span>
                    {{ $project->category_role->name }}
                </span>
            </div>
            @endif

            <!-- Featured badge -->
            @if($project->is_featured)
            <div class="absolute top-4 right-4 z-10">
                <span
                    class="inline-flex items-center gap-1 bg-amber-500/90 text-white text-[11px] font-bold uppercase tracking-wider px-3 py-1.5 rounded-lg shadow-lg backdrop-blur-sm">
                    <span class="material-symbols-outlined text-[14px] icon-fill">star</span>
                    Featured
                </span>
            </div>
            @endif
        </div>
    </section>

    <!-- ============================================ -->
    <!-- MAIN CONTENT GRID                            -->
    <!-- ============================================ -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14">

        <!-- ======================================== -->
        <!-- LEFT COLUMN — Main Info                  -->
        <!-- ======================================== -->
        <div class="lg:col-span-8 space-y-10">

            <!-- Title & Meta -->
            <div class="skill-fade-in" style="--delay: 0.25s">
                <h1
                    class="font-headline-xl text-[clamp(28px,5vw,44px)] leading-[1.15] text-on-surface font-bold tracking-tight mb-4">
                    {{ $project->title }}
                </h1>

                <!-- Meta row -->
                <div class="flex flex-wrap items-center gap-4 text-[13px] text-on-surface-variant">
                    @if($project->date)
                    <span class="inline-flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        {{ $project->date->format('F j, Y') }}
                    </span>
                    @endif

                    @if($project->category_role)
                    <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                    <span class="inline-flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[16px]">folder</span>
                        {{ $project->category_role->name }}
                    </span>
                    @endif
                </div>
            </div>

            <!-- Tech Stack Tags -->
            @if($project->technology && count($project->technology) > 0)
            <div class="skill-fade-in" style="--delay: 0.35s">
                <h2
                    class="font-headline-lg text-[16px] text-on-surface font-semibold mb-4 flex items-center gap-2">
                    <span
                        class="w-7 h-7 rounded-lg bg-primary/10 flex items-center justify-center">
                        <span
                            class="material-symbols-outlined text-primary text-[16px]">code</span>
                    </span>
                    Tech Stack
                </h2>
                <div class="flex flex-wrap gap-2">
                    @foreach($project->technology as $tech)
                    <span
                        class="inline-flex items-center gap-1.5 text-[12px] font-semibold font-label-mono uppercase tracking-wider text-primary bg-primary/6 border border-primary/10 px-3 py-1.5 rounded-xl hover:bg-primary/12 transition-colors duration-200">
                        {{ $tech }}
                    </span>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- Description -->
            <div class="skill-fade-in" style="--delay: 0.45s">
                <h2
                    class="font-headline-lg text-[16px] text-on-surface font-semibold mb-4 flex items-center gap-2">
                    <span
                        class="w-7 h-7 rounded-lg bg-secondary/10 flex items-center justify-center">
                        <span
                            class="material-symbols-outlined text-secondary text-[16px]">description</span>
                    </span>
                    About This Project
                </h2>
                <div
                    class="glass-card rounded-2xl p-6 md:p-8 border border-outline-variant/15">
                    <p
                        class="font-body-md text-[15px] text-on-surface-variant leading-[1.8] whitespace-pre-line">{{ $project->description }}</p>
                </div>
            </div>

            <!-- Thumbnail Gallery -->
            @if($project->thumbnails && $project->thumbnails->count() > 0)
            <div class="skill-fade-in" style="--delay: 0.55s">
                <h2
                    class="font-headline-lg text-[16px] text-on-surface font-semibold mb-4 flex items-center gap-2">
                    <span
                        class="w-7 h-7 rounded-lg bg-tertiary/10 flex items-center justify-center">
                        <span
                            class="material-symbols-outlined text-tertiary text-[16px]">photo_library</span>
                    </span>
                    Gallery
                    <span
                        class="ml-1 text-[12px] font-label-mono text-on-surface-variant bg-surface-container px-2 py-0.5 rounded-md">{{ $project->thumbnails->count() }}</span>
                </h2>

                <!-- Active Preview -->
                <div class="rounded-2xl overflow-hidden mb-4 bg-surface-container-high">
                    <div class="aspect-video w-full overflow-hidden relative">
                        @foreach($project->thumbnails as $index => $thumb)
                        <img src="{{ asset('storage/' . $thumb->url) }}"
                            alt="{{ $project->title }} - Screenshot {{ $index + 1 }}"
                            class="absolute inset-0 w-full h-full object-cover transition-all duration-500"
                            :class="activeThumb === {{ $index }} ? 'opacity-100 scale-100' : 'opacity-0 scale-105'"
                            >
                        @endforeach
                    </div>
                </div>

                <!-- Thumbnail Strip -->
                <div class="flex gap-3 overflow-x-auto pb-2 scrollbar-hide">
                    @foreach($project->thumbnails as $index => $thumb)
                    <button @click="activeThumb = {{ $index }}"
                        class="flex-shrink-0 w-24 h-16 md:w-28 md:h-[72px] rounded-xl overflow-hidden border-2 transition-all duration-300 hover:opacity-100"
                        :class="activeThumb === {{ $index }} ? 'border-primary shadow-lg shadow-primary/20 opacity-100' : 'border-transparent opacity-60 hover:border-outline-variant/40'">
                        <img src="{{ asset('storage/' . $thumb->url) }}"
                            alt="Thumbnail {{ $index + 1 }}"
                            class="w-full h-full object-cover">
                    </button>
                    @endforeach
                </div>
            </div>
            @endif
        </div>

        <!-- ======================================== -->
        <!-- RIGHT COLUMN — Sidebar                   -->
        <!-- ======================================== -->
        <aside class="lg:col-span-4 space-y-6">

            <!-- Action Links Card -->
            <div class="glass-card rounded-2xl p-6 border border-outline-variant/15 skill-fade-in sticky top-28"
                style="--delay: 0.3s">
                <h3
                    class="font-headline-lg text-[15px] text-on-surface font-semibold mb-5 flex items-center gap-2">
                    <span class="material-symbols-outlined text-[18px] text-primary">link</span>
                    Project Links
                </h3>

                <div class="space-y-3">
                    @if($project->demo_link)
                    <a href="{{ $project->demo_link }}" target="_blank" rel="noopener noreferrer"
                        class="group w-full flex items-center gap-3 bg-primary text-on-primary font-semibold text-[14px] px-5 py-3.5 rounded-xl shadow-lg shadow-primary/20 hover:shadow-xl hover:shadow-primary/30 active:scale-[0.97] transition-all duration-300 overflow-hidden relative">
                        <span class="material-symbols-outlined text-[20px] relative z-10">open_in_new</span>
                        <span class="relative z-10">Live Demo</span>
                        <span
                            class="material-symbols-outlined text-[18px] ml-auto relative z-10 group-hover:translate-x-1 transition-transform duration-300">arrow_forward</span>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-primary to-primary-container opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </a>
                    @endif

                    @if($project->github_link)
                    <a href="{{ $project->github_link }}" target="_blank" rel="noopener noreferrer"
                        class="group w-full flex items-center gap-3 bg-surface border border-outline-variant/30 text-on-surface font-semibold text-[14px] px-5 py-3.5 rounded-xl hover:border-primary/30 hover:bg-primary/5 active:scale-[0.97] transition-all duration-300 glass-card">
                        <i class="fa-brands fa-github text-[20px]"></i>
                        <span>Source Code</span>
                        <span
                            class="material-symbols-outlined text-[18px] ml-auto text-on-surface-variant group-hover:text-primary group-hover:translate-x-1 transition-all duration-300">arrow_forward</span>
                    </a>
                    @endif

                    @if(!$project->demo_link && !$project->github_link)
                    <div
                        class="text-center py-6 text-on-surface-variant/60 text-[13px]">
                        <span
                            class="material-symbols-outlined text-3xl mb-2 block opacity-40">link_off</span>
                        No links available
                    </div>
                    @endif
                </div>
            </div>

            <!-- Project Info Card -->
            <div class="glass-card rounded-2xl p-6 border border-outline-variant/15 skill-fade-in"
                style="--delay: 0.4s">
                <h3
                    class="font-headline-lg text-[15px] text-on-surface font-semibold mb-5 flex items-center gap-2">
                    <span
                        class="material-symbols-outlined text-[18px] text-secondary">info</span>
                    Project Info
                </h3>

                <div class="space-y-4">
                    @if($project->date)
                    <div class="flex items-start gap-3">
                        <div
                            class="w-9 h-9 rounded-xl bg-surface-container flex items-center justify-center flex-shrink-0">
                            <span
                                class="material-symbols-outlined text-[18px] text-on-surface-variant">calendar_today</span>
                        </div>
                        <div>
                            <p
                                class="text-[11px] font-label-mono uppercase tracking-wider text-on-surface-variant/60 mb-0.5">
                                Date</p>
                            <p class="text-[14px] font-medium text-on-surface">
                                {{ $project->date->format('F j, Y') }}</p>
                        </div>
                    </div>
                    @endif

                    @if($project->category_role)
                    <div class="flex items-start gap-3">
                        <div
                            class="w-9 h-9 rounded-xl bg-surface-container flex items-center justify-center flex-shrink-0">
                            <span
                                class="material-symbols-outlined text-[18px] text-on-surface-variant">category</span>
                        </div>
                        <div>
                            <p
                                class="text-[11px] font-label-mono uppercase tracking-wider text-on-surface-variant/60 mb-0.5">
                                Category</p>
                            <p class="text-[14px] font-medium text-on-surface">
                                {{ $project->category_role->name }}</p>
                        </div>
                    </div>
                    @endif

                    @if($project->technology && count($project->technology) > 0)
                    <div class="flex items-start gap-3">
                        <div
                            class="w-9 h-9 rounded-xl bg-surface-container flex items-center justify-center flex-shrink-0">
                            <span
                                class="material-symbols-outlined text-[18px] text-on-surface-variant">layers</span>
                        </div>
                        <div>
                            <p
                                class="text-[11px] font-label-mono uppercase tracking-wider text-on-surface-variant/60 mb-0.5">
                                Technologies</p>
                            <p class="text-[14px] font-medium text-on-surface">
                                {{ count($project->technology) }} used</p>
                        </div>
                    </div>
                    @endif

                    @if($project->is_featured)
                    <div class="flex items-start gap-3">
                        <div
                            class="w-9 h-9 rounded-xl bg-amber-50 flex items-center justify-center flex-shrink-0">
                            <span
                                class="material-symbols-outlined text-[18px] text-amber-500 icon-fill">star</span>
                        </div>
                        <div>
                            <p
                                class="text-[11px] font-label-mono uppercase tracking-wider text-on-surface-variant/60 mb-0.5">
                                Status</p>
                            <p class="text-[14px] font-medium text-amber-600">
                                Featured Project</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </aside>
    </div>

    <!-- ============================================ -->
    <!-- RELATED PROJECTS                             -->
    <!-- ============================================ -->
    @if($relatedProjects->count() > 0)
    <section class="mt-24 skill-fade-in" style="--delay: 0.6s">

        <!-- Section Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-10 gap-4">
            <div>
                <div
                    class="inline-flex items-center gap-2 bg-primary/8 text-primary font-label-mono text-label-mono px-4 py-1.5 rounded-full mb-3">
                    <span class="material-symbols-outlined text-[14px]">apps</span>
                    Related
                </div>
                <h2
                    class="font-headline-xl text-[clamp(24px,3.5vw,32px)] text-on-surface font-bold tracking-tight">
                    More <span class="text-primary">Projects</span>
                </h2>
            </div>
            <a href="{{ route('project') }}"
                class="group flex items-center gap-2 text-primary font-semibold text-[14px] bg-primary/5 hover:bg-primary/10 px-5 py-2.5 rounded-full transition-all duration-300">
                View All
                <span
                    class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform duration-300">arrow_forward</span>
            </a>
        </div>

        <!-- Related Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($relatedProjects as $index => $related)
            <a href="{{ route('project.detail', $related) }}"
                class="group relative flex flex-col bg-surface/80 border border-outline-variant/20 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-primary/5 transition-all duration-500 hover:-translate-y-2">

                <!-- Project Image -->
                <div class="aspect-[16/10] overflow-hidden relative">
                    @if($related->image)
                    <img src="{{ asset('storage/' . $related->image->url) }}"
                        alt="{{ $related->title }}"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    @else
                    <div
                        class="w-full h-full bg-gradient-to-br from-surface-container-high to-surface-container flex items-center justify-center text-on-surface-variant">
                        <span
                            class="material-symbols-outlined text-5xl opacity-30">code</span>
                    </div>
                    @endif

                    <!-- Gradient overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-on-surface/60 via-on-surface/10 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500">
                    </div>
                </div>

                <!-- Project Info -->
                <div class="p-5 flex flex-col flex-grow">
                    <div class="flex flex-wrap gap-1.5 mb-3">
                        @foreach(array_slice($related->technology ?? [], 0, 3) as $tech)
                        <span
                            class="text-[10px] font-semibold font-label-mono uppercase tracking-wider text-primary bg-primary/6 px-2.5 py-1 rounded-lg">{{ $tech }}</span>
                        @endforeach
                        @if(count($related->technology ?? []) > 3)
                        <span
                            class="text-[10px] font-semibold font-label-mono text-on-surface-variant bg-surface-container px-2.5 py-1 rounded-lg">+{{ count($related->technology) - 3 }}</span>
                        @endif
                    </div>

                    <h3
                        class="font-bold font-headline-lg text-[18px] text-on-surface mb-2 group-hover:text-primary transition-colors duration-300 leading-snug">
                        {{ $related->title }}
                    </h3>

                    <p
                        class="text-[13px] text-on-surface-variant font-body-sm leading-relaxed line-clamp-2">
                        {{ $related->description }}
                    </p>

                    <div
                        class="mt-auto pt-4 border-t border-outline-variant/15 flex justify-between items-center">
                        <span
                            class="text-[11px] font-medium text-on-surface-variant/70 flex items-center gap-1">
                            <span
                                class="material-symbols-outlined text-[14px]">calendar_today</span>
                            {{ $related->date?->format('M Y') }}
                        </span>
                        <span
                            class="w-8 h-8 rounded-lg bg-surface-container group-hover:bg-primary/10 flex items-center justify-center transition-all duration-300">
                            <span
                                class="material-symbols-outlined text-[16px] text-on-surface-variant group-hover:text-primary transition-colors duration-300">north_east</span>
                        </span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </section>
    @endif

    <!-- ============================================ -->
    <!-- LIGHTBOX MODAL                               -->
    <!-- ============================================ -->
    @if($project->image)
    <div x-show="lightbox" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 flex items-center justify-center bg-on-surface/90 backdrop-blur-sm p-4 md:p-8"
        @click.self="lightbox = false" @keydown.escape.window="lightbox = false" x-cloak>
        <button @click="lightbox = false"
            class="absolute top-4 right-4 w-10 h-10 rounded-xl bg-surface/20 hover:bg-surface/40 text-white flex items-center justify-center transition-all duration-200">
            <span class="material-symbols-outlined text-[24px]">close</span>
        </button>
        <img src="{{ asset('storage/' . $project->image->url) }}" alt="{{ $project->title }}"
            class="max-w-full max-h-full object-contain rounded-xl shadow-2xl">
    </div>
    @endif

</main>
