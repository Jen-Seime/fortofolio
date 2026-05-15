 <main class="flex-grow pt-32 pb-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto w-full">
        
        <!-- Header Section -->
        <div class="mb-section-gap text-center max-w-3xl mx-auto">
            <h1 class="font-headline-lg-mobile text-headline-lg-mobile  md:text-headline-xl text-primary mb-stack-md">Technical Arsenal</h1>
            <p class="font-body-md text-body-sm  md:text-body-md text-on-surface-variant">Gambaran menyeluruh tentang languages, frameworks, dan tools yang saya gunakan untuk merancang aplikasi web yang kuat dan dapat diskalakan.</p>
        </div>

        <!-- Skills Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">

            @if ($frontend->isNotEmpty())
                <!-- Frontend Card -->
                <div class="glass-card rounded-xl p-8 relative overflow-hidden glow-effect group hover:border-primary/50 transition-colors duration-500">
                    <div class="flex items-center gap-stack-sm mb-stack-lg">
                        <span class="material-symbols-outlined text-tertiary text-3xl">web</span>
                        <h2 class="font-headline-lg-mobile  text-headline-sm-mobile md:text-headline-lg-mobile text-on-surface">Frontend</h2>
                    </div>
                    
                    <div class="space-y-stack-md">
                        @foreach($frontend as $skill)
                            <div class="skill-item flex justify-between items-center py-2 border-b border-outline-variant/10 transition-all duration-300">
                                <div class="flex items-center gap-3">
                                    @if($skill->image?->url)
                                        <img src="{{ asset('storage/' . $skill->image->url) }}" alt="{{ $skill->name }}" class="w-6 h-6 object-contain">
                                    @endif
                                    <span class="font-label-mono text-body-sm md:text-body-md font-semibold text-primary">{{ $skill->name }}</span>
                                </div>
                                <span class="skill-badge px-3 py-1 rounded-full bg-primary/10 font-label-mono text-label-mono text-primary uppercase tracking-wider transition-all duration-300">{{ $skill->level }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            @if ($backend->isNotEmpty())
            <!-- Backend Card -->
            <div class="glass-card rounded-xl p-8 relative overflow-hidden glow-effect group hover:border-secondary/50 transition-colors duration-500">
                <div class="flex items-center gap-stack-sm mb-stack-lg">
                    <span class="material-symbols-outlined text-secondary text-3xl">dns</span>
                    <h2 class="font-headline-lg-mobile text-headline-sm-mobile md:text-headline-lg-mobile text-on-surface">Backend</h2>
                </div>
                
                <div class="space-y-stack-md">
                    @foreach($backend as $skill)
                        <div class="skill-item flex justify-between items-center py-2 border-b border-outline-variant/10 transition-all duration-300">
                            <div class="flex items-center gap-3">
                                @if($skill->image?->url)
                                    <img src="{{ asset('storage/' . $skill->image->url) }}" alt="{{ $skill->name }}" class="w-6 h-6 object-contain">
                                @endif
                                <span class="font-label-mono text-body-sm md:text-body-md font-semibold text-secondary">{{ $skill->name }}</span>
                            </div>
                            <span class="skill-badge px-3 py-1 rounded-full bg-secondary/10 font-label-mono text-label-mono text-secondary uppercase tracking-wider transition-all duration-300">{{ $skill->level }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif

            @if ($tools->isNotEmpty())
            <!-- Tools Card -->
            <div class="glass-card rounded-xl p-8 relative overflow-hidden glow-effect group hover:border-tertiary/50 transition-colors duration-500">
                <div class="flex items-center gap-stack-sm mb-stack-lg">
                    <span class="material-symbols-outlined text-tertiary text-3xl">build</span>
                    <h2 class="font-headline-lg-mobile text-headline-sm-mobile md:text-headline-lg-mobile text-on-surface">Tools &amp; Workflow</h2>
                </div>
                
                <div class="flex flex-wrap gap-stack-sm">
                    @foreach($tools as $skill)
                        <span class="px-4 py-2 rounded-full bg-surface border border-outline-variant/50 font-label-mono text-label-mono text-tertiary hover:bg-tertiary/10 hover:border-tertiary/30 transition-all duration-300 cursor-default flex items-center gap-2">
                            @if($skill->image?->url)
                                <img src="{{ asset('storage/' . $skill->image->url) }}" alt="{{ $skill->name }}" class="w-4 h-4 object-contain">
                            @endif
                            {{ $skill->name }}
                        </span>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </main>
