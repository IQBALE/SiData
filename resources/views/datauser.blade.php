@extends('welcome')
@section('Title', 'Data User')

@section('Content')
 <!-- Form Start -->
 <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Data diri</h6>
                                <small>*Harap memasukkan data diri terlebih dahulu</small>
                            </div>
                <form method="POST" action="/user-act">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="exampleInputNama" class="form-label">Nama Lengkap</label>
                        <input name="nama" type="text" class="form-control">
                    </div>
                    @error('nama')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    <div class="mb-3">
                        <label for="exampleInputJenkel" class="form-label">Jenis Kelamin</label>
                        <select  name="jenkel" class="form-select mb-3" aria-label="Default select example">
                            <option value=" " selected>-- Pilih --</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    @error('jenkel')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="mb-3">
                        <label for="exampleInputUsia" class="form-label">Usia</label>
                        <input name="usia" type="number" class="form-control" >
                    </div>
                    @error('usia')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="mb-3">
                        <label for="exampleInputAlamat" class="form-label">Alamat</label>
                        <input name="alamat" type="text" class="form-control" >
                    </div>
                    @error('alamat')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    <button class="btn btn-primary w-100" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->
@endsection
