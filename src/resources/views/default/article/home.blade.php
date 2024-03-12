

<div class="col-lg-6 align-self-center">
    <div class="about-us-info-wrap">
        @foreach($items as $item)
            <div class="ltn__feature-item ltn__feature-item-3">
                <div class="ltn__feature-icon">
                    <span><img style="    min-width: 50px;" src="{{ renderImage($item->galleryCover(), 50, 50, 'cover') }}" alt="img"></span>
                </div>
                <div class="ltn__feature-info">
                    <h4>{{$item->title}}</h4>
                    {!! $item->text !!}
                </div>
            </div>
        @endforeach
    </div>
</div>
