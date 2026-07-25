<!-- Project Card 1 -->
<a wire:navigate class="contents" href="{{ route('project.detail', $project) }}">

<div class="glass-panel rounded-xl overflow-hidden group glow-effect hover:border-primary/30  transition-all duration-500 hover:-translate-y-2 ">
    <div class="relative h-48 w-full overflow-hidden bg-surface-container-high">
        @if($project?->image)
            <img alt="Project Thumbnail" class="w-full h-full object-cover opacity-90 group-hover:scale-105 group-hover:opacity-100 transition-all duration-500" src="{{ asset('storage/' . $project?->image->url) }}" />
        @else
            <img alt="Project Thumbnail" class="w-full h-full object-cover opacity-90 group-hover:scale-105 group-hover:opacity-100 transition-all duration-500" src="{{ asset('/fotokosong.png') }}" />
        @endif
        <div class="absolute inset-0 bg-gradient-to-t from-surface/80 to-transparent opacity-80"></div>
    </div>

    <div class="p-stack-md flex flex-col h-[calc(100%-12rem)]">
        <h3 class="font-headline-lg-mobile text-headline-sm-mobile text-on-surface mb-2">{{ $project?->title }}</h3>
        <p class="font-body-sm text-body-sm text-on-surface-variant mb-stack-md flex-grow">
            {{  substr($project?->description, 0, 100)  }}
        </p>

        <div class="flex flex-wrap gap-2 mb-stack-md">
            @foreach ($project->technology as $tech)
            <x-Tag.Tag :tech="$tech" />
            @endforeach
        </div>

        <div class="flex justify-between items-center pt-stack-sm border-t border-outline-variant/30">
            <a href="{{ $project->github_link }}" target="_blank" aria-label="View Source on GitHub" class="text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1 font-body-sm text-body-sm" href="#">
                <span class="material-symbols-outlined text-[20px]">code</span> Code
            </a>
            <a href="{{ $project->demo_link }}" target="_blank" class="bg-primary/10 text-primary border border-primary/20 px-4 py-2 rounded-lg font-label-mono text-label-mono hover:bg-primary hover:text-on-primary transition-all flex items-center gap-2" href="#">
                Live Demo <span class="material-symbols-outlined text-[16px]">open_in_new</span>
            </a>
        </div>
    </div>
</div>

</a>