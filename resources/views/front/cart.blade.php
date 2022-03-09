@extends('front.layouts.master')
@section('title') Sepetim @endsection
@section('content')
    <main class="container2">
        <h1 class="heading"></h1>
        <div class="item-flex">
            <!--
             - checkout section
            -->
            <section class="checkout">
                <h2 class="section-heading">Ödeme Detayları</h2>
                <div class="payment-form">
                    <div class="payment-method">
                        <button class="method selected">
                            <ion-icon name="card"></ion-icon>
                            <span>Kredi Kartı</span>
                            <ion-icon class="checkmark fill" name="checkmark-circle"></ion-icon>
                        </button>

                        <button class="method">
                            <ion-icon name="logo-paypal"></ion-icon>
                            <span>PayPal</span>
                            <ion-icon class="checkmark" name="checkmark-circle-outline"></ion-icon>
                        </button>
                    </div>

                    <form action="#">
                        <div class="cardholder-name">
                            <label for="cardholder-name" class="label-default">Kart Sahibinin Adı</label>
                            <input type="text" name="cardholder-name" id="cardholder-name" class="input-default">
                        </div>

                        <div class="card-number">
                            <label for="card-number" class="label-default">Kart Numarası</label>
                            <input type="number" name="card-number" id="card-number" class="input-default">
                        </div>

                        <div class="input-flex">
                            <div class="expire-date">
                                <label for="expire-date" class="label-default">Son Kullanma Tarihi</label>
                                <div class="input-flex">
                                    <input type="number" name="day" id="expire-date" placeholder="31" min="1" max="31"
                                           class="input-default">
                                    /
                                    <input type="number" name="month" id="expire-date" placeholder="12" min="1" max="12"
                                           class="input-default">
                                </div>
                            </div>

                            <div class="cvv">
                                <label for="cvv" class="label-default">CVV</label>
                                <input type="number" name="cvv" id="cvv" class="input-default">
                            </div>
                        </div>
                    </form>
                </div>
                <button class="btn1 btn-primary">
                    <b>Ödeme Yap</b><span id="payAmount">2.15</span> ₺
                </button>
            </section>

            <!--
              - cart section
            -->
            <section class="cart1">
                <div class="cart-item-box">
                    <h2 class="section-heading">Sipariş</h2>
                    <div class="product-card">
                        <div class="card">
                            <div class="img-box">
                                <img src="{{asset('front/images')}}/gta.jpg" alt="Green tomatoes" width="80px"
                                     class="product-img">
                            </div>
                            <div class="detail">
                                <h4 class="product-name">GTA San Andreas</h4>
                                <div class="wrapper">
                                    <div class="product-qty">
                                        <button id="decrement">
                                            <ion-icon name="remove-outline"></ion-icon>
                                        </button>
                                        <span id="quantity">1</span>
                                        <button id="increment">
                                            <ion-icon name="add-outline"></ion-icon>
                                        </button>
                                    </div>
                                    <div class="price">
                                        <span id="price">1.25</span> ₺
                                    </div>
                                </div>
                            </div>
                            <button class="product-close-btn">
                                <ion-icon name="close-outline"></ion-icon>
                            </button>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="card">
                            <div class="img-box">
                                <img src="{{asset('front/images')}}/gta.jpg" alt="Cabbage" width="80px"
                                     class="product-img">
                            </div>
                            <div class="detail">
                                <h4 class="product-name">GTA San Andreas</h4>
                                <div class="wrapper">
                                    <div class="product-qty">
                                        <button id="decrement">
                                            <ion-icon name="remove-outline"></ion-icon>
                                        </button>
                                        <span id="quantity">1</span>
                                        <button id="increment">
                                            <ion-icon name="add-outline"></ion-icon>
                                        </button>
                                    </div>
                                    <div class="price">
                                        <span id="price">0.80</span> ₺
                                    </div>
                                </div>
                            </div>
                            <button class="product-close-btn">
                                <ion-icon name="close-outline"></ion-icon>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="wrapper">
                    <div class="discount-token">
                        <label for="discount-token" class="label-default">Hediye Kartı / İndirim Kodu</label>
                        <div class="wrapper-flex">
                            <input type="text" name="discount-token" id="discount-token" class="input-default">
                            <button class="btn1 btn-outline">Uygula</button>
                        </div>
                    </div>
                    <div class="amount">
                        <div class="subtotal">
                            <span>Ara Toplam</span> <span><span id="subtotal">2.05</span> ₺</span>
                        </div>

                        <div class="tax">
                            <span>Vergi</span> <span><span id="tax">0.10</span> ₺</span>
                        </div>

                        <div class="shipping">
                            <span>Nakliye</span> <span><span id="shipping">0.00</span> ₺</span>
                        </div>

                        <div class="total">
                            <span>Toplam</span> <span><span id="total">2.15</span> ₺</span>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <h1 class="heading"></h1>
        <h1 class="heading"></h1>
    </main>
@endsection

@section('customPageCss')
    <link href="{{asset('front/css/cart.css')}}" rel="stylesheet" >
@endsection

@section('customPageJs')

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        'use strict';
        // all initial elements
        const payAmountBtn = document.querySelector('#payAmount');
        const decrementBtn = document.querySelectorAll('#decrement');
        const quantityElem = document.querySelectorAll('#quantity');
        const incrementBtn = document.querySelectorAll('#increment');
        const priceElem = document.querySelectorAll('#price');
        const subtotalElem = document.querySelector('#subtotal');
        const taxElem = document.querySelector('#tax');
        const totalElem = document.querySelector('#total');


        // loop: for add event on multiple `increment` & `decrement` button
        for (let i = 0; i < incrementBtn.length; i++) {

            incrementBtn[i].addEventListener('click', function () {

                // collect the value of `quantity` textContent,
                // based on clicked `increment` button sibling.
                let increment = Number(this.previousElementSibling.textContent);

                // plus `increment` variable value by 1
                increment++;

                // show the `increment` variable value on `quantity` element
                // based on clicked `increment` button sibling.
                this.previousElementSibling.textContent = increment;

                totalCalc();

            });


            decrementBtn[i].addEventListener('click', function () {

                // collect the value of `quantity` textContent,
                // based on clicked `decrement` button sibling.
                let decrement = Number(this.nextElementSibling.textContent);

                // minus `decrement` variable value by 1 based on condition
                decrement <= 1 ? 1 : decrement--;

                // show the `decrement` variable value on `quantity` element
                // based on clicked `decrement` button sibling.
                this.nextElementSibling.textContent = decrement;

                totalCalc();

            });

        }


        // function: for calculating total amount of product price
        const totalCalc = function () {

            // declare all initial variable
            const tax = 0.05;
            let subtotal = 0;
            let totalTax = 0;
            let total = 0;

            // loop: for calculating `subtotal` value from every single product
            for (let i = 0; i < quantityElem.length; i++) {

                subtotal += Number(quantityElem[i].textContent) * Number(priceElem[i].textContent);

            }

            // show the `subtotal` variable value on `subtotalElem` element
            subtotalElem.textContent = subtotal.toFixed(2);

            // calculating the `totalTax`
            totalTax = subtotal * tax;

            // show the `totalTax` on `taxElem` element
            taxElem.textContent = totalTax.toFixed(2);

            // calcualting the `total`
            total = subtotal + totalTax;

            // show the `total` variable value on `totalElem` & `payAmountBtn` element
            totalElem.textContent = total.toFixed(2);
            payAmountBtn.textContent = total.toFixed(2);

        }
    </script>
@endsection
