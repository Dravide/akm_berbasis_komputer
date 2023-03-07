<div class="d-flex justify-content-between mb-3" role="toolbar">
    <div class="btn-group">
        <button class="btn btn-de-success" type="button" class="btn btn-de-success" data-bs-toggle="modal"
                data-bs-target="#exampleModalSuccess"><i class="fas fa-user-plus"></i>
            Tambah
            Siswa
        </button>
        <button type="button" class="btn btn-de-info "><i class="fas fa-file-excel"></i> Export
            Siswa
        </button>
    </div>
    <div class="btn-group ms-1">
        <button type="button" class="btn  btn-de-warning  dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
            <i class="fas fa-info-circle"></i> Status<i class="mdi mdi-chevron-down ms-1"></i>
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Aktif</a>
            <a class="dropdown-item" href="#">Blocking</a>
        </div>
        <div class="input-group ms-3">
            <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username"
                   aria-describedby="button-addon2">
            <button class="btn btn-de-secondary" type="button" id="button-addon2">Cari</button>
        </div>
    </div>
</div>

@push('modals')
    <div class="modal fade" id="exampleModalSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalSuccess1"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('siswa.store') }}" method="POST">
                    @csrf
                    <div class="modal-header bg-success">
                        <h6 class="modal-title m-0 text-white" id="exampleModalSuccess1">Tambah Siswa</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div><!--end modal-header-->
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-2">
                                    <label for="projectName" class="form-label">Nama Siswa <i
                                            class="fa fa-info-circle text-info"></i></label>
                                    <input type="text" class="form-control" id="projectName"
                                           aria-describedby="emailHelp" placeholder="Nama Siswa" name="nama">
                                </div><!--end form-group-->
                                <div class="form-group mb-2">
                                    <label for="projectName" class="form-label">Nomor Induk Siswa <i
                                            class="fa fa-info-circle text-info"></i></label>
                                    <input type="number" class="form-control" id="projectName"
                                           aria-describedby="emailHelp" placeholder="Nomor Induk Siswa" name="nis">
                                </div><!--end form-group-->
                                <div class="form-group mb-2">
                                    <label for="projectName" class="form-label">Kelas <i
                                            class="fa fa-info-circle text-info"></i></label>
                                    <select class="form-select" name="kelas_id">
                                        <option selected disabled>Pilih Kelas</option>
                                        @foreach($kelas as $data)
                                            <option value="{{$data->id}}">{{$data->tingkat.$data->kelas}}</option>
                                        @endforeach
                                    </select>
                                </div><!--end form-group-->
                                <div class="form-group mb-2">
                                    <label for="projectName" class="form-label">Password <i
                                            class="fa fa-info-circle text-info"></i></label>
                                    <input type="password" class="form-control" id="projectName"
                                           aria-describedby="emailHelp" placeholder="Password" name="password">
                                </div><!--end form-group-->
                                <div class="form-group mb-2">
                                    <label for="projectName" class="form-label">Confirm Password <i
                                            class="fa fa-info-circle text-info"></i></label>
                                    <input type="password" class="form-control" id="projectName"
                                           aria-describedby="emailHelp" placeholder="Confir Password"
                                           name="password_confirmation">
                                </div><!--end form-group-->

                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end modal-body-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-de-success btn-sm">Simpan Siswa</button>
                    </div><!--end modal-footer-->
                </form>
            </div><!--end modal-content-->
        </div><!--end modal-dialog-->
    </div><!--end modal-->
@endpush
