@extends('admin.master.main')
@section('content')

    <div class="container mt-5">
        <a href="{{route('admin.computer.create')}}" class="btn rounded-pill btn-success">Qo'shish</a>
        <table class="table table-striped table-bordered table-hover mt-3">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Boshqarma ID</th>
                <th scope="col">Model</th>
                <th scope="col">Seria nomeri</th>
                <th scope="col">QMD model</th>
                <th scope="col">QMD seria</th>
                <th scope="col">SSD seria</th>
                <th scope="col">SSD model</th>
                <th scope="col">Monitor number</th>
                <th scope="col">Monitor model</th>
                <th scope="col">Ishlab chiqarilgan sana</th>
                <th scope="col">Hisob olingan sana</th>
                <th scope="col">Olindi</th>
                <th scope="col">Topshirildi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($comp as $com)
                <tr>
                    <td>{{$c++}}</td>
                    <td>{{$com->boshqarma_id}}</td>
                     <td>{{$com->model}}</td>
                    <td>{{$com->seria_name}}</td>
                    <td>{{$com->qmd_model}}</td>
                    <td>{{$com->qmd_seria}}</td>
                    <td>{{$com->ssd_number}}</td>
                    <td>{{$com->ssd_model}}</td>
                    <td>{{$com->monitor_number}}</td>
                    <td>{{$com->monitor_model}}</td>
                    <td>{{$com->ishlangan_sana}}</td>
                    <td>{{$com->hisob_sana}}</td>
                    <td>{{$com->olindi}}</td>
                    <td>{{$com->topshirdi}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
