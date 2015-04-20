<?php include 'page-header.inc' ?>
<div class="clear"></div>
<div id="content">
    <div class="content-wrap">
      <div class="container clearfix">
        <!-- content region -->
        <div class="nobottommargin clearfix">

          <?php if ($messages): ?>
            <?php print $messages; ?>
          <?php endif; ?> 

          <?php if ($page['content_top']): ?>
            <div id="content-top">
              <?php print render($page['content_top']); ?>
            </div>
          <?php endif; ?>
          <a id="main-content"></a>
          <?php print render($title_prefix); ?>
          <?php print render($title_suffix); ?>

          <?php print render($page['help']); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

          <div class="row">
            <div class="col-md-8 col-lg-8 col-sm-8">
              <?php print render($page['content']); ?>
            </div>
            <div class="col-md-4 col-lg4 col-sm-4">
              <?php if ($page['sidebar_second']): ?>
              <!-- sidebar right --> 
                <div id="sidebar-second" class="sidebar-right nobottommargin clearfix">
                  <?php print render($page['sidebar_second']); ?>
                </div>
                <!-- // sidebar right -->
              <?php endif; ?>
            </div>
          </div>
          
         
          <?php print $feed_icons; ?>
        </div>
      </div>
      <div class="container-fluid" id="home-page-content-bottom">
        <?php print render($page['content_bottom']); ?>
      </div>
      <div class="container">
        <?php if ($page['content_bottom_first'] || $page['content_bottom_second'] || $page['content_bottom_third'] || $page['content_bottom_fourth']): ?>
        <div id="content-bottom" class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <?php print render($page['content_bottom_first']); ?>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
            <?php print render($page['content_bottom_second']); ?>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
            <?php print render($page['content_bottom_third']); ?>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
            <?php print render($page['content_bottom_fourth']); ?>
          </div>
        </div>
        <?php endif; ?>
      </div>
  </div>
</div>
<?php include 'page-footer.inc' ?>