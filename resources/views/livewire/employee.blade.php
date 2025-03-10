<div class="container py-4">
    @if ($errors->any())
        <div class="alert alert-danger modern-alert mb-4">
            <ul class="mb-0">
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session()->has('message'))
        <div class="alert alert-success modern-alert mb-4">
            {{ session('message') }}
        </div>
    @endif

    <!-- FORM CARD -->
    <div class="card modern-card mb-4">
        <div class="modern-card-header">
            Form Data Pegawai
        </div>
        <div class="modern-card-body">
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" wire:model="nama">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" wire:model="email">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" wire:model="alamat">
                </div>
                <div class="d-flex justify-content-between">
                    @if ($updateData == false)
                        <button type="button" class="btn btn-primary" wire:click="store()">SIMPAN</button>
                    @else
                        <button type="button" class="btn btn-success" wire:click="update()">UPDATE</button>
                    @endif
                    <button type="button" class="btn btn-secondary" wire:click="clear()">Clear</button>
                </div>
            </form>
        </div>
    </div>
    <!-- AKHIR FORM CARD -->

    <!-- DATA CARD -->
    <div class="card modern-card">
        <div class="modern-card-header">
            Data Pegawai
        </div>
        <div class="modern-card-body">
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Search..." wire:model.live="katakunci">
            </div>

            @if ($employee_selected_id)
                <button class="btn btn-danger mb-3" wire:click="delete_confirmation('')">Hapus Terpilih ({{ count($employee_selected_id) }})</button>
            @endif

            {{ $dataEmployees->links() }}

            <table class="table table-modern table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>No</th>
                        <th wire:click="sort('nama')" style="cursor: pointer;">Nama</th>
                        <th wire:click="sort('email')" style="cursor: pointer;">Email</th>
                        <th wire:click="sort('alamat')" style="cursor: pointer;">Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataEmployees as $key => $value)
                    <tr>
                        <td>
                            <input type="checkbox" wire:key="{{ $value->id }}" value="{{ $value->id }}" wire:model.live="employee_selected_id">
                        </td>
                        <td>{{ $dataEmployees->firstItem() + $key }}</td>
                        <td>{{ $value->nama }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->alamat }}</td>
                        <td>
                            <button class="btn btn-warning btn-sm" wire:click="edit({{ $value->id }})">Edit</button>
                            <button class="btn btn-danger btn-sm" wire:click="delete_confirmation({{ $value->id }})" data-bs-toggle="modal" data-bs-target="#exampleModal">Del</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $dataEmployees->links() }}
        </div>
    </div>
    <!-- AKHIR DATA CARD -->

    <!-- Modal Konfirmasi Hapus -->
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modern-card">
                <div class="modern-card-header" style="background: #dc3545;">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modern-card-body">
                    Yakin akan menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <button type="button" class="btn btn-primary" wire:click="delete()" data-bs-dismiss="modal">Ya</button>
                </div>
            </div>
        </div>
    </div>
</div>
