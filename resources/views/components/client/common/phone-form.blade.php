<form action="{{ route('contact-form.create') }}" method="post">
    @csrf

    <div class="main__row">
        <input class="main__input" name="phone" type="tel" required placeholder="+38 (000) 000-00-00">
        <input class="main__input" name="name" required type="text" placeholder="Ім’я">
    </div>

    <button type="submit" class="main__button btn">{{ __('app.order_form') }}</button>

</form>
