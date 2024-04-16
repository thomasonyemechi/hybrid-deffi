@extends('layout.main')

@section('page_content')
    <div class="container-fluid content-inner pb-0">
        <div class="row pt-2">
            <div class="col-lg-6 offset-3">
                <div class="card card-block card-stretch custom-scroll">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="caption">
                            <h4 class="font-weight-bold mb-2">Change Account Email</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="mb-2 text-center refresh ">
                                <i class="text-success "> {{ session('success') }} </i>
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="mb-2 text-center refresh">
                                <i class="text-danger"> {{ session('error') }} </i>
                            </div>
                        @endif

                        <form method="post" action="/change_email">@csrf
                            <div class="form-group username-field">
                                <label class="mb-0">Username</label>
                                <div class="form-field">
                                    <input class="form-control" type="text" readonly name="username"
                                        value=" {{ auth()->user()->username }} ">
                                </div>
                            </div>
                            <div class="form-group username-field">
                                <label class="mb-0">Email Address</label>
                                <div class="form-field">
                                    <input class="form-control" type="email" autocomplete="yhe" name="email">
                                </div>
                            </div>
                            <div class="form-group password-field">
                                <label class="mb-0">Confirm Password</label>
                                <div class="form-field">
                                    <input class="form-control" name="password" type="password" placeholder="password"
                                        required="">
                                    @error('password')
                                        <i class="text-danger fw-bold ">{{ $message }} </i>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex justify-content-end ">
                                <button type="submit" class="btn btn-primary">Change Account Email</button>
                            </div>
                         
                        </form>

                    </div>
                </div>
            </div>

        </div>


    </div>
@endsection



@push('scripts')
@endpush
