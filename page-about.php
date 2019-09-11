
<?php get_header(); ?>
<?php
while(have_posts()) {
  the_post(); ?>

  <?php pageBanner(); ?>

  <div class="content-container"> 
    <img class="alto" src="<?php echo get_theme_file_uri('images/alto2.png');?>" alt="">
    <p class="about-text">
      <b>Kenny G</b> , the top selling instrumentalist of all time, began playing saxophone at the age of 10 in his home town of Seattle.
      At 17 be became a member of Barry White's Love Unlimited Orchestra and later joined the Jeff Lorber Fusion band.  
      G signed with Arista records in 1982 and went to work creating his classic early records: <i>Kenny G, G Force, </i> and <i>Gravity</i>.
      In 1986, he released <i>Duotones</i> which sold over 5 million copies and included his hit tune <i>Songbird</i>
      In 1992, Kenny released <i>Breathless</i>, which is the most successful instrumental album even recorded, selling over 15 million copies worldwide.
      Just two years later, G would set another record with his album <i>Miracles</i>, the most successful holiday record of all time with over 13 million units sold. 
      Kenny not only spends his time crafting hit records.  He also worked on the soundtracks for the films <i>Dying Young</i> and <i>The Bodyguard</i>. Additionally, Kenny 
      holds Guinness Book of World Record for the longest note held ever played on a saxophone, coming in at just under 46 minutes.  This is due to G's mastery of the advanced technique of circular breathing.
      Kenny's most recent record <i>Brazilian Nights</i> is a Bossa Nova album which recalls the music of Jobim, Joao Gilberto, and Stan Getz.  Kenny was inspired to make the record after traveling in Brazil.  
      In 2005, Kenny G teamed up with saxophone expert Rheuben Allen to design and build the best saxophones on the market.  They meticulously designed and tested each model until it passed their approval and high standards.

    </p>

    <hr>
  <img class="soprano" src="<?php echo get_theme_file_uri('images/soprano-angle2.png');?>" alt="">
  <p class="about-text">
    <b>Master Woodwind maker Rheuben Allen</b> began playing clarinet in 1956.  In 1963, he became a member of the Army's 25th Infantry band
    based in Hawaii.  Rheuben began to study the art of woodwind repair and he opened up a repair shop in Denton, Texas, in 1972.  During his time in 
    Texas, he would work with Dan Higgins and co-author the book <i>High Notes for the Saxophone</i>. In 1977, Rheuben moved to Los Angeles and opened The Sax Shop. 
    His repair clients over the years included many of the world’s most famous saxophone players. Kenny G, Dave Koz, Sam Riney, Dan Higgins, Gary Foster, “Doc” Kupka form Tower of Power, John Klemmer, Lee Konitz, Jack Nimitz, Lanny Morgan, Med Flory, Tom Scott, Michael Brecker, Leo Potts, Gerald Albright, Eddie Harris, Wilt Chamberlain (Tenor sax), Tommy Newsom, Eric Marienthal, Bobby Shew (Tenor), Dave Leibmen, James Moody, Benny Golson, Lennie Niehaus, Clint Eastwood, Phyllis Diller(soprano sax), David Stanton to list a few.. During this time Mr. Allen had many varied enterprises.
    Rheuben also founded the <i>Rheuben Allen Education Foundation</i> which provides disadvantaged children with musicial instruments and supplies and furthers music education in the community. 

  </p>
  </div>

<?php } ?>
<?php get_footer(); ?>