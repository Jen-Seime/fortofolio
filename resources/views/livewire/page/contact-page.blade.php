 <!-- Main Content Canvas -->
<main class="relative z-10 pt-32 pb-section-gap max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
    <!-- Page Header -->
    <x-Header.Header title_first=" Initialize" title_least="Connection" description=" Whether you have a specific project outline or just want to explore possibilities, my inbox is open. Let's discuss architecture, code, and creating scalable digital experiences." />

   

    <!-- Bento Grid Layout for Contact Section -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
        <!-- Left Column: Context & Details (Col Span 5) -->
        <div class="lg:col-span-5 flex flex-col gap-gutter">
            <!-- Contact Info Card (Glass) -->
            <div class="bg-surface-container-lowest/80 backdrop-blur-[12px] border border-outline-variant/40 rounded-xl p-8 relative overflow-hidden group shadow-sm">
                <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <h3 class="font-label-mono text-label-mono text-primary mb-6 uppercase tracking-wider">Direct Access</h3>
                
                <div class="space-y-6 relative z-10">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0 border border-primary/20">
                            <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">mail</span>
                        </div>
                        <div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-1">Electronic Mail</p>
                            <a class="font-body-md text-body-md text-on-background hover:text-primary transition-colors" href="mailto:mailto:{{ $contact->email }}">{{ $contact->email  }}</a>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-tertiary/10 flex items-center justify-center shrink-0 border border-tertiary/20">
                            <span class="material-symbols-outlined text-tertiary" style="font-variation-settings: 'FILL' 1;">location_on</span>
                        </div>
                        <div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-1">Location</p>
                            <p class="font-body-md text-body-md text-on-background">
                                {{ $contact?->address }}<br />
                              
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Socials Card -->
            <div class="bg-surface-container-lowest/80 backdrop-blur-[12px] border border-outline-variant/40 rounded-xl p-8 shadow-sm">
                <h3 class="font-label-mono text-label-mono text-secondary mb-6 uppercase tracking-wider">Digital Footprint</h3>
                <div class="flex gap-4">
                    <a href="{{ $contact->github }}" class="flex-1 flex items-center justify-center gap-2 py-3 px-4 rounded-lg bg-surface-container-low/50 border border-outline-variant/50 hover:border-secondary hover:bg-secondary/5 transition-all group" href="#">
                        <span class="material-symbols-outlined text-on-surface-variant group-hover:text-secondary transition-colors">code</span>
                        <span class="font-body-sm text-body-sm text-on-surface group-hover:text-secondary transition-colors">GitHub</span>
                    </a>
                    <a href="{{ $contact->linkedin }}" class="flex-1 flex items-center justify-center gap-2 py-3 px-4 rounded-lg bg-surface-container-low/50 border border-outline-variant/50 hover:border-primary hover:bg-primary/5 transition-all group" href="#">
                        <span class="material-symbols-outlined text-on-surface-variant group-hover:text-primary transition-colors">work</span>
                        <span class="font-body-sm text-body-sm text-on-surface group-hover:text-primary transition-colors">LinkedIn</span>
                    </a>
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