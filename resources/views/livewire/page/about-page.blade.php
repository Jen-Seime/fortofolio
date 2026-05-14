<!-- Main Content Canvas -->
    <main class="relative z-10 pt-32 pb-section-gap max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop flex flex-col gap-section-gap">
        <!-- Biodata Section (Bento Grid Layout) -->
        <section class="flex flex-col gap-stack-lg">
            <header>
                <h1 class="font-headline-xl text-headline-lg-mobile md:text-headline-xl text-on-surface ">About <span class="text-primary">Me</span></h1>
                <!-- <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                    Bridging the gap between complex architectural patterns and seamless, human-centric user experiences.
                </p> -->
            </header>
            <div class=" gap-gutter">
                <!-- Main Bio Card -->
                <div class=" glass-panel  glass-edge rounded-2xl p-stack-md md:p-stack-lg flex flex-col md:flex-row gap-gutter items-start hover:bg-white/80 transition-colors duration-500">
                    <div class="w-full md:w-1/3 aspect-square rounded-xl overflow-hidden border border-outline-variant/30 flex-shrink-0 relative group">
                        <div class="absolute inset-0 bg-primary/10 mix-blend-overlay group-hover:opacity-0 transition-opacity duration-300 z-10"></div>
                        @if ($tentang?->image)
                            <img alt="Portrait of the developer" class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-500" data-alt="A" src="{{ asset('storage/' . $tentang->image->url) }}" />
                        @else
                            <img alt="Portrait of the developer" class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-500" data-alt="A cinematic, high-contrast portrait of a male software engineer working in a dimly lit, modern studio space. He is illuminated by the cool, soft blue glow of multiple monitors displaying intricate code structures. The aesthetic is moody and highly technical, dominated by deep charcoal blacks and vibrant neon blue accents. The depth of field is shallow, focusing sharply on his concentrated expression while the background blurs into sleek, glassmorphic reflections." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCtWB-SJi9bCdK2I6jfr8a3Ds-RuKMNkRT_6MoHNZus6Z2tC4hwVABG8dKLNYZC6H3tmZwiVyJo757fDcOQcDKWOj0o9uu5sf39afIK5F7CKIXBkIfOT9O_Qe69ldTCB1AGA5LR9Sv6Q9_URPVG4NOGYHs0BYYit-prrULZobATRjKUax-o4EqBU4pI-I22bPKj1Fv_PuVtyPzIryGYR4EuFiF9tJB--LZyOhpd10CmdxRrKvSbCLac9YcGAl7M7nVzC-dfHYRzy87r" />
                        @endif
                    </div>
                    <div class="flex flex-col gap-stack-sm flex-grow">
                        <h2 class="font-headline-lg text-headline-sm-mobile md:text-headline-lg text-on-surface">The Future-Proof Engineer</h2>
                        <div class="h-px w-16 bg-gradient-to-r from-primary to-transparent my-2"></div>
                        <div class="font-body-md text-body-md text-on-surface-variant">
                            <div class="
                                font-body-sm
                                md:text-body-md
                                text-body-sm
                                text-justify 
                                leading-8 
                                text-on-surface-variant
                                space-y-6
                                [&>p]:mb-4
                                [&>h1]:text-3xl [&>h1]:font-bold [&>h1]:mt-8
                                [&>h2]:text-2xl [&>h2]:font-semibold [&>h2]:mt-6
                                [&>h3]:text-xl [&>h3]:font-semibold [&>h3]:mt-4
                                [&>ul]:list-disc [&>ul]:ml-6
                                [&>ol]:list-decimal [&>ol]:ml-6
                                [&>blockquote]:border-l-4 [&>blockquote]:pl-4 [&>blockquote]:italic [&>blockquote]:text-gray-600
                                [&>img]:rounded-xl [&>img]:my-4
                            ">
                                {!! str($tentang?->about)->markdown() !!}
                            </div>
                        </div>
                       
                    </div>
                </div>
                <!-- Side Cards (Stats & Location) -->
                <!-- <div class="lg:col-span-4 flex flex-col gap-gutter">
                    <div class="glass-panel glass-edge rounded-2xl p-stack-md flex-1 flex flex-col justify-center relative overflow-hidden group">
                        <div class="absolute right-[-20%] top-[-20%] w-[150px] h-[150px] bg-tertiary/10 rounded-full blur-[40px] group-hover:bg-tertiary/20 transition-all duration-500"></div>
                        <div class="flex items-center gap-4 mb-2">
                            <span class="material-symbols-outlined text-tertiary text-[28px]" data-icon="location_on">location_on</span>
                            <h3 class="font-label-mono text-label-mono text-on-surface uppercase tracking-widest">Base of Operations</h3>
                        </div>
                        <p class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface mt-2">San Francisco, CA</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Available for remote engagements worldwide.</p>
                    </div>
                    <div class="glass-panel glass-edge rounded-2xl p-stack-md flex-1 flex flex-col justify-center relative overflow-hidden group">
                        <div class="absolute right-[-20%] bottom-[-20%] w-[150px] h-[150px] bg-primary/10 rounded-full blur-[40px] group-hover:bg-primary/20 transition-all duration-500"></div>
                        <div class="flex items-center gap-4 mb-2">
                            <span class="material-symbols-outlined text-primary text-[28px]" data-icon="terminal">terminal</span>
                            <h3 class="font-label-mono text-label-mono text-on-surface uppercase tracking-widest">Current Status</h3>
                        </div>
                        <div class="flex items-center gap-3 mt-2">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-primary"></span>
                            </span>
                            <p class="font-body-md text-body-md text-on-surface font-medium">Open to New Opportunities</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>

        <!-- Programming Journey (Timeline) -->
        <section class="flex flex-col gap-stack-lg relative">
            <div class="text-center md:text-left flex flex-col items-center md:items-start gap-2">
                <span class="font-label-mono text-label-mono text-primary uppercase tracking-widest">Evolution</span>
                <h2 class="font-headline-lg text-headline-lg md:text-headline-xl text-on-surface">The Journey</h2>
            </div>
            <div class="relative pl-6 md:pl-10">
                <!-- Vertical Line -->
                <div class="absolute left-[11px] md:left-[19px] top-2 bottom-2 w-[2px] bg-gradient-to-b from-primary via-secondary/50 to-transparent"></div>
                <div class="flex flex-col gap-stack-lg">
                    @if ($pengalamans->isNotEmpty())
                    
                        @foreach ($pengalamans as $index => $pengalaman)
                            
                            <!-- Timeline Item 1 -->
                            @if($index == 0)
                                <div class="relative group">
                                    <!-- Node Glow -->
                                    <div class="absolute left-[-29px] md:left-[-37px] top-1 w-4 h-4 rounded-full bg-background border-2 border-primary z-10 group-hover:shadow-[0_0_15px_rgba(0,64,224,0.3)] transition-all duration-300"></div>
                                    <div class="glass-panel glass-edge rounded-xl p-stack-md ml-4 hover:border-primary/30 transition-colors duration-300">
                                        <span class="font-label-mono text-label-mono text-primary mb-2 block">{{ $pengalaman->start_date->format('Y-m-d') }} - {{ $pengalaman->end_date ? $pengalaman->end_date->format('Y-m-d') : 'Present' }}</span>
                                        <h3 class="font-headline-lg-mobile md:text-headline-lg text-headline-sm-mobile text-on-surface mb-2">{{ $pengalaman?->position }}</h3>
                                        
                                            <div class="
                                                font-body-md
                                                text-body-sm
                                                md:text-body-md
                                               
                                                leading-6
                                                text-on-surface-variant
                                                space-y-4
                                                [&>p]:mb-2
                                                [&>h1]:text-3xl [&>h1]:font-bold [&>h1]:mt-8
                                                [&>h2]:text-2xl [&>h2]:font-semibold [&>h2]:mt-6
                                                [&>h3]:text-xl [&>h3]:font-semibold [&>h3]:mt-4
                                                [&>ul]:list-disc [&>ul]:ml-6
                                                [&>ol]:list-decimal [&>ol]:ml-6
                                                [&>blockquote]:border-l-4 [&>blockquote]:pl-4 [&>blockquote]:italic [&>blockquote]:text-gray-600
                                                [&>img]:rounded-xl [&>img]:my-4
                                            ">
                                                {!! str($pengalaman?->description)->markdown() !!}
                                            </div>
                                        
                                        <div class="flex flex-wrap gap-2 mt-stack-md">
                                            @foreach ($pengalaman?->technology as $tech)
                                                <span class="font-label-mono text-label-mono text-secondary px-3 py-1 rounded-full bg-secondary-container/50 border border-secondary/20">{{ $tech }}</span>
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                </div>
                            @elseif($loop->index == 1)

                                <!-- Timeline Item 2 -->
                                <div class="relative group">
                                    <div class="absolute left-[-29px] md:left-[-37px] top-1 w-4 h-4 rounded-full bg-background border-2 border-secondary z-10 group-hover:shadow-[0_0_15px_rgba(86,94,116,0.3)] transition-all duration-300"></div>
                                    <div class="glass-panel glass-edge rounded-xl p-stack-md ml-4 hover:border-secondary/30 transition-colors duration-300">
                                        <span class="font-label-mono text-label-mono text-secondary mb-2 block">{{ $pengalaman->start_date->format('Y-m-d') }} - {{ $pengalaman->end_date ? $pengalaman->end_date->format('Y-m-d') : 'Present' }}</span>
                                        <h3 class="font-headline-lg-mobile text-headline-sm-mobile md:text-headline-lg text-on-surface mb-2">{{ $pengalaman?->position }}</h3>
                                        <div class="
                                            font-body-md
                                            text-body-sm
                                            md:text-body-md
                                            
                                            leading-6
                                            text-on-surface-variant
                                            space-y-4
                                            [&>p]:mb-2
                                            [&>h1]:text-3xl [&>h1]:font-bold [&>h1]:mt-8
                                            [&>h2]:text-2xl [&>h2]:font-semibold [&>h2]:mt-6
                                            [&>h3]:text-xl [&>h3]:font-semibold [&>h3]:mt-4
                                            [&>ul]:list-disc [&>ul]:ml-6
                                            [&>ol]:list-decimal [&>ol]:ml-6
                                            [&>blockquote]:border-l-4 [&>blockquote]:pl-4 [&>blockquote]:italic [&>blockquote]:text-gray-600
                                            [&>img]:rounded-xl [&>img]:my-4
                                        ">
                                            {!! str($pengalaman?->description)->markdown() !!}
                                        </div>
                                        <div class="flex flex-wrap gap-2 mt-stack-md">
                                            @foreach ($pengalaman?->technology as $tech)
                                                <span class="font-label-mono text-label-mono text-secondary px-3 py-1 rounded-full bg-secondary-container/50 border border-secondary/20">{{ $tech }}</span>
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                </div>
                            @else

                                <!-- Timeline Item 3 -->
                                <div class="relative group">
                                <div class="absolute left-[-29px] md:left-[-37px] top-1 w-4 h-4 rounded-full bg-background border-2 border-outline-variant z-10 group-hover:border-tertiary transition-all duration-300"></div>
                                <div class="glass-panel glass-edge rounded-xl p-stack-md ml-4 opacity-80">
                                    <span class="font-label-mono text-label-mono text-outline mb-2 block">{{ $pengalaman->start_date->format('Y-m-d') }} - {{ $pengalaman->end_date ? $pengalaman->end_date->format('Y-m-d') : 'Present' }}</span>
                                    <h3 class="font-headline-lg-mobile md:text-headline-lg text-headline-sm-mobile text-on-surface mb-2">{{ $pengalaman?->position }}</h3>
                                    <div class="
                                        font-body-md
                                        text-body-sm
                                        md:text-body-md
                                        
                                        leading-6
                                        text-on-surface-variant
                                        space-y-4
                                        [&>p]:mb-2
                                        [&>h1]:text-3xl [&>h1]:font-bold [&>h1]:mt-8
                                        [&>h2]:text-2xl [&>h2]:font-semibold [&>h2]:mt-6
                                        [&>h3]:text-xl [&>h3]:font-semibold [&>h3]:mt-4
                                        [&>ul]:list-disc [&>ul]:ml-6
                                        [&>ol]:list-decimal [&>ol]:ml-6
                                        [&>blockquote]:border-l-4 [&>blockquote]:pl-4 [&>blockquote]:italic [&>blockquote]:text-gray-600
                                        [&>img]:rounded-xl [&>img]:my-4
                                    ">
                                        {!! str($pengalaman?->description)->markdown() !!}
                                    </div>
                                    <div class="flex flex-wrap gap-2 mt-stack-md">
                                        @foreach ($pengalaman?->technology as $tech)
                                            <span class="font-label-mono text-label-mono text-secondary px-3 py-1 rounded-full bg-secondary-container/50 border border-secondary/20">{{ $tech }}</span>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                            @endif

                            
                        @endforeach

                    @else
                       <div class="relative pl-6 md:pl-10"><div class="glass-panel glass-edge rounded-xl p-stack-lg flex flex-col items-center justify-center text-center gap-4">
                            <span class="material-symbols-outlined text-outline text-5xl">history</span>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface">Belum Ada Riwayat Perjalanan</h3>
                                <p class="font-body-md  md:text-body-md text-body-sm  text-center  text-on-surface-variant">
                                    Perjalanan profesional dan pencapaian akan segera hadir di sini.
                                </p>
                            </div>
                        </div>
                    @endif
                    
                    
                    
                </div>
            </div>
        </section>

        <!-- Education & Goals (Asymmetric Layout) -->
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-gutter">
            <!-- Education -->
            <div class="glass-panel glass-edge rounded-2xl p-stack-md md:p-stack-lg flex flex-col relative overflow-hidden group">
                <div class="absolute left-0 top-0 w-1 h-full bg-gradient-to-b from-secondary to-primary group-hover:w-2 transition-all duration-300"></div>
                <div class="flex items-center gap-3 mb-stack-md">
                    <span class="material-symbols-outlined text-secondary text-[32px]" data-icon="school">school</span>
                    <h2 class="font-headline-lg md:text-headline-lg text-headline-sm-mobile text-on-surface">Academic Foundation</h2>
                </div>
                <div class="flex flex-col gap-4">
                    @if ($pendidikans->isNotEmpty())
                            @foreach($pendidikans as $pendidikan)
                                <div class="border-b border-outline-variant/50 pb-4">
                                    <h3 class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface text-sm md:text-md">{{ $pendidikan->institution }}</h3>
                                    <p class="font-label-mono text-label-mono text-secondary mt-1">{{ $pendidikan->degree }} | {{ $pendidikan->start_year }} - {{ $pendidikan->end_year }}</p>
                                    <p class="font-label-mono text-label-mono text-on-surface-variant mt-2">Major {{ $pendidikan->major }}</p>
                                </div>
                            @endforeach


                    @else
                        <div class="border-b border-outline-variant/50 pb-4">
                            <h3 class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface text-sm md:text-md">Belum Ada Riwayat Pendidikan</h3>
                            <p class="font-label-mono text-label-mono text-secondary mt-1">Belum ada riwayat pendidikan</p>
                        </div>
                    @endif
                    
                    
                </div>
            </div>
            <!-- Career Goals -->
            <div class="glass-panel glass-edge rounded-2xl p-stack-md md:p-stack-lg flex flex-col justify-center relative overflow-hidden bg-gradient-to-br from-surface to-primary/5">
                <div class="absolute right-[-10%] bottom-[-10%] w-[200px] h-[200px] bg-primary/10 rounded-full blur-[60px]"></div>
                <div class="flex items-center gap-3 mb-stack-md relative z-10">
                    <span class="material-symbols-outlined text-primary text-[32px]" data-icon="rocket_launch">rocket_launch</span>
                    <h2 class="font-headline-lg-mobile text-headline-sm-mobile md:text-headline-lg-mobile md:font-headline-lg md:text-headline-lg text-on-surface">Future Trajectory</h2>
                </div>
                <p class=" md:font-body-md font-body-sm text-body-sm md:text-body-md text-on-surface-variant mb-6 relative z-10">
                    Tujuan saya saat ini adalah menjadi Full Stack Web Developer profesional yang mampu membangun aplikasi web modern, scalable, dan user friendly menggunakan Laravel dan teknologi frontend modern. 
                </p>
                <!-- <div class="grid grid-cols-2 gap-4 relative z-10">
                    <div class="glass-panel rounded-lg p-3 flex items-center gap-3 border border-black/5">
                        <span class="material-symbols-outlined text-tertiary" data-icon="architecture">architecture</span>
                        <span class="font-label-mono text-label-mono text-on-surface text-xs">System Design</span>
                    </div>
                    <div class="glass-panel rounded-lg p-3 flex items-center gap-3 border border-black/5">
                        <span class="material-symbols-outlined text-tertiary" data-icon="memory">memory</span>
                        <span class="font-label-mono text-label-mono text-on-surface text-xs">WebAssembly</span>
                    </div>
                </div> -->
            </div>

            
        </section>
    </main>
