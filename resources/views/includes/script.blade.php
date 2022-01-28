<script src="{{url('frontend/libraries/jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('frontend/libraries/boostrap/js/bootstrap.js')}}"></script>
    <script src="{{url('frontend/libraries/retina/retina.min.js')}}"></script>
    <script src="{{url('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
    <script src="{{url('frontend/script/main.js')}}"></script>
    <script src="{{url('frontend/script/bootstrap.js')}}"></script>
    <script src="{{url('frontend/script/jquery-migrate-1.4.1.min.js')}}"></script>

    
    <script>
      $(document).ready(function () {
        $(".xzoom, .xzoom-gallery").xzoom({
          zoomWidth: 500,
          title: false,
          tint: "#333",
          xoffset: 15,
        });
      });
    </script>

    <script>
      $(document).ready(function(){
        if (window.scroll > $(".section-related-content").offset().top - 250) {
    $(".section-related-content .card-barang").each(function (i) {
        setTimeout(function () {
            $(".section-related-content .card-barang").eq(i).addClass("muncul");
        }, 300 * (i + 1));
        });
          }
        });
    </script>

