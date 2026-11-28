@props(['name', 'label', 'type' => 'text', 'placeholder' => '', 'hint' => null])
{{-- Satu kolom isian lengkap dengan label, pesan error, dan petunjuk. --}}
<div class="pc-field">
    <label for="{{ $name }}">{{ $label }}</label>
    <input
        id="{{ $name }}"
        name="{{ $name }}"
        type="{{ $type }}"
        placeholder="{{ $placeholder }}"
        @if ($type !== 'password') value="{{ old($name) }}" @endif
        {{ $attributes->class(['is-invalid' => $errors->has($name)]) }}
        required
    >
    @error($name)
        <p class="pc-error" role="alert">{{ $message }}</p>
    @else
        @if ($hint)
            <small>{{ $hint }}</small>
        @endif
    @enderror
</div>
