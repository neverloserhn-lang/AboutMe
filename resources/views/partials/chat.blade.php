
{{-- Tampilan chat dua arah.
     Variabel: $conversation, $messages, $action,
     $ownerLabel (opsional), $placeholder (opsional) --}}

@php
    $ownerLabel = $ownerLabel ?? 'Pemilik Website';
    $placeholder = $placeholder ?? 'Tulis balasan...';
@endphp

<div class="cw">

    <div class="cw-window" id="cwWindow">
        @foreach ($messages as $message)

            @php
                $owner = $message->sender === 'admin';
                $assistant = $message->sender === 'assistant';
                $visitor = $message->sender === 'visitor';

                $senderName = $owner
                    ? $ownerLabel
                    : ($assistant
                        ? 'Asisten AboutMe'
                        : $conversation->nama . ' · Pengunjung');
            @endphp

            <div class="cw-row {{ ($owner || $assistant) ? 'cw-row-owner' : '' }}">
                <div class="cw-bubble {{ ($owner || $assistant) ? 'cw-bubble-owner' : '' }}">

                    <span class="cw-name">
                        {{ $senderName }}

                        @if ($assistant)
                            <span aria-label="Balasan otomatis">· Otomatis</span>
                        @endif
                    </span>

                    <p class="cw-text">{{ $message->body }}</p>

                    <time class="cw-time"
                          datetime="{{ $message->created_at->toIso8601String() }}">
                        {{ $message->created_at->isToday()
                            ? $message->created_at->format('H.i')
                            : $message->created_at->format('d/m/Y H.i') }}
                    </time>

                </div>
            </div>

        @endforeach
    </div>

    <form action="{{ $action }}" method="POST" class="cw-reply" id="cwForm">
        @csrf

        <textarea
            name="body"
            id="cwInput"
            rows="1"
            maxlength="2000"
            placeholder="{{ $placeholder }}"
            aria-label="Tulis pesan"
            required>{{ old('body') }}</textarea>

        <button type="submit" class="cw-send" aria-label="Kirim pesan">
            <svg viewBox="0 0 24 24" width="20" height="20"
                 fill="none" stroke="currentColor" stroke-width="2"
                 stroke-linecap="round" stroke-linejoin="round"
                 aria-hidden="true">
                <path d="M22 2 11 13"/>
                <path d="M22 2 15 22l-4-9-4-4 20-7z"/>
            </svg>
        </button>
    </form>

    @error('body')
        <p class="field-error">{{ $message }}</p>
    @enderror

</div>

<script>
    (function () {
        var win = document.getElementById('cwWindow');
        var input = document.getElementById('cwInput');
        var form = document.getElementById('cwForm');

        // Buka percakapan di pesan paling bawah
        if (win) win.scrollTop = win.scrollHeight;
        if (!input) return;

        // Kolom ketik membesar mengikuti isi
        function grow() {
            input.style.height = 'auto';
            input.style.height = Math.min(input.scrollHeight, 140) + 'px';
        }

        input.addEventListener('input', grow);
        grow();

        // Enter = kirim, Shift + Enter = baris baru
        input.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' && !e.shiftKey && !e.isComposing) {
                e.preventDefault();

                if (input.value.trim() !== '') {
                    form.requestSubmit();
                }
            }
        });
    })();
</script>
