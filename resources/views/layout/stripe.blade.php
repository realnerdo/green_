<div class="stripe">
    <div class="wrapper">
        <div class="newsletter col-6">
            <span>Recibe promociones en tu correo electrónico</span>
            <form action="" class="newsletter-form">
                <div class="input-wrapper">
                    <input type="email" class="email" name="email" placeholder="Escribe tu correo">
                    <input type="submit" class="submit" value="Suscribirse">
                </div><!-- end input-wrapper -->
            </form><!-- newsletter-form -->
        </div><!-- end newsletter -->
        <div class="payment-options col-6">
            <span>Puedes pagar con</span>
            <ul class="payments">
                <li class="payment">
                    <img src="{{ asset('img/visa_logo.svg') }}" alt="" class="img">
                </li>
                <li class="payment">
                    <img src="{{ asset('img/mastercard_logo.svg') }}" alt="" class="img">
                </li>
                <li class="payment">
                    <img src="{{ asset('img/american-express_logo.svg') }}" alt="" class="img">
                </li>
                <li class="payment">
                    <img src="{{ asset('img/oxxo_logo.svg') }}" alt="" class="img">
                </li>
                <li class="payment">
                    <img src="{{ asset('img/banorte_logo.svg') }}" alt="" class="img">
                </li>
            </ul><!-- end payments -->
        </div><!-- end payment-options -->
    </div><!-- end wrapper -->
</div><!-- end stripe -->
