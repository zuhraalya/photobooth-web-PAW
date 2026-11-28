@props(['blue' => false])
{{-- Strip foto 3 slot. Pakai: <x-postal.strip /> (cokelat) atau <x-postal.strip blue /> --}}
<div class="pc-strip {{ $blue ? 'pc-strip--blue' : 'pc-strip--brown' }}" aria-hidden="true">
    <span class="pc-strip__brand">Postal Club</span>
    <div class="pc-strip__slot"></div>
    <div class="pc-strip__slot"></div>
    <div class="pc-strip__slot"></div>
    <span class="pc-strip__sign">XoxO,</span>
    <span class="pc-strip__date">10/11/2026</span>
</div>
