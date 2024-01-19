<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Post - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body >

    <div class="container mt-5 mb-5 shadow-lg   ">
        <div class="row">
            <!-- Konten Utama (Sebelah Kiri) -->
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('storage/posts/'.$post->image) }}" class="w-100 rounded">
                        <hr>
                        <h4>{{ $post->title }}</h4>
                        <p class="mt-3">
                            {!! $post->content !!}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Informasi Lain (Sebelah Kanan) -->
            <div class="col-md-4">
                <!-- Informasi Tambahan -->
                <div class="card border-0 shadow-sm rounded mt-3">
                    <div class="card-body">
                        <h5>Informasi Lain</h5>
                        <!-- Isi dengan informasi tambahan -->
                    </div>
                </div>
            </div>
        </div>

<!-- Rekomendasi Berita Lainnya -->
<div class="row mt-5">
    <div class="col-md-12">
        <h4>Rekomendasi Berita Lainnya</h4>
        <div class="card-deck">

            @foreach($rekomendasiBerita as $berita)
                <div class="card">
                    <img src="{{ asset('storage/posts/'.$berita->image) }}" class="card-img-top" alt="{{ $berita->title }}">
                    <div class="card-body">
                        <div class="small text-muted">{{ $post->created_at->format('F d, Y') }}</div>
                        <h5 class="card-title">{{ $berita->title }}</h5>
                        <p class="card-text">{{ Str::limit(strip_tags($berita->content), 100, '...') }}</p>
                        <a href="{{ route('posts.show', $berita->id) }}" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
