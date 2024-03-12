<div class="row ltn__custom-gutter--- justify-content-center">
    @foreach($items as $item)
        <div class="col-lg-6 col-sm-6 col-12">
            <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                <div class="ltn__feature-icon">
                    <!-- <span><i class="flaticon-house"></i></span> -->
                    <img src="{{ renderImage($item->galleryCover(), 185, 140, 'cover') }}" alt="img">
                </div>
                <div class="ltn__feature-info">
                    <h3>{{$item->title}}</h3>
                    {!! $item->text !!}
                </div>
            </div>
        </div>
    @endforeach
</div>
