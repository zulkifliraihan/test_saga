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
                            <h2 class="content-header-title float-left mb-0">Blog Detail</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Artikel</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Blog</a>
                                    </li>
                                    <li class="breadcrumb-item active">Detail
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-detached content-left">
                <div class="content-body" style="margin: 0">
                    <!-- Blog Detail -->
                    <div class="blog-detail-wrapper">
                        <div class="row">
                            <!-- Blog -->
                            <div class="col-12">
                                <div class="card">
                                    <img src="{{ Storage::url($artikel->fileOri->path) }}" class="img-fluid card-img-top" alt="Blog Detail Pic" />
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $artikel->title }}</h4>
                                        <div class="my-1 py-25">
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-primary">{{ $kategori->name }}</div>
                                            </a>
                                        </div>
                                        <hr class="my-2">
                                        <p class="card-text mb-2">
                                            {!! $artikel->content !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--/ Blog -->
                        </div>
                    </div>
                    <!--/ Blog Detail -->

                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->


@endsection
