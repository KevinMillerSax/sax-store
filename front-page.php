

<?php get_header(); ?>
<div class="slider">

  <div  id="one" class="page-banner" style="background-image: url(<?php echo get_theme_file_uri('images/kandinsky2.jpg');?>)">
      <div class="page-banner__content">
        <h3>The finest instruments in the world <br> Brought to you by Kenny G and master woodwind maker Rheuben Allen</h3>
        <a href="#" class="myButton">See the Horns</a>
      </div>
  </div>

</div>

  <div class="split-view">
    <div class="split-left">
        <h3>Kenny introduces his signature saxophones</h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/xdLO2AMhU1E" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="split-right">
      
        <img src="<?php echo get_theme_file_uri('images/kenny-brochure.png');?>" alt="kenny g saxophones" >
      
    </div>
  </div>
<script type="text/javascript">
  const imageStringUrl = "<?php echo get_theme_file_uri('images/kandinsky.jpeg');?>"
</script>
<?php get_footer(); ?>