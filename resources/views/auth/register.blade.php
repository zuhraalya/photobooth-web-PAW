<x-postal-layout title="Join the club">
    {{-- Kartu ilustrasi (hiasan) --}}
    <section class="pc-letter pc-letter--register" aria-hidden="true">
        <p class="pc-eyebrow">A place for your little memories</p>
        <p class="pc-letter-title">Consider this<br>your invitation.</p>

        <div class="pc-postcard">
            <img class="pc-paper" src="{{ asset('images/postal/paper.jpg') }}" alt="">

            <div class="pc-postcard-strip"><x-postal.strip /></div>

            <img class="pc-postmark pc-postmark--1" src="{{ asset('images/postal/postmark.png') }}" alt="">
            <img class="pc-postmark pc-postmark--2" src="{{ asset('images/postal/postmark.png') }}" alt="">
            <img class="pc-postmark pc-postmark--3" src="{{ asset('images/postal/postmark.png') }}" alt="">
            <p class="pc-smudge">Postal Club</p>

            <p class="pc-postcard-title">POSTCARD</p>
            <div class="pc-postcard-divider"></div>
            <img class="pc-postcard-stamp" src="{{ asset('images/postal/stamp.png') }}" alt="">

            <p class="pc-postcard-note">A little piece of today, sent with love from Postal Club.</p>
            <div class="pc-address"><span></span><span></span><span></span><span></span></div>
            <p class="pc-postcard-date">10/11/2026</p>
        </div>

        <p class="pc-handwritten">There’s a place for you here.</p>
    </section>

    {{-- Form --}}
    <section class="pc-auth">
        <a href="{{ url('/') }}" class="pc-back">←&nbsp;&nbsp;Back to the booth</a>

        <div class="pc-heading">
            <p class="pc-eyebrow">Your first letter starts here</p>
            <h1>Join the club.</h1>
            <p>For everyday moments and the people in them.<br>Make yourself at home — your first frame is waiting.</p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="pc-form">
            @csrf
            <div class="pc-fields">
                <x-postal.field name="name" label="Your name" placeholder="What should we call you?" autofocus autocomplete="name" />
                <x-postal.field name="email" label="Email address" type="email" placeholder="you@example.com" autocomplete="username" />
                <x-postal.field name="password" label="Password" type="password" placeholder="Create a password" hint="A little secret, at least 8 characters long." autocomplete="new-password" />
            </div>
            <button class="pc-submit" type="submit">Create account</button>
        </form>

        <p class="pc-terms">By joining, you agree to our <span>Terms of Service</span> and <span>Privacy Policy</span>.</p>
        <p class="pc-switch">Already part of the club? <a href="{{ route('login') }}">Log in</a></p>
    </section>
</x-postal-layout>
