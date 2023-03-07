<x-app title="Siswa">

    <x-title-siswa>
        <x-slot name="title">Siswa</x-slot>
    </x-title-siswa>

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
                                    <td><img src="assets/images/users/user-3.jpg" alt=""
                                             class="rounded-circle thumb-xs me-1"> {{ $siswa->nama }}
                                    </td>
                                    <td>{{ $siswa->nis }}</td>
                                    <td>{{ $siswa->kelas->tingkat.$siswa->kelas->kelas }}</td>
                                    <td class="text-end">
                                        <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                        <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table><!--end /table-->
                    </div><!--end /tableresponsive-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
    </div><!--end row-->
</x-app>
