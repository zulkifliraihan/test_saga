@extends('dashboard.main')

@section('content')

    <style>
        @media (min-width: 992px){
            .datatable-user-view{
                padding: 0 10px
            }
        }
    </style>
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Artikel</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Artikel
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="plus"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('dashboard.artikel.create') }}" >
                                    <i class="mr-1" data-feather="users"></i>
                                    <span class="align-middle">Tambah Baru</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Ajax Sourced Server-side -->
                <section id="ajax-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">Management Artikel</h4>
                                </div>
                                <hr class="my-0" />
                                <div class="card-datatable datatable-user-view">
                                    <table class="datatables-ajax table" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kategori</th>
                                                <th>Title</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!--/ Ajax Sourced Server-side -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <script>
        $(document).ready(function(){
            let table = $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                        url: "{{ route('dashboard.artikel.index') }}",
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', className : "text-center width-100"},
                    {data: 'category_name', name: 'category_name'},
                    {data: 'title', name: 'title'},
                    {data: 'action', name: 'action', orderable: false, searchable: false, className : "text-center width-100"},
                ]
            });
            table.on( 'order.dt search.dt', function () {
                table.column(0, {order:'applied', search:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                });
            }).draw();
        });

        // Start : Submit Form Create Data
        $('#formCreate').on('submit', function(event) {

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

                    if (data.status == "ok" && data.response == "created-successfully") {
                        Swal.close();
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            text: data.message,
                        });
                        setTimeout(function() {
                            Swal.close();
                            $('#createModalForm').modal('hide');
                            location.reload();
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
        // End : Submit Form Create Data

        // Start : Get Data and Show Modal Edit Data
        $(document).on('click', '.edit-item', function(event){

            let data_id = $(this).attr("id");
            let route_url = "{{ route('dashboard.kategori.edit', ':id') }}";
            route_url = route_url.replace(':id', data_id);

            event.preventDefault();
            $.ajax({
                type: "GET",
                url: route_url,
                success: function (response) {
                    // Get Value From Response
                    let name = response.name;

                    $('#edit_name').val(name);
                    $('.formEdit').attr('id', response.id);
                    $('#editModalForm').modal('show');

                }
            });
        });
        // End : Get Data and Show Modal Edit Data

        // Start : Submit Form Edit Data
        $('#formEdit').on('submit', function(event) {

            let data_id = $(this).attr("id");
            let route_url = "{{ route('dashboard.kategori.update', ':id') }}";
            route_url = route_url.replace(':id', data_id);

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
                url: route_url,
                method: "POST",
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: (data) => {

                    if (data.status == "ok" && data.response == "edited-successfully") {
                        Swal.close();
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            text: data.message,
                        });
                        setTimeout(function() {
                            Swal.close();
                            $('#editModalForm').modal('hide');
                            location.reload();
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
        // End : Submit Form Edit Data

        // Start : Delete Data
        $(document).on('click', '.delete-item', function(){
            let data_id = $(this).attr("id");
            let route_url = "{{ route('dashboard.kategori.destroy', ':id') }}";
            route_url = route_url.replace(':id', data_id);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            event.preventDefault();
            Swal.fire({
                title: "Apakah yakin akan menghapus ini!?",
                // type: "info",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Hapus!",
                cancelButtonText: "Batal",
                confirmButtonColor: "#28a745",
                cancelButtonColor: "#dc3545",
                // reverseButtons: true,
                focusConfirm: true,
                focusCancel: false
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.close();
                    Swal.fire({
                        text: "Mohon menunggu..."
                    });

                    Swal.showLoading();
                    $.ajax({
                        type:'DELETE',
                        url: route_url,
                        success:function(data)
                        {
                            if(data.status == "ok"){
                                Swal.close();
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Sukses',
                                    text: data.message,
                                });
                                setTimeout(function() {
                                    Swal.close();
                                    location.reload();
                                }, 1500);
                            }
                        },
                        error: function(data){

                        }
                    });
                }
            })
        });
        // End : Delete Data

    </script>
@endsection
