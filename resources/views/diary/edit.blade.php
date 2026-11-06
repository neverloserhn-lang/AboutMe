@extends('layouts.app')

@section('title', 'Edit Diary')

@section('content')

<section class="container page-hero">
    <a href="{{ route('diary.index') }}" class="card-link">← Kembali ke Diary</a>
    <span class="eyebrow" style="display:flex;margin-top:22px">✦ EDIT CATATAN</span>
    <h1>Rapikan <span class="gradient-text">ceritamu.</span></h1>
</section>

@if ($errors->any())
    <div class="container narrow-content" style="padding-bottom:0">
        <div class="diary-alert diary-alert-error" role="alert">
            <div>
                <strong>Periksa kembali isianmu:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif

<section class="container narrow-content">
    <div class="panel diary-panel">
        <form action="{{ route('diary.update', $diary) }}" method="POST" class="diary-form">
            @csrf
            @method('PUT')

            <div class="diary-form-grid">
                <div class="diary-field">
                    <label for="judul">Judul catatan</label>
                    <input type="text" id="judul" name="judul"
                           value="{{ old('judul', $diary->judul) }}"
                           maxlength="255" required>
                </div>

                <div class="diary-field">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal"
                           value="{{ old('tanggal', \Carbon\Carbon::parse($diary->tanggal)->format('Y-m-d')) }}"
                           required>
                </div>
            </div>

            <div class="diary-field">
                <label for="isi">Isi catatan</label>
                <textarea id="isi" name="isi" required>{{ old('isi', $diary->isi) }}</textarea>
            </div>

            <div class="diary-form-footer">
                <a href="{{ route('diary.index') }}" class="btn btn-quiet">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan perubahan</button>
            </div>
        </form>
    </div>
</section>

@endsection