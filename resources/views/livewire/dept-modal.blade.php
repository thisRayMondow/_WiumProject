<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="deptModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header bg-gradient-secondary text-dark">
                    <h3 class="modal-title">Departement</h3>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> --}}
                </div>

                <!-- Modal body -->
                <div class="modal-body bg-gradient-secondary">
                    <table class="table table-striped table-bordered table-sm table-light">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kode Wilayah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dept as $key => $item)
                            <tr>
                                <th scope="row">{{ $key+1 }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->kode_wilayah }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer bg-gradient-secondary">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</div>