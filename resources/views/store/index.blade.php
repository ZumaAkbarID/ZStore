@extends('layouts.master')

@push('css')
    <link rel="stylesheet" href="{{ url('/') }}/assets/libs/splide-4.1.3/css/splide.min.css">

    <style>
        .splide {
            padding: 20px 0;
        }

        .splide__slide {
            img {
                display: block;
                width: 100%;
                border-radius: 8px;
                transition: transform 400ms;
                transform: scale(.9);
                transform-origin: center center;
            }
        }

        .splide__slide.is-active {
            img {
                transform: scale(1);
            }
        }

        .splide .splide__arrow {
            top: 0;
            bottom: 0;
            height: 100%;
            transform: none;
            border-radius: unset;
            width: 50px;
            opacity: .9;

            svg {
                filter: invert(1);
                width: 24px;
                height: 24px;
            }
        }
    </style>
@endpush

@push('script')
    <script src="{{ url('/') }}/assets/libs/splide-4.1.3/js/splide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var splide = new Splide('.splide', {
                type: 'loop',
                perPage: 1,
                focus: 'center',
                autoplay: true,
                interval: 8000,
                flickMaxPages: 3,
                arrows: false,
                updateOnMove: true,
                pagination: false,
                padding: '10%',
                throttle: 300,
                // breakpoints: {
                //     1440: {
                //         perPage: 1,
                //         padding: '30%'
                //     }
                // }
            });

            splide.mount();
        });
    </script>
@endpush
