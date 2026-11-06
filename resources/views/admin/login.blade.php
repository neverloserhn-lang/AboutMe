
@extends('layouts.app')

@section('title', 'Login Admin')

@section('content')

<section class="container narrow-content msg-wrap">

    <div class="panel msg-card msg-card-small">

        <div class="msg-card-head">
            <h1>Login Admin</h1>
        </div>

        <p class="msg-card-sub">
            Masuk untuk membaca dan membalas pesan pengunjung.
        </p>

        <form action="{{ route('admin.login.submit') }}"
              method="POST"
              class="contact-form">

            @csrf

            <div class="contact-field">
                <label for="email">Email Admin</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Masukkan email admin"
                    value="{{ old('email') }}"
                    autocomplete="username"
                    required
                >

                @error('email')
                    <p class="field-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="contact-field">
                <label for="password">Password</label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    autocomplete="current-password"
                    required
                >

                @error('password')
                    <p class="field-error">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                    class="btn btn-primary msg-submit">
                Masuk ke Inbox
            </button>

        </form>

    </div>

</section>

@endsection
