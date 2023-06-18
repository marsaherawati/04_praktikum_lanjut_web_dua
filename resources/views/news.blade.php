@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Berita Terbaru</h1>
        <div class="row">
            @foreach ($news as $item)
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body col-md-6">
                            <h5 class="card-title"><a href="{{ route('news.show', $item['id']) }}"
                                    class="text-decoration-none"><br><br>{{ $item['title'] }}</a></h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="col-md-6">{{ date('d M Y', strtotime($item['created_at'])) }}</small>
                                @if (isset($item['isi']))
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $item['id'] }}" aria-expanded="false"
                                        aria-controls="collapse{{ $item['id'] }}">Lihat Isi</button>
                                @endif
                            </div>
                            @if (isset($item['isi']))
                                <div class="collapse mt-3" id="collapse{{ $item['id'] }}">
                                    <div class="card card-body">
                                        {{ $item['isi'] }}
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
