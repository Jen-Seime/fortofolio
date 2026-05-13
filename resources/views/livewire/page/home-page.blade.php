 <!-- Main Content -->
<main class="pt-32 pb-section-gap max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
    <!-- Hero Section -->
    <section class="min-h-[819px] flex flex-col justify-center relative">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter  items-center">
            <!-- Text Content -->
            <div class="lg:col-span-7 flex flex-col gap-stack-md z-10">
                <div class="inline-block w-fit bg-surface-container border border-outline-variant/30 rounded-full px-4 py-1.5 mb-2 glass-card">
                    <span class="font-label-mono text-label-mono text-primary">Hello, World.</span>
                </div>

                <h1 class="font-headline-xl text-headline-xl text-on-surface">
                    I'm {{ $profil?->full_name ?? 'Alex Mercer' }}<br />
                    <span class="text-primary">{{ $profil?->role ?? 'IT Student & Web Developer' }}</span><span class="animate-pulse">|</span>
                </h1>

                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-4">
                    {{ $profil?->bio ?? 'Crafting high-performance, future-proof digital experiences.' }}
                </p>

                <div class="flex flex-wrap gap-stack-sm mt-8">
                    <button class="bg-primary text-on-primary font-label-mono text-label-mono px-8 py-4 rounded-lg glow-button flex items-center gap-2">
                        View Projects <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </button>
                    @if($profil?->cv_file)
                        <a href="{{ asset('storage/' . $profil->cv_file) }}" class="bg-transparent border border-outline-variant text-on-surface font-label-mono text-label-mono px-8 py-4 rounded-lg hover:bg-surface-variant transition-colors glass-card flex items-center gap-2">
                            Download CV <span class="material-symbols-outlined text-[18px]">download</span>
                        </a>
                    @endif
                </div>

                <!-- Socials -->
                <div class="flex gap-4 mt-8 pt-4 border-t border-outline-variant/30 w-fit">
                    @if($profil?->github)
                        <a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ $profil->github }}" target="_blank">
                            <span class="material-symbols-outlined">code</span>
                        </a>
                    @endif
                    @if($profil?->linkedin)
                        <a class="text-on-surface-variant hover:text-secondary transition-colors" href="{{ $profil->linkedin }}" target="_blank">
                            <span class="material-symbols-outlined">link</span>
                        </a>
                    @endif
                    @if($profil?->instagram)
                        <a class="text-on-surface-variant hover:text-tertiary transition-colors" href="{{ $profil->instagram }}" target="_blank">
                            <span class="material-symbols-outlined">mail</span>
                        </a>
                    @endif
                </div>
            </div>

            <!-- Image/Visuals -->
            <div class="lg:col-span-5 relative order-first lg:order-last mb-12 lg:mb-0 flex justify-center lg:block">
                <!-- Decorative element behind image -->
                <div class="absolute inset-0 bg-gradient-to-tr from-primary/10 to-secondary/10 rounded-full lg:rounded-xl blur-3xl -z-10"></div>
                <div class="glass-card p-2 rounded-full lg:rounded-xl relative overflow-hidden group w-64 h-64 lg:w-full lg:h-auto">
                    <!-- Profile Image -->
                    <div class="w-full h-full lg:h-[500px] bg-surface-container-high rounded-full lg:rounded-lg overflow-hidden relative">
                        @if($profil?->image)
                            <img src="{{ asset('storage/' . $profil->image->url) }}" 
                                 alt="{{ $profil->full_name }}" 
                                 class="w-full h-full object-cover opacity-90 transition-all duration-500">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-surface-variant text-on-surface-variant">
                                <span class="material-symbols-outlined text-6xl">person</span>
                            </div>
                        @endif
                        <!-- overlay gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent"></div>
                    </div>

                    <!-- Floating Tech Chips (Optional: Could be dynamic too) -->
                    <div class="absolute bottom-6 left-6 hidden lg:flex flex-wrap gap-2">
                        <span class="font-label-mono text-label-mono text-on-surface bg-surface/90 backdrop-blur border border-outline-variant/50 px-3 py-1 rounded shadow-sm">Laravel</span>
                        <span class="font-label-mono text-label-mono text-on-surface bg-surface/90 backdrop-blur border border-outline-variant/50 px-3 py-1 rounded shadow-sm">Livewire</span>
                        <span class="font-label-mono text-label-mono text-on-surface bg-surface/90 backdrop-blur border border-outline-variant/50 px-3 py-1 rounded shadow-sm">Tailwind</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
