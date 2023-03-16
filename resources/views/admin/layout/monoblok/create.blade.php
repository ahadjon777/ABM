@extends('admin.master.main')
@section('content')

    <div class="container">
        <form action="{{route('admin.monoblok.store')}}" method="POST">
            @csrf
            @method('post')
            <div class="row mt-5" style="padding-left:  80px">
                <h2 class="mb-0 text-center mb-5 ">Axborotlashtirish bosh markazi: Monobloklar uchun</h2>
                <div class="col-md-5  mb-3 bg-white shadow">
                    <div class="mb-2">

                        <select name="boshqarma_id" id="boshqarma_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="margin-top: 20px;">
                            <option selected> Boshqarmalar</option>
                            @foreach($boshqar as $bosh)
                                <option value="{{$bosh->id}}">{{$bosh->name}}</option>
                            @endforeach
                        </select>

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
                        <label for="exampleInputEmail1" class="form-label">OZU hajmi</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="ozu_hajmi">
                    </div>
                    <button type="submit" class="btn btn-primary mb-3 ">Create us</button>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 mb-2 bg-white shadow">

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

                </div>
            </div>
        </form>
    </div>


@endsection
