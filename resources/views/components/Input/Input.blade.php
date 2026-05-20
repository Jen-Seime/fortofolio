@props([
    'name' => '',
    'type' => 'text',
    'placeholder' => '',
    'title' => ''
])
<div class="space-y-2">
    <label class="font-label-mono text-label-mono text-on-surface block" for="{{ $name }}">{{ $title }}</label>
    <input {{ $attributes->merge([
        'id' => $name,
        'name' => $name,
        'type' => $type,
        'placeholder' => $placeholder,
        'class' => 'w-full bg-surface/50 border border-outline-variant/60 rounded-lg px-4 py-3 font-body-md text-body-md text-on-surface placeholder:text-outline focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all'
    ]) }} />

    @error($name)
        <span class="text-red-500 font-label-mono text-sm">{{ $message }}</span>
    @enderror
</div>