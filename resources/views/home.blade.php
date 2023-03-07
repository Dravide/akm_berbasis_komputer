<x-app title="Beranda">
    <x-title-siswa>
        <x-slot name="title">Beranda</x-slot>
    </x-title-siswa>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <i class="ti ti-users font-36 align-self-center text-dark me-3"></i>
                        <div class="media-body align-self-center">
                            <div class="coin-bal">
                                <h4 class="mt-0 mb-1 font-22 fw-bold">{{ $siswa }}</h4>
                                <p class="text-muted mb-0 fw-semibold">Siswa
                                </p>
                            </div>
                        </div><!--end media body-->
                    </div><!--end media-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <i class="ti ti-users font-36 align-self-center text-dark me-3"></i>
                        <div class="media-body align-self-center">
                            <div class="coin-bal">
                                <h4 class="mt-0 mb-1 font-22 fw-bold">50,289</h4>
                                <p class="text-muted mb-0 fw-semibold">Germany . Last Month
                                    <span class="text-success">1.2% <i class="mdi mdi-arrow-up"></i></span>
                                </p>
                            </div>
                        </div><!--end media body-->
                    </div><!--end media-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <i class="ti ti-users font-36 align-self-center text-dark me-3"></i>
                        <div class="media-body align-self-center">
                            <div class="coin-bal">
                                <h4 class="mt-0 mb-1 font-22 fw-bold">50,289</h4>
                                <p class="text-muted mb-0 fw-semibold">Spain . Last Month
                                    <span class="text-success">0.5% <i class="mdi mdi-arrow-up"></i></span>
                                </p>
                            </div>
                        </div><!--end media body-->
                    </div><!--end media-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div>
</x-app>
