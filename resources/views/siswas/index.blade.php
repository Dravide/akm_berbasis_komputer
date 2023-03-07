<x-app title="Siswa">

    <x-title-siswa>
        <x-slot name="title">Siswa</x-slot>
    </x-title-siswa>

    @if(session('sukses'))
        <div class="alert alert-success alert-dismissible fade show border-0" role="alert">
            <strong>Sukses!</strong> {{ session('sukses') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">


        <div class="col-lg-12">

            @if($kelas == 0)
                <div class="alert alert-info alert-dismissible fade show border-0" role="alert">
                    <strong>Mohon Maaf!</strong> Anda tidak dapat mengisi Daftar Siswa sebelum mengisi <a
                        href="{{ route('kelas.index') }}" class="alert-link">Data Kelas</a>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @else
                <x-toolbar-siswa/>
            @endif
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>NIS</th>
                                <th>Kelas</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($siswas as $siswa)
                                <tr>
                                    <td><img src="https://source.unsplash.com/random/50x50/?face-{{$siswa->id}}" alt=""
                                             class="rounded-circle thumb-xs me-1"> {{ $siswa->nama }}
                                    </td>
                                    <td>{{ $siswa->nis }}</td>
                                    <td>{{ $siswa->kelas->tingkat.$siswa->kelas->kelas }}</td>
                                    <td class="text-end">
                                        <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                        <form method="POST" action="{{ route('siswa.destroy', $siswa->id) }}"
                                              class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-link show_confirm"><i
                                                    class="las la-trash-alt font-16"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table><!--end /table-->
                        <nav aria-label="..." class="float-end mt-2">
                            {{ $siswas->onEachSide(1)->links() }}
                        </nav>
                    </div><!--end /tableresponsive-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
    </div><!--end row-->
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


