@extends('layouts.main')

@section('title', 'Judul Halaman')

@section('content')

    <main>
        <section class="pt-3">
            <div class="container p-3">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-decoration-none text-blue" href="#">Beranda</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="text-decoration-none text-blue" href="{{ url('/katalog') }}">Katalog</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="text-decoration-none text-blue" href="#">Buku Teks Kurikulum Merdeka</a>
                        </li>
                        <li class="breadcrumb-item active">Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)
                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <section>
            <div class="container p-4">
                <div class="row p-3 mb-5"
                    style="background: url(&quot;img/backgroud.png&quot;) 100% / cover no-repeat; border-radius: 15px">
                    <div class="col-lg-3 text-center d-flex align-items-center justify-content-center">
                        <img src="img/Cover.png" class="HeroDetail_img-size__rtKi5" alt="">
                    </div>
                    <div class="col-lg-9 pt-5 pt-md-0">
                        <button class="btn btn-sm rounded-pill btn-outline-danger">Buku PDF</button>
                        <h3 class="my-3">Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)</h3>
                        <button class="btn btn-sm btn-orange py-2 me-3 my-2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-pdf"
                                class="svg-inline--fa fa-file-pdf me-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512">
                                <path fill="currentColor"
                                    d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                </path>
                            </svg>
                            Unduh PDF
                        </button>
                        <button class="btn btn-sm btn-outline-primary py-2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-pdf"
                                class="svg-inline--fa fa-file-pdf me-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512">
                                <path fill="currentColor"
                                    d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                </path>
                            </svg>
                            Baca Online
                        </button>
                        <small class="my-3 text-muted d-block">
                            <a data-bs-toggle="modal" data-bs-target="#reportModal"
                                class="text-decoration-none text-blue ms-2 fw-bold" style="cursor: pointer">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle-exclamation"
                                    class="svg-inline--fa fa-circle-exclamation" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM232 152C232 138.8 242.8 128 256 128s24 10.75 24 24v128c0 13.25-10.75 24-24 24S232 293.3 232 280V152zM256 400c-17.36 0-31.44-14.08-31.44-31.44c0-17.36 14.07-31.44 31.44-31.44s31.44 14.08 31.44 31.44C287.4 385.9 273.4 400 256 400z">
                                    </path>
                                </svg>
                                Lapor disini
                            </a>
                            jika menemukan kesalahan pada buku
                        </small>
                        <div class="row align-items-center mb-3">
                            <div class="col-6 col-lg-2"><span>DETAIL BUKU</span></div>
                            <div class="col-5 col-lg-10 p-0">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 mb-2 mb-md-0">
                                <div>Penerbit</div>
                                <small class="text-muted">Pusat Kurikulum dan Perbukuan </small>
                            </div>
                            <div class="col-lg-3 mb-2 mb-md-0">
                                <div>ISBN</div>
                                <small class="text-muted">978-623-118-362-0</small>
                            </div>
                            <div class="col-lg-2 mb-2 mb-md-0">
                                <div>Edisi</div>
                                <small class="text-muted">Revisi</small>
                            </div>
                            <div class="col-lg-3 mb-2 mb-md-0">
                                <div>Penulis</div>
                                <small class="text-muted">Sofie Dewayani</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container p-3">
                <h4>Ulasan Pembaca</h4>
                <div class="card border-0">
                    <div class="card-header p-4">
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <img src="img/Group.png" class="me-2" alt="">
                                    <span>Belum ada ulasan dari pembaca</span>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <button class="btn btn-outline-blue">Tulis ulasanmu di sini</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container p-3"></div>
        </section>
        <section class="py-5">
            <div class="container p-3">
                <h4>Rekomendasi buku lainnya</h4>
                <div class="row my-3">
                    <div class="col-lg-3 my-2">
                        <a class="text-decoration-none text-dark" href="#">
                            <div class="card border-0 mt-3 CardBook_card__X2bUt">
                                <div class="card-header text-center text-lg-start bg-white p-0 border-0"
                                    style="background-image: url(&quot;/assets/image/home/ellipse-2.png&quot;); background-repeat: no-repeat; background-position: center bottom">
                                    <img src="img/Cover.png"
                                        alt="Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)"
                                        class="CardBook_img-size__uwFHh">
                                </div>
                                <div class="card-body px-5 px-lg-0 py-2">
                                    <span class="badge rounded-pill bg-danger mt-2">PDF</span>
                                    <span class="badge rounded-pill bg-secondary mt-2 ms-1">SD/MI</span>
                                    <div class="my-2">Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 my-2">
                        <a class="text-decoration-none text-dark" href="#">
                            <div class="card border-0 mt-3 CardBook_card__X2bUt">
                                <div class="card-header text-center text-lg-start bg-white p-0 border-0"
                                    style="background-image: url(&quot;/assets/image/home/ellipse-2.png&quot;); background-repeat: no-repeat; background-position: center bottom">
                                    <img src="img/Cover.png"
                                        alt="Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)"
                                        class="CardBook_img-size__uwFHh">
                                </div>
                                <div class="card-body px-5 px-lg-0 py-2">
                                    <span class="badge rounded-pill bg-danger mt-2">PDF</span>
                                    <span class="badge rounded-pill bg-secondary mt-2 ms-1">SD/MI</span>
                                    <div class="my-2">Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 my-2">
                        <a class="text-decoration-none text-dark" href="#">
                            <div class="card border-0 mt-3 CardBook_card__X2bUt">
                                <div class="card-header text-center text-lg-start bg-white p-0 border-0"
                                    style="background-image: url(&quot;/assets/image/home/ellipse-2.png&quot;); background-repeat: no-repeat; background-position: center bottom">
                                    <img src="img/Cover.png"
                                        alt="Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)"
                                        class="CardBook_img-size__uwFHh">
                                </div>
                                <div class="card-body px-5 px-lg-0 py-2">
                                    <span class="badge rounded-pill bg-danger mt-2">PDF</span>
                                    <span class="badge rounded-pill bg-secondary mt-2 ms-1">SD/MI</span>
                                    <div class="my-2">Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 my-2">
                        <a class="text-decoration-none text-dark" href="#">
                            <div class="card border-0 mt-3 CardBook_card__X2bUt">
                                <div class="card-header text-center text-lg-start bg-white p-0 border-0"
                                    style="background-image: url(&quot;/assets/image/home/ellipse-2.png&quot;); background-repeat: no-repeat; background-position: center bottom">
                                    <img src="img/Cover.png"
                                        alt="Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)"
                                        class="CardBook_img-size__uwFHh">
                                </div>
                                <div class="card-body px-5 px-lg-0 py-2">
                                    <span class="badge rounded-pill bg-danger mt-2">PDF</span>
                                    <span class="badge rounded-pill bg-secondary mt-2 ms-1">SD/MI</span>
                                    <div class="my-2">Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
