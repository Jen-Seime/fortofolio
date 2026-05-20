<!-- Header / Navigation -->
<header x-data="{ mobileMenuOpen: false }" class="fixed top-0 w-full z-50">
    <!-- Glassmorphism Nav Bar -->
    <div class="bg-surface/70 backdrop-blur-2xl border-b border-outline-variant/20 shadow-[0_1px_3px_rgba(0,0,0,0.05)]">
        <div class="flex justify-between items-center max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop h-16">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                <div class="w-8 h-8 rounded-lg bg-primary flex items-center justify-center shadow-md group-hover:shadow-primary/30 transition-all duration-300 group-hover:scale-105">
                    <span class="text-on-primary font-bold text-sm">D</span>
                </div>
                <span class="font-headline-lg text-[20px] font-bold text-on-surface tracking-tight">
                    Dev<span class="text-primary">Portfolio</span>
                </span>
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center gap-1">
                @php
                    $desktopLinks = [
                        ['route' => 'home', 'label' => 'Home'],
                        ['route' => 'about', 'label' => 'About'],
                        ['route' => 'skill', 'label' => 'Skills'],
                        ['route' => 'project', 'label' => 'Project'],
                        ['route' => 'certification', 'label' => 'Certification'],
                        ['route' => 'contact', 'label' => 'contact']
                       
                    ];
                @endphp
                @foreach($desktopLinks as $link)
                    <a href="{{ Route::has($link['route']) ? route($link['route']) : $link['route'] }}"
                        wire:navigate
                       class="relative px-4 py-2 rounded-full text-[14px] font-medium transition-all duration-300
                              {{ Route::is($link['route'])
                                  ? 'text-primary bg-primary/8'
                                  : 'text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high' }}">
                        {{ $link['label'] }}
                        @if(Route::is($link['route']))
                            <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-4 h-[2px] bg-primary rounded-full"></span>
                        @endif
                    </a>
                @endforeach
               
            </nav>

            <!-- Desktop CTA -->
            <a href="#"
               class="hidden md:flex items-center gap-2 bg-primary text-on-primary font-medium text-[13px] px-5 py-2.5 rounded-full shadow-md hover:shadow-lg hover:shadow-primary/20 active:scale-[0.97] transition-all duration-300">
                <span>Hire Me</span>
                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
            </a>

            <!-- Mobile Menu Toggle (Animated Hamburger) -->
            <button @click="mobileMenuOpen = !mobileMenuOpen"
                    class="md:hidden relative w-10 h-10 flex items-center justify-center rounded-xl hover:bg-surface-container-high active:scale-90 transition-all duration-200"
                    aria-label="Toggle menu">
                <div class="w-5 h-4 flex flex-col justify-between">
                    <span class="block h-[2px] w-full bg-on-surface rounded-full transition-all duration-300 origin-center"
                          :class="mobileMenuOpen ? 'rotate-45 translate-y-[7px]' : ''"></span>
                    <span class="block h-[2px] w-full bg-on-surface rounded-full transition-all duration-300"
                          :class="mobileMenuOpen ? 'opacity-0 scale-x-0' : ''"></span>
                    <span class="block h-[2px] w-full bg-on-surface rounded-full transition-all duration-300 origin-center"
                          :class="mobileMenuOpen ? '-rotate-45 -translate-y-[7px]' : ''"></span>
                </div>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div x-show="mobileMenuOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="mobileMenuOpen = false"
         class="fixed inset-0 bg-on-surface/40 backdrop-blur-sm z-[60] md:hidden"
         style="display: none;">
    </div>

    <!-- Mobile Menu Drawer -->
    <div x-show="mobileMenuOpen"
         x-transition:enter="transition ease-[cubic-bezier(0.16,1,0.3,1)] duration-500 transform"
         x-transition:enter-start="translate-x-full"
         x-transition:enter-end="translate-x-0"
         x-transition:leave="transition ease-in duration-300 transform"
         x-transition:leave-start="translate-x-0"
         x-transition:leave-end="translate-x-full"
         class="fixed right-0 top-0 h-full w-[80%] max-w-[320px] bg-surface/95 backdrop-blur-2xl shadow-[-8px_0_30px_rgba(0,0,0,0.1)] z-[70] md:hidden flex flex-col"
         style="display: none;">

        <!-- Drawer Header -->
        <div class="flex items-center justify-between px-6 py-5 border-b border-outline-variant/15">
            <div class="flex items-center gap-2">
                <div class="w-7 h-7 rounded-lg bg-primary flex items-center justify-center">
                    <span class="text-on-primary font-bold text-xs">D</span>
                </div>
                <span class="font-headline-lg text-[16px] font-semibold text-on-surface">
                    Dev<span class="text-primary">Portfolio</span>
                </span>
            </div>
            <button @click="mobileMenuOpen = false"
                    class="w-9 h-9 flex items-center justify-center rounded-xl bg-surface-container hover:bg-surface-container-high transition-colors duration-200">
                <span class="material-symbols-outlined text-[20px] text-on-surface-variant">close</span>
            </button>
        </div>

        <!-- Drawer Navigation -->
        <nav class="flex-1 overflow-y-auto px-4 py-6">
            <p class="text-[11px] font-semibold uppercase tracking-wider text-on-surface-variant/60 px-3 mb-3">Menu</p>

            @php
                $mobileLinks = [
                    ['route' => 'home', 'icon' => 'home', 'label' => 'Home', 'desc' => 'Halaman utama'],
                    ['route' => 'about', 'icon' => 'person', 'label' => 'About', 'desc' => 'Tentang saya'],
                    ['route' => 'skill', 'icon' => 'code', 'label' => 'Skills', 'desc' => 'Kemampuan teknis'],
                  
                   
                ];
            @endphp

            <div class="space-y-1">
                @foreach($mobileLinks as $index => $link)
                    <a href="{{ Route::has($link['route']) ? route($link['route']) : $link['route'] }}"
                       @click="mobileMenuOpen = false"
                       class="group flex items-center gap-3.5 px-3 py-3 rounded-2xl transition-all duration-300
                              {{ Route::is($link['route'])
                                  ? 'bg-primary/8 text-primary'
                                  : 'text-on-surface hover:bg-surface-container-high' }}"
                       style="animation: slideInRight 0.4s ease-out {{ ($index + 1) * 0.06 }}s both;">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center transition-all duration-300
                                    {{ Route::is($link['route'])
                                        ? 'bg-primary/15 text-primary'
                                        : 'bg-surface-container text-on-surface-variant group-hover:bg-primary/10 group-hover:text-primary' }}">
                            <span class="material-symbols-outlined text-[20px]">{{ $link['icon'] }}</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-[14px] font-semibold leading-tight">{{ $link['label'] }}</p>
                            <p class="text-[11px] text-on-surface-variant/60 leading-tight mt-0.5">{{ $link['desc'] }}</p>
                        </div>
                        @if(Route::is($link['route']))
                            <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                        @else
                            <span class="material-symbols-outlined text-[16px] text-on-surface-variant/30 group-hover:text-on-surface-variant/60 transition-all duration-300 group-hover:translate-x-0.5">chevron_right</span>
                        @endif
                    </a>
                @endforeach
            </div>

            <div class="my-5 mx-3 h-px bg-outline-variant/15"></div>

            <p class="text-[11px] font-semibold uppercase tracking-wider text-on-surface-variant/60 px-3 mb-3">More</p>

            <div class="space-y-1">
                @php
                    $moreLinks = [
                        ['route' => 'project', 'icon' => 'work', 'label' => 'Projects', 'desc' => 'Karya & proyek'],
                        ['route' => 'certification', 'icon' => 'license', 'label' => 'Certification', 'desc' => 'Sertifikasi yang telah diperoleh'],
                        ['route' => '#', 'icon' => 'article', 'label' => 'Blog', 'desc' => 'Tulisan & artikel'],
                        ['route' => 'contact', 'icon' => 'mail', 'label' => 'Contact', 'desc' => 'Hubungi saya'],
                    ];
                @endphp
                @foreach($moreLinks as $index => $link)
                    <a href="{{ Route::has($link['route']) ? route($link['route']) : $link['route'] }}"
                        wire:navigate
                       @click="mobileMenuOpen = false"
                       class="group flex items-center gap-3.5 px-3 py-3 rounded-2xl text-on-surface hover:bg-surface-container-high transition-all duration-300"
                       style="animation: slideInRight 0.4s ease-out {{ ($index + 4) * 0.06 }}s both;">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center bg-surface-container text-on-surface-variant group-hover:bg-primary/10 group-hover:text-primary transition-all duration-300">
                            <span class="material-symbols-outlined text-[20px]">{{ $link['icon'] }}</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-[14px] font-semibold leading-tight">{{ $link['label'] }}</p>
                            <p class="text-[11px] text-on-surface-variant/60 leading-tight mt-0.5">{{ $link['desc'] }}</p>
                        </div>
                        <span class="material-symbols-outlined text-[16px] text-on-surface-variant/30 group-hover:text-on-surface-variant/60 transition-all duration-300 group-hover:translate-x-0.5">chevron_right</span>
                    </a>
                @endforeach
            </div>
        </nav>

        <!-- Drawer Footer -->
        <div class="px-4 pb-6 pt-2">
            <a href="#"
               class="flex items-center justify-center gap-2 w-full bg-primary text-on-primary font-semibold text-[14px] px-6 py-3.5 rounded-2xl shadow-lg shadow-primary/20 hover:shadow-xl hover:shadow-primary/30 active:scale-[0.97] transition-all duration-300">
                <span>Hire Me</span>
                <span class="material-symbols-outlined text-[18px]">send</span>
            </a>

            <!-- Social Links -->
            <div class="flex items-center justify-center gap-3 mt-4">
                <a href="#" class="w-9 h-9 rounded-xl bg-surface-container hover:bg-surface-container-high flex items-center justify-center text-on-surface-variant hover:text-primary transition-all duration-300">
                    <i class="fa-brands fa-github text-[16px]"></i>
                </a>
                <a href="#" class="w-9 h-9 rounded-xl bg-surface-container hover:bg-surface-container-high flex items-center justify-center text-on-surface-variant hover:text-primary transition-all duration-300">
                    <i class="fa-brands fa-linkedin-in text-[16px]"></i>
                </a>
                <a href="#" class="w-9 h-9 rounded-xl bg-surface-container hover:bg-surface-container-high flex items-center justify-center text-on-surface-variant hover:text-primary transition-all duration-300">
                    <i class="fa-brands fa-instagram text-[16px]"></i>
                </a>
            </div>
        </div>
    </div>
</header>

<style>
    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>
