@extends('layout.admin02')
@section('page_content')
    <div class="container-fluid content-inner pb-0">
        <div class="row mb-4">
            <div class="col-lg-12">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between ">
                            <h4 class="card-title text-white">Manage Users</h4>
                            <div class="form-outline">
                                <form action="">
                                    <input type="search" name="user" class="form-control ms-1" style="width: 300px" placeholder="Search users by wallet, username.."
                                    aria-label="Search">
                                </form>
                            </div>
                        </div>
                      
                        <div class="card-body">
                            {!! isset($_GET['user']) ? '<p class="mb-2 fw-bold" >Search Result for <b>" '.$_GET['user'].' "</b></p>' : '' !!}
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="">
                                        <tr>
                                            <th>Wallet Address</th>
                                            <th>Username</th>
                                            <th>HBC</th>
                                            <th>USDT</th>
                                            <th>SHC</th>
                                            <th>Purchase</th>
                                            <th>Reffered By</th>
                                            <th>Joined</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($users) == 0 )
                                            <tr>
                                                <td colspan="12" >
                                                    <div class="alert alert-danger" >
                                                        There is no content on this table
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                        @foreach ($users as $user)
                                            <tr>
                                                <td> <a class=" fw-bold text-white  " href="#"  > <span>{{$user->wallet}} </span> </a> </td>
                                                <td> <a class=" fw-bold text-white " href="#"  > <span>{{$user->username}} </span> </a> </td>
                                                <td> 
                                                    <span class="badge bg-warning" > {{number_format(pcBalance($user->id),)}} HBC </span>
                                                </td>
                                                <td> {{number_format(usdtBalance($user->id),)}} USDT </td>
                                                <td> {{number_format(spcBalance($user->id),)}} SHC </td>
                                                <td> {{number_format(coinTotalPurchase($user->id),)}} USDT </td>
                                                <td> 
                                                    {{($user->spon) ? $user->spon->username : 'No Sponsor' }}
                                                </td>
                                                <td> {{date('j M, Y', strtotime($user->created_at))}} </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                                <div class="d-flex justify-content-between flex-wrap">
                                    {{ $users->links('pagination::bootstrap-4') }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
