<!-- Main Content Canvas -->
<main class="relative z-10 pt-28 pb-section-gap max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop flex flex-col gap-20">

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

            <div class="p-6 md:p-10 flex flex-col md:flex-row gap-8 items-start">
                <!-- Profile Image -->
                <div class="w-full md:w-72 lg:w-80 shrink-0">
                    <div class="relative group">
                        <div class="absolute -inset-1 bg-gradient-to-tr from-primary/20 via-transparent to-secondary/20 rounded-2xl blur-lg opacity-50 group-hover:opacity-80 transition-opacity duration-500"></div>
                        <div class="relative aspect-square rounded-2xl overflow-hidden border border-outline-variant/20">
                            @if ($tentang?->image)
                                <img alt="{{ $tentang->full_name }}"
                                     class="w-full h-full object-cover transition-all duration-700 group-hover:scale-105"
                                     src="{{ asset('storage/' . $tentang->image->url) }}" />
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-surface-variant to-surface-container text-on-surface-variant">
                                    <span class="material-symbols-outlined text-7xl opacity-40">person</span>
                                </div>
                            @endif
                            <div class="absolute inset-0 bg-gradient-to-t from-on-surface/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                    </div>

                    <!-- Quick Info Cards -->
                    <div class="grid grid-cols-2 gap-2 mt-4">
                        @if($tentang?->address)
                            <div class="glass-card rounded-xl p-3 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-[16px]">location_on</span>
                                <span class="text-[11px] font-medium text-on-surface-variant truncate">{{ $tentang->address }}</span>
                            </div>
                        @endif
                        @if($tentang?->email)
                            <div class="glass-card rounded-xl p-3 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-[16px]">mail</span>
                                <span class="text-[11px] font-medium text-on-surface-variant truncate">{{ $tentang->email }}</span>
                            </div>
                        @endif
                    </div>

                    <!-- Social Links -->
                    <div class="flex items-center gap-2 mt-3">
                        @if($tentang?->github)
                            <a href="{{ $tentang->github }}" target="_blank"
                               class="w-9 h-9 rounded-xl bg-surface-container hover:bg-primary/10 border border-outline-variant/15 flex items-center justify-center text-on-surface-variant hover:text-primary transition-all duration-300 hover:-translate-y-0.5">
                                <i class="fa-brands fa-github text-[15px]"></i>
                            </a>
                        @endif
                        @if($tentang?->linkedin)
                            <a href="{{ $tentang->linkedin }}" target="_blank"
                               class="w-9 h-9 rounded-xl bg-surface-container hover:bg-primary/10 border border-outline-variant/15 flex items-center justify-center text-on-surface-variant hover:text-primary transition-all duration-300 hover:-translate-y-0.5">
                                <i class="fa-brands fa-linkedin-in text-[15px]"></i>
                            </a>
                        @endif
                        @if($tentang?->instagram)
                            <a href="{{ $tentang->instagram }}" target="_blank"
                               class="w-9 h-9 rounded-xl bg-surface-container hover:bg-primary/10 border border-outline-variant/15 flex items-center justify-center text-on-surface-variant hover:text-primary transition-all duration-300 hover:-translate-y-0.5">
                                <i class="fa-brands fa-instagram text-[15px]"></i>
                            </a>
                        @endif
                    </div>
                </div>

                <!-- Bio Text -->
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary text-[20px]">info</span>
                        </div>
                        <div>
                            <h2 class="text-[20px] font-bold text-on-surface leading-tight">{{ $tentang?->full_name ?? 'About' }}</h2>
                            <p class="text-[12px] text-on-surface-variant">{{ $tentang?->role ?? 'Developer' }}</p>
                        </div>
                    </div>

                    <div class="h-px w-12 bg-gradient-to-r from-primary to-transparent mb-5"></div>

                    <div class="prose-content text-[14px] md:text-[15px] leading-7 text-on-surface-variant
                                [&>p]:mb-4
                                [&>h1]:text-2xl [&>h1]:font-bold [&>h1]:mt-6 [&>h1]:text-on-surface
                                [&>h2]:text-xl [&>h2]:font-semibold [&>h2]:mt-5 [&>h2]:text-on-surface
                                [&>h3]:text-lg [&>h3]:font-semibold [&>h3]:mt-4 [&>h3]:text-on-surface
                                [&>ul]:list-disc [&>ul]:ml-5 [&>ul]:space-y-1
                                [&>ol]:list-decimal [&>ol]:ml-5 [&>ol]:space-y-1
                                [&>blockquote]:border-l-3 [&>blockquote]:border-primary/30 [&>blockquote]:pl-4 [&>blockquote]:italic [&>blockquote]:text-on-surface-variant/80
                                [&>img]:rounded-xl [&>img]:my-4">
                        {!! str($tentang?->about)->markdown() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- EXPERIENCE TIMELINE                          -->
    <!-- ============================================ -->
    <section class="about-fade-in" style="--delay: 0.35s">
        <!-- Section Header -->
        <div class="flex items-center gap-3 mb-10">
            <div class="inline-flex items-center gap-2 bg-secondary/8 text-secondary font-label-mono text-label-mono px-4 py-1.5 rounded-full">
                <span class="material-symbols-outlined text-[14px]">work_history</span>
                Evolution
            </div>
            <div class="flex-1 h-px bg-gradient-to-r from-outline-variant/30 to-transparent"></div>
        </div>
        <h2 class="font-headline-xl text-[clamp(24px,4vw,36px)] text-on-surface font-bold tracking-tight mb-10">
            The <span class="text-secondary">Journey</span>
        </h2>

        @if ($pengalamans->isNotEmpty())
            <div class="relative pl-8 md:pl-12">
                <!-- Vertical Line -->
                <div class="absolute left-[11px] md:left-[19px] top-3 bottom-3 w-[2px] bg-gradient-to-b from-primary via-secondary/40 to-outline-variant/20"></div>

                <div class="flex flex-col gap-8">
                    @foreach ($pengalamans as $index => $pengalaman)
                        @php
                            $isFirst = $index === 0;
                            $dotColor = $isFirst ? 'border-primary' : 'border-secondary';
                            $glowColor = $isFirst ? 'rgba(0,64,224,0.3)' : 'rgba(86,94,116,0.3)';
                        @endphp
                        <div class="relative group">
                            <!-- Timeline dot -->
                            <div class="absolute left-[-33px] md:left-[-41px] top-2 z-10">
                                <div class="w-4 h-4 rounded-full bg-surface border-2 {{ $dotColor }} group-hover:shadow-[0_0_12px_{{ $glowColor }}] transition-all duration-300">
                                    @if($isFirst)
                                        <div class="absolute inset-0.5 rounded-full bg-primary/20 animate-ping"></div>
                                    @endif
                                </div>
                            </div>

                            <!-- Card -->
                            <div class="relative bg-surface/80 border border-outline-variant/20 rounded-2xl p-5 md:p-7 ml-2 hover:shadow-xl hover:shadow-primary/5 hover:border-primary/15 transition-all duration-500 group-hover:-translate-y-0.5 overflow-hidden">
                                <!-- Subtle gradient corner -->
                                @if($isFirst)
                                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-primary/5 to-transparent pointer-events-none"></div>
                                @endif

                                <!-- Date -->
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="material-symbols-outlined text-[14px] text-on-surface-variant/50">calendar_today</span>
                                    <span class="font-label-mono text-[11px] text-on-surface-variant/70 uppercase tracking-wider">
                                        {{ $pengalaman->start_date->format('M Y') }} — {{ $pengalaman->end_date ? $pengalaman->end_date->format('M Y') : 'Present' }}
                                    </span>
                                    @if(!$pengalaman->end_date)
                                        <span class="inline-flex items-center gap-1 text-[10px] font-bold text-emerald-600 bg-emerald-500/10 px-2 py-0.5 rounded-full">
                                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                            Current
                                        </span>
                                    @endif
                                </div>

                                <!-- Position -->
                                <h3 class="text-[18px] md:text-[20px] font-bold text-on-surface leading-snug mb-1">{{ $pengalaman->position }}</h3>

                                <!-- Description -->
                                <div class="mt-3 text-[13px] md:text-[14px] leading-7 text-on-surface-variant
                                            [&>p]:mb-2
                                            [&>h1]:text-xl [&>h1]:font-bold [&>h1]:mt-4 [&>h1]:text-on-surface
                                            [&>h2]:text-lg [&>h2]:font-semibold [&>h2]:mt-3 [&>h2]:text-on-surface
                                            [&>h3]:text-base [&>h3]:font-semibold [&>h3]:mt-3 [&>h3]:text-on-surface
                                            [&>ul]:list-disc [&>ul]:ml-5 [&>ul]:space-y-1
                                            [&>ol]:list-decimal [&>ol]:ml-5
                                            [&>blockquote]:border-l-3 [&>blockquote]:border-primary/30 [&>blockquote]:pl-4 [&>blockquote]:italic
                                            [&>img]:rounded-xl [&>img]:my-3">
                                    {!! str($pengalaman?->description)->markdown() !!}
                                </div>

                                <!-- Tech tags -->
                                @if($pengalaman->technology)
                                    <div class="flex flex-wrap gap-1.5 mt-5 pt-4 border-t border-outline-variant/15">
                                        @foreach ($pengalaman->technology as $tech)
                                            <span class="text-[10px] font-semibold uppercase tracking-wider text-secondary bg-secondary/8 px-2.5 py-1 rounded-lg border border-secondary/10">{{ $tech }}</span>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <!-- Empty State -->
            <div class="bg-surface/80 border border-outline-variant/20 rounded-2xl p-12 text-center">
                <div class="w-16 h-16 mx-auto mb-5 rounded-2xl bg-secondary/8 flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl text-secondary">history</span>
                </div>
                <h3 class="text-[18px] font-bold text-on-surface mb-2">Belum Ada Riwayat Perjalanan</h3>
                <p class="text-[14px] text-on-surface-variant max-w-md mx-auto">Perjalanan profesional dan pencapaian akan segera hadir di sini.</p>
            </div>
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


<style>
    .about-fade-in {
        opacity: 0;
        transform: translateY(20px);
        animation: aboutFadeIn 0.6s ease-out forwards;
        animation-delay: var(--delay, 0s);
    }

    @keyframes aboutFadeIn {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

</main>
