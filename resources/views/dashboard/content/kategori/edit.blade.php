<div class="modal fade" id="editModalForm" tabindex="-1" role="dialog" aria-labelledby="createForm" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form id="formEdit" class="section formEdit" method="POST">
                    @method('PATCH')
                    <div class="info">
                        <div class="row">
                            <div class="col-md-11 mx-auto">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">
                                                Nama Kategori
                                                <span style="color: red">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="name" id="edit_name" placeholder="Nama Kategori" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="cancel" class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Batalkan</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
