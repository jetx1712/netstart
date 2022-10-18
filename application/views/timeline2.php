<link href="<?php echo base_url()?>assets/build/css/timeline.css" rel="stylesheet" />

<section id="bg-timeline" class="anime py-md-3 py-0">
  <div class="cd-h-timeline js-cd-h-timeline margin-bottom-md">
    <div class="cd-h-timeline__events">
      <ol>
        <?php $count = 0; ?>
        <?php foreach ($years as $row): ?>
        <li
          class="cd-h-timeline__event  <?php echo ($count == 0) ? 'cd-h-timeline__event--selected' : ''; ?> text-component">
          <?php $count = 1; ?>
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title"><?php echo $row->year ?></h2>
            <p class="cd-h-timeline__event-description color-contrast-medium">
              <?php echo $row->title ?>
            </p>
          </div>
        </li>
        <?php endforeach; ?>
      </ol>
    </div> <!-- .cd-h-timeline__events -->
    <div class="cd-h-timeline__container container">
      <div class="cd-h-timeline__dates">
        <div class="cd-h-timeline__line">
          <ol>
            <?php $count1 = 0; ?>
            <?php foreach ($years as $row): ?>
            <li>
              <a href="#0" data-date="01/01/<?php echo $row->year ?>"
                class="cd-h-timeline__date <?php echo ($count1 == 0) ? 'cd-h-timeline__date--selected' : ''; ?>"
                <?php $count1 = 1; ?> style="font-size: 24px;"><?php echo $row->year ?></a>
            </li>
            <?php endforeach; ?>
          </ol>
          <span class="cd-h-timeline__filling-line" aria-hidden="true"></span>
        </div> <!-- .cd-h-timeline__line -->
      </div> <!-- .cd-h-timeline__dates -->

      <ul>
        <li><a href="#0"
            class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--prev cd-h-timeline__navigation--inactive">Prev</a>
        </li>
        <li><a href="#0" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--next">Next</a>
        </li>
      </ul>
    </div> <!-- .cd-h-timeline__container -->
  </div>
</section>
