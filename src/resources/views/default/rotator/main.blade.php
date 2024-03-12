<div class="ltn__slider-area ltn__slider-3  section-bg-1">
    <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
        <!-- ltn__slide-item -->
        @foreach($rotator->gallery->items as $item)
        <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal ltn__slide-item-3">
            <div class="ltn__slide-item-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <h1 class="slide-title animated ">{{$item->name}}</h1>
                                    <div class="slide-brief animated">
                                        {!! $item->text !!}
                                    </div>
                                    <div class="btn-wrapper animated">
                                        <a href="{{route('gallery.show')}}" class="theme-btn-1 btn btn-effect-1">Zobacz galerię</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item-img">
                                <img src="{{renderImage($item->url, 1920, 700, `fit`)}}" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!--  -->
    </div>
</div>
@push('scripts.body.bottom')
    <script>
        $('#rotator{{$rotator->id}}').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: {{$rotator->time ?? 3000}},
            speed: {{$rotator->speed ?? 500}},
            arrows: {{$rotator->arrows ? 'true' : 'false'}},
            dots: {{$rotator->pager ? 'true' : 'false'}},
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
            pauseOnHover: false
        });
    </script>
@endpush
