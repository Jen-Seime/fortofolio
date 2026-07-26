<!-- Main Content Canvas -->
<main class="relative z-10 pt-28 pb-section-gap max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop flex flex-col gap-20 " wire:init="pengalamans">

    <!-- ============================================ -->
    <!-- ABOUT HEADER                                 -->
    <!-- ============================================ -->
    <section class="about-fade-in" style="--delay: 0.1s">
        <!-- Badge -->
        <div class="inline-flex items-center gap-2 bg-primary/8 text-primary font-label-mono text-label-mono px-4 py-1.5 rounded-full mb-5">
            <span class="material-symbols-outlined text-[14px]">person</span>
            About Me
        </div>
        <h1 class="font-headline-xl text-[clamp(28px,5vw,44px)] leading-[1.15] text-on-surface font-bold tracking-tight">
            Get to Know <span class="text-primary">Me</span>
        </h1>
    </section>

    <!-- ============================================ -->
    <!-- BIO SECTION                                  -->
    <!-- ============================================ -->
    <section class="about-fade-in" style="--delay: 0.2s">
        <div class="relative bg-surface/80 border border-outline-variant/20 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-primary/5 transition-all duration-500">
            <!-- Accent bar -->
            <div class="h-1 bg-gradient-to-r from-primary via-primary-container to-primary/40"></div>

            <!-- Profile Hero Row -->
            <div class="flex flex-col md:flex-row gap-0 items-stretch">

                <!-- LEFT: Profile Image Column -->
                <div class="relative md:w-72 lg:w-80 shrink-0 flex flex-col">
                    <!-- Glow blob behind image -->
                    <div class="absolute -top-6 -left-6 w-48 h-48 bg-primary/10 rounded-full blur-[60px] pointer-events-none"></div>

                    <div class="relative group p-6 md:p-8 flex flex-col gap-5 z-10">
                        <!-- Avatar -->
                        <div class="relative self-center md:self-start">
                            <!-- Animated gradient ring -->
                            <div class="absolute -inset-[3px] rounded-2xl bg-gradient-to-tr from-primary via-secondary/60 to-primary/30 opacity-70 blur-[2px] group-hover:opacity-100 transition-opacity duration-500"></div>
                            <div class="relative w-full aspect-square rounded-2xl overflow-hidden border border-white/10 shadow-xl">
                                @if ($tentang?->image)
                                    <img alt="{{ $tentang->full_name }}"
                                         class="w-full h-full object-cover transition-all duration-700 group-hover:scale-105"
                                         src="{{ asset('uploads/' . $tentang->image->url) }}" />
                                @else
                                    <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-surface-variant to-surface-container text-on-surface-variant">
                                        <span class="material-symbols-outlined text-7xl opacity-40">person</span>
                                    </div>
                                @endif
                                <!-- Shimmer overlay on hover -->
                                <div class="absolute inset-0 bg-gradient-to-t from-primary/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            </div>
                        </div>

                        <!-- Name & Role Pill -->
                        <div class="text-center md:text-left">
                            <h2 class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface leading-tight">
                                {{ $tentang?->full_name ?? 'Full Name' }}
                            </h2>
                            <span class="inline-flex items-center gap-1.5 mt-1.5 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary font-label-mono text-label-mono">
                                <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                                {{ $tentang?->role ?? 'Developer' }}
                            </span>
                        </div>

                        <!-- Info chips -->
                        <div class="flex flex-col gap-2">
                            @if($tentang?->address)
                                <div class="flex items-center gap-2.5 px-3 py-2 rounded-xl bg-surface-container/60 border border-outline-variant/15">
                                    <span class="material-symbols-outlined text-primary text-[16px] shrink-0">location_on</span>
                                    <span class="text-[12px] text-on-surface-variant truncate">{{ $tentang->address }}</span>
                                </div>
                            @endif
                            @if($tentang?->email)
                                <div class="flex items-center gap-2.5 px-3 py-2 rounded-xl bg-surface-container/60 border border-outline-variant/15">
                                    <span class="material-symbols-outlined text-primary text-[16px] shrink-0">mail</span>
                                    <span class="text-[12px] text-on-surface-variant truncate">{{ $tentang->email }}</span>
                                </div>
                            @endif
                        </div>

                        <!-- Social Links -->
                        <div class="flex items-center gap-2">
                            @if($tentang?->github)
                                <a href="{{ $tentang->github }}" target="_blank" aria-label="GitHub"
                                   class="flex-1 flex items-center justify-center gap-2 py-2 rounded-xl bg-surface-container hover:bg-primary/10 border border-outline-variant/20 hover:border-primary/30 text-on-surface-variant hover:text-primary transition-all duration-300 hover:-translate-y-0.5 font-label-mono text-[11px]">
                                    <i class="fa-brands fa-github text-[14px]"></i>
                                    <span class="hidden sm:inline">GitHub</span>
                                </a>
                            @endif
                            @if($tentang?->linkedin)
                                <a href="{{ $tentang->linkedin }}" target="_blank" aria-label="LinkedIn"
                                   class="flex-1 flex items-center justify-center gap-2 py-2 rounded-xl bg-surface-container hover:bg-primary/10 border border-outline-variant/20 hover:border-primary/30 text-on-surface-variant hover:text-primary transition-all duration-300 hover:-translate-y-0.5 font-label-mono text-[11px]">
                                    <i class="fa-brands fa-linkedin-in text-[14px]"></i>
                                    <span class="hidden sm:inline">LinkedIn</span>
                                </a>
                            @endif
                            @if($tentang?->instagram)
                                <a href="{{ $tentang->instagram }}" target="_blank" aria-label="Instagram"
                                   class="flex-1 flex items-center justify-center gap-2 py-2 rounded-xl bg-surface-container hover:bg-primary/10 border border-outline-variant/20 hover:border-primary/30 text-on-surface-variant hover:text-primary transition-all duration-300 hover:-translate-y-0.5 font-label-mono text-[11px]">
                                    <i class="fa-brands fa-instagram text-[14px]"></i>
                                    <span class="hidden sm:inline">Instagram</span>
                                </a>
                            @endif
                        </div>
                    </div>

                    <!-- Vertical divider (desktop only) -->
                    <div class="hidden md:block absolute right-0 top-8 bottom-8 w-px bg-gradient-to-b from-transparent via-outline-variant/30 to-transparent"></div>
                </div>

                <!-- RIGHT: Bio Content -->
                <div class="flex-1 min-w-0 p-6 md:p-8 md:pl-10 flex flex-col gap-6">

                    <!-- Section label -->
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-primary text-[18px]">format_quote</span>
                        </div>
                        <div class="h-px flex-1 bg-gradient-to-r from-primary/30 to-transparent"></div>
                        <span class="font-label-mono text-label-mono text-on-surface-variant/60 tracking-widest uppercase">Bio</span>
                    </div>

                    <!-- Bio prose -->
                    <div class="prose-content text-[15px] md:text-[16px] leading-[1.85] text-on-surface-variant
                        [&>p]:mb-5 [&>p:last-child]:mb-0
                        [&>h1]:text-2xl [&>h1]:font-bold [&>h1]:mt-8 [&>h1]:mb-3 [&>h1]:text-on-surface
                        [&>h2]:text-xl [&>h2]:font-semibold [&>h2]:mt-8 [&>h2]:mb-3 [&>h2]:text-on-surface
                        [&>h3]:text-lg [&>h3]:font-semibold [&>h3]:mt-6 [&>h3]:mb-2 [&>h3]:text-on-surface
                        [&>ul]:list-disc [&>ul]:ml-5 [&>ul]:mb-4 [&>ul]:space-y-1
                        [&>ol]:list-decimal [&>ol]:ml-5 [&>ol]:mb-4 [&>ol]:space-y-1
                        [&>blockquote]:border-l-4 [&>blockquote]:border-primary/40 [&>blockquote]:pl-5 [&>blockquote]:my-4 [&>blockquote]:italic [&>blockquote]:text-on-surface-variant/70 [&>blockquote]:bg-primary/3 [&>blockquote]:rounded-r-xl [&>blockquote]:py-2
                        [&>strong]:text-on-surface [&>strong]:font-semibold
                        [&>img]:rounded-xl [&>img]:my-6 [&>img]:shadow-lg">
                        {!! str($tentang?->about)->markdown() !!}
                    </div>

                    <!-- Bottom decorative stat row -->
                    {{-- <div class="mt-auto pt-5 border-t border-outline-variant/20 grid grid-cols-3 gap-4">
                        <div class="text-center">
                            <p class="font-headline-lg-mobile text-headline-lg-mobile text-primary leading-none">{{ now()->year - 2022 }}+</p>
                            <p class="font-label-mono text-[10px] text-on-surface-variant mt-1 uppercase tracking-widest">Years Coding</p>
                        </div>
                        <div class="text-center border-x border-outline-variant/20">
                            <p class="font-headline-lg-mobile text-headline-lg-mobile text-primary leading-none">10+</p>
                            <p class="font-label-mono text-[10px] text-on-surface-variant mt-1 uppercase tracking-widest">Projects</p>
                        </div>
                        <div class="text-center">
                            <p class="font-headline-lg-mobile text-headline-lg-mobile text-primary leading-none">∞</p>
                            <p class="font-label-mono text-[10px] text-on-surface-variant mt-1 uppercase tracking-widest">Curiosity</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- EXPERIENCE TIMELINE                          -->
    <!-- ============================================ -->
    <section class="about-fade-in flex flex-col items-center w-full" style="--delay: 0.35s">
        <!-- Section Header -->
        <header class="text-center mb-16 max-w-2xl w-full">
            <h1 class="font-headline-xl text-[clamp(28px,5vw,48px)] text-[#1a1c1c] mb-4 tracking-tight">Experience &amp; Evolution</h1>
            <p class="font-body-md text-[15px] md:text-body-md text-on-surface-variant">A timeline of my professional journey, highlighting key roles, technical challenges, and major achievements in building scalable web solutions.</p>
        </header>

        @if ($pengalamans->isNotEmpty())
            <!-- Timeline Container -->
            <div class="relative w-full max-w-4xl py-12">
                <!-- Center Line (Desktop) / Left Line (Mobile) -->
                <div class="absolute  md:left-1/2 top-0 bottom-0 timeline-line transform md:-translate-x-1/2 z-0 rounded-full"></div>

                @for ($i = 0; $i < 6; $i++)
                    <div class="contents" wire:delay.100ms wire:loading wire:target="pengalamans" wire:key="{{ $i }}">
                        <x-CardExp.CardExpSkeleton />
                    </div>
                @endfor

                @foreach ($pengalamans as $pengalaman)
                    <div class="contents" wire:delay.100ms wire:loading.remove wire:target="pengalamans" wire:key="{{ $pengalaman->id }}">
                        <x-CardExp.CardExp :pengalaman="$pengalaman" :loop="$loop" />
                    </div>
                @endforeach
            </div>
        @else
            <!-- Empty State -->
            <x-EmptyState.EmptyState class="w-[80%]" title='Belum Ada Riwayat Perjalanan' description="'Perjalanan profesional dan pencapaian akan segera hadir di sini."/>
            
        @endif
    </section>

    <!-- ============================================ -->
    <!-- EDUCATION & GOALS                            -->
    <!-- ============================================ -->
    <section class="grid grid-cols-1 lg:grid-cols-2 gap-6 about-fade-in" style="--delay: 0.5s">

        <!-- Education Card -->
        <div class="relative bg-surface/80 border border-outline-variant/20 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-secondary/5 transition-all duration-500">
            <!-- Left accent bar -->
            <div class="absolute left-0 top-0 w-1 h-full bg-gradient-to-b from-secondary via-primary to-secondary/30"></div>

            <div class="p-6 md:p-8 pl-8 md:pl-10">
                <!-- Header -->
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-secondary/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-secondary text-[20px]">school</span>
                    </div>
                    <div>
                        <h2 class="text-[18px] font-bold text-on-surface leading-tight">Academic Foundation</h2>
                        <p class="text-[11px] text-on-surface-variant mt-0.5">Education background</p>
                    </div>
                </div>

                @if ($pendidikans->isNotEmpty())
                    <div class="flex flex-col gap-4">
                        @foreach($pendidikans as $pendidikan)
                            <div class="group/edu pb-4 {{ !$loop->last ? 'border-b border-outline-variant/15' : '' }}">
                                <div class="flex items-start justify-between gap-3">
                                    <div class="min-w-0">
                                        <h3 class="text-[15px] font-bold text-on-surface leading-snug group-hover/edu:text-secondary transition-colors duration-300">{{ $pendidikan->institution }}</h3>
                                        <p class="text-[12px] text-on-surface-variant mt-1">{{ $pendidikan->degree }} — {{ $pendidikan->major }}</p>
                                        @if($pendidikan->description)
                                            <p class="text-[12px] text-on-surface-variant/70 mt-2 leading-relaxed">{{ $pendidikan->description }}</p>
                                        @endif
                                    </div>
                                    <span class="text-[10px] font-bold text-secondary bg-secondary/8 px-2.5 py-1 rounded-lg shrink-0 border border-secondary/10">
                                        {{ $pendidikan->start_year }}–{{ $pendidikan->end_year }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-6">
                        <span class="material-symbols-outlined text-3xl text-outline-variant/40 mb-2">school</span>
                        <p class="text-[13px] text-on-surface-variant">Belum ada riwayat pendidikan</p>
                    </div>
                @endif
            </div>
        </div>

        <!-- Future Goals Card -->
        <div class="relative bg-surface/80 border border-outline-variant/20 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-primary/5 transition-all duration-500">
            <!-- Decorative glow -->
            <div class="absolute right-[-15%] bottom-[-15%] w-48 h-48 bg-primary/8 rounded-full blur-[60px] pointer-events-none"></div>
            <div class="absolute left-[-10%] top-[-10%] w-32 h-32 bg-secondary/5 rounded-full blur-[40px] pointer-events-none"></div>

            <div class="p-6 md:p-8 relative z-10">
                <!-- Header -->
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary text-[20px]">rocket_launch</span>
                    </div>
                    <div>
                        <h2 class="text-[18px] font-bold text-on-surface leading-tight">Future Trajectory</h2>
                        <p class="text-[11px] text-on-surface-variant mt-0.5">Goals & aspirations</p>
                    </div>
                </div>

                <p class="text-[14px] md:text-[15px] leading-7 text-on-surface-variant mb-6">
                    Tujuan saya saat ini adalah menjadi Full Stack Web Developer profesional yang mampu membangun aplikasi web modern, scalable, dan user friendly menggunakan Laravel dan teknologi frontend modern.
                </p>

                <!-- Goal items -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                    <div class="flex items-center gap-3 p-3 rounded-xl bg-surface-container/50 border border-outline-variant/10 hover:bg-primary/5 hover:border-primary/15 transition-all duration-300">
                        <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-primary text-[16px]">architecture</span>
                        </div>
                        <span class="text-[12px] font-semibold text-on-surface">System Design</span>
                    </div>
                    <div class="flex items-center gap-3 p-3 rounded-xl bg-surface-container/50 border border-outline-variant/10 hover:bg-primary/5 hover:border-primary/15 transition-all duration-300">
                        <div class="w-8 h-8 rounded-lg bg-secondary/10 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-secondary text-[16px]">cloud</span>
                        </div>
                        <span class="text-[12px] font-semibold text-on-surface">Cloud Deploy</span>
                    </div>
                    <div class="flex items-center gap-3 p-3 rounded-xl bg-surface-container/50 border border-outline-variant/10 hover:bg-primary/5 hover:border-primary/15 transition-all duration-300">
                        <div class="w-8 h-8 rounded-lg bg-tertiary/10 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-tertiary text-[16px]">api</span>
                        </div>
                        <span class="text-[12px] font-semibold text-on-surface">API Design</span>
                    </div>
                    <div class="flex items-center gap-3 p-3 rounded-xl bg-surface-container/50 border border-outline-variant/10 hover:bg-primary/5 hover:border-primary/15 transition-all duration-300">
                        <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-primary text-[16px]">groups</span>
                        </div>
                        <span class="text-[12px] font-semibold text-on-surface">Team Leadership</span>
                    </div>
                </div>
            </div>
        </div>
    </section>




</main>
