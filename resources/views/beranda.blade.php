@extends('welcome')
@section('Title', 'Beranda')

@section('Content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">  
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Data Penyakit Mata Tersedia</h6>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <!-- <th scope="col">Check</th> -->
                        <th scope="col">Kode</th>
                        <th scope="col">Penyakit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($penyakit as $data)
                    <tr>
                        <!-- <td><input class="form-check-input" type="checkbox"></td> -->
                        <td>{{$data->kode_penyakit}}</td>
                        <td>{{$data->nama_penyakit}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>             
    </div>
</div>
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Detail Penyakit Mata </h6>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="true" aria-controls="flush-collapseOne">
                                            <strong>Katarak</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body" style="text-align: justify; text-justify: inter-word;">
                                            <strong>Pengertian Katarak</strong><br>
                                            Katarak adalah suatu penyakit ketika lensa mata menjadi keruh dan berawan. 
                                            Pada umumnya, katarak berkembang perlahan dan awalnya tidak terasa mengganggu. 
                                            Namun, lama-kelamaan, katarak akan mengganggu penglihatan dan membuat pengidap merasa 
                                            seperti melihat jendela berkabut, sulit menyetir, membaca, serta melakukan aktivitas sehari-hari. 
                                            Penyakit ini merupakan penyebab kebutaan utama di dunia yang dapat diobati.
                                            <br><br>
                                            <strong>Penyebab Katarak</strong><br>
                                            Penyebab katarak yang paling umum ditemui adalah akibat proses penuaan atau trauma yang menyebabkan 
                                            perubahan pada jaringan mata. Lensa mata sebagian besar terdiri dari air dan protein. 
                                            Dengan bertambahnya usia, lensa menjadi semakin tebal dan tidak fleksibel. Hal ini menyebabkan gumpalan 
                                            protein dan mengurangi cahaya yang masuk ke retina, sebuah lapisan yang sensitif terhadap cahaya yang 
                                            terletak di belakang dalam mata, yang pada akhirnya menyebabkan pandangan kabur dan tidak tajam. 
                                            Perubahan lensa diawali dengan warna kuning kecokelatan ringan, tetapi semakin memburuk seiring dengan 
                                            bertambahnya waktu <br><br>
                                            <a href="https://www.halodoc.com/kesehatan/katarak">Lihat Detailnya Disini</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Glaukoma</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body " style="text-align: justify; text-justify: inter-word;">
                                            <strong>Pengertian Glaukoma</strong><br>
                                            Glaukoma adalah jenis gangguan penglihatan yang ditandai dengan terjadinya 
                                            kerusakan saraf mata. Kerusakan ini sering disebabkan oleh tekanan tinggi pada mata. 
                                            Glaukoma bisa dibagi menjadi beberapa jenis, yaitu: Glaukoma Sudut Tertutup, 
                                            Glaukoma Sudut Terbuka, Glaukoma Sekunder Glaukoma Kongenital 
                                            <br><br>
                                            <strong>Penyebab Glaukoma</strong><br>
                                            Penyebab glaukoma terjadi karena meningkatnya tekanan di dalam mata (tekanan intraokular), 
                                            baik akibat produksi cairan mata yang berlebihan, maupun akibat terhalangnya saluran pembuangan 
                                            cairan tersebut. Tekanan ini dapat merusak serabut saraf retina, yaitu jaringan saraf yang melapisi bagian belakang 
                                            mata, dan saraf optik yang menghubungkan mata ke otak. Hingga kini, belum jelas kenapa produksi 
                                            cairan mata bisa berlebihan atau kenapa saluran pembuangannya bisa tersumbat. <br><br>
                                            <a href="https://www.halodoc.com/kesehatan/glaukoma">Lihat Detailnya Disini</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong>Refraksi/Rabun</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body " style="text-align: justify; text-justify: inter-word;">
                                            <strong>Pengertian Refraksi/Rabun</strong><br>
                                            Refraksi mata merupakan proses masuknya cahaya dari bagian depan mata (kornea, pupil, retina) 
                                            untuk dibiaskan tepat pada retina (bagian belakang mata). Dengan begitu, objek dapat terlihat jelas. 
                                            Masalah penglihatan yang paling sering terjadi adalah kelainan refraksi mata. Orang yang memiliki 
                                            masalah pada refraksi mata akan mengeluh pandangannya buram saat melihat benda yang letaknya jauh, 
                                            dekat, atau keduanya. Refraksi/Rabun bisa dibagi menjadi beberapa jenis, yaitu: Rabun Jauh (Miopi), 
                                            Rabun dekat (Hipermetropi), Mata silinder (Astigmatisme), Mata tua (Presbiopi)
                                            <br><br>
                                            <strong>Penyebab Refraksi/Rabun</strong><br>
                                            Siapa pun sebenarnya bisa mengalami kelainan refraksi. Namun, terdapat beberapa faktor risiko penyebab terjadinya gangguan penglihatan, yaitu: 
                                            <br><strong>1. Genetik atau keturunan : </strong>Mempunyai anggota keluarga yang memiliki mata rabun meningkatkan risiko mengalami hal serupa.
                                            <br><strong>2. Usia : </strong>Sebagian besar kasus rabun jauh mulai dialami ketika anak-anak. Sementara presbiopi merupakan gangguan penglihatan yang umumnya 
                                            diderita oleh orang berumur 40 tahun atau lebih.
                                            <br><strong>3. Penyakit mata atau kelainan genetik lainnya : </strong>Jika mengalami penyakit katarak atau glaukoma, komplikasi penyakit 
                                            lain seperti diabetes, dan kelainan genetik pada mata, maka Sahabat Hermina berisiko mengalami kelainan refraksi.
                                            <br><br>
                                            <a href="https://herminahospitals.com/id/articles/ketahui-kelainan-refraksi-mata-dan-cara-pencegahannya.html">Lihat Detailnya Disini</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                            aria-expanded="false" aria-controls="flush-collapseFour">
                                            <strong>Strabismus/Mata Juling</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body " style="text-align: justify; text-justify: inter-word;">
                                            <strong>Pengertian Strabismus/Mata Juling</strong><br>
                                            Strabismus atau mata juling adalah kondisi saat posisi kedua mata tidak sejajar dan keduanya 
                                            bergerak ke arah yang berbeda. Pada kondisi ini, salah satu mata biasanya mengarah depan, tapi 
                                            mata yang lain bisa melihat ke samping, atas, atau bawah. Penyebab mata juling (strabismus) adalah 
                                            kontrol otot mata yang tidak berfungsi dengan baik. Itu sebabnya, salah satu mata akan berfokus 
                                            ke arah tertentu, sedangkan mata lainnya melihat ke arah yang berbeda.
                                            <br><br>
                                            <strong>Penyebab Strabismus/Mata Juling</strong><br>
                                            Pada kebanyakan kasus, penyebab mata juling dipengaruhi oleh faktor keturunan sehingga disebut juga 
                                            dengan strabismus bawaan. Secara umum mata juling disebabkan oleh pergerakan otot mata yang tidak 
                                            berfungsi dengan baik.Terdapat 6 otot berbeda di setiap mata. Otot-otot ini bekerja secara bersamaan 
                                            untuk menggerakkan mata. Dengan begitu, kedua mata Anda bisa fokus melihat suatu objek secara bersamaan.
                                            <br><br>
                                            Pada penderita strabismus, otot-otot mata tersebut tidak mampu bekerja bersamaan. Akibatnya, salah satu 
                                            mata fokus melihat ke suatu objek, sementara yang lainnya melihat ke arah yang berbeda. Hal tersebut 
                                            menyebabkan retina mengirimkan dua sinyal berbeda ke otak. Ini tentu dapat membingungkan otak dalam memproses 
                                            sinyal menjadi gambar. Seringnya otak akan mengabaikan sinyal yang dikirim oleh mata yang fokus dan 
                                            pergerakannya lebih lemah.
                                            <br><br>
                                            <a href="https://hellosehat.com/mata/gangguan-penglihatan/strabismus/">Lihat Detailnya Disini</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-md-6 col-xl-6">
            <div class="h-100 bg-light rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Calender</h6>
                    <a href="">Show All</a>
                </div>
                <div id="calender"></div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <iframe class="position-relative rounded w-100 h-100"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7105.432564710319!2d116.86219799999999!3d-1.149937!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8489d5309f45c0db!2sInstitut%20Teknologi%20Kalimantan!5e1!3m2!1sid!2sid!4v1653098362456!5m2!1sid!2sid"
                frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>  
@endsection

@section('Footer')
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">SIDATA</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
@endsection