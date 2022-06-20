@extends('welcome')
@section('Title', 'Diagnosa')

@section('Content')
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Pilih Gejala yang dialami</h6>
                                <small>*Gejala dapat dikosongkan jika tidak dirasa</small>
                            </div>
                            <div class="table-responsive">
                                <form action="/diagnosa-act" method="POST">
                                {{csrf_field()}}
                                <input name="id"class="form-control" type="hidden" readonly="readonly" value="{{$user->id}}">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr class="text-dark">
                                            <!-- <th scope="col">Check</th> -->
                                            <th scope="col">Kode</th>
                                            <th scope="col">Gejala</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($gejala as $data)
                                        <tr>
                                            <!-- <td><input class="form-check-input" type="checkbox"></td> -->
                                            <td>{{$data->kode_gejala}}</td>
                                            <td>{{$data->nama_gejala}}</td>
                                            <td>
                                                <select name="data_{{$loop->iteration}}" class="form-select mb-3" aria-label="Default select example">
                                                    <option value="0" selected>Tidak Ada</option>
                                                    <option value="0.25">Jarang</option>
                                                    <option value="0.5">Ringan</option>
                                                    <option value="0.75">Sedang</option>
                                                    <option value="1">Berat</option>
                                                </select>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4">
                                <button class="btn btn-primary w-100" type="submit">Diagnosa</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
