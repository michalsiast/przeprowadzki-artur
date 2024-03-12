

<form id="contactForm" method="POST">
    <div class="form-group">
        <label for="name">Imię *</label>
        <input id="name" type="text" name="name" placeholder="Imię *" class="form-control">
        <div class="invalid-feedback"></div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">Email *</label>
                <input id="email" type="email" name="email" placeholder="Email *" class="form-control">
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="phone">Numer telefonu</label>
                <input id="phone" type="text" name="phone" placeholder="Numer telefonu" class="form-control">
                <div class="invalid-feedback"></div>
            </div>
        </div>
    </div>
    <div class="form-group input-item input-item-textarea ">
        <label for="message">Wiadomość</label>
        <textarea id="message" name="message" rows="5" placeholder="Wiadomość"></textarea>
        <div class="invalid-feedback"></div>
    </div>

    <div class="form-group">
        <div class="form-check">
            <input id="rule" type="checkbox" name="rule" placeholder="Rule" class="form-check-input input-info-save mb-0">
            <label for="rule" class="form-check-label">{!! getConstField('contact_form_rule') !!}</label>
            <div class="invalid-feedback"></div>
        </div>
    </div>

    <div class="form-group btn-wrapper mt-0">
        <div class="g-recaptcha" data-sitekey="{{$siteKey}}"></div>
        <div class="invalid-feedback"></div>
    </div>
    <div class="btn-wrapper mt-0">
        <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Wyślij</button>
    </div>

    <div id="alert" class="alert"></div>
</form>



@push('scripts.body.bottom')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        document.getElementById('contactForm').addEventListener('submit', e => {
            e.preventDefault();
            submitForm(e.target);
        })
    </script>
@endpush
