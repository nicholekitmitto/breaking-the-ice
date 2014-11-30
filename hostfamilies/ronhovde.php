<?php $thisPage = "Hosts";
  include('../inc/header.php');

?>

<a href="/project1/assets/img/galleries/ron1.jpg" data-lightbox="ronhovde">
  <section class="host_hero host_ron"></section>
</a>
<main role="main" class="host_profile_main_wrapper">
  <a id="skip"> </a>
  <div class="host_profile">
    <div class="host_details cf">
      <div class="name_container">
        <img src="/project1/assets/img/ron_profile.jpg" alt="Ville" class="host_profile_image">
        <h2 class="host_name">Ville Rønhovde</h2>
        <p class="location">Reykjavik, Iceland</p>
        <a href="/project1/contact" class="pulse"><div>Request Booking</div></a>
      </div>

      <article class="about_host">
        <h3>About Ville</h3>
        <p>Hi I'm Ville</p>
        <p> I am 26 years old and grew up in a town with 800 residents in the north-west of Iceland named Bolungarvík. I love doing outdoor activities and it'd be ideal if you're the same; I love taking my guests out and showing them all Iceland has to offer.</p>
        <p> Surfing is one of my passions, I've travelled all over the world to catch some waves, but my heart will always remain in Iceland.</p>
      </article>
    </div>
    <div class="host_details cf">
      <div class="review_wrapper">
        <h3>Reviews</h3>
        <div class="review_item blockquote_wrapper">
          <blockquote class="comment_content">
            <p>Utrolig sentralt, rent, pent og ryddig. Enkelt å finne frem til. 5min å gå fra sentrum. Billig parkering i gata utenfor og alltid ledig plass til bil. Kjempehyggelig vert og enkel å kommunisere med. Anbefales!</p>
          </blockquote>
          <p class="commentor">Henrik Stoltz - October 2014</p>
        </div>
        <div class="review_item blockquote_wrapper">
          <blockquote class="comment_content">
            <p>He was a very nice and considerate host. He was extremely responsive, and was really understanding when we were accidentally a little late leaving in the morning. The place is very nice, clean, and modern.</p>
          </blockquote>
          <p class="commentor">Bobby - October 2014</p>
        </div>
        <div class="review_item blockquote_wrapper">
          <blockquote class="comment_content">
            <p>Feel like home! Lovely house, adequate space, helpful and thoughtful host, great surf scene, ocean-side located, with everything we need. Highly recommended!!!</p>
          </blockquote>
          <p class="commentor">Ana Biagi - September 2014</p>
        </div>
      </div>

      <aside class="listing_gallery">
        <h3>Gallery</h3>
        <ul class="list_neutral">
          <li>
            <a href="/project1/assets/img/galleries/ron2.png" data-lightbox="ronhovde">
              <img src="/project1/assets/img/galleries/ron2_thumb.png">
            </a>
          </li>
          <li>
            <a href="/project1/assets/img/galleries/ron3.jpg" data-lightbox="ronhovde">
              <img src="/project1/assets/img/galleries/ron3_thumb.jpg">
            </a>
          </li>
          <li>
            <a href="/project1/assets/img/galleries/ron4.jpg" data-lightbox="ronhovde">
              <img src="/project1/assets/img/galleries/ron4.jpg">
            </a>
          </li>
          <li>
            <a href="/project1/assets/img/galleries/ron5.jpg" data-lightbox="ronhovde">
              <img src="/project1/assets/img/galleries/ron5_thumb.jpg">
            </a>
          </li>
        </ul>
      </aside>
    </div>

    <div class="host_details cf">
      <article class="about_city">
        <h3>About Reykjavik</h3>
        <p>
          The world’s most northerly capital combines colourful buildings, quirky people, a wild nightlife and a capricious soul to devastating effect. Most visitors fall helplessly in love, returning home already saving to come back.</p>
        <p>
          The city’s charm lies in its many peculiar contrasts, which, like tectonic plates clashing against one another, create an earthquake of energy. Reykjavík offers a bewitching combination of village innocence and big-city zeal. It’s populated by darkly cynical citizens (a quality brought very much to the fore by the country's recent near-bankruptcy) who are, in spite of everything, filled with unstoppable creativity and enduring spirit. In summer the streets are washed by 22 hours of daylight; in winter they’re scoured by blizzards and doused in never-ending night. Reykjavík is a city that treasures its Viking past but wants the future now.</p>

      </article>

      <aside class="surf_data">
        <h3>Surf Forecast for Reykjavik</h3>
        <!-- including the surf data file in order to keep this file relatively clean and legible -->
          <?php
          $location = '4295';
          include("../inc/surfdata.php");
          $firstImgsrc = $data[0]['charts']['swell'];
          $firstChartTime = date("l, F d HA", $data[0]["timestamp"]);
          ?>
          <h1  class="swell">Swell Chart</h1>
          <h2><?php echo $firstChartTime; ?></h2>
          <img src="<?php echo $firstImgsrc; ?>" id="chart" alt="Swell Charts">
          <input type="range" value="0" max="40" id="swell_slider">
      </aside>
    </div>
  </div>
</main>
<?php include('../inc/footer.php'); ?>
