


@extends('layouts.app')

@section('title', 'Контакты')

@section('content')

    <style>
        /* Основной фон */
        .popup {
            display: none; /* скрыт по умолчанию */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            justify-content: center;
            align-items: center;
            z-index: 1000;
            animation: fadeIn 0.3s ease forwards;
        }

        /* Контент попапа */
        .popup-content {
            background-color: #fff;
            padding: 30px 25px;
            border-radius: 12px;
            max-width: 400px;
            width: 90%;
            text-align: center;
            position: relative;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            transform: scale(0.7);
            animation: scaleIn 0.3s ease forwards;
        }

        /* Заголовок */
        .popup-content h3 {
            margin: 0 0 10px;
            color: #4CAF50;
            font-size: 22px;
        }

        /* Сообщение */
        .popup-content p {
            font-size: 16px;
            color: #333;
            margin-bottom: 20px;
        }

        /* Кнопка закрытия */
        .popup-close {
            position: absolute;
            top: 12px;
            right: 15px;
            font-size: 24px;
            cursor: pointer;
            color: #aaa;
            transition: color 0.2s;
        }

        .popup-close:hover {
            color: #000;
        }

        /* Кнопка OK */
        .popup-ok {
            background-color: #4CAF50;
            border: none;
            color: #fff;
            padding: 10px 25px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .popup-ok:hover {
            background-color: #45a049;
        }

        /* Анимации */
        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }

        @keyframes scaleIn {
            from {transform: scale(0.7);}
            to {transform: scale(1);}
        }

    </style>

    {{-- Хлебные крошки --}}
    <div class="breadcrumbs_area commun_bread">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Contacts us</h3>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li>Contacts us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Контакты --}}
    <div class="contact_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact_message content">
                        <h3>contact us</h3>
                        <p>
                            If you have any questions about our equipment or would like to request a quote,
                            please fill out the contact form below. Our specialists will get back to you
                            as soon as possible.
                        </p>
                        <ul>
                            <li><i class="fa fa-fax"></i>  Address : {{ $siteSettings->address }}</li>
                            <li><i class="fa fa-phone"></i> <a href="#"> {{ $siteSettings->phone }}</a></li>
                            <li><i class="fa fa-envelope-o"></i> {{ $siteSettings-> extra_1}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="contact_message form">
                        <h3>Tell us your project</h3>
                        <form id="contact-form"
                              method="POST"
                              action="{{ route('contact.send') }}">
                            @csrf

                            <p>
                                <label>Your Name *</label>
                                <input name="name" type="text" required>
                            </p>

                            <p>
                                <label>Your Email *</label>
                                <input name="email" type="email" required>
                            </p>

                            <p>
                                <label>Your Phone *</label>
                                <input name="phone" type="text" required>
                            </p>



                            <p>
                                <label>Subject *</label>
                                <input name="subject" type="text" required>
                            </p>

                            <div class="contact_textarea">
                                <label>Your Message *</label>
                                <textarea name="message" required></textarea>
                            </div>

                            <button type="submit">Send</button>
                        </form>

                        <div id="popup" class="popup">
                            <div class="popup-content">
                                <span id="popup-close" class="popup-close">&times;</span>
                                <h3>Thank you!</h3>
                                <p id="popup-message">We will contact you soon!</p>
                                {{--<button id="popup-ok" class="popup-ok">OK</button>--}}
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Карта --}}
    <div class="map_area mt-4">
        <iframe
            src="https://yandex.ru/map-widget/v1/?um=constructor%3Aexample"
            width="100%"
            height="400"
            frameborder="0">
        </iframe>
    </div>

@endsection

