@extends('default.layout')
@section('content')
{{--{!! getPhoneLink('phone', 'phone', '<b>icon</b> ') !!}--}}
{{--{!! getEmailLink('email', 'email',  '<b>icon</b> ') !!}--}}
{{--    <span style="display: block">{!! getAddressString() !!}</span>--}}
{{--    <span style="display: block">{!! getFooterCreator() !!}</span>--}}

    @include('default.rotator.base', ['id_rotator' => $fields->rotator, 'type' => 'main'])
<div class="ltn__about-us-area pt-120 pb-90 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-left">
                    <img src="{{asset('images/about_us.png')}}" alt="About Us Image">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2--- mb-20">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">O nas</h6>
                        <h1 class="section-title">Kilka słów o nas<span>.</span></h1>
                        @if(!empty($fields->description_about_us))
                            {!! $fields->description_about_us !!}
                        @endif
                    </div>
                    <div class="btn-wrapper animated">
                        <a href="{{route('gallery.show')}}" class="theme-btn-1 btn btn-effect-1">Zobacz galerię</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ltn__about-us-area pt-115 pb-100 ">
    <div class="container">
        <div class="section-title-area ltn__section-title-2--- mb-30">
            <h6 class="section-subtitle section-subtitle-2--- ltn__secondary-color text-center">Dlaczego my?</h6>
            <h1 class="section-title text-center">Dlaczego powinieneś nas wybrać</h1>
        </div>
        <div class="row">
            @include('default.article.home')
            <div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-left">
                    <img src="{{asset('images/dlaczego_my.png')}}" alt="About Us Image">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ltn__call-to-action-area ltn__call-to-action-4 bg-image pt-115 pb-120" data-bs-bg="{{asset('images/contact_us.jpg')}}" style="background-image: url({{asset('images/contact_us.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="call-to-action-inner call-to-action-inner-4 text-center">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">Skontaktuj się z nami</h6>
                        @if(!empty(getConstField('phone')))<h1 class="section-title white-color">
                            {{getConstField('phone')}}
                        </h1>@endif
                    </div>
                    <div class="btn-wrapper">
                        <a href="tel:{{str_replace(' ', '', getConstField('phone'))}}" class="theme-btn-1 btn btn-effect-1">Zadzwoń do nas</a>
                        <a href="{{route('gallery.show')}}" class="btn btn-transparent btn-effect-3 white-color">Zobacz galerię</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ltn__feature-area section-bg-1 pt-120 pb-90 mb-120---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Usługi</h6>
                    <h1 class="section-title">Nasze usługi</h1>
                </div>
            </div>
        </div>
        @include('default.realization.home')
    </div>
</div>

<div class="ltn__contact-address-area mt-90 mb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="{{asset('images/phone.png')}}" alt="Icon Image">
                    </div>
                    <h3>Numer telefonu</h3>
                    <p> @if(!empty(getConstField('phone')))<a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a>@endif</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="{{asset('images/adress.png')}}" alt="Icon Image">
                    </div>
                    <h3>Adres</h3>
                    <p>{{getConstField('company_address')}} <br>{{getConstField('company_post_code')}} {{getConstField('company_city')}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTACT ADDRESS AREA END -->

<!-- CONTACT MESSAGE AREA START -->
{{--<div class="ltn__contact-message-area mb-120 mb--100">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="ltn__form-box contact-form-box box-shadow white-bg">--}}
{{--                    <h4 class="title-2">Skontaktuj się z nami</h4>--}}
{{--                    @include('default.form.contact_form')--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- CONTACT MESSAGE AREA END -->

<!-- GOOGLE MAP AREA START -->
<div class="google-map">

    <iframe src="{{getConstField('google_map_iframe')}}" width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div>
@endsection
