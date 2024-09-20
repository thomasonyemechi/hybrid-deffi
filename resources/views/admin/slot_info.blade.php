@extends('layout.admin02')
@section('page_content')
    <div class="container-fluid content-inner pb-0">



        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class=" pb-4 mb-4 d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0">
                        <h1 class="mb-0 h2 fw-bold">Slots Management</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mb-4">

            @foreach ($slots as $slot)
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span class="badge bg-primary">Slot {{ $slot->id }}</span>


                                </div>
                                <div>
                                    <h2 class="counter" style="visibility: visible;">$ {{ number_format($slot->price) }}
                                    </h2>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <div>
                                    <span class="fw-bold">Percent: </span>
                                </div>
                                <div>
                                    <span>
                                        @foreach (explode(',', $slot->percent) as $per)
                                            {{ $per }}%,
                                        @endforeach
                                    </span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between mt-2">
                                <div>
                                    <span class="fw-bold">Spillover: </span>
                                </div>
                                <div>
                                    <span>
                                        @if ($slot->spillover)
                                            @foreach (explode(',', $slot->spillover) as $per)
                                                {{ $per }}%,
                                            @endforeach
                                        @else
                                            <span class="badge bg-danger">No Spillover bonus </span>
                                        @endif
                                    </span>
                                </div>
                            </div>


                            <div class="mt-2 " >
                                <a href="/admin/slot/{{ $slot->id }}" class="btn btn-info btn-xs" style="width: 100%; background-color: {{ $slot->color }}" > More About Slot</a>
                            </div>

                        </div>
                    </div>


                </div>
            @endforeach



        </div>
    </div>
    </div>
@endsection
