<x-app title="Import Siswa">
    <x-title-siswa>
        <x-slot name="title">Import Siswa</x-slot>
    </x-title-siswa>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('siswa.import') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="file" class="col-3 col-form-label text-md-right">{{ __('File') }}</label>

                            <div class="col-9">
                                <input id="file" type="file" class="form-control @error('file') is-invalid @enderror"
                                       name="file" value="{{ old('file') }}" required
                                       accept="application/vnd.ms-excel">

                                @error('file')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-9 offset-3">
                                <button type="submit" class="btn btn-outline-info mt-2">
                                    {{ __('Import') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app>

