<div class="pt-16 pb-5 rounded-top"
    style=" background: url({{ asset('assets/img/features_bg.png') }}) no-repeat; background-size: cover; ">
</div>
<div
    class="d-flex align-items-end mb-md-5 justify-content-between user-head px-4 pt-2 pb-4 rounded-none rounded-bottom-md shadow-sm">
    <div class="d-flex align-items-center">
        <div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
            <img src="{{ asset('assets/img/pp.png') }}"
                class=" rounded-circle border border-4 border-white position-relative" alt="" width="60" />
            <a href="#" class="position-absolute top-0 end-0" data-bs-toggle="tooltip" data-placement="top"
                title="" data-original-title="Verified">
            </a>
        </div>
        <div class="lh-1">
            <h2 class="mb-0 text-gray "> <span> {{ auth()->user()->username }} </span> </h2>
            <p class="mb-0 d-block"> {{ auth()->user()->created_at }}</p>
        </div>
    </div>
    <div>
        <a href="/deposit" class="btn btn-two d-none d-sm-block ">Deposit</a>
    </div>
</div>
<div class="d-sm-block d-md-none">
    <div
        class="d-flex rounded-bottom mb-5 align-items-middle justify-content-between user-head px-4 pt-3 pb-2 rounded-none rounded-bottom-md shadow-sm">
        <h6 class="text-white fs-6 fw-bolder  ">MENU</h6>
        <div class="">
            <div class="bg-white text-primary  text-bold rounded" id="togglelersm" style="padding: 0px 6px;">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(function() {
            // alert('hellooo')


            $('#togglelersm').on('click', function() {
                nav = $('#navuser');

                if (nav.hasClass('d-none')) {

                    nav.removeClass("d-none")
                    nav.fadeIn(1500);

                    console.log(nav);

                    console.log('there');
                }else {
                    nav.fadeOut(1500);
                    nav.addClass("d-none")

                }

            })

        })
    </script>
@endpush
