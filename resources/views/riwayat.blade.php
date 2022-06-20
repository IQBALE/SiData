@extends('welcome')
@section('Title', 'Riwayat')

@section('Content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-2">Data Pasien</h6>
                    <small>*Data pasien yang telah melakukan pengecekan</small>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Usia</th>
                                <th scope="col">Hasil</th>
                                <th scope="col">Persentase</th>
                                <th scope="col">Penyakit</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($riwayat as $data)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$data->nama_lengkap}}</td>
                                <td>{{$data->jenis_kelamin}}</td>
                                <td>{{$data->usia}}</td>
                                <td>{{$data->hasil}}</td>
                                <td>{{$data->persentase}}%</td>
                                <td>{{$data->diagnosa}}</td>
                                <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"  data-bs-target="#detailModal-{{$data->id}}"><i class="fa fa-file" ></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@foreach($riwayat as $data)
<div class="modal fade" id="detailModal-{{$data->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$data->nama_lengkap}} </h5>
        </div>
        <div class="modal-body">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-2">Detail Data</h6>
                    <dl class="row mb-0">
                        <dt class="col-sm-4">Nama Lengkap :</dt>
                        <dd class="col-sm-8">{{$data->nama_lengkap}}</dd>

                        <dt class="col-sm-4">Jenis Kelamin :</dt>
                        <dd class="col-sm-8">{{$data->jenis_kelamin}}</dd>

                        <dt class="col-sm-4">Usia :</dt>
                        <dd class="col-sm-8">{{$data->usia}}</dd>
                    </dl>
                </div>
            </div>
            <!-- <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-2">Detail Gejala</h6>
                    <dl class="row mb-0">
                        <dd class="col-sm-12">
                            <ul class="list-unstyled mb-0">
                                <ul>
                                    <li>Jalani Pemeriksaan Mata Dilatasi secara Teratur</li>
                                    <li>Ketahui Riwayat Kesehatan Mata Keluarga </li>
                                    <li>Berolahraga dengan Aman</li>
                                </ul>
                            </ul>
                        </dd>
                    </dl>
                </div>
            </div> -->
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-2">Hasil Diagnosa</h6>
                    <dl class="row mb-0">
                        <dt class="col-sm-4">Diagnosa:</dt>
                        <dd class="col-sm-8">{{$data->diagnosa}}</dd>

                        <dt class="col-sm-4">Persentase :</dt>
                        <dd class="col-sm-8">{{$data->persentase}}%</dd>
                    </dl>
                </div>
            </div>
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-2">Pencegahan / Solusi</h6>
                    <dl class="row mb-0">
                        @if ($data->diagnosa === "Refraksi/Rabun")
                        <dd class="col-sm-12">
                            <ul class="list-unstyled mb-0">
                                <ul>
                                    <li>Membaca dalam posisi duduk dengan penerangan cukup, jarak antara mata dengan buku minimal 30 cm</li>
                                    <li>Mengistirahatkan mata setelah 1-2 jam beraktivitas dengan mata (membaca, menonton televisi, menggunakan komputer, dan lain-lain)</li>
                                    <li>Mengonsumsi makanan yang sehat dan gizi seimbang</li>
                                </ul>
                                <li class="mt-2"><a href="https://www.herminahospitals.com/id/articles/ketahui-kelainan-refraksi-mata-dan-cara-pencegahannya">Info Lebih lanjut pada link berikut</a></li>
                            </ul>
                        </dd>
                        @elseif ($data->diagnosa === "Katarak")
                        <dd class="col-sm-12">
                            <ul class="list-unstyled mb-0">
                                <ul>
                                    <li>Jalani Pemeriksaan Mata Dilatasi secara Teratur</li>
                                    <li>Ketahui Riwayat Kesehatan Mata Keluarga </li>
                                    <li>Berolahraga dengan Aman</li>
                                    <li>Gunakan Obat Tetes Mata yang Diresepkan secara Teratur</li>
                                    <li>Kenakan Pelindung Mata</li>
                                    <li>Konsumsi Makanan yang Sehat</li>
                                    <li>Batasi konsumsi kafein</li>
                                    <li>Tidur dengan Kepala Terangkat</li>
                                </ul>
                                <li class="mt-2"><a href="https://www.alodokter.com/jangan-kalah-dengan-mata-katarak-lawan-risikonya-dengan-cara-ini">Info Lebih lanjut pada link berikut</a></li>
                            </ul>
                        </dd>
                        @elseif ($data->diagnosa === "Glaukoma")
                        <dd class="col-sm-12">
                            <ul class="list-unstyled mb-0">
                                <ul>
                                    <li>Jalani Pemeriksaan Mata Dilatasi secara Teratur</li>
                                    <li>Ketahui Riwayat Kesehatan Mata Keluarga </li>
                                    <li>Berolahraga dengan Aman</li>
                                    <li>Gunakan Obat Tetes Mata yang Diresepkan secara Teratur</li>
                                    <li>Kenakan Pelindung Mata</li>
                                    <li>Konsumsi Makanan yang Sehat</li>
                                    <li>Batasi konsumsi kafein</li>
                                    <li>Tidur dengan Kepala Terangkat</li>
                                </ul>
                                <li class="mt-2"><a href="https://www.halodoc.com/artikel/adakah-cara-untuk-mencegah-glaukoma">Info Lebih lanjut pada link berikut</a></li>
                            </ul>
                        </dd>
                        @elseif ($data->diagnosa === "Strabismus/Mata Juling")
                        <dd class="col-sm-12">
                            <ul class="list-unstyled mb-0">
                                <ul>
                                    <li>Menggunakan kaca mata atau lensa kontak</li>
                                    <li>Memakai penutup mata sementara</li>
                                    <li>Melakukan operasi otot mata</li>
                                    <li>Menggunakan obat tetes mata atau suntik botox</li>
                                    <li>Melakukan uji keseimbangan dan fokus mata</li>
                                </ul>
                                <li class="mt-2"><a href="https://www.alodokter.com/mengenali-dan-mengatasi-gejala-mata-juling-pada-anak">Info Lebih lanjut pada link berikut</a></li>
                            </ul>
                        </dd>
                        @else
                        <dd class="col-sm-8">data kosong</dd>
                        @endif
                    </dl>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
        </div>
    </div>
    </div>
</div>
@endforeach
@endsection
