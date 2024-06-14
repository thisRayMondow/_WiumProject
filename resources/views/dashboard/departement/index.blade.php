@extends('dashboard.layouts.main')

@section('container')

<div class="input-group input-group-sm mb-1 ms-2" style="margin-top:-30px;">
    <span class="">
        <button type="button" class="btn btn-sm bg-gradient-success text-white">
            <i class="mdi mdi-plus"></i>
            <span>Tambah Departement</span>
        </button>
    </span>
</div>

<div class="container">
    <div class="table-responsive">
        <div class="form-outline">
            <input type="search" class="form-control input-group input-group-sm bg-gradient-dark text-light"
                id="datatable-search" placeholder="Search...">
        </div>
        <table class="table table-hover table-striped table-md table-light" id="datatable">
            <thead class="text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kode Wilayah</th>
                    <th scope="col">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dept as $key => $item)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $item->name }}</td>
                    <td class="text-wrap">{{ $item->alamat }}</td>
                    <td>{{ $item->kode_wilayah }}</td>
                    <td>
                        <button type="button" class="btn btn-sm btn-info">
                            <span class="mdi mdi-pencil-box-outline"></span>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger">
                            <span class="mdi mdi-trash-can-outline"></span>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    // Menunggu dokumen selesai dimuat
    document.addEventListener("DOMContentLoaded", function() {
        // Mengambil referensi ke elemen input pencarian
        const searchInput = document.getElementById('datatable-search');

        // Menangkap event input dari elemen pencarian
        searchInput.addEventListener('input', function() {
            const searchText = this.value.toLowerCase(); // Mendapatkan teks pencarian dan mengubahnya menjadi huruf kecil
            const rows = document.querySelectorAll('#datatable tbody tr'); // Mendapatkan semua baris data di tabel

            // Iterasi melalui setiap baris tabel
            rows.forEach(row => {
                const cells = row.getElementsByTagName('td'); // Mendapatkan semua sel (kolom) dalam baris

                let found = false; // Flag untuk menandai apakah ada kecocokan pencarian di baris ini

                // Iterasi melalui setiap sel (kolom) dalam baris
                Array.from(cells).forEach(cell => {
                    const cellText = cell.textContent.toLowerCase(); // Mendapatkan teks dalam sel dan mengubahnya menjadi huruf kecil
                    
                    // Memeriksa apakah teks pencarian ada dalam teks sel
                    if (cellText.includes(searchText)) {
                        found = true; // Menandai bahwa ada kecocokan
                    }
                });

                // Menampilkan atau menyembunyikan baris berdasarkan hasil pencarian
                row.style.display = found ? '' : 'none';
            });
        });
    });
</script>
@endsection