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
                            <h2 class="content-header-title float-left mb-0">Tambah User</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard.user.index') }}">User</a>
                                    </li>
                                    <li class="breadcrumb-item active">Tambah User
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
                            <h4 class="card-title">Tambah Baru User</h4>
                        </div>
                        <div class="card-body">
                            <form class="form form-horizontal" id="create-user-form" action="{{ route('dashboard.user.store') }}" method="POST">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <label for="fname-icon">Nama</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                    </div>
                                                    <input type="text" id="fname-icon" class="form-control" name="name"
                                                        placeholder="Nama" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <label for="email-icon">Email</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="input-group input-group-merge ">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i data-feather="mail"></i></span>
                                                    </div>
                                                    <input type="email" id="email-icon" class="form-control" name="email"
                                                        placeholder="Email" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <label for="contact-icon">Role</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="input-group ">
                                                    <select name="role" id="role" class="form-control">
                                                        <option>Pilih</option>
                                                        @foreach ($roles as $item)
                                                            <option value="{{ $item->name }}">{{ ucwords($item->name) }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    {{-- <input type="number" id="contact-icon" class="form-control" name="contact-icon" placeholder="Mobile" /> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <label for="pass-icon">Password</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="input-group input-group-merge form-password-toggle">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i data-feather="lock"></i></span>
                                                    </div>
                                                    <input type="password" id="pass-icon" class="form-control"
                                                        name="password" placeholder="Password" />
                                                    <div class="input-group-append"><span
                                                            class="input-group-text cursor-pointer"><i
                                                                data-feather="eye"></i></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 offset-sm-3">
                                        <button  class="btn btn-primary mr-1">Simpan!</button>
                                        <a href="{{ route('dashboard.user.index') }}" class="btn btn-outline-secondary">
                                            Batal
                                        </a>
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

    <script>
        $('#create-user-form').on('submit', function(event) {

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
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: (data) => {

                    if (data.status == "ok" && data.response == "create-user") {
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
    </script>
@endsection
