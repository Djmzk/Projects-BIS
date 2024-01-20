<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />


    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog Home - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('front/css/styles.css') }}" rel="stylesheet" />

    <style>
        .custom-card {
            display: flex;
            flex-direction: column;
            height: 100%;
            background-color: #695E7A;
            color: #fff;
        }

        .custom-card img {
            flex: 1;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
    @stack('css')
</head>

<body style="background-color: #352F44">
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #2A2438">
    <div class="container ">
        <a class=" brand " style="margin: auto;  margin:auto; font-size: 25px; text-decoration:none; color:#fff;" href="/">BIS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        </button>
    </div>
</nav>
{{-- <ul class="navbar-nav" style="margin: auto; font-weight: bold;">
    <!-- All Categories -->
    <li class="nav-item">
        <a class="nav-link category-link" data-category="" href="{{ route('load.category') }}" onclick="submitForm('')">Semua Kategori</a>
    </li>

    <!-- Loop through categories -->
    @foreach($categories as $category)
        <li class="nav-item">
            <a class="nav-link category-link" data-category="{{ $category->id }}"
               href="javascript:void(0);" onclick="submitForm('{{ $category->id }}')">{{ $category->name }}</a>
        </li>
    @endforeach
    <!-- End loop -->
</ul> --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container text-center justify-content-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCategories"
                aria-controls="navbarCategories" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCategories">
            <div class="col-md-12 mb-3">
                <form id="categoryForm" action="{{ route('load.category') }}" method="get">
                    <label for="categoryFilter"></label>

                    <!-- Option for All Categories -->
                    <input type="radio" style="display: none" name="category" id="allCategories" value="all" {{ isset($selectedCategoryId) && $selectedCategoryId == 'all' ? 'checked' : '' }}>
                    <label style="font-size: 20px; font-weight:bold; margin: 10px 20px; cursor: pointer;" for="allCategories" onclick="submitForm('all')">ALL</label>

                    <!-- Loop through categories -->
                    @foreach ($categories as $category)
                        <input type="radio" style="display: none" name="category" id="category{{ $category->id }}" value="{{ $category->id }}" {{ isset($selectedCategoryId) && $selectedCategoryId == $category->id ? 'checked' : '' }}>
                        <label style="font-size: 20px; font-weight:bold; margin: 10px 5px; cursor: pointer;" for="category{{ $category->id }}" onclick="submitForm('{{ $category->id }}')">{{ $category->name }}</label>
                        @endforeach
                    <!-- End loop -->
                </form>
            </div>
        </div>
    </div>
</nav>

<script>
    function submitForm(categoryId) {
        document.getElementById("categoryForm").category.value = categoryId;
        document.getElementById("categoryForm").submit();
    }
</script>



    {{-- <!-- Page header with logo and tagline -->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Welcome to Website BIS!</h1>
                <p class="lead mb-0">Explore the latest posts and updates from our blog.</p>
            </div>
        </div>
    </header> --}}

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($posts as $key => $post)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}"
                    class="{{ $key == 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($posts as $key => $post)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ asset('/storage/posts/' . $post->image) }}" class="d-block w-100"
                        alt="{{ $post->title }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $post->title }}</h5>
                        <p>{{ Str::limit(strip_tags($post->content), 150, '...') }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                {{-- <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" src="{{ asset('storage/back/' . $latest_post->img) }}" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">{{ $latest_post->created_at->format('d-m-Y') }}</div>
                        <h2 class="card-title">{{ $latest_post->title }}</h2>
                        <p class="card-text">
                            {{ Str::limit(strip_tags($latest_post->desc), 150, '...') }}
                        </p>
                        <a class="btn btn-primary" href="#!">Read more →</a>
                    </div>
                </div> --}}
                <div id="categoryNews">
                    <div class="row">


                        @forelse ($posts as $post)
                            <div class="col-lg-6 mt-2 mb-2">
                                <!-- Blog post-->
                                <div class="card mb-4 custom-card">
                                    <a href="#!"><img class="card-img-top" src="{{ asset('/storage/posts/' . $post->image) }}" alt="..." /></a>
                                    <div class="card-body">
                                        {{ $post->category->name }}
                                        <div class="large" style="color: white">{{ $post->created_at->format('F d, Y') }}</div>
                                        <div class="small mb-4" style="color: white">{{ $post->created_at->diffForHumans() }}</div>
                                        <h2 class="card-title h4">{{ $post->title }}</h2>
                                        <p class="card-text">{{ Str::limit(strip_tags($post->content), 100, '...') }}</p>
                                        <a href="{{ route('berita.detail', $post->id) }}" class="btn" style="background-color:#F1E0E0;">Baca Selengkapnya →</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-md-12">
                                <div class="alert alert-danger">
                                    Data Post belum Tersedia.
                                </div>
                            </div>
                        @endforelse
                    </div>

                </div>
                <!-- Pagination-->
                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">

                        <li class="page-item " aria-current="page">
                            {{-- {{ $posts->links('pagination::bootstrap-5') }} --}}

                        </li>

                    </ul>
                </nav>
            </div>

            <!-- Side widgets-->
            <div class="col-lg-4">


                <!-- Categories widget-->
                <!-- Recent News widget-->
                <!-- Recent News widget -->
                <div class="card mb-2 mt-2">
                    <div class="card-header">Berita Terbaru</div>
                    <div class="card-body p-2">
                        @foreach ($posts as $post)
                            <!-- post item -->
                            <div class="card custom-card mb-2">
                                <a href="{{ route('posts.show', $post->id) }}">
                                    <img class="card-img-top" src="{{ asset('/storage/posts/' . $post->image) }}"
                                        alt="...">
                                </a>
                                <div class="card-body p-1">
                                    <td>{{ \App\Models\Category::find($post->category)->first()->name }}</td>


                                    <div class=" small">{{ $post->created_at->format('F d, Y') }}</div>
                                    <h6 class="card-title" style="font-size: 12px;">{{ $post->title }}</h6>
                                    <p class="card-text" style="font-size: 10px;">
                                        {{ Str::limit(strip_tags($post->content), 50, '...') }}</p>
                                    <a href="{{ route('berita.detail', $post->id) }}"
                                        class="btn btn-sm btn-light p-0" style="font-size: 10px;">Baca Selengkapnya
                                        →</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>




                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">You can put
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

        <!-- Bottom Bar -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0">&copy; 2024 Nama Perusahaan. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
