@extends('admin.master.main')
@section('content')

    <div class="container mt-5">
        <a href="{{route('admin.monoblok.create')}}" class="btn rounded-pill btn-success">create</a>
        <table class="table table-striped table-bordered table-hover mt-3">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Boshqarma ID</th>
                <th scope="col">Model</th>
                <th scope="col">Seria nomeri</th>
                <th scope="col">Ozu hajmi</th>
                <th scope="col">Ishlab chiqarilgan sana</th>
                <th scope="col">Hisob olingan sana</th>
                <th scope="col">Olindi</th>
                <th scope="col">Topshirildi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($mono as $mon)
                <tr>
                    <td>{{$m++}}</td>
                    <td>{{$mon->boshqarma_id}}</td>
                    <td>{{$mon->model}}</td>
                    <td>{{$mon->seria_name}}</td>
                    <td>{{$mon->ozu_hajmi}}</td>
                    <td>{{$mon->ishlangan_sana}}</td>
                    <td>{{$mon->hisob_sana}}</td>
                    <td>{{$mon->olindi}}</td>
                    <td>{{$mon->topshirdi}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
