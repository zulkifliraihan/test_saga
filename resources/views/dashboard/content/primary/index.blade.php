@extends('dashboard.main')
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Artikel List</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">Artikel
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-detached content-left">
                <div class="content-body" style="margin: 0">
                    <!-- Artikel List -->
                    <div class="blog-list-wrapper">
                        <!-- Artikel List Items -->
                        <div class="row">
                            @foreach ($artikel as $item)
                                <div class="col-md-6 col-12 d-flex align-items-stretch">
                                    <div class="card">
                                        <a href="page-blog-detail.html">
                                            <img class="card-img-top img-fluid" src="{{ Storage::url($item->fileResize->path) }}" alt="Artikel Post pic" />
                                        </a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="page-blog-detail.html" class="blog-title-truncate text-body-heading">{{ $item->title }}</a>
                                            </h4>
                                            <div class="my-1 py-25">
                                                <a href="{{ route('landing.kategori', $item->category->slug) }}">
                                                    <div class="badge badge-pill badge-light-primary">{{ $item->category->name }}</div>
                                                </a>
                                            </div>
                                            <p class="card-text blog-content-truncate">
                                                {!! Str::limit($item->content, 100, '...') !!}
                                            </p>
                                            <hr />
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('landing.detail', [
                                                    'kategori' => $item->category->slug,
                                                    'slug' => $item->slug
                                                ]) }}" class="font-weight-bold">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--/ Artikel List Items -->
                    </div>
                    <!--/ Artikel List -->

                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
