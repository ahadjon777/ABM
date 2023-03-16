@extends('admin.master.main')
@section('content')

    <div class="container mt-5">
        <form action="{{route('admin.boshqarma.store')}}" method="POST">
            @csrf
            @method('post')
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Boshqarmani kiritish</h5>
                    <small class="text-muted float-end">ABM</small>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" name="name" placeholder="Boshqama" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Message</label>
                            <div class="col-sm-10">
                            <textarea
                                id="basic-default-message"
                                class="form-control"
                                placeholder="Hi, Do you have a moment to talk Joe?"
                                aria-label="Hi, Do you have a moment to talk Joe?"
                                aria-describedby="basic-icon-default-message2"
                                name="desc"
                            ></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn rounded-pill btn-primary">Yaratish</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </form>
    </div>

@endsection
