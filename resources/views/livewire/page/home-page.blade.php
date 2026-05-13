 <!-- Main Content -->
<main class="pt-32 pb-section-gap max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
    <!-- Hero Section -->
    <section class="min-h-[819px] flex flex-col justify-center relative">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center">
            <!-- Text Content -->
            <div class="lg:col-span-7 flex flex-col gap-stack-md z-10">
                <div class="inline-block w-fit bg-surface-container border border-outline-variant/30 rounded-full px-4 py-1.5 mb-2 glass-card">
                    <span class="font-label-mono text-label-mono text-primary">Hello, World.</span>
                </div>

                <h1 class="font-headline-xl text-headline-xl text-on-surface">
                    I'm Alex Mercer<br />
                    <span class="text-primary">IT Student &amp; Web Developer</span><span class="animate-pulse">|</span>
                </h1>

                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-4">
                    Crafting high-performance, future-proof digital experiences. Specializing in modern web architectures, scalable front-end systems, and pixel-perfect UI engineering with a focus on deep technical precision.
                </p>

                <div class="flex flex-wrap gap-stack-sm mt-8">
                    <button class="bg-primary text-on-primary font-label-mono text-label-mono px-8 py-4 rounded-lg glow-button flex items-center gap-2">
                        View Projects <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </button>
                    <button class="bg-transparent border border-outline-variant text-on-surface font-label-mono text-label-mono px-8 py-4 rounded-lg hover:bg-surface-variant transition-colors glass-card flex items-center gap-2">
                        Download CV <span class="material-symbols-outlined text-[18px]">download</span>
                    </button>
                </div>

                <!-- Socials -->
                <div class="flex gap-4 mt-8 pt-4 border-t border-outline-variant/30 w-fit">
                    <a class="text-on-surface-variant hover:text-primary transition-colors" href="#">
                        <span class="material-symbols-outlined">code</span>
                    </a>
                    <a class="text-on-surface-variant hover:text-secondary transition-colors" href="#">
                        <span class="material-symbols-outlined">link</span>
                    </a>
                    <a class="text-on-surface-variant hover:text-tertiary transition-colors" href="#">
                        <span class="material-symbols-outlined">mail</span>
                    </a>
                </div>
            </div>

            <!-- Image/Visuals -->
            <div class="lg:col-span-5 relative order-first lg:order-last mb-12 lg:mb-0 flex justify-center lg:block">
                <!-- Decorative element behind image -->
                <div class="absolute inset-0 bg-gradient-to-tr from-primary/10 to-secondary/10 rounded-full lg:rounded-xl blur-3xl -z-10"></div>
                <div class="glass-card p-2 rounded-full lg:rounded-xl relative overflow-hidden group w-64 h-64 lg:w-full lg:h-auto">
                    <!-- Abstract Tech Image Placeholder -->
                    <div class="w-full h-full lg:h-[500px] bg-surface-container-high rounded-full lg:rounded-lg overflow-hidden relative">
                        <img alt="Professional web developer working in a futuristic coding environment" class="w-full h-full object-cover opacity-90 transition-all duration-500" data-alt="A cinematic, high-contrast portrait of a modern web development workspace. The scene features glowing screens displaying lines of code in a sleek, glassmorphic IDE interface, set against a deep charcoal black background. Neon blue and soft violet ambient light washes over a minimalist mechanical keyboard. The mood is highly technical, precise, and sophisticated, perfectly aligned with a premium, future-proof engineering aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHaKObPHASFL-Kzp6SUNc-8XS3S61ONlIsTAALi8GKp3ddJmgJskNf1dnvvB6DBVvZf2vr6lsc7ll6iXA3QaK5_VXoLEwDsfLEqxBmS5cbUyD7zgP82LMOhs5TKp9j0GxkaWXgIBfJ0bd5B6MqLwuZ9SzeVkjSHXk0SUkAslNPCY8PKke_5emFDCKtx353VUBkHlwMNczk4C5Iu0rmqbygVbVZ9dI9NKAr9u1ppy2-P5YniIjgHpnB7JZk9oed-4AShmtwrPBg3A_E" />
                        <!-- overlay gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent"></div>
                    </div>

                    <!-- Floating Tech Chips -->
                    <div class="absolute bottom-6 left-6 hidden lg:flex flex-wrap gap-2">
                        <span class="font-label-mono text-label-mono text-on-surface bg-surface/90 backdrop-blur border border-outline-variant/50 px-3 py-1 rounded shadow-sm">React</span>
                        <span class="font-label-mono text-label-mono text-on-surface bg-surface/90 backdrop-blur border border-outline-variant/50 px-3 py-1 rounded shadow-sm">TypeScript</span>
                        <span class="font-label-mono text-label-mono text-on-surface bg-surface/90 backdrop-blur border border-outline-variant/50 px-3 py-1 rounded shadow-sm">Node.js</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
