@extends('layouts.main')

@section('title', 'Daftar Buku')

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
                                @foreach ($tipeList as $tipe)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="{{ $tipe->tipe }}" value="{{ $tipe->tipe }}">
                                        <label class="form-check-label" for="{{ $tipe->tipe }}">Buku {{ $tipe->tipe }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">JENJANG</div>
                            <div class="card-body">
                                @foreach ($jenjangList as $jenjang)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="{{ $jenjang->jenjang }}" value="{{ $jenjang->jenjang }}">
                                        <label class="form-check-label" for="{{ $jenjang->jenjang }}">{{ $jenjang->jenjang }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">Kelas</div>
                            <div class="card-body row overflow-auto">
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="I"value="">
                                        <label class="form-check-label" for="I">I</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="VII" value="">
                                        <label class="form-check-label" for="VII">VII</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="II" value="">
                                        <label class="form-check-label" for="II">II</label>
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
                                        <input class="form-check-input" type="checkbox" id="III" value="">
                                        <label class="form-check-label" for="III">III</label>
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
                                        <input class="form-check-input" type="checkbox" id="IV" value="">
                                        <label class="form-check-label" for="IV">IV</label>
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
                                        <input class="form-check-input" type="checkbox" id="V" value="">
                                        <label class="form-check-label" for="V">V</label>
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
                                        <input class="form-check-input" type="checkbox" id="VI" value="">
                                        <label class="form-check-label" for="VI">VI</label>
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
                                @foreach ($mapelList as $mapel)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="{{ $mapel->mapel }}" value="{{ $mapel->mapel }}">
                                        <label class="form-check-label" for="{{ $mapel->mapel }}">{{ $mapel->mapel }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-8 col-lg-8 position-relative">
                                <div class="input-group shadow-sm">
                                    <input type="text" class="form-control py-2 border-start-0 border-end-0 px-1"
                                        placeholder="Cari buku disini" value="">
                                    <button class="btn btn-orange" type="button">Cari</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($bukuList as $buku)
                                <div class="col-lg-4 my-2">
                                    <a class="text-decoration-none text-dark"
                                        href="{{ url('/detail', ['id' => $buku->id]) }}">
                                        <div class="card border-0 mt-3 CardBook_card__X2bUt">
                                            <div class="card-header text-center text-lg-start bg-white p-0 border-0"
                                                style="background-image: url({{ asset('img/ellipse-1.png') }}); background-repeat: no-repeat; background-position: center bottom">
                                                @if ($buku->gambar)
                                                <img src="{{ Storage::url($buku->gambar) }}" alt="{{ $buku->nama }}" class="CardBook_img-size__uwFHh">
                                                @else
                                                    Tidak ada gambar
                                                @endif
                                            </div>
                                            <div class="card-body px-5 py-2">
                                                <span class="badge rounded-pill bg-danger mt-2">{{ $buku->tipe->tipe }}</span>
                                                <span class="badge rounded-pill bg-secondary mt-2 ms-1">{{ $buku->jenjang->jenjang }}</span>
                                                <div class="my-2">{{ $buku->nama }}</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
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
