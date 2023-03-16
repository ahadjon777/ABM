@extends('admin.master.main')
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 bg-label-light pb-5">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.profile')}}"
                        ><i class="bx bx-user me-1"></i> Account</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.notification')}}"
                        ><i class="bx bx-bell me-1"></i> Notifications</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('admin.connection')}}"
                        ><i class="bx bx-link-alt me-1"></i> Connections</a
                        >
                    </li>
                </ul>

                <div class="row">
                    <div class="col-md-6 col-12 mb-md-0 mb-4">
                        <div class="card">
                            <h5 class="card-header">Connected Accounts</h5>
                            <div class="card-body">
                                <p>Display content from your connected accounts on your site</p>
                                <!-- Connections -->
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <img src="{{asset('admin/assets/img/icons/brands/google.png')}}" alt="google" class="me-3" height="30" />
                                    </div>
                                    <div class="flex-grow-1 row">
                                        <div class="col-9 mb-sm-0 mb-2">
                                            <h6 class="mb-0">Google</h6>
                                            <small class="text-muted">@if(isset($setting->google)) {{$setting->google}}@endif</small>
                                        </div>
                                        <div class="col-3 text-end">
                                            <div class="form-check form-switch">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Google</button>
                                                <form action="{{route('admin.profile.social', 'google')}}" method="POST">
                                                    @method('put')
                                                    @csrf
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Google account</h1>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <input name="google" type="text" class="form-control">
                                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>

{{--                                                <input class="form-check-input float-end" type="button" role="switch" />--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <img src="{{asset('admin/assets/img/icons/brands/slack.png')}}" alt="slack" class="me-3" height="30" />
                                    </div>
                                    <div class="flex-grow-1 row">
                                        <div class="col-9 mb-sm-0 mb-2">
                                            <h6 class="mb-0">Slack</h6>
                                            <small class="text-muted">Communication</small>
                                        </div>
                                        <div class="col-3 text-end">
                                            <div class="form-check form-switch">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Slack</button>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Send message</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
{{--                                                <input class="form-check-input float-end" type="checkbox" role="switch" checked />--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <img src="{{asset('admin/assets/img/icons/brands/github.png')}}" alt="github" class="me-3" height="30" />
                                    </div>
                                    <div class="flex-grow-1 row">
                                        <div class="col-9 mb-sm-0 mb-2">
                                            <h6 class="mb-0">Github</h6>
                                            <small class="text-muted">Manage your Git repositories</small>
                                        </div>
                                        <div class="col-3 text-end">
                                            <div class="form-check form-switch">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Github</button>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Send message</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <img
                                            src="{{asset('admin/assets/img/icons/brands/mailchimp.png')}}"
                                            alt="mailchimp"
                                            class="me-3"
                                            height="30"
                                        />
                                    </div>
                                    <div class="flex-grow-1 row">
                                        <div class="col-9 mb-sm-0 mb-2">
                                            <h6 class="mb-0">Mailchimp</h6>
                                            <small class="text-muted">Email marketing service</small>
                                        </div>
                                        <div class="col-3 text-end">
                                            <div class="form-check form-switch">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Mailchimp</button>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Send message</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
{{--                                                <input class="form-check-input float-end" type="checkbox" role="switch" checked />--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="{{asset('admin/assets/img/icons/brands/asana.png')}}" alt="asana" class="me-3" height="30" />
                                    </div>
                                    <div class="flex-grow-1 row">
                                        <div class="col-9 mb-sm-0 mb-2">
                                            <h6 class="mb-0">Asana</h6>
                                            <small class="text-muted">Communication</small>
                                        </div>
                                        <div class="col-3 text-end">
                                            <div class="form-check form-switch">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Asana</button>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Send message</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
{{--                                                <input class="form-check-input float-end" type="checkbox" role="switch" checked />--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Connections -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <h5 class="card-header">Social Accounts</h5>
                            <div class="card-body">
                                <p>Display content from social accounts on your site</p>
                                <!-- Social Accounts -->
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <img
                                            src="{{asset('admin/assets/img/icons/brands/facebook.png')}}"
                                            alt="facebook"
                                            class="me-3"
                                            height="30"
                                        />
                                    </div>
                                    <div class="flex-grow-1 row">
                                        <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                            <h6 class="mb-0">Facebook</h6>
                                            <small class="text-muted">Not Connected</small>
                                        </div>
                                        <div class="col-4 col-sm-5 text-end">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Facebook</button>
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Send message</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <img
                                            src="{{asset('admin/assets/img/icons/brands/twitter.png')}}"
                                            alt="twitter"
                                            class="me-3"
                                            height="30"
                                        />
                                    </div>
                                    <div class="flex-grow-1 row">
                                        <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                            <h6 class="mb-0">Twitter</h6>
                                            <a href="https://twitter.com/Theme_Selection" target="_blank">@ThemeSelection</a>
                                        </div>
                                        <div class="col-4 col-sm-5 text-end">
                                            <button type="button" class="btn btn-icon btn-outline-danger">
                                                <i class="bx bx-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <img
                                            src="{{asset('admin/assets/img/icons/brands/instagram.png')}}"
                                            alt="instagram"
                                            class="me-3"
                                            height="30"
                                        />
                                    </div>
                                    <div class="flex-grow-1 row">
                                        <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                            <h6 class="mb-0">instagram</h6>
                                            <a href="https://www.instagram.com/themeselection/" target="_blank">@ThemeSelection</a>
                                        </div>
                                        <div class="col-4 col-sm-5 text-end">
                                            <button type="button" class="btn btn-icon btn-outline-danger">
                                                <i class="bx bx-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <img
                                            src="{{asset('admin/assets/img/icons/brands/dribbble.png')}}"
                                            alt="dribbble"
                                            class="me-3"
                                            height="30"
                                        />
                                    </div>
                                    <div class="flex-grow-1 row">
                                        <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                            <h6 class="mb-0">Dribbble</h6>
                                            <small class="text-muted">Not Connected</small>
                                        </div>
                                        <div class="col-4 col-sm-5 text-end">
                                            <button type="button" class="btn btn-icon btn-outline-secondary">
                                                <i class="bx bx-link-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img
                                            src="{{asset('admin/assets/img/icons/brands/behance.png')}}"
                                            alt="behance"
                                            class="me-3"
                                            height="30"
                                        />
                                    </div>
                                    <div class="flex-grow-1 row">
                                        <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                            <h6 class="mb-0">Behance</h6>
                                            <small class="text-muted">Not Connected</small>
                                        </div>
                                        <div class="col-4 col-sm-5 text-end">
                                            <button type="button" class="btn btn-icon btn-outline-secondary">
                                                <i class="bx bx-link-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Social Accounts -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
