@extends('layouts.main')

@section('title','Judul Halaman')

@section('content')

<main>
        <section id="catalog">
          <div class="container px-3 py-5">
            <div class="row justify-content-center">
              <div class="col-lg-3">
                <h4>Buku Teks Kurikulum Merdeka</h4>
                <div class="card mt-3">
                  <div class="card-header">TIPE BUKU</div>
                  <div class="card-body">
                    <div class="form-check">
                      <input class="form-check-input" name="type_book" type="checkbox" id="typePDF">
                      <label class="form-check-label" for="typePDF">Buku PDF</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="type_book" type="checkbox" id="typeInteractive">
                      <label class="form-check-label" for="typeInteractive">Buku Interaktif</label>
                    </div>
                  </div>
                </div>
                <div class="card mt-3">
                  <div class="card-header">Kelas</div>
                  <div class="card-body row overflow-auto">
                    <div class="col-6">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="VII" value="">
                        <label class="form-check-label" for="VII">VII</label>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="X" value="">
                        <label class="form-check-label" for="X">X</label>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="VIII" value="">
                        <label class="form-check-label" for="VIII">VIII</label>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="XI" value="">
                        <label class="form-check-label" for="XI">XI</label>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="IX" value="">
                        <label class="form-check-label" for="IX">IX</label>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="XII" value="">
                        <label class="form-check-label" for="XII">XII</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mt-3">
                  <div class="card-header">MATA PELAJARAN</div>
                  <div class="card-body overflow-auto" style="height: 230px">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="IPA" value="">
                      <label class="form-check-label" for="IPA">IPA</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="IPS" value="">
                      <label class="form-check-label" for="IPS">IPS</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Bahasa Indonesia" value="">
                      <label class="form-check-label" for="Bahasa Indonesia">Bahasa Indonesia</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Bahasa Inggris" value="">
                      <label class="form-check-label" for="Bahasa Inggris">Bahasa Inggris</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Matematika" value="">
                      <label class="form-check-label" for="Matematika">Matematika</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="PKN" value="">
                      <label class="form-check-label" for="PKN">PKN</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Informatika" value="">
                      <label class="form-check-label" for="Informatika">Informatika</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="PJOK" value="">
                      <label class="form-check-label" for="PJOK">PJOK</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Agama Islam" value="">
                      <label class="form-check-label" for="Agama Islam">Agama Islam</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Agama Kristen" value="">
                      <label class="form-check-label" for="Agama Kristen">Agama Kristen</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Agama Katolik" value="">
                      <label class="form-check-label" for="Agama Katolik">Agama Katolik</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Agama Hindu" value="">
                      <label class="form-check-label" for="Agama Hindu">Agama Hindu</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Agama Buddha" value="">
                      <label class="form-check-label" for="Agama Buddha">Agama Buddha</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Agama Khonghucu" value="">
                      <label class="form-check-label" for="Agama Khonghucu">Agama Khonghucu</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Kepercayaan" value="">
                      <label class="form-check-label" for="Kepercayaan">Kepercayaan</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Seni Tari" value="">
                      <label class="form-check-label" for="Seni Tari">Seni Tari</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Seni Musik" value="">
                      <label class="form-check-label" for="Seni Musik">Seni Musik</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Seni Rupa" value="">
                      <label class="form-check-label" for="Seni Rupa">Seni Rupa</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Seni Teater" value="">
                      <label class="form-check-label" for="Seni Teater">Seni Teater</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Sosiologi" value="">
                      <label class="form-check-label" for="Sosiologi">Sosiologi</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Antropologi" value="">
                      <label class="form-check-label" for="Antropologi">Antropologi</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Ekonomi" value="">
                      <label class="form-check-label" for="Ekonomi">Ekonomi</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Geografi" value="">
                      <label class="form-check-label" for="Geografi">Geografi</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Sejarah" value="">
                      <label class="form-check-label" for="Sejarah">Sejarah</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Prakarya" value="">
                      <label class="form-check-label" for="Prakarya">Prakarya</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="IPAS" value="">
                      <label class="form-check-label" for="IPAS">IPAS</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Teknik Konstruksi dan Perumahan" value="">
                      <label class="form-check-label" for="Teknik Konstruksi dan Perumahan">Teknik Konstruksi dan Perumahan</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Teknik Otomotif" value="">
                      <label class="form-check-label" for="Teknik Otomotif">Teknik Otomotif</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Teknik Elektronika" value="">
                      <label class="form-check-label" for="Teknik Elektronika">Teknik Elektronika</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Teknik Pesawat Udara" value="">
                      <label class="form-check-label" for="Teknik Pesawat Udara">Teknik Pesawat Udara</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Teknik Konstruksi Kapal" value="">
                      <label class="form-check-label" for="Teknik Konstruksi Kapal">Teknik Konstruksi Kapal</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Teknik Ketenagalistrikan" value="">
                      <label class="form-check-label" for="Teknik Ketenagalistrikan">Teknik Ketenagalistrikan</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Teknik Geospasial" value="">
                      <label class="form-check-label" for="Teknik Geospasial">Teknik Geospasial</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Teknik Geologi Pertambangan" value="">
                      <label class="form-check-label" for="Teknik Geologi Pertambangan">Teknik Geologi Pertambangan</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Layanan Kesehatan" value="">
                      <label class="form-check-label" for="Layanan Kesehatan">Layanan Kesehatan</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Agriteknologi Pengolahan Hasil Pertanian" value="">
                      <label class="form-check-label" for="Agriteknologi Pengolahan Hasil Pertanian">Agriteknologi Pengolahan Hasil Pertanian</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Manajemen Perkantoran dan Layanan Bisnis" value="">
                      <label class="form-check-label" for="Manajemen Perkantoran dan Layanan Bisnis">Manajemen Perkantoran dan Layanan Bisnis</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Usaha Layanan Pariwisata" value="">
                      <label class="form-check-label" for="Usaha Layanan Pariwisata">Usaha Layanan Pariwisata</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Desain Komunikasi Visual" value="">
                      <label class="form-check-label" for="Desain Komunikasi Visual">Desain Komunikasi Visual</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Teknik Furniture" value="">
                      <label class="form-check-label" for="Teknik Furniture">Teknik Furniture</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Kuliner" value="">
                      <label class="form-check-label" for="Kuliner">Kuliner</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Biologi" value="">
                      <label class="form-check-label" for="Biologi">Biologi</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Fisika" value="">
                      <label class="form-check-label" for="Fisika">Fisika</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Kimia" value="">
                      <label class="form-check-label" for="Kimia">Kimia</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-9">
                <div class="row">
                  <div class="col-8 col-lg-8 position-relative">
                    <div class="input-group shadow-sm">
                      <input type="text" class="form-control py-2 border-start-0 border-end-0 px-1" placeholder="Cari buku disini" value="">
                      <button class="btn btn-orange" type="button">Cari</button>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 my-2">
                    <a class="text-decoration-none text-dark" href="{{ url('/detail') }}">
                      <div class="card border-0 mt-3 CardBook_card__X2bUt">
                        <div class="card-header text-center text-lg-start bg-white p-0 border-0" style="background-image: url(&quot;/assets/image/home/ellipse-2.png&quot;); background-repeat: no-repeat; background-position: center bottom">
                          <img src="{{ asset('img/Cover.png') }}" alt="Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)" class="CardBook_img-size__uwFHh">
                        </div>
                        <div class="card-body px-5 px-lg-0 py-2">
                          <span class="badge rounded-pill bg-danger mt-2">PDF</span>
                          <span class="badge rounded-pill bg-secondary mt-2 ms-1">SD/MI</span>
                          <div class="my-2">Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 my-2">
                    <a class="text-decoration-none text-dark" href="{{ url('/detail') }}">
                      <div class="card border-0 mt-3 CardBook_card__X2bUt">
                        <div class="card-header text-center text-lg-start bg-white p-0 border-0" style="background-image: url(&quot;/assets/image/home/ellipse-2.png&quot;); background-repeat: no-repeat; background-position: center bottom">
                          <img src="{{ asset('img/Cover.png') }}" alt="Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)" class="CardBook_img-size__uwFHh">
                        </div>
                        <div class="card-body px-5 px-lg-0 py-2">
                          <span class="badge rounded-pill bg-danger mt-2">PDF</span>
                          <span class="badge rounded-pill bg-secondary mt-2 ms-1">SD/MI</span>
                          <div class="my-2">Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 my-2">
                    <a class="text-decoration-none text-dark" href="{{ url('/detail') }}">
                      <div class="card border-0 mt-3 CardBook_card__X2bUt">
                        <div class="card-header text-center text-lg-start bg-white p-0 border-0" style="background-image: url(&quot;/assets/image/home/ellipse-2.png&quot;); background-repeat: no-repeat; background-position: center bottom">
                          <img src="{{ asset('img/Cover.png') }}" alt="Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)" class="CardBook_img-size__uwFHh">
                        </div>
                        <div class="card-body px-5 px-lg-0 py-2">
                          <span class="badge rounded-pill bg-danger mt-2">PDF</span>
                          <span class="badge rounded-pill bg-secondary mt-2 ms-1">SD/MI</span>
                          <div class="my-2">Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 my-2">
                    <a class="text-decoration-none text-dark" href="{{ url('/detail') }}">
                      <div class="card border-0 mt-3 CardBook_card__X2bUt">
                        <div class="card-header text-center text-lg-start bg-white p-0 border-0" style="background-image: url(&quot;/assets/image/home/ellipse-2.png&quot;); background-repeat: no-repeat; background-position: center bottom">
                          <img src="{{ asset('img/Cover.png') }}" alt="Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)" class="CardBook_img-size__uwFHh">
                        </div>
                        <div class="card-body px-5 px-lg-0 py-2">
                          <span class="badge rounded-pill bg-danger mt-2">PDF</span>
                          <span class="badge rounded-pill bg-secondary mt-2 ms-1">SD/MI</span>
                          <div class="my-2">Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 my-2">
                    <a class="text-decoration-none text-dark" href="{{ url('/detail') }}">
                      <div class="card border-0 mt-3 CardBook_card__X2bUt">
                        <div class="card-header text-center text-lg-start bg-white p-0 border-0" style="background-image: url(&quot;/assets/image/home/ellipse-2.png&quot;); background-repeat: no-repeat; background-position: center bottom">
                          <img src="{{ asset('img/Cover.png') }}" alt="Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)" class="CardBook_img-size__uwFHh">
                        </div>
                        <div class="card-body px-5 px-lg-0 py-2">
                          <span class="badge rounded-pill bg-danger mt-2">PDF</span>
                          <span class="badge rounded-pill bg-secondary mt-2 ms-1">SD/MI</span>
                          <div class="my-2">Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 my-2">
                    <a class="text-decoration-none text-dark" href="{{ url('/detail') }}">
                      <div class="card border-0 mt-3 CardBook_card__X2bUt">
                        <div class="card-header text-center text-lg-start bg-white p-0 border-0" style="background-image: url(&quot;/assets/image/home/ellipse-2.png&quot;); background-repeat: no-repeat; background-position: center bottom">
                          <img src="{{ asset('img/Cover.png') }}" alt="Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)" class="CardBook_img-size__uwFHh">
                        </div>
                        <div class="card-body px-5 px-lg-0 py-2">
                          <span class="badge rounded-pill bg-danger mt-2">PDF</span>
                          <span class="badge rounded-pill bg-secondary mt-2 ms-1">SD/MI</span>
                          <div class="my-2">Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 my-2">
                    <a class="text-decoration-none text-dark" href="{{ url('/detail') }}">
                      <div class="card border-0 mt-3 CardBook_card__X2bUt">
                        <div class="card-header text-center text-lg-start bg-white p-0 border-0" style="background-image: url(&quot;/assets/image/home/ellipse-2.png&quot;); background-repeat: no-repeat; background-position: center bottom">
                          <img src="{{ asset('img/Cover.png') }}" alt="Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)" class="CardBook_img-size__uwFHh">
                        </div>
                        <div class="card-body px-5 px-lg-0 py-2">
                          <span class="badge rounded-pill bg-danger mt-2">PDF</span>
                          <span class="badge rounded-pill bg-secondary mt-2 ms-1">SD/MI</span>
                          <div class="my-2">Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 my-2">
                    <a class="text-decoration-none text-dark" href="{{ url('/detail') }}">
                      <div class="card border-0 mt-3 CardBook_card__X2bUt">
                        <div class="card-header text-center text-lg-start bg-white p-0 border-0" style="background-image: url(&quot;/assets/image/home/ellipse-2.png&quot;); background-repeat: no-repeat; background-position: center bottom">
                          <img src="{{ asset('img/Cover.png') }}" alt="Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)" class="CardBook_img-size__uwFHh">
                        </div>
                        <div class="card-body px-5 px-lg-0 py-2">
                          <span class="badge rounded-pill bg-danger mt-2">PDF</span>
                          <span class="badge rounded-pill bg-secondary mt-2 ms-1">SD/MI</span>
                          <div class="my-2">Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 my-2">
                    <a class="text-decoration-none text-dark" href="{{ url('/detail') }}">
                      <div class="card border-0 mt-3 CardBook_card__X2bUt">
                        <div class="card-header text-center text-lg-start bg-white p-0 border-0" style="background-image: url(&quot;/assets/image/home/ellipse-2.png&quot;); background-repeat: no-repeat; background-position: center bottom">
                          <img src="{{ asset('img/Cover.png') }}" alt="Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)" class="CardBook_img-size__uwFHh">
                        </div>
                        <div class="card-body px-5 px-lg-0 py-2">
                          <span class="badge rounded-pill bg-danger mt-2">PDF</span>
                          <span class="badge rounded-pill bg-secondary mt-2 ms-1">SD/MI</span>
                          <div class="my-2">Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 my-2">
                    <a class="text-decoration-none text-dark" href="{{ url('/detail') }}">
                      <div class="card border-0 mt-3 CardBook_card__X2bUt">
                        <div class="card-header text-center text-lg-start bg-white p-0 border-0" style="background-image: url(&quot;/assets/image/home/ellipse-2.png&quot;); background-repeat: no-repeat; background-position: center bottom">
                          <img src="{{ asset('img/Cover.png') }}" alt="Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)" class="CardBook_img-size__uwFHh">
                        </div>
                        <div class="card-body px-5 px-lg-0 py-2">
                          <span class="badge rounded-pill bg-danger mt-2">PDF</span>
                          <span class="badge rounded-pill bg-secondary mt-2 ms-1">SD/MI</span>
                          <div class="my-2">Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 my-2">
                    <a class="text-decoration-none text-dark" href="{{ url('/detail') }}">
                      <div class="card border-0 mt-3 CardBook_card__X2bUt">
                        <div class="card-header text-center text-lg-start bg-white p-0 border-0" style="background-image: url(&quot;/assets/image/home/ellipse-2.png&quot;); background-repeat: no-repeat; background-position: center bottom">
                          <img src="{{ asset('img/Cover.png') }}" alt="Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)" class="CardBook_img-size__uwFHh">
                        </div>
                        <div class="card-body px-5 px-lg-0 py-2">
                          <span class="badge rounded-pill bg-danger mt-2">PDF</span>
                          <span class="badge rounded-pill bg-secondary mt-2 ms-1">SD/MI</span>
                          <div class="my-2">Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 my-2">
                    <a class="text-decoration-none text-dark" href="{{ url('/detail') }}">
                      <div class="card border-0 mt-3 CardBook_card__X2bUt">
                        <div class="card-header text-center text-lg-start bg-white p-0 border-0" style="background-image: url(&quot;/assets/image/home/ellipse-2.png&quot;); background-repeat: no-repeat; background-position: center bottom">
                          <img src="{{ asset('img/Cover.png') }}" alt="Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)" class="CardBook_img-size__uwFHh">
                        </div>
                        <div class="card-body px-5 px-lg-0 py-2">
                          <span class="badge rounded-pill bg-danger mt-2">PDF</span>
                          <span class="badge rounded-pill bg-secondary mt-2 ms-1">SD/MI</span>
                          <div class="my-2">Bahasa Indonesia: Aku Bisa! untuk SD/MI Kelas I (Edisi Revisi)</div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="mt-4">
                  <div>
                    <ul class="react-hooks-paginator">
                      <li class="page-item active">
                        <button class="page-link">1</button>
                      </li>
                      <li class="page-item null">
                        <button class="page-link">2</button>
                      </li>
                      <li class="page-item null">
                        <button class="page-link">3</button>
                      </li>
                      <li class="page-item">
                        <button class="page-link">...</button>
                      </li>
                      <li class="page-item null">
                        <button class="page-link">49</button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      @endsection
