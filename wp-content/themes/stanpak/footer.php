<section class="contact bg-pattent" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
      <?php 
        echo do_shortcode(apply_filters("the_content", '[contact-form-7 id="67" title="Contact"  class="form-contact" ]'));
      ?>
        <!-- <form id="from-contact" action="/#wpcf7-f67-o1" class="wpcf7-form" method="post">
          <input type="text" name="your-name" placeholder="Name" required>
          <input type="email" name="email" placeholder="Email" required>
          <input type="text" name="subject" placeholder="Subject" required>
          <textarea required placeholder="Messeage" name="message" rows="6"></textarea>
          <button type="submit" class="btn btn-outline btn-xl no-margin">Send</button>
        </form> -->
      </div>
      <div class="col-sm-6">
        <h2>We
          <i class="fa fa-heart"></i>
          new friends!</h2>
        <p>
          <strong>CTY TNHH IN ẤN & QUẢNG CÁO HỢP LONG</strong><br/>
          323A Lê Quang Định, Phường 5, Quận Bình Thạnh, TP.Hồ Chí Minh.<br>
          08 888 345 89<br>
          stanpakvn@gmail.com
        </p>
        <ul class="list-inline list-social">
          <li class="list-inline-item social-twitter">
            <a href="#">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item social-facebook">
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item social-google-plus">
            <a href="#">
              <i class="fa fa-google-plus"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>

    
  </div>
</section>

    <footer>
      <div class="container">
        <p>&copy; 2017 HOPLONG COMPANY</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="#">Privacy</a>
          </li>
          <li class="list-inline-item">
            <a href="#">Terms</a>
          </li>
          <li class="list-inline-item">
            <a href="#">FAQ</a>
          </li>
        </ul>
        <ul class="list-inline">
          <?php
              pll_the_languages( array(
                 'show_flags' => 1,
                 'show_names' => 0,
              ));
              ?>
          
        </ul>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>

</html>