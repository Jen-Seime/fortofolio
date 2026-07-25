 <!-- Main Content Canvas -->
<main class="relative z-10 pt-32 pb-section-gap max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
    <!-- Page Header -->
    <x-Header.Header title_first=" Initialize" title_least="Connection" description="Punya ide proyek yang udah jelas atau masih pengen ngobrolin kemungkinan-kemungkinan, kotak masuk gue selalu kebuka. Yuk bahas arsitektur, kode, sampai bikin pengalaman digital yang scalable." />

   

    <!-- Bento Grid Layout for Contact Section -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
        <!-- Left Column: Context & Details (Col Span 5) -->
        <div class="lg:col-span-5 flex flex-col gap-gutter">
            <!-- Contact Info Card (Glass) -->
            <div class="bg-surface-container-lowest/80 backdrop-blur-[12px] border border-outline-variant/40 rounded-xl p-8 relative overflow-hidden group shadow-sm">
                <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <h3 class="font-label-mono text-label-mono text-primary mb-6 uppercase tracking-wider">Direct Access</h3>
                
                <div class="space-y-4 relative z-10">
                    <a href="mailto:{{ $contact->email ?? '' }}"
                        class="group/item relative flex items-start gap-4 rounded-2xl border border-outline-variant/30 bg-surface-container-low/50 p-4 overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:border-primary/30 hover:bg-primary/5 hover:shadow-lg hover:shadow-primary/10">
                        <div class="absolute inset-y-0 left-0 w-1 bg-primary scale-y-0 origin-bottom transition-transform duration-300 group-hover/item:scale-y-100"></div>
                        <div class="w-11 h-11 rounded-xl bg-primary/10 flex items-center justify-center shrink-0 border border-primary/20 transition-all duration-300 group-hover/item:bg-primary group-hover/item:shadow-md group-hover/item:shadow-primary/25">
                            <span class="material-symbols-outlined text-primary transition-colors duration-300 group-hover/item:text-on-primary" style="font-variation-settings: 'FILL' 1;">mail</span>
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-1 transition-colors duration-300 group-hover/item:text-primary">Electronic Mail</p>
                            <p class="font-body-md text-body-md text-on-background break-all transition-colors duration-300 group-hover/item:text-primary">{{ $contact->email ?? '' }}</p>
                        </div>
                        
                    </a>
                    
                    <div class="group/item relative flex items-start gap-4 rounded-2xl border border-outline-variant/30 bg-surface-container-low/50 p-4 overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:border-tertiary/30 hover:bg-tertiary/5 hover:shadow-lg hover:shadow-tertiary/10">
                        <div class="absolute inset-y-0 left-0 w-1 bg-tertiary scale-y-0 origin-bottom transition-transform duration-300 group-hover/item:scale-y-100"></div>
                        <div class="w-11 h-11 rounded-xl bg-tertiary/10 flex items-center justify-center shrink-0 border border-tertiary/20 transition-all duration-300 group-hover/item:bg-tertiary group-hover/item:shadow-md group-hover/item:shadow-tertiary/25">
                            <span class="material-symbols-outlined text-tertiary transition-colors duration-300 group-hover/item:text-on-tertiary" style="font-variation-settings: 'FILL' 1;">location_on</span>
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-1 transition-colors duration-300 group-hover/item:text-tertiary">Location</p>
                            <p class="font-body-md text-body-md text-on-background transition-colors duration-300 group-hover/item:text-tertiary">
                                {{ $contact?->address }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Socials Card -->
            <div class="bg-surface-container-lowest/80 backdrop-blur-[12px] border border-outline-variant/40 rounded-xl p-8 shadow-sm">
                <h3 class="font-label-mono text-label-mono text-secondary mb-6 uppercase tracking-wider">Digital Footprint</h3>
                <div class="flex items-center gap-4 mt-6 hero-fade-in" style="--delay: 0.65s">
                    <span class="w-8 h-px bg-outline-variant/40"></span>
                    @if($contact?->github)
                    <a href="{{ $contact->github }}" target="_blank"
                        class="w-10 h-10 rounded-xl bg-surface-container hover:bg-primary/10 border border-outline-variant/20 flex items-center justify-center text-on-surface-variant hover:text-primary transition-all duration-300 hover:-translate-y-1">
                        <i class="fa-brands fa-github text-[18px]"></i>
                    </a>
                    @endif
                    @if($contact?->linkedin)
                    <a href="{{ $contact->linkedin }}" target="_blank"
                        class="w-10 h-10 rounded-xl bg-surface-container hover:bg-primary/10 border border-outline-variant/20 flex items-center justify-center text-on-surface-variant hover:text-primary transition-all duration-300 hover:-translate-y-1">
                        <i class="fa-brands fa-linkedin-in text-[18px]"></i>
                    </a>
                    @endif
                    @if($contact?->instagram)
                    <a href="{{ $contact->instagram }}" target="_blank"
                        class="w-10 h-10 rounded-xl bg-surface-container hover:bg-primary/10 border border-outline-variant/20 flex items-center justify-center text-on-surface-variant hover:text-primary transition-all duration-300 hover:-translate-y-1">
                        <i class="fa-brands fa-instagram text-[18px]"></i>
                    </a>
                    @endif
                    @if($contact?->email)
                    <a href="mailto:{{ $contact->email }}"
                        class="w-10 h-10 rounded-xl bg-surface-container hover:bg-primary/10 border border-outline-variant/20 flex items-center justify-center text-on-surface-variant hover:text-primary transition-all duration-300 hover:-translate-y-1">
                        <span class="material-symbols-outlined text-[18px]">mail</span>
                    </a>
                    @endif
                </div>
            </div>

            <!-- Map Visual Placeholder -->
            <!-- <div class="h-48 rounded-xl border border-outline-variant/50 overflow-hidden relative group bg-surface-container" data-alt="A stylized map view of San Francisco" data-location="San Francisco, CA" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD3xmpj9sxrzUrmuD9AZLE7nMfrBB7hnufNews5ehraMDoZlSW4QrkxO8wScAoDh8aRMhtePSHH5hmj5Dnronx1VmZL_Qa6Q1gzAUe8X7mDTShzU7r00BHPOkxjHSaikeShbVxD2DNkGQhr3LEnMMrt34iXsDxufQqbu0QttQ0tfxc768p10OnxrCtnX_yESnJ6psZGf5K6p4RNxyctz6c95zCZxA8zw9QFUURuWeouvLtuMRwCqBW3lm9uQQBsVC4IL1Qrt3aXjwkN'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-background/40 backdrop-blur-[2px] group-hover:backdrop-blur-0 transition-all duration-700"></div>
                <div class="absolute inset-0 border border-white/20 rounded-xl pointer-events-none"></div>
                
               
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex flex-col items-center">
                    <div class="w-4 h-4 bg-primary rounded-full shadow-[0_0_15px_rgba(0,64,224,0.6)] animate-pulse"></div>
                </div>
            </div> -->
        </div>

        <!-- Right Column: The Form (Col Span 7) -->
        <div class="lg:col-span-7 relative">
            @if(session()->has('success'))
                <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" x-transition.opacity.duration.500ms class="fixed bottom-6 left-6 z-50 bg-tertiary-fixed border border-tertiary/30 rounded-lg p-4 flex items-start gap-3 backdrop-blur-md shadow-lg max-w-md">
                    <span class="material-symbols-outlined text-tertiary mt-0.5">check_circle</span>
                    <div>
                        <h4 class="font-label-mono text-label-mono text-tertiary mb-1">Transmission Successful</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">{{ session()->get('success') }}</p>
                    </div>
                </div>
            @endif
            @if(session()->has('error'))
                <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" x-transition.opacity.duration.500ms class="fixed bottom-6 left-6 z-50 bg-red-100/90 border border-red-300 rounded-lg p-4 flex items-start gap-3 backdrop-blur-md shadow-lg max-w-md">
                    <span class="material-symbols-outlined text-red-600 mt-0.5">error</span>
                    <div>
                        <h4 class="font-label-mono text-label-mono text-red-600 mb-1">Transmission Failed</h4>
                        <p class="font-body-sm text-body-sm text-red-800">{{ session()->get('error') }}</p>
                    </div>
                </div>
            @endif
            
            <!-- Form Container (Glass) -->
            <div class="bg-surface-container-lowest/80 backdrop-blur-[16px] border border-outline-variant/40 rounded-xl p-8 md:p-10 shadow-lg relative">
                <!-- Subtle top edge highlight -->
                <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-primary/20 to-transparent"></div>
                
                <form wire:submit.prevent="kirimPesan" class="space-y-6 relative z-10">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                       
                        <!-- Name Input -->
                        <x-Input.Input 
                            wire:model="kontak.name"
                            title="Identifier (Name)"
                            name="kontak.name"
                            placeholder="Enter Your Name"
                            type="text"
                        />

                        <!-- Email Input -->
                        <x-Input.Input 
                            wire:model="kontak.email"
                            title="Return Address (Email)"
                            name="kontak.email"
                            placeholder="[EMAIL_ADDRESS]"
                            type="email"
                        />
                    </div>
                    
                    <!-- Subject Input -->
                    <x-Input.Input 
                        wire:model="kontak.subject"
                        title="Subject Directive"
                        name="kontak.subject"
                        placeholder="Project Inquiry: Front-End Architecture"
                        type="text"
                    />
                     
                   
                    
                    <!-- Message Input -->
                    <x-TextArea.TextArea 
                        wire:model="kontak.message"
                        title="Payload (Message)"
                        name="kontak.message"
                        placeholder="Detail your project requirements here..."
                    />
                   
                    
                    <!-- Submit Action -->

                    <div class="pt-4 flex justify-end">
                        
                        <x-button.button title="Execute Send" icon="send" type="submit"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>