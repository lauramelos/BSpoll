<div id="slider">
  <div id="slider-container">
    <div id="slider-wrapper">

      <?php foreach ($surveys as $survey) : ?>
      <div id="s-<?php echo $survey['number'] ?> " class="slide">
          <?php $image = 's'.($survey['number'] + 1).'.jpg'; ?>
          <?php //echo image_tag($image, array('width' => '690', 'height' => '900px', 'class' => 'img-slide')) ?>
          <?php echo image_tag($image, array('class' => 'img-slide')) ?>
        <div class="logo"></div>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
  <div class="box-placeholder">
    <div class="box" id="box">
      <h3>ON A SCALE OF "NOT INTERESTED" TO "MUST HAVE"</h3>
      <div class="control-box">
        <div class="slider-btn-next slider-buttons"></div>
        <div class="slider-btn-previous slider-buttons"></div>
        <div class="rank">
          <h3>RATE: RIFLERY</h3>
          <div class="rate-bar">
            <ul>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>

              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <form action="<?php echo url_for('@addSurvey') ?>" method="post" id="survey-form">
    <?php foreach ($surveys as $survey) : ?>
    <input name="survey[A[s_<?php echo $survey['number'] ?>]]" value="0" type="hidden" />
    <?php endforeach; ?>
  </form>

</div>
