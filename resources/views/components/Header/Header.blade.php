@props([
'title_first' => '',
'title_least' => '',
'description' => '',
'class' => ''

])
<div class="mb-stack-lg text-center md:text-left {{ $class }}">
    <h1 class="font-headline-xl font-bold text-[clamp(28px,5vw,44px)] text-on-surface mb-stack-sm skill-fade-in" style="--delay: 0.1s">{{ $title_first }}
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-tertiary">{{ $title_least }}</span>.
    </h1>

    <p class="font-body-md text-[15px] text-on-surface-variant max-w-2xl skill-fade-in" style="--delay: 0.2s">{{ $description }}</p>
</div>