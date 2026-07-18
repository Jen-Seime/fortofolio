<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="icon" type="image/png" href="{{ asset('fotokosong.png') }}">

    <!-- Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- JetBrains Mono -->
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100..800&display=swap" rel="stylesheet">

    <!-- Space Grotesk -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Material Symbols -->
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

    
    <script src="https://unpkg.com/typeit@8.8.7/dist/index.umd.js"></script>


</head>

<body class="bg-background text-on-background min-h-screen relative overflow-x-hidden font-body-md text-body-md">
    <!-- Background Glows -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none -z-10" aria-hidden="true">
        <div class="radial-glow top-0 left-0 -translate-x-1/2 -translate-y-1/2"></div>
        <div class="radial-glow bottom-0 right-0 translate-x-1/2 translate-y-1/2" style="background: radial-gradient(circle, rgba(0, 64, 224, 0.05) 0%, rgba(249, 249, 249, 0) 70%);"></div>
    </div>

    <!-- Global Background Glow -->
    <div class="fixed inset-0 pointer-events-none z-[-1]">
        <div class="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] rounded-full bg-primary/10 blur-[120px]"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[50%] h-[50%] rounded-full bg-secondary/10 blur-[120px]"></div>
    </div>

    <x-layouts.navigasi />


   


    {{ $slot }}
    <x-layouts.footer />

    <script>
        function homeAnimations() {
            return {
                init() {
                    // Intersection Observer for scroll-triggered reveals
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                // Reveal all children with staggered delays
                                entry.target.querySelectorAll('.scroll-reveal-item').forEach(item => {
                                    item.classList.add('is-visible');
                                });
                            }
                        });
                    }, {
                        threshold: 0.15,
                        rootMargin: '0px 0px -50px 0px'
                    });

                    document.querySelectorAll('.scroll-reveal').forEach(section => {
                        observer.observe(section);
                    });
                }
            }
        }

        function counter(target) {
            return {
                display: 0,
                init() {
                    const duration = 2000;
                    const start = performance.now();

                    const step = (timestamp) => {
                        const progress = Math.min((timestamp - start) / duration, 1);
                        // Ease out cubic
                        const eased = 1 - Math.pow(1 - progress, 3);
                        this.display = Math.floor(eased * target);
                        if (progress < 1) {
                            requestAnimationFrame(step);
                        }
                    };

                    // Start counting when element is visible
                    const observer = new IntersectionObserver((entries) => {
                        if (entries[0].isIntersecting) {
                            requestAnimationFrame(step);
                            observer.disconnect();
                        }
                    }, {
                        threshold: 0.5
                    });

                    observer.observe(this.$el);
                }
            }
        }

        
    </script>

    
</body>

</html>