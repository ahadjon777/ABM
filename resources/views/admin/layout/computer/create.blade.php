@extends('admin.master.main')
@section('content')

    <div class="container " >
        <form action="{{route('admin.computer.store')}}" method="POST">
            @csrf
            @method('post')
            <div class="row mt-3 " style=" padding-left: 80px">
                <h2 class="mb-0 text-center  mb-3">Axborotlashtirish bosh markazi: Kompyuterlar uchun</h2>
                <div class="col-md-5  mb-3 bg-white shadow">
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Boshqarma nomi</label>
                        <select name="boshqarma_id" id="boshqarma_id" class="form-select" aria-label="Default select example">
                           @foreach($boshqarma as $bosh)
                                <option value="{{$bosh->id}}">{{$bosh->name}}</option>
                            @endforeach
                        </select>
{{--                        <input type="" class="form-control" id="exampleInputEmail1"  name="boshqarma_id">--}}
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Modeli</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="model">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Seriya nomeri</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="seria_name">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">QMD Modeli</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="qmd_model">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">QMD Seria</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="qmd_seria">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">SSD Nomer</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="ssd_number">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">SSD Model</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="ssd_model">
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 mb-2 bg-white shadow">
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Monitor Nomer</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="monitor_number">
                    </div>
                    <div class="mb-2 ">
                        <label for="exampleInputEmail1" class="form-label">Monitor Model</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="monitor_model">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Ishlabchiqarilgan sana</label>
                        <input type="datetime-local" class="form-control" id="exampleInputEmail1"  name="ishlangan_sana">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Hisobga olingan sana</label>
                        <input type="datetime-local" class="form-control" id="exampleInputEmail1"  name="hisob_sana">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Olindi</label>
                        <input type="datetime-local" class="form-control" id="exampleInputEmail1"  name="olindi">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Topshirildi</label>
                        <input type="datetime-local" class="form-control" id="exampleInputEmail1"  name="topshirdi">
                    </div>
                    <button type="submit" class="btn rounded-pill btn-primary mt-4 ">Create us</button>
                </div>
            </div>
        </form>
    </div>

@endsection
