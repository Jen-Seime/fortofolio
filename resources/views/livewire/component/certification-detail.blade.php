<main class="flex-grow max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop w-full py-24 md:py-32">
    <div class="max-w-4xl mx-auto">

        <!-- Breadcrumb -->
        <div class="mb-8 flex items-center gap-2 text-secondary font-body-sm text-body-sm">
            <a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('certification') }}" wire:navigate>
                <span class="material-symbols-outlined text-[16px]">arrow_back</span>
                Back to Credentials
            </a>
        </div>

        <!-- Credential Card -->
        <div class="bg-surface-container-lowest border border-outline-variant rounded-xl shadow-[0_10px_30px_rgba(0,0,0,0.04)] overflow-hidden transition-all duration-300 hover:border-primary-container/30 relative">
            <!-- Decorative Top Bar -->
            <div class="h-2 w-full bg-primary-container"></div>

            <div class="p-8 md:p-12">

                <!-- Header Section -->
                <div class="flex flex-col md:flex-row gap-8 items-start mb-10 border-b border-surface-variant pb-10">
                    <!-- Icon Placeholder -->
                    <div class="w-24 h-24 rounded-lg bg-surface-container flex items-center justify-center shrink-0 border border-outline-variant relative overflow-hidden">
                        @if($certification->issuerLogo)
                        <img alt="{{ $certification->issuer }} Logo" class="w-full h-full object-cover" src="{{ asset('storage/' . $certification->issuerLogo->url) }}" />
                        @else
                        <span class="material-symbols-outlined text-[48px] text-outline-variant">workspace_premium</span>
                        @endif
                    </div>

                    <div class="flex-col flex gap-2">
                        <h1 class="font-headline-lg-mobile text-headline-lg-mobile md:font-headline-lg md:text-headline-lg text-on-surface">
                            {{ $certification->title }}
                        </h1>
                        <p class="font-body-md text-body-md text-secondary flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">verified</span>
                            {{ $certification->issuer }}
                        </p>
                    </div>
                </div>

                <!-- Details Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                    <div class="flex flex-col gap-1">
                        <span class="font-label-mono text-label-mono text-outline uppercase tracking-wider">Issue Date</span>
                        <span class="font-body-md text-body-md text-on-surface">{{ $certification->issue_date->format('F Y') }}</span>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="font-label-mono text-label-mono text-outline uppercase tracking-wider">Credential ID</span>
                        <span class="font-label-mono text-label-mono text-on-surface bg-surface-container-low px-2 py-1 rounded inline-block w-fit">{{ $certification->credential_id }}</span>
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-10">
                    <h2 class="font-body-sm text-body-sm text-outline uppercase tracking-wider mb-3 font-semibold">About the Certification</h2>
                    <p class="font-body-md text-[15px] text-on-surface-variant leading-relaxed">
                        {!! $certification->description !!}
                    </p>
                </div>

                <!-- Skills Covered -->
                <div class="mb-12">
                    <h2 class="font-body-sm text-body-sm text-outline uppercase tracking-wider mb-4 font-semibold">Skills Covered</h2>
                    <div class="flex flex-wrap gap-3">
                        @foreach ($certification->skills_covered as $skill)
                        <span class="bg-surface-container-low text-secondary font-label-mono text-label-mono px-3 py-1.5 rounded border border-outline-variant">{{ $skill }}</span>
                        @endforeach
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-surface-variant">
                    @if($certification->verification_url)
                    <a href="{{ $certification->verification_url }}" target="_blank" class="bg-primary-container text-on-primary font-body-md text-body-md px-6 py-3 rounded-lg hover:-translate-y-0.5 transition-transform flex items-center justify-center gap-2 flex-1 sm:flex-none">
                        <span class="material-symbols-outlined">workspace_premium</span>
                        Verify Credential
                    </a>
                    @endif
                    @if($certification->pdfFile)
                    <a href="{{ asset('storage/' . $certification->pdfFile->url) }}" target="_blank" class="bg-surface-container-lowest border border-outline-variant text-on-surface font-body-md text-body-md px-6 py-3 rounded-lg hover:border-primary transition-colors flex items-center justify-center gap-2 flex-1 sm:flex-none">
                        <span class="material-symbols-outlined">download</span>
                        Download PDF
                    </a>
                    @endif
                </div>

            </div>
        </div>



    </div>
</main>