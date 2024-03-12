@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page->name])

    <div class="ltn__gallery-area mb-120">
        <div class="container">
            <div class="ltn__gallery-active row ltn__gallery-style-2 ltn__gallery-info-hide---">
                <div class="ltn__gallery-sizer col-1"></div>
                @foreach($page->gallery->items as $item)
                <div class="ltn__gallery-item filter_category_3 col-lg-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="{{renderImage($item->url, 1920, 1080, 'resize')}}" data-rel="lightcase:myCollection">
                                <img src="{{renderImage($item->url, 1920, 1080, 'resize')}}">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fas fa-search"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @push('scripts.body.bottom')
        <script>
            var lightbox = $('.gallery a').simpleLightbox({});
        </script>
    @endpush
@endsection
