<main class="flex-grow pt-28 pb-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto w-full">

    <!-- ============================================ -->
    <!-- HEADER SECTION                               -->
    <!-- ============================================ -->
    <section class="mb-16 md:mb-20 text-center max-w-2xl mx-auto">
        <!-- Badge -->
        <div class="inline-flex items-center gap-2 bg-primary/8 text-primary font-label-mono text-label-mono px-4 py-1.5 rounded-full mb-5 skill-fade-in" style="--delay: 0.1s">
            <span class="material-symbols-outlined text-[14px]">code</span>
            Technical Skills
        </div>

        <!-- Title -->
        <h1 class="font-headline-xl text-[clamp(28px,5vw,44px)] leading-[1.15] text-on-surface font-bold tracking-tight mb-4 skill-fade-in" style="--delay: 0.2s">
            My Technical <span class="text-primary">Arsenal</span>
        </h1>

        <!-- Description -->
        <p class="font-body-md text-[15px] text-on-surface-variant leading-relaxed skill-fade-in" style="--delay: 0.3s">
            Gambaran menyeluruh tentang languages, frameworks, dan tools yang saya gunakan untuk merancang aplikasi web yang kuat dan dapat diskalakan.
        </p>

    </section>

    <!-- ============================================ -->
    <!-- SKILLS GRID                                  -->
    <!-- ============================================ -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 skill-section">

        @if ($frontend->isNotEmpty())
        <!-- ===== FRONTEND CARD ===== -->
        <div class="group relative bg-surface/80 border border-outline-variant/20 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-primary/5 transition-all duration-500">

            <!-- Card accent top bar -->
            <div class="h-1 bg-gradient-to-r from-primary via-primary-container to-primary/40"></div>

            <div class="p-6 md:p-8">
                <!-- Card Header -->
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center gap-3">
                        <div class="w-11 h-11 rounded-xl bg-primary/10 flex items-center justify-center group-hover:bg-primary/15 transition-colors duration-300">
                            <span class="material-symbols-outlined text-primary text-[22px]">web</span>
                        </div>
                        <div>
                            <h2 class="text-[18px] font-bold text-on-surface leading-tight">Frontend</h2>
                            <p class="text-[11px] text-on-surface-variant mt-0.5">{{ $frontend->count() }} skills</p>
                        </div>
                    </div>
                    <div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center">
                        <span class="material-symbols-outlined text-on-surface-variant/50 text-[18px]">monitor</span>
                    </div>
                </div>

                <!-- Skills List -->
                <div class="space-y-1">
                    @foreach($frontend as $index => $skill)
                    <div class="group/item flex items-center justify-between py-3 px-3 -mx-3 rounded-xl hover:bg-primary/4 transition-all duration-300 cursor-default">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center overflow-hidden group-hover/item:bg-primary/8 transition-all duration-300">
                                @if($skill->image?->url)
                                <img src="{{ asset('uploads/' . $skill->image->url) }}" alt="{{ $skill->name }}" class="w-5 h-5 object-contain">
                                @else
                                <span class="material-symbols-outlined text-primary/60 text-[16px]">code</span>
                                @endif
                            </div>
                            <span class="text-[14px] font-semibold text-on-surface group-hover/item:text-primary transition-colors duration-300">{{ $skill->name }}</span>
                        </div>
                        <div class="flex items-center gap-2">
                            @php
                            $levelColors = match(strtolower($skill->level)) {
                            'expert', 'advanced' => 'bg-emerald-500/10 text-emerald-600 border-emerald-500/20',
                            'intermediate' => 'bg-amber-500/10 text-amber-600 border-amber-500/20',
                            default => 'bg-primary/8 text-primary border-primary/15',
                            };
                            @endphp
                            <span class="text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-lg border {{ $levelColors }} transition-all duration-300">
                                {{ $skill->level }}
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        @if ($backend->isNotEmpty())
        <!-- ===== BACKEND CARD ===== -->
        <div class="group relative bg-surface/80 border border-outline-variant/20 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-secondary/5 transition-all duration-500">

            <!-- Card accent top bar -->
            <div class="h-1 bg-gradient-to-r from-secondary via-secondary-container to-secondary/40"></div>

            <div class="p-6 md:p-8">
                <!-- Card Header -->
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center gap-3">
                        <div class="w-11 h-11 rounded-xl bg-secondary/10 flex items-center justify-center group-hover:bg-secondary/15 transition-colors duration-300">
                            <span class="material-symbols-outlined text-secondary text-[22px]">dns</span>
                        </div>
                        <div>
                            <h2 class="text-[18px] font-bold text-on-surface leading-tight">Backend</h2>
                            <p class="text-[11px] text-on-surface-variant mt-0.5">{{ $backend->count() }} skills</p>
                        </div>
                    </div>
                    <div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center">
                        <span class="material-symbols-outlined text-on-surface-variant/50 text-[18px]">database</span>
                    </div>
                </div>

                <!-- Skills List -->
                <div class="space-y-1">
                    @foreach($backend as $index => $skill)
                    <div class="group/item flex items-center justify-between py-3 px-3 -mx-3 rounded-xl hover:bg-secondary/4 transition-all duration-300 cursor-default">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center overflow-hidden group-hover/item:bg-secondary/8 transition-all duration-300">
                                @if($skill->image?->url)
                                <img src="{{ asset('uploads/' . $skill->image->url) }}" alt="{{ $skill->name }}" class="w-5 h-5 object-contain">
                                @else
                                <span class="material-symbols-outlined text-secondary/60 text-[16px]">terminal</span>
                                @endif
                            </div>
                            <span class="text-[14px] font-semibold text-on-surface group-hover/item:text-secondary transition-colors duration-300">{{ $skill->name }}</span>
                        </div>
                        <div class="flex items-center gap-2">
                            @php
                            $levelColors = match(strtolower($skill->level)) {
                            'expert', 'advanced' => 'bg-emerald-500/10 text-emerald-600 border-emerald-500/20',
                            'intermediate' => 'bg-amber-500/10 text-amber-600 border-amber-500/20',
                            default => 'bg-secondary/8 text-secondary border-secondary/15',
                            };
                            @endphp
                            <span class="text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-lg border {{ $levelColors }} transition-all duration-300">
                                {{ $skill->level }}
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        @if ($tools->isNotEmpty())
        <!-- ===== TOOLS CARD ===== -->
        <div class="group relative bg-surface/80 border border-outline-variant/20 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-tertiary/5 transition-all duration-500">

            <!-- Card accent top bar -->
            <div class="h-1 bg-gradient-to-r from-tertiary via-tertiary-container to-tertiary/40"></div>

            <div class="p-6 md:p-8">
                <!-- Card Header -->
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center gap-3">
                        <div class="w-11 h-11 rounded-xl bg-tertiary/10 flex items-center justify-center group-hover:bg-tertiary/15 transition-colors duration-300">
                            <span class="material-symbols-outlined text-tertiary text-[22px]">build</span>
                        </div>
                        <div>
                            <h2 class="text-[18px] font-bold text-on-surface leading-tight">Tools & Workflow</h2>
                            <p class="text-[11px] text-on-surface-variant mt-0.5">{{ $tools->count() }} tools</p>
                        </div>
                    </div>
                    <div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center">
                        <span class="material-symbols-outlined text-on-surface-variant/50 text-[18px]">handyman</span>
                    </div>
                </div>

                <!-- Tools Grid -->
                <div class="grid grid-cols-2 gap-2">
                    @foreach($tools as $index => $skill)
                    <div class="group/tool flex items-center gap-2.5 px-3 py-3 rounded-xl bg-surface-container/60 border border-outline-variant/10 hover:bg-tertiary/6 hover:border-tertiary/20 transition-all duration-300 cursor-default">
                        <div class="w-8 h-8 rounded-lg bg-surface flex items-center justify-center overflow-hidden shrink-0 group-hover/tool:bg-tertiary/10 transition-all duration-300">
                            @if($skill->image?->url)
                            <img src="{{ asset('uploads/' . $skill->image->url) }}" alt="{{ $skill->name }}" class="w-4 h-4 object-contain">
                            @else
                            <span class="material-symbols-outlined text-tertiary/60 text-[14px]">extension</span>
                            @endif
                        </div>
                        <span class="text-[12px] font-semibold text-on-surface-variant group-hover/tool:text-tertiary transition-colors duration-300 truncate">{{ $skill->name }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    </div>

    <!-- ============================================ -->
    <!-- SUMMARY STATS                                -->
    <!-- ============================================ -->
    <div class="grid grid-cols-3 gap-4 mt-16 skill-fade-in" style="--delay: 0.6s">
        <div class="glass-card rounded-2xl p-5 text-center hover:shadow-lg hover:shadow-primary/5 hover:-translate-y-1 transition-all duration-300">
            <div class="text-[24px] font-bold text-primary mb-1">{{ $frontend->count() + $backend->count() + $tools->count() }}</div>
            <div class="text-[11px] text-on-surface-variant uppercase tracking-wider font-medium">Total Skills</div>
        </div>
        <div class="glass-card rounded-2xl p-5 text-center hover:shadow-lg hover:shadow-primary/5 hover:-translate-y-1 transition-all duration-300">
            <div class="text-[24px] font-bold text-primary mb-1">3</div>
            <div class="text-[11px] text-on-surface-variant uppercase tracking-wider font-medium">Categories</div>
        </div>
        <div class="glass-card rounded-2xl p-5 text-center hover:shadow-lg hover:shadow-primary/5 hover:-translate-y-1 transition-all duration-300">
            <div class="text-[24px] font-bold text-primary mb-1">∞</div>
            <div class="text-[11px] text-on-surface-variant uppercase tracking-wider font-medium">Learning</div>
        </div>
    </div>


</main>