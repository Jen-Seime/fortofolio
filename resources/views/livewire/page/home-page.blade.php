<!-- Main Content -->
<main class="pt-24 pb-section-gap max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop"
    x-data="homeAnimations()"
    x-init="init()">

    <!-- ============================================ -->
    <!-- HERO SECTION                                 -->
    <!-- ============================================ -->
    <section class="min-h-[85vh] flex flex-col justify-center relative mb-32">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center">

            <!-- Text Content -->
            <div class="lg:col-span-7 flex flex-col gap-4 z-10">

                <!-- Greeting Badge -->
                <div class="inline-flex items-center gap-2 w-fit bg-surface-container/80 border border-outline-variant/20 rounded-full px-4 py-2 mb-2 glass-card hero-fade-in"
                    style="--delay: 0.1s">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                    </span>
                    <span class="font-label-mono text-label-mono text-on-surface-variant">Available for work</span>
                </div>

                <!-- Headline -->
                <div class="hero-fade-in" style="--delay: 0.25s">
                    <h1 class="font-headline-xl text-[clamp(32px,6vw,56px)] leading-[1.1] text-on-surface font-bold tracking-tight">
                        Hi, I'm
                        <span class="relative inline-block">
                            <span class="text-primary">{{ $profil?->full_name ?? 'Alex Mercer' }}</span>
                            <svg class="absolute -bottom-1 left-0 w-full" viewBox="0 0 200 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 5.5C47 2 77 2 199 5.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="text-primary/40 hero-underline" />
                            </svg>
                        </span>
                    </h1>
                    <h2 id="typing" class="font-headline-xl text-[clamp(24px,4.5vw,44px)] leading-[1.2] text-on-surface-variant font-semibold mt-2">
                        <!-- {{ $profil?->role ?? 'IT Student & Web Developer' }} -->
                        <!-- <span class="text-primary animate-blink">|</span> -->
                         
                    </h2>
                </div>

                <!-- Bio -->
                <p class="font-body-md text-body-md text-on-surface-variant max-w-xl mt-3 leading-relaxed hero-fade-in" style="--delay: 0.4s">
                    {{ $profil?->bio ?? 'Crafting high-performance, future-proof digital experiences with modern web technologies.' }}
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-wrap gap-3 mt-8 hero-fade-in" style="--delay: 0.55s">
                    <a href="#projects"
                        class="group relative bg-primary text-on-primary font-semibold text-[14px] px-7 py-3.5 rounded-2xl shadow-lg shadow-primary/20 hover:shadow-xl hover:shadow-primary/30 active:scale-[0.97] transition-all duration-300 flex items-center gap-2 overflow-hidden">
                        <span class="relative z-10">View Projects</span>
                        <span class="material-symbols-outlined text-[18px] relative z-10 group-hover:translate-x-1 transition-transform duration-300">arrow_forward</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-primary to-primary-container opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>
                    @if($profil?->cv_file)
                    <a href="{{ asset('storage/' . $profil->cv_file) }}"
                        class="group bg-surface border border-outline-variant/30 text-on-surface font-semibold text-[14px] px-7 py-3.5 rounded-2xl hover:border-primary/30 hover:bg-primary/5 active:scale-[0.97] transition-all duration-300 glass-card flex items-center gap-2">
                        <span>Download CV</span>
                        <span class="material-symbols-outlined text-[18px] group-hover:translate-y-0.5 transition-transform duration-300">download</span>
                    </a>
                    @endif
                </div>

                <!-- Social Links -->
                <div class="flex items-center gap-4 mt-6 hero-fade-in" style="--delay: 0.65s">
                    <span class="w-8 h-px bg-outline-variant/40"></span>
                    @if($profil?->github)
                    <a href="{{ $profil->github }}" target="_blank"
                        class="w-10 h-10 rounded-xl bg-surface-container hover:bg-primary/10 border border-outline-variant/20 flex items-center justify-center text-on-surface-variant hover:text-primary transition-all duration-300 hover:-translate-y-1">
                        <i class="fa-brands fa-github text-[18px]"></i>
                    </a>
                    @endif
                    @if($profil?->linkedin)
                    <a href="{{ $profil->linkedin }}" target="_blank"
                        class="w-10 h-10 rounded-xl bg-surface-container hover:bg-primary/10 border border-outline-variant/20 flex items-center justify-center text-on-surface-variant hover:text-primary transition-all duration-300 hover:-translate-y-1">
                        <i class="fa-brands fa-linkedin-in text-[18px]"></i>
                    </a>
                    @endif
                    @if($profil?->instagram)
                    <a href="{{ $profil->instagram }}" target="_blank"
                        class="w-10 h-10 rounded-xl bg-surface-container hover:bg-primary/10 border border-outline-variant/20 flex items-center justify-center text-on-surface-variant hover:text-primary transition-all duration-300 hover:-translate-y-1">
                        <i class="fa-brands fa-instagram text-[18px]"></i>
                    </a>
                    @endif
                    @if($profil?->email)
                    <a href="mailto:{{ $profil->email }}"
                        class="w-10 h-10 rounded-xl bg-surface-container hover:bg-primary/10 border border-outline-variant/20 flex items-center justify-center text-on-surface-variant hover:text-primary transition-all duration-300 hover:-translate-y-1">
                        <span class="material-symbols-outlined text-[18px]">mail</span>
                    </a>
                    @endif
                </div>
            </div>

            <!-- Hero Image / Visual -->
            <div class="lg:col-span-5 relative order-first lg:order-last mb-16 lg:mb-0 flex justify-center lg:block hero-fade-in" style="--delay: 0.3s">

                <!-- Decorative floating elements -->
                <div class="absolute -top-6 -right-6 w-24 h-24 bg-primary/5 rounded-full blur-2xl floating-slow"></div>
                <div class="absolute -bottom-8 -left-8 w-32 h-32 bg-secondary/5 rounded-full blur-2xl floating-medium"></div>

                <!-- Orbit ring decoration -->
                <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                    <div class="w-[110%] h-[110%] rounded-full border border-dashed border-outline-variant/15 orbit-spin"></div>
                </div>

                <!-- Main image container -->
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-tr from-primary/20 via-transparent to-secondary/20 rounded-full lg:rounded-2xl blur-xl opacity-60 group-hover:opacity-80 transition-opacity duration-500"></div>

                    <div class="relative glass-card p-1.5 rounded-full lg:rounded-2xl overflow-hidden">
                        <div class="w-64 h-64 lg:w-full lg:h-[480px] bg-surface-container-high rounded-full lg:rounded-xl overflow-hidden relative">
                            @if($profil?->image)
                            <img src="{{ asset('storage/' . $profil->image->url) }}"
                                alt="{{ $profil->full_name }}"
                                class="w-full h-full object-cover transition-all duration-700 group-hover:scale-105">
                            @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-surface-variant to-surface-container text-on-surface-variant">
                                <span class="material-symbols-outlined text-7xl opacity-40">person</span>
                            </div>
                            @endif
                            <div class="absolute inset-0 bg-gradient-to-t from-on-surface/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                    </div>

                    <!-- Tech badges floating on image -->
                    <div class="absolute -bottom-3 -left-3 lg:bottom-6 lg:-left-4 glass-panel px-3 py-2 rounded-xl shadow-lg flex items-center gap-2 floating-slow">
                        <div class="w-7 h-7 rounded-lg bg-primary/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary text-[16px]">code</span>
                        </div>
                        <div>
                            <p class="text-[11px] font-bold text-on-surface leading-none">Laravel</p>
                            <p class="text-[9px] text-on-surface-variant leading-none mt-0.5">Backend</p>
                        </div>
                    </div>

                    <div class="absolute -top-2 -right-2 lg:top-8 lg:-right-4 glass-panel px-3 py-2 rounded-xl shadow-lg flex items-center gap-2 floating-medium">
                        <div class="w-7 h-7 rounded-lg bg-secondary/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-secondary text-[16px]">palette</span>
                        </div>
                        <div>
                            <p class="text-[11px] font-bold text-on-surface leading-none">Tailwind</p>
                            <p class="text-[9px] text-on-surface-variant leading-none mt-0.5">Styling</p>
                        </div>
                    </div>

                    <div class="absolute bottom-16 -right-3 lg:bottom-24 lg:-right-6 glass-panel px-3 py-2 rounded-xl shadow-lg flex items-center gap-2 floating-fast hidden lg:flex">
                        <div class="w-7 h-7 rounded-lg bg-tertiary/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-tertiary text-[16px]">bolt</span>
                        </div>
                        <div>
                            <p class="text-[11px] font-bold text-on-surface leading-none">Livewire</p>
                            <p class="text-[9px] text-on-surface-variant leading-none mt-0.5">Reactive</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Row -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-20 hero-fade-in" style="--delay: 0.75s">
            <div class="glass-card rounded-2xl p-5 text-center group hover:shadow-lg hover:shadow-primary/5 hover:-translate-y-1 transition-all duration-300">
                <div class="text-[28px] font-bold text-primary mb-1" x-data="counter({{ $yearsOfExperience }})" x-text="display + '+'">{{ $yearsOfExperience }}+</div>
                <div class="text-[12px] text-on-surface-variant uppercase tracking-wider font-medium">Years Exp.</div>
            </div>
            <div class="glass-card rounded-2xl p-5 text-center group hover:shadow-lg hover:shadow-primary/5 hover:-translate-y-1 transition-all duration-300">
                <div class="text-[28px] font-bold text-primary mb-1" x-data="counter({{ count($projects) }})" x-text="display + '+'">{{ count($projects) }}+</div>
                <div class="text-[12px] text-on-surface-variant uppercase tracking-wider font-medium">Projects</div>
            </div>
            <div class="glass-card rounded-2xl p-5 text-center group hover:shadow-lg hover:shadow-primary/5 hover:-translate-y-1 transition-all duration-300">
                <div class="text-[28px] font-bold text-primary mb-1">100%</div>
                <div class="text-[12px] text-on-surface-variant uppercase tracking-wider font-medium">Dedication</div>
            </div>
            <div class="glass-card rounded-2xl p-5 text-center group hover:shadow-lg hover:shadow-primary/5 hover:-translate-y-1 transition-all duration-300">
                <div class="text-[28px] font-bold text-primary mb-1">∞</div>
                <div class="text-[12px] text-on-surface-variant uppercase tracking-wider font-medium">Curiosity</div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="hidden lg:flex flex-col items-center mt-16 hero-fade-in" style="--delay: 0.85s">
            <a href="#projects" class="flex flex-col items-center gap-2 text-on-surface-variant/50 hover:text-primary transition-colors duration-300 group">
                <span class="text-[11px] uppercase tracking-[0.2em] font-medium">Scroll to explore</span>
                <div class="w-5 h-8 rounded-full border-2 border-current flex justify-center pt-1.5">
                    <div class="w-1 h-2 rounded-full bg-current scroll-dot"></div>
                </div>
            </a>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- PROJECTS SECTION                             -->
    <!-- ============================================ -->
    <section id="projects" class="pt-12 scroll-reveal">

        <!-- Section Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-14 gap-6">
            <div>
                <div class="inline-flex items-center gap-2 bg-primary/8 text-primary font-label-mono text-label-mono px-4 py-1.5 rounded-full mb-4">
                    <span class="material-symbols-outlined text-[14px]">work</span>
                    Portfolio
                </div>
                <h2 class="font-headline-xl text-[clamp(28px,4vw,40px)] text-on-surface font-bold tracking-tight">
                    Selected <span class="text-primary">Projects</span>
                </h2>
                <p class="text-on-surface-variant mt-3 max-w-lg text-[15px] leading-relaxed">
                    A curated collection of digital experiences crafted with performance and user experience at the core.
                </p>
            </div>
            <a href="#" class="group flex items-center gap-2 text-primary font-semibold text-[14px] bg-primary/5 hover:bg-primary/10 px-5 py-2.5 rounded-full transition-all duration-300">
                View All
                <span class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform duration-300">arrow_forward</span>
            </a>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 ">
          
            @forelse($projects as $project )
                <x-CardItem.CardProject wire:key="{{ $project->id }}" :project="$project" />
            @empty
               
                <x-EmptyState.EmptyState class="col-span-full"  title="Project Kosong" description="Untuk liat lebih banyak bisa ke halaman Project"  />
            @endforelse

            
        </div>

        

        
    </section>

    
   

    <script>
        new TypeIt("#typing", {
            speed: 80,
            loop: true,
        })
        .type("{{ $profil?->role ?? 'IT Student & Web Developer' }}")
        .pause(1000)
        .delete()
        
        .go();
    </script>



</main>
