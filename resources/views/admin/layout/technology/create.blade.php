@extends('admin.master.main')
@section('content')

    <div class="container " >
        <form action="{{route('admin.technology.store')}}" method="POST">
            @csrf
            @method('post')
            <div class="row mt-3 " style=" padding-left: 80px">
                <h2 class="mb-0 text-center  mb-3">Axborotlashtirish bosh markazi: Axborot vositalari uchun</h2>
                <div class="col-md-5  mb-4 bg-white shadow">
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Boshqarma nomi</label>
                        <select name="boshqarma_id" id="boshqarma_id" class="form-select" aria-label="Default select example">
                            @foreach($boshqarma as $bosh)
                                <option value="{{$bosh->id}}">{{$bosh->name}}</option>
                            @endforeach
                        </select>
                        {{--<input type="" class="form-control" id="exampleInputEmail1"  name="boshqarma_id">--}}
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Qurilma nomi</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="qurilma_nomi">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Formulyar raqami</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="formulyar_raqami">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Modeli</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="model">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Seriya nomeri</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="seria_nomer">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">OZU hajmi</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="ozu_hajmi">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">QMD Modeli</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="qmd_model">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">QMD Seria</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="qmd_nomer">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">SSD Model</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="ssd_model">
                    </div>

                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 mb-4 bg-white shadow">
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">SSD Nomer</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="ssd_nomer">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Monitor1 model</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="monitor1_model">
                    </div>
                    <div class="mb-2 ">
                        <label for="exampleInputEmail1" class="form-label">Monitor1 nomer</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="monitor1_nomer">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Monitor2 model</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="monitor2_model">
                    </div>
                    <div class="mb-2 ">
                        <label for="exampleInputEmail1" class="form-label">Monitor2 nomer</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="monitor2_nomer">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Ishlabchiqarilgan sana</label>
                        <input type="datetime-local" class="form-control" id="exampleInputEmail1"  name="ishlabchiqarilgan_sana">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Hisobga olingan sana</label>
                        <input type="datetime-local" class="form-control" id="exampleInputEmail1"  name="hisobgaolingan_sana">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Olindi</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="olindi">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Topshirildi</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="topshirildi">
                    </div>
                    <button type="submit" class="btn rounded-pill btn-primary mt-2 ">Yaratish</button>
                </div>
            </div>
        </form>
    </div>

@endsection
