<footer id="footer" class="dark">
    <div id="copyrights">
        <div class="container">
            <div class="row col-mb-30">
                <div class="col-md-6 text-center text-md-left">
                    Copyrights &copy; {{ date('Y') }} All Rights Reserved by {{ $siteInformation->site_name }}.<br>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-flex justify-content-center justify-content-md-end">
                        <a href="https://www.facebook.com/{{ $siteInformation->facebook_id }}" class="social-icon si-small si-borderless si-facebook" target="_blank">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/{{ $siteInformation->instagram_id }}/" class="social-icon si-small si-borderless si-instagram" target="_blank">
                            <i class="icon-instagram"></i>
                            <i class="icon-instagram"></i>
                        </a>
                        <a href="tel:{{ $siteInformation->phone_no }}" class="social-icon si-small si-borderless si-whatsapp">
                            <i class="icon-phone3"></i>
                            <i class="icon-phone3"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<div id="gotoTop" class="icon-angle-up"></div>

<script src="{{  asset('web/js/plugins.min.js') }}"></script>
<script src="{{  asset('web/js/functions.js') }}"></script>

<a href="https://wa.me/91{{ $siteInformation->phone_no }}?text=Hi Marriedly," class="float" target="_blank">
<i class="fa icon-whatsapp my-float"></i>
</a>

</body>
</html>
