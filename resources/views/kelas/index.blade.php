<x-app title="Kelas">
    <x-title-siswa>
        <x-slot name="title">Kelas</x-slot>
    </x-title-siswa>
    <div class="row">
        <div class="col-lg-4">
            @if(session('sukses'))
                <div class="alert alert-success alert-dismissible fade show border-0" role="alert">
                    <strong>Sukses!</strong> {{ session('sukses') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Tambah Kelas</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('kelas.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="tingkat" class="form-label">Tingkat</label>
                                <select name="tingkat" id="tingkat" class="form-select">
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="8">9</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kelas" class="form-label mt-2">Kelas</label>
                                <select name="kelas" id="kelas" class="form-select">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="F">F</option>
                                    <option value="G">G</option>
                                    <option value="H">H</option>
                                    <option value="I">I</option>
                                    <option value="J">J</option>
                                    <option value="K">K</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-sm btn-outline-primary mt-2">Tambah Kelas</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Tingkat</th>
                                <th>Kelas</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($kelas as $key => $k)
                                <tr>
                                    <td>{{ $kelas->firstItem() + $key }}</td>
                                    <td>{{ $k->tingkat }}</td>
                                    <td>{{ $k->kelas }}</td>
                                    <td class="text-end">
                                        <form method="POST" action="{{ route('kelas.destroy', $k->id) }}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-link show_confirm"><i
                                                    class="las la-trash-alt text-danger font-16"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>

                    </div>
                    <nav class="float-end mt-2">
                        {{ $kelas->appends(['sort' => 'tingkat'])->links() }}
                    </nav>
                </div>

            </div>
        </div>
    </div>
    @push('css')
        <link href="{{ asset('') }}assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('') }}assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css">
    @endpush

    @push('js')

        <script src="{{ asset('') }}assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script type="text/javascript">
            $('.show_confirm').click(function (event) {
                var form = $(this).closest("form");
                event.preventDefault();
                swal.fire({
                    title: 'Apakah Anda Yakin?',
                    text: "Ingin Menghapus data Kelas ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Tidak, Batal!'
                })
                    .then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                            Swal.fire(
                                'Hapus!',
                                'Data Kelas Telah Dihapus!',
                                'success'
                            )
                        }
                    });
            });

        </script>
    @endpush
</x-app>


