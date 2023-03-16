@extends('admin.master.main')

@section('content')
    <div class="container mt-5 ">
       <div class="row bg-light">
           <div class="col-xl-12">
               <div class="nav-align-top mb-4">
                   <ul class="nav nav-tabs" role="tablist">
                       <li class="nav-item">
                           <button
                               type="button"
                               class="nav-link active"
                               role="tab"
                               data-bs-toggle="tab"
                               data-bs-target="#navs-top-home"
                               aria-controls="navs-top-home"
                               aria-selected="true"
                           >
                               Site
                           </button>
                       </li>
                       <li class="nav-item">
                           <button
                               type="button"
                               class="nav-link"
                               role="tab"
                               data-bs-toggle="tab"
                               data-bs-target="#navs-top-profile"
                               aria-controls="navs-top-profile"
                               aria-selected="false"
                           >
                               Contact
                           </button>
                       </li>
                       <li class="nav-item">
                           <button
                               type="button"
                               class="nav-link"
                               role="tab"
                               data-bs-toggle="tab"
                               data-bs-target="#navs-top-messages"
                               aria-controls="navs-top-messages"
                               aria-selected="false"
                           >
                               Social Network
                           </button>
                       </li>
                   </ul>
                   <form action="{{route('admin.setting.update')}}" method="POST" enctype="multipart/form-data">
                       @csrf
                       @method('put')
                       <div class="tab-content">
                           <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
                               <div class="row">
                                   <div class="col-md-6">
                                       <div class="card mb-4">
                                           <div class="card-body demo-vertical-spacing demo-only-element">
                                               <div class="input-group">
                                                   <span class="input-group-text" id="basic-addon11">Brand Name</span>
                                                   <input type="text"
                                                          class="form-control"
                                                          placeholder="Brand name"
                                                          aria-label="Username"
                                                          aria-describedby="basic-addon11" name="brand_name" value="{{$set->brand_name}}"
                                                   />
                                               </div>

                                               <div class="input-group">
                                                   <span class="input-group-text" id="basic-addon11">Site Info</span>
                                                   <input type="text"
                                                          class="form-control"
                                                          placeholder="Site info"
                                                          aria-label="Username"
                                                          aria-describedby="basic-addon11"
                                                          value="{{$set->site_info}}"
                                                          name="site_info"
                                                   />
                                               </div>

                                               <div class="input-group">
                                                   <span class="input-group-text" id="basic-addon11">Site Status</span>
                                                   <select class="form-select" aria-label="Default select example" name="site_status">
                                                       <option value="1">Yes</option>
                                                       <option value="0">No</option>
                                                   </select>
                                                   {{--                                            <span class="input-group-text" id="basic-addon13">@example.com</span>--}}
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- Merged -->
                                   <div class="col-md-6">
                                       <div class="card mb-4">

                                           <div class="card-body demo-vertical-spacing demo-only-element">

                                               <div class="input-group">
                                                   <span class="input-group-text" id="basic-addon11">Site Name</span>
                                                   <input type="text"
                                                          class="form-control"
                                                          placeholder="Site name"
                                                          aria-label="Username"
                                                          aria-describedby="basic-addon11"
                                                          value="{{$set->site_name}}"
                                                          name="site_name"
                                                   />
                                               </div>

                                               <div class="input-group">
                                                   <span class="input-group-text" id="basic-addon11">Status Message</span>
                                                   <input type="text"
                                                          class="form-control"
                                                          placeholder="Status message"
                                                          aria-label="Username"
                                                          aria-describedby="basic-addon11"
                                                          value="{{$set->status_mess}}"
                                                          name="status_mess"
                                                   />
                                               </div>

                                               <div class="input-group">
                                                   <div class="inp ut-group mb-3">
                                                       <input type="file" class="form-control" id="inputGroupFile01" name="logo">
                                                       <img style="width: 100px; height: 100px " src=" @if($set->logo) {{asset('storage/'.$set->logo)}} @else {{asset('admin/assets/img/avatars/10.png')}} @endif " >
                                                   </div>
                                               </div>

                                           </div>
                                       </div>
                                   </div>
                               </div>

                           </div>
                           <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                               <div class="col-xxl">
                                   <div class="card mb-4">
                                       <div class="card-body">
                                           <form>
                                               <div class="row mb-3">
                                                   <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
                                                   <div class="col-sm-10">
                                                       <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-user"></i
                                  ></span>
                                                           <input
                                                               type="text"
                                                               class="form-control"
                                                               id="basic-icon-default-fullname"
                                                               placeholder="John Doe"
                                                               aria-label="John Doe"
                                                               aria-describedby="basic-icon-default-fullname2"
                                                               value="{{$set->name}}"
                                                               name="name"
                                                           />
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="row mb-3">
                                                   <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Company</label>
                                                   <div class="col-sm-10">
                                                       <div class="input-group input-group-merge">
                              <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-buildings"></i
                                  ></span>
                                                           <input
                                                               type="text"
                                                               id="basic-icon-default-company"
                                                               class="form-control"
                                                               placeholder="ACME Inc."
                                                               aria-label="ACME Inc."
                                                               aria-describedby="basic-icon-default-company2"
                                                               value="{{$set->company_name}}"
                                                               name="company_name"
                                                           />
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="row mb-3">
                                                   <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                                                   <div class="col-sm-10">
                                                       <div class="input-group input-group-merge">
                                                           <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                                           <input
                                                               type="text"
                                                               id="basic-icon-default-email"
                                                               class="form-control"
                                                               placeholder="john.doe"
                                                               aria-label="john.doe"
                                                               aria-describedby="basic-icon-default-email2"
                                                               value="{{$set->email}}"
                                                               name="email"
                                                           />
                                                           <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                                                       </div>
                                                       <div class="form-text">You can use letters, numbers & periods</div>
                                                   </div>
                                               </div>
                                               <div class="row mb-3">
                                                   <label class="col-sm-2 form-label" for="basic-icon-default-phone">Phone No</label>
                                                   <div class="col-sm-10">
                                                       <div class="input-group input-group-merge">
                              <span id="basic-icon-default-phone2" class="input-group-text"
                              ><i class="bx bx-phone"></i
                                  ></span>
                                                           <input
                                                               type="text"
                                                               id="basic-icon-default-phone"
                                                               class="form-control phone-mask"
                                                               placeholder="658 799 8941"
                                                               aria-label="658 799 8941"
                                                               aria-describedby="basic-icon-default-phone2"
                                                               value="{{$set->phone_number}}"
                                                               name="phone_number"
                                                           />
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="row mb-3">
                                                   <label class="col-sm-2 form-label" for="basic-icon-default-message">Message</label>
                                                   <div class="col-sm-10">
                                                       <div class="input-group input-group-merge">
                              <span id="basic-icon-default-message2" class="input-group-text"
                              ><i class="bx bx-comment"></i
                                  ></span>
                                                           <textarea
                                                               id="basic-icon-default-message"
                                                               class="form-control"
                                                               placeholder="Hi, Do you have a moment to talk Joe?"
                                                               aria-label="Hi, Do you have a moment to talk Joe?"
                                                               aria-describedby="basic-icon-default-message2" name="message">{{$set->message}}</textarea>

                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="row justify-content-end">

                                               </div>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="tab-pane fade" id="navs-top-messages" role="tabpanel">

                               <div class="row">
                                   <div class="col-md-6">
                                       <div class="card mb-4">
                                           <div class="card-body demo-vertical-spacing demo-only-element">
                                               <div class="input-group">
                                                   <span class="input-group-text" id="basic-addon11">Instagram</span>
                                                   <input type="text"
                                                          class="form-control"
                                                          placeholder="Instagram"
                                                          aria-label="Username"
                                                          aria-describedby="basic-addon11"
                                                          value="{{$set->instagram}}"
                                                          name="instagram"
                                                   />
                                               </div>

                                               <div class="input-group">
                                                   <span class="input-group-text" id="basic-addon11">You Tobe</span>
                                                   <input type="text"
                                                          class="form-control"
                                                          placeholder="You Tobe"
                                                          aria-label="Username"
                                                          aria-describedby="basic-addon11"
                                                          value="{{$set->youtube}}"
                                                          name="youtube"
                                                   />
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-6">
                                       <div class="card mb-4">

                                           <div class="card-body demo-vertical-spacing demo-only-element">
                                               <div class="input-group">
                                                   <span class="input-group-text" id="basic-addon11">Telegram</span>
                                                   <input type="text"
                                                          class="form-control"
                                                          placeholder="Telegram"
                                                          aria-label="Username"
                                                          aria-describedby="basic-addon11"
                                                          value="{{$set->telegram}}"
                                                          name="telegram"
                                                   />
                                               </div>

                                               <div class="input-group">
                                                   <span class="input-group-text" id="basic-addon11">Twitter</span>
                                                   <input type="text"
                                                          class="form-control"
                                                          placeholder="Twitter"
                                                          aria-label="Username"
                                                          aria-describedby="basic-addon11"
                                                          value="{{$set->twitter}}"
                                                          name="twitter"
                                                   />
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>

                           </div>

                           <div class="container d-flex" style="justify-content: flex-end" >
                               <button type="submit" class="btn btn-outline-dark ">Save</button>
                           </div>

                       </div>
                   </form>
               </div>
           </div>
       </div>
{{--        <div class="d-grid gap-2 d-md-flex justify-content-md-end bg-label-light" >--}}
{{--             <button type="submit" class="btn btn-outline-dark ">Save</button>--}}
{{--        </div>--}}
    </div>

@endsection
