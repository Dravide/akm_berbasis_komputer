<x-app title="Kelas">
    <x-title-siswa>
        <x-slot name="title">Kelas</x-slot>
    </x-title-siswa>
    <div class="row">
        <div class="col-lg-4">
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
                                </select>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary mt-2">Tambah Kelas</button>

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
                                        <a href="{{ route('kelas.destroy', $k->id) }}"><i
                                                class="las la-trash-alt text-secondary font-16"></i></a>
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
</x-app>
