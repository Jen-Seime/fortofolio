<!-- Main Content -->
    <main class="pt-32 pb-section-gap max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
        <!-- Page Header -->
        <div class="mb-stack-lg text-center md:text-left">
            <h1 class="font-headline-xl text-[clamp(28px,5vw,44px)] text-on-surface mb-stack-sm">Certifications</h1>
            <p class="font-body-md text-[15px] text-on-surface-variant max-w-2xl">A curated collection of professional credentials, demonstrating a commitment to continuous learning and mastery of modern web technologies.</p>
        </div>

        <!-- Certificates Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
            @foreach ($certifications as $certification)
                <x-CardCertification.CardCertification :certification="$certification" />
            @endforeach

            {{ $certifications->links() }}
        </div>
    </main>