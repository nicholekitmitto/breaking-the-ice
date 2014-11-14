<?php $thisPage = "Hosts";
  include('../inc/header.php');

?>

<a href="/project1/assets/img/galleries/osk1.png" data-lightbox="oskar">
  <section class="host_hero host_osk"></section>
</a>
<main role="main" class="host_main">
  <div class="host_profile">
    <img src="/project1/assets/img/osk_profile.jpg" alt="Rolf and Ada" class="host_profile_image">
    <h2 class="host_name">Rolf and Ada</h2>

    <article class="listing_details">
      <h3>About Rolf</h3>
      <p>Hi im Rolf, and my wife's Ada!</p>
      <p>We love travelling, meeting new people, outdoor activities, surfing, skiing, yoga, and lots of other things.</p>
      <p>For the past 5 years we´ve lived in Dubai, Scotland, and England and travelled alot, and recently moved back home to our gorgeous island.
        We're looking forward to being your host and will do our absolute best to make you feel comfortable and happy :)</p>
    </article>

    <div class="review_wrapper">
      <div class="review_item">
        <img src="/project1/assets/img/jegtnes.jpg" alt="comment image" class="comment_image">
        <h3 class="comment_user">Henrik Stoltz</h3>
        <p class="comment_content">Utrolig sentralt, rent, pent og ryddig. Enkelt å finne frem til. 5min å gå fra sentrum. Billig parkering i gata utenfor og alltid ledig plass til bil. Kjempehyggelig vert og enkel å kommunisere med. Anbefales!</p>
        <p class="comment_post_date">October 2014</p>
      </div>
      <div class="review_item">
        <img src="/project1/assets/img/jegtnes.jpg" alt="comment image" class="comment_image">
        <h3 class="comment_user">Bobby</h3>
        <p class="comment_content">He was a very nice and considerate host. He was extremely responsive, and was really understanding when we were accidentally a little late leaving in the morning. The place is very nice, clean, and modern.</p>
        <p class="comment_post_date">October 2014</p>
      </div>
      <div class="review_item">
        <img src="/project1/assets/img/jegtnes.jpg" alt="comment image" class="comment_image">
        <h3 class="comment_user">Henrik Stoltz</h3>
        <p class="comment_content">Feel like home! Lovely house, adequate space, helpful and thoughtful host, great surf scene, ocean-side located, with everything we need. Highly recommended!!!</p>
        <p class="comment_post_date">September 2014</p>
      </div>
    </div>
  </div>

  <aside class="booking_request">
    <a href="#"><div class="request_button">Request Booking</div></a>
  </aside>

  <aside class="listing_gallery">
    <ul class="list_neutral">
      <li>
        <a href="/project1/assets/img/galleries/osk2.jpg" data-lightbox="oskar">
          <img src="/project1/assets/img/galleries/osk2_thumb.jpg">
        </a>
      </li>
      <li>
        <a href="/project1/assets/img/galleries/osk3.jpg" data-lightbox="oskar">
          <img src="/project1/assets/img/galleries/osk3_thumb.jpg">
        </a>
      </li>
      <li>
        <a href="/project1/assets/img/galleries/osk4.jpg" data-lightbox="oskar">
          <img src="/project1/assets/img/galleries/osk4_thumb.jpg">
        </a>
      </li>
    </ul>
  </aside>
</main>


<?php include('../inc/footer.php'); ?>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="/project1/assets/js/maps.js"></script>