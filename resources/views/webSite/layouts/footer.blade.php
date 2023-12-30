<footer class="text-center text-lg-start  pt-5 text-muted mt-5">
    <div class="contact-area">
      <div class="container"> 
        <div class="row d-md-flex align-items-center justify-content-center">
          <div class="col-md-9 col-sm-12">
            <div class="contactUs-card d-md-flex justify-content-center align-items-center">
            <div class="col-md-5 col-sm-12">
              <div class="contact-text me-md-5">
                <h2>Contact Us!</h2>
                <p>Sending Us Email regardring any comments, questions or concerns <br> will get Back to you ASAP!</p>
              </div>
            </div>  
            <div class="col-md-4 col-sm-7">
              <div class="contact-form d-flex justify-content-center ml-3">
                <form action="">
                  <div class="input-group mb-3 contact-form-group">
                    <input type="text" class="form-control contact-input" placeholder="Email Here" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary contactArea-button" type="submit" id="button-addon2">Send</button>
                  </div>
                </form>
              </div>
          </div>  
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="main-footer">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-md-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase text-dark fw-bold mb-4">
            </h6>
            <div class="social-media d-flex justify-content-evenly mt-5">
              <a href="{{ $all_setting->face_book }}">
              <i class="fa-brands fa-facebook"></i>
              </a>
              <a href="{{ $all_setting->twitter }}">
              <i class="fa-brands fa-twitter"></i>
              </a>
              <a href="{{ $all_setting->linkedin }}">
              <i class="fa-brands fa-linkedin-in"></i>
              </a>
            </div>                
          </div>
          <div class="col-md-2 col-lg-2 col-md-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase text-dark fw-bold mb-4">{{trans('main_trans.Links')}}</h6>
            <p>
              <a href="{{route('index')}}" class="text-reset text-decoration-none">{{trans('main_trans.Home')}}</a>
            </p>
            <p>
              <a href="Terms.html" class="text-reset text-decoration-none">Submit</a>
            </p>
            <p>
              <a href="account.html" class="text-reset text-decoration-none">Follow Your App</a>
            </p>
            <p>
              <a href="{{route('legal_documents.index')}}" class="text-reset text-decoration-none">{{trans('main_trans.Legal Documents')}}</a>
            </p>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase text-dark fw-bold mb-4">{{trans('main_trans.Support')}}</h6>
            <p>
              <a href="FAQ.html" class="text-reset text-decoration-none">{{trans('main_trans.FAQ')}}</a>
            </p>
            <p>
              <a class="text-reset text-decoration-none" href="{{route('blogPages.index')}}">{{trans('main_trans.Blogs')}}</a>

            </p>
            <p>
              <a class="text-reset text-decoration-none" href="{{route('newsPages.index')}}">{{trans('main_trans.News')}}</a>
            </p>
           
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold text-dark mb-4">{{trans('main_trans.Contact Us')}}</h6>
            <p>
              {{ $all_setting->contact_us }}
              <i class="fas fa-envelope me-3"></i>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05)">
      {{trans('main_trans.Copyright')}}:
      <a class="text-reset fw-bold" href="https://sdsolutionseg.com/">SD Solutions</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <script src="{{asset('webSite/js/jquery-3.3.1.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('webSite/js/Bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{asset('webSite/js/main.js')}}"></script>
  <script>
    let nav = document.querySelector('nav');
    let lightLogo = document.getElementById('light-img');

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        nav.classList.add('scrolling-active');
      } else {
        nav.classList.remove('scrolling-active');
      }
    }

    $(function() {
        var current = window.location.href;
        var lang=document.getElementById('mylink').getAttribute('data-href');
        if (current == "http://127.0.0.1:8000/"+lang) {//https://eye-ventures.com/
            $('#home').addClass('active'); //#home is the id for root link.
        } else {
            $('a').each(function() {
                var $this = $(this);
                // if the current path is like this link, make it active
                if (this.href === current) {
                    $('#home').removeClass('active');
                    $this.addClass('active');
                }
            })
        }
    })
  </script>
</body>
</html>
