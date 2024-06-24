<x-header.google-fonts />
<!-- All CSS Here
================================================== -->
<link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
<link rel="stylesheet" href="assets/css/cdheadline.css">
<link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
{{--<link rel="stylesheet" href="assets/css/style.min.css">--}}


{{--<link rel=" stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />--}}
<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
<style>
    [x-cloak] {
        display: none !important;
    }
</style>
@filamentStyles
@vite(['resources/css/tailwind.css','resources/js/minfo-app.js'])
@livewire('notifications')
