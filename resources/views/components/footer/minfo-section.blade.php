@props(['setting'])

@if($module->footer)
<!-- Footer Start -->
<footer class="py-6 text-center lg:ml-auto footer-section max-w-content xl:max-2xl:max-w-50rem">

    <x-footer.minfo-content-module :setting='$setting' />
</footer>
<!-- Footer End -->
@endif
