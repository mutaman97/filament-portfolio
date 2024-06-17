@if($info->body_scripts)
{!! $info->body_scripts !!}
@endif
<!-- Js Library Start -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/tw-elements.umd.min.js"></script>
<script src="assets/js/cd-headline.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/scrollIt.min.js"></script>
<script src="assets/js/circle-progress.min.js"></script>
<script src="assets/js/script.js"></script>
<!-- Js Library End -->

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
@filamentScripts
{{--@vite('resources/js/minfo-app.js')--}}
