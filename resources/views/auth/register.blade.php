@extends('layouts.modernize.lay-auth')
@section('content')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="#!" class="text-nowrap logo-img text-center py-3 d-block w-100">
                                    <img src="{{('modernize')}}/assets/images/logos/fr.jpg" width="40" alt="" />
                                </a>
                                <p class="text-center">feelroom. share your creativity</p>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputtext1" class="form-label">Name</label>
                                        <input id="name" class="block mt-1 w-full form-control" type="text" name="name"
                                            :value="old('name')" required autofocus autocomplete="name" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email Address</label>
                                        <input id="email" class="block mt-1 w-full form-control" type="email" name="email"
                                            :value="old('email')" required autocomplete="username" />
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input id="password" class="block mt-1 w-full form-control" type="password" name="password"
                                            required autocomplete="new-password" />
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                        <input id="password_confirmation" class="block mt-1 w-full form-control" type="password"
                                            name="password_confirmation" required autocomplete="new-password" />
                                    </div>

                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
