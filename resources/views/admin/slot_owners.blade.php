@extends('layout.admin02')
@section('page_content')
    <div class="container-fluid content-inner pb-0">



        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class=" pb-4 mb-4 d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0">
                        <h1 class="mb-0 h2 fw-bold">Slot {{ $slot->id }} Owners ( {{\App\Models\MySlot::where(['zone_id' => $slot->id])->count()  }} Client )</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mb-4">


            <div class="row">
                <div class="col-md-12">
                    <div class="card card-block card-stretch custom-scroll">
                        <div class="card-body p-0">
                            <div class="caption d-flex justify-content-between  p-2">
                                <h4 class="font-weight-bold mt-2">Slot Owners</h4>

                                <a class="btn btn-outline-warning" href="/admin/slot/{{ $slot->id }}"> <i class="fa fa-arrow-left" ></i>  Back to Slot</a>
                            </div>
                            <div class="table-responsive">



                                <table class="table data-table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">User Walelt </th>
                                            <th scope="col">Earnings</th>
                                            <th scope="col">Missed</th>
                                            <th scope="col" class="text-end">Date  Purchased </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clients as $client)
                                            <tr>
                                                <td>
                                                    <span class="title fw-bold">
                                                        {{ substr($client->user->wallet, 0, 6) . '...' . substr($client->user->wallet, -6) }}
                                                    </span>
                                                </td>

                                                <td>
                                                    <span class="text-success">
                                                        <svg width="10" height="8" viewBox="0 0 8 5" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42">
                                                            </path>
                                                        </svg>
                                                        {{ number_format(slotEarning($slot->id, $client->user_id), 2) }} USDT

                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-danger">
                                                        <svg width="10" height="8" viewBox="0 0 8 5" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E">
                                                            </path>
                                                        </svg>
                                                        {{ number_format(slotMissedEarning($slot->id, $client->user_id), 2) }} USDT
                                                    </span>
                                                </td>
                                                <td class="text-end"> {{ $client->created_at }} </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div id="editSlot" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="depositModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="d-flex justify-content-between mb-3 ">
                        <h5 class="modal-title">Edit Slot {{ $slot->id }} </h5>
                        <button type="button" class="btn-close fw-bold btn-sm p-1"
                            style="border-radius: 20px; border: 1px solid white" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>


                    <form action="">
                        <div class="form-group">
                            <label for="">Slot Amount</label>
                            <input type="number" class="form-control" value="{{ $slot->price }}">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Type</label>
                                    <select name="type" class="form-control" id="">
                                        <option>straight</option>
                                        <option value="spill"> Spillover </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Generations</label>
                                    <input type="number" class="form-control" value="{{ $slot->gens }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Percentage</label>
                            <input type="text" class="form-control" value="{{ $slot->percent }}">
                        </div>

                        <div class="d-flex justify-content-end mt-2 ">
                            <button class="btn btn-primary">Update Slot Info</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $(function() {
            $('.editSlot').on('click', function() {
                $('#editSlot').modal('show')
            })
        })
    </script>
@endpush
