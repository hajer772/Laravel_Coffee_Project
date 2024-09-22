<!-- JavaScript -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4fusEY9kSwNHgtK8KOgyoTsyP5Tb2NXo"></script>


<script src=" {{ asset('front/js/bundle.min.js') }}"></script>

<!-- Plugin Js -->

<script src=" {{ asset('front/js/jquery.appear.js') }}"></script>

<script src=" {{ asset('front/js/wow.min.js') }}"></script>
<script src=" {{ asset('front/js/parallaxie.min.js') }}"></script>
<script src=" {{ asset('front/js/jquery.fancybox.min.js') }}"></script>
<script src=" {{ asset('front/js/map.js') }}"></script>

<!-- CUSTOM JS -->
<script src=" {{ asset('front/js/contact_us.js') }}"></script>
<script src=" {{ asset('front/js/script.js') }}"></script>
<script src=" {{ asset('front/js/owl.carousel.min.js') }}"></script>

<!-- CUSTOM JS -->
<script src=" {{ asset('front/js/swiper.min.js') }}"></script>


    <!-- javascript -->
    <script type="text/javascript">
        function search() {
        let filter = document.getElementById('find').value.toUpperCase();
        let item = document.querySelectorAll('.product');
        let l = document.getElementsByTagName('h3');
        for(var i = 0;i<=l.length;i++){
        let a=item[i].getElementsByTagName('h3')[0];
        let value=a.innerHTML || a.innerText || a.textContent;
        if(value.toUpperCase().indexOf(filter) > -1) {
        item[i].style.display="";
        }
        else
        {
        item[i].style.display="none";
        }
        }
        }
        </script>






