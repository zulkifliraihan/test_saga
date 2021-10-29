@extends('dashboard.main')
@section('custom_css')

    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css/plugins/forms/form-quill-editor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/vendors/css/editors/quill/katex.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/vendors/css/editors/quill/monokai-sublime.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/vendors/css/editors/quill/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/vendors/css/editors/quill/quill.bubble.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection

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
                            <h2 class="content-header-title float-left mb-0">Create Artikel</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard.artikel.index') }}">Artikel</a>
                                    </li>
                                    <li class="breadcrumb-item active">Create Artikel
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Baru</h4>
                        </div>
                        <div class="card-body">
                            <form id="formCreate" class="form form-horizontal" method="POST" action="{{ route('dashboard.artikel.store') }}" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <label for="category_id">Pilih Kategori Artikel
                                                    <span style="color: red">*</span>
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <select class="select2 form-control" name="category_id" id="category_id">
                                                    <option disabled selected>Silahkan Pilih</option>
                                                    @foreach ($kategori as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <label for="title">Title Artikel
                                                    <span style="color: red">*</span>
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" id="title" class="form-control" name="title" placeholder="Title Artikel" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <label for="deskripsi">Content Artikel
                                                    <span style="color: red">*</span>
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div id="snow-wrapper">
                                                            <div id="snow-container">
                                                                <div class="quill-toolbar">
                                                                    <span class="ql-formats">
                                                                        <select class="ql-header">
                                                                            <option value="1">Heading</option>
                                                                            <option value="2">Subheading</option>
                                                                            <option selected>Normal</option>
                                                                        </select>
                                                                        <select class="ql-font">
                                                                            <option selected>Sailec Light</option>
                                                                            <option value="sofia">Sofia Pro</option>
                                                                            <option value="slabo">Slabo 27px</option>
                                                                            <option value="roboto">Roboto Slab</option>
                                                                            <option value="inconsolata">Inconsolata</option>
                                                                            <option value="ubuntu">Ubuntu Mono</option>
                                                                        </select>
                                                                    </span>
                                                                    <span class="ql-formats">
                                                                        <button class="ql-bold"></button>
                                                                        <button class="ql-italic"></button>
                                                                        <button class="ql-underline"></button>
                                                                    </span>
                                                                    <span class="ql-formats">
                                                                        <button class="ql-list" value="ordered"></button>
                                                                        <button class="ql-list" value="bullet"></button>
                                                                    </span>
                                                                    {{-- <span class="ql-formats">
                                                                        <button class="ql-link" type="button"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line> <path class="ql-even ql-stroke" d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z"></path> <path class="ql-even ql-stroke" d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z"></path> </svg></button>
                                                                        <button class="ql-image" type="button"><svg viewBox="0 0 18 18"> <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect> <circle class="ql-fill" cx="6" cy="7" r="1"></circle> <polyline class="ql-even ql-fill" points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline> </svg></button>
                                                                        <button class="ql-video" type="button"><svg viewBox="0 0 18 18"> <rect class="ql-stroke" height="12" width="12" x="3" y="3"></rect> <rect class="ql-fill" height="12" width="1" x="5" y="3"></rect> <rect class="ql-fill" height="12" width="1" x="12" y="3"></rect> <rect class="ql-fill" height="2" width="8" x="5" y="8"></rect> <rect class="ql-fill" height="1" width="3" x="3" y="5"></rect> <rect class="ql-fill" height="1" width="3" x="3" y="7"></rect> <rect class="ql-fill" height="1" width="3" x="3" y="10"></rect> <rect class="ql-fill" height="1" width="3" x="3" y="12"></rect> <rect class="ql-fill" height="1" width="3" x="12" y="5"></rect> <rect class="ql-fill" height="1" width="3" x="12" y="7"></rect> <rect class="ql-fill" height="1" width="3" x="12" y="10"></rect> <rect class="ql-fill" height="1" width="3" x="12" y="12"></rect> </svg></button>
                                                                    </span> --}}
                                                                    <span class="ql-formats">
                                                                        <button class="ql-clean"></button>
                                                                    </span>
                                                                </div>
                                                                <div class="editor" id="deskripsiContent">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <input type="email" id="deskripsi" class="form-control" name="email-id" placeholder="Email" /> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <label for="image">Banner Content
                                                    <span style="color: red">*</span>
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="file" class="dropify" name="image" id="image" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 offset-sm-3">
                                        <button type="submit" class="btn btn-success mr-1" >Selanjutnya</button>
                                        <button type="reset" class="btn btn-outline-secondary btn-reset">Batalkan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <!-- Basic Horizontal form layout section end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->


@endsection

@section('custom_js')
    <script src="{{ asset('dashboard/app-assets/vendors/js/editors/quill/katex.min.js') }}"></script>
    <script src="{{ asset('dashboard/app-assets/vendors/js/editors/quill/highlight.min.js') }}"></script>
    <script src="{{ asset('dashboard/app-assets/vendors/js/editors/quill/quill.min.js') }}"></script>
    <script src="{{ asset('dashboard/app-assets/js/scripts/forms/form-quill-editor.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('dashboard/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
    <script src="{{ asset('dashboard/app-assets/js/scripts/components/components-tooltips.js') }}"></script>


    <script>
        $('.dropify').dropify();
    </script>

    <script>

        $(document).on('click', '.btn-reset', function() {
            console.log("click btn-reset");
            $(".ql-editor > ").remove();
        });

        // Start : Submit Layanan Form Non Embed
        $('#formCreate').on('submit', function(event) {
            console.log("Submit Ajax");

            // var dataForm = new FormData(this);
            var dataForm = new FormData($(this)[0]);
            var content = $(".ql-editor").html();
            dataForm.append('content', content);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            event.preventDefault();

            Swal.fire({
                text: "Mohon menunggu..."
            });

            Swal.showLoading();

            $.ajax({
                url: $(this).attr("action"),
                method: "POST",
                data: dataForm,
                processData: false,
                contentType: false,
                cache: false,
                success: (data) => {

                    if (data.status == "ok" && data.response == "created-successfully") {
                        Swal.close();
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            text: data.message,
                        });
                        setTimeout(function() {
                            window.location.href = data.route;
                        }, 1500);
                    }
                },
                error: (data) => {
                    if (data.responseJSON.status == "fail-validator") {
                        Swal.fire({
                            title: 'Perhatian!',
                            text: data.responseJSON.message,
                            icon: 'error',
                            confirmButtonText: 'Oke'
                        });
                    }
                }
            });
        });
        // End : Submit Layanan Form Non Embed
    </script>

@endsection
