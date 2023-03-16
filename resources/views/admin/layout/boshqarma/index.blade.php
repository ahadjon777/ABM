@extends('admin.master.main')
@section('content')

    <div class="container ">
        <h2 style="text-align:center; margin-top: 25px;">Boshqarmalar ro'yxati</h2>
        <a href="{{route('admin.boshqarma.create')}}" class="btn rounded-pill btn-success mt-2">boshqarmani kiritish</a>
        {{--search qismi--}}
        {{--<form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>--}}
        <table class="table  shadow mt-3 text-center table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Boshqarmalar</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
       @foreach($boshqarma as $bosh)
           <tr>
               <td>{{$c++}}</td>
               <td>{{$bosh->name}}</td>
               <form action="{{route('admin.boshqarma.destroy', $bosh)}}" method="POST">
                   @csrf
                   @method('delete')
                   <td>
                       <a href="{{route('admin.boshqarma.edit', $bosh)}}" class="btn rounded-pill btn-success">O'zgartirish</a>
                       <a href="{{route('admin.boshqarma.show', $bosh)}}" class="btn rounded-pill btn-primary">Ko'rish</a>
                       <button type="submit" class="btn rounded-pill btn-danger">Delete</button>
                   </td>

               </form>
           </tr>
       @endforeach
            </tbody>
        </table>
    </div>

@endsection
