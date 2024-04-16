@extends('layout.main')

@section('page_content')
    <div class="container-fluid content-inner pb-0">
        <div class="row pt-2">
            <div class="col-lg-6 offset-3">
                <div class="card card-block card-stretch custom-scroll">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="caption">
                            <h4 class="font-weight-bold mb-2">Change Account Password</h4>
                        </div>
                    </div>
                    <div class="card-body">

                        <form method="post" action="/change_password">@csrf

                            <div class="form-group">
                                <label for="text"> New Password </label>
                                <input type="password" class="form-control" name="password" autocomplete="ed">
                                @error('password')
                                    <i class="text-danger ">{{ $message }} </i>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="text"> Confirm Password </label>
                                <input type="password" class="form-control" name="password_confirmation" autocomplete="ed">
                            </div>


                            <div class="form-group">
                                <label for="text"> Current Password </label>
                                <input type="password" class="form-control" name="current_password" autocomplete="ed">
                                @error('current_password')
                                    <i class="text-danger ">{{ $message }} </i>
                                @enderror
                            </div>




                            <div class="d-flex justify-content-end ">
                                <button type="submit" class="btn btn-primary">Change Password</button>
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
