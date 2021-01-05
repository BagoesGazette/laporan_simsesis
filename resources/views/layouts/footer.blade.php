    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark pt-4">

        <!-- Footer Elements -->
        <div class="container">
          <div class="row">
            <div class="col-md-4 mb-4">
              <h6 class="text-uppercase font-weight-bold">Tentang Kami</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>SMK NEGERI 2 TRENGGALEK adalah sekolah smk yang memiliki akreditasi A yang berada kota Trenggalek. Sekolah ini termasuk sekolah adiwiyata di kota Trenggalek</p>
            </div>
            <div class="col-md-4 mb-4">
              <h6 class="text-uppercase font-weight-bold">Contact Kami</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <ul class="list-unstyled">
                <li>
                  <p>
                    <i class="fas fa-home mr-3"></i> Jl. Ronggo Warsito Gg. Sidomukti No.1, Jambangan, Sumbergedong, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66315</p>
                </li>
                <li>
                  <p>
                    <i class="fas fa-envelope mr-3"></i> smkn2trenggalek@gmail.com</p>
                </li>
                <li>
                  <p>
                    <i class="fas fa-phone mr-3"></i>(0355) 7690148</p>
                </li>
              </ul>
            </div>
            <div class="col-md-4 mb-4">
              <h6 class="text-uppercase font-weight-bold">Location</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7900.89005810856!2d111.70923220304121!3d-8.056005031950479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e791ad57d22f257%3A0x433e2b19890a748!2sSMK%20Negeri%202%20Trenggalek!5e0!3m2!1sid!2sid!4v1603304728783!5m2!1sid!2sid" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
        </div>
        <!-- Footer Elements -->
      
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
          TIM SIM SMKN 2 TRENGGALEK
        </div>
        <!-- Copyright -->
      
      </footer>
      <style>
        #topBtn{
          position: fixed;
          bottom: 40px;
          right: 40px;
          font-size: 22px;
          width: 50px;
          height: 50px;
          background: #00C851;
          color: white;
          border: none;
          cursor: pointer;
        }
      </style>
      <!-- Footer -->
      <button id="topBtn" class="rounded-circle"><i class="fa fa-arrow-up"></i></button>
      <script>
        $(document).ready(function(){
          $(window).scroll(function(){
            if($(this).scrollTop() > 40){
              $("#topBtn").fadeIn();
            }else{
              $("#topBtn").fadeOut();
            }
          });
          $("#topBtn").click(function(){
            $("html, body").animate({scrollTop: 0},800);
          })
        })
      </script>