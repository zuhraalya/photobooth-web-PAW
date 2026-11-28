<x-postal-layout title="Log in">
    {{-- Kartu ilustrasi (hiasan) --}}
    <section class="pc-letter pc-letter--login" aria-hidden="true">
        <div class="pc-airmail"></div>
        <p class="pc-eyebrow">Sent with love, from Postal Club</p>
        <p class="pc-letter-title">Wish you were here.</p>
        <div class="pc-strips">
            <x-postal.strip />
            <x-postal.strip blue />
        </div>
        <img class="pc-postmark--login" src="{{ asset('images/postal/postmark.png') }}" alt="">
        <p class="pc-handwritten">Good to have you back.</p>
        <div class="pc-airmail pc-airmail--bottom"></div>
    </section>

    {{-- Form --}}
    <section class="pc-auth">
        <a href="{{ url('/') }}" class="pc-back">←&nbsp;&nbsp;Back to the booth</a>

        <div class="pc-heading">
            <p class="pc-eyebrow">Members’ correspondence</p>
            <h1>Welcome back.</h1>
            <p>A familiar face. A fresh little memory.<br>Log in and pick up where you left off.</p>
        </div>

        @if (session('status'))
            <p class="pc-status" role="status">{{ session('status') }}</p>
        @endif

        <form method="POST" action="{{ route('login') }}" class="pc-form">
            @csrf
            <div class="pc-fields">
                <x-postal.field name="email" label="Email address" type="email" placeholder="you@example.com" autofocus autocomplete="username" />
                <x-postal.field name="password" label="Password" type="password" placeholder="Enter your password" autocomplete="current-password" />
            </div>
            <button class="pc-submit" type="submit">Log in</button>
        </form>

        <p class="pc-switch">New around here? <a href="{{ route('register') }}">Create an account</a></p>
    </section>
</x-postal-layout>
