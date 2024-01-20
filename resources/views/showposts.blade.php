<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Post - SantriKoding.com</title>
    <link href="{{ asset('front/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .post-content img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body style="background-color: #352F44">
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #2A2438">
        <div class="container ">
            <a class=" brand " style="text-align: center;  margin:auto; font-size: 25px; text-decoration:none; color:#fff;" href="/">BIS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            </button>
        </div>
    </nav>

    <div class="container mt-5 mb-5 shadow-lg">
        <div class="row">
            <!-- Konten Utama (Sebelah Kiri) -->
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h4>{{ $post->title }}</h4>
                        @if ($post->category)
                            {{ $post->category->name }}
                        @endif
                        <br>
                        {{ $post->created_at->diffForHumans() }}
                        <img src="{{ asset('storage/posts/' . $post->image) }}" class="img-fluid rounded">
                        <hr>
                        <div class="mt-3 post-content">

                                {!! $post->content !!}

                        </div>
                    </div>

                </div>
            </div>
            <!-- Rekomendasi Berita Lainnya -->
            <div class="row mt-5">
                <div class="col-md-12">
                    <h4 class="ml-4 text-white">Rekomendasi Berita Lainnya</h4>
                    <div class="card-deck">
                        @foreach ($rekomendasiBerita as $berita)
                            <div class="col-md-4 mb-3">
                                <div class="card" style="background-color: #695E7A; color: #fff;">
                                    <img src="{{ asset('storage/posts/' . $berita->image) }}" class="card-img-top"
                                        alt="{{ $berita->title }}">
                                    <div class="card-body">
                                        {{ \App\Models\Category::find($post->category)->first()->name }}
                                        <div class="small text-muted">{{ $berita->created_at->format('F d, Y') }}</div>
                                        <h5 class="card-title">{{ $berita->title }}</h5>
                                        <p class="card-text">{{ Str::limit(strip_tags($berita->content), 100, '...') }}
                                        </p>
                                        <a href="{{ route('berita.detail', $berita->id) }}" class="btn"
                                            style="background-color:#B9B4C7;">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-uppercase">Tentang Kami</h5>
                    <p class="text-muted">Deskripsi singkat tentang perusahaan atau situs Anda.</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-uppercase">Link Berguna</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Tentang</a></li>
                        <li><a href="#">Kontak</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-uppercase">Kategori</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">JavaScript</a></li>
                        <li><a href="#">CSS</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-uppercase">Ikuti Kami</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    {{-- <!-- Bottom Bar -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="mb-0">&copy; 2024 Nama Perusahaan. All rights reserved.</p>
            </div>
        </div>
    </div> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
