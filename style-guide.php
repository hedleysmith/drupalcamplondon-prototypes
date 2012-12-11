<?php include('includes/style-guide/guide-header.php'); ?>

<!-- Style guide second level menu (sticky) -->
<div class="stickynav-container">
  <nav class="pb-menu-primary-level2 stickynav">
    <div class="pattern-browser-content-wrapper">
      <ul>
        <li><a href="#typography">Typography</a></li>
        <li><a href="#colours">Colours & Brand</a></li>
        <li><a href="#text">Text</a></li>
        <li><a href="#forms">Forms</a></li>
        <li><a href="#tables">Tables</a></li>
        <li><a href="#messages">Messages</a></li>
        <li><a href="#buttons">Buttons</a></li>
        <li><a href="#grid">Grid</a></li>
      </ul>
      <div class="toplink"><a href="#top">Top</a></div>
    </div>
  </nav>
</div>

<div class="pattern-browser-content-wrapper">
  <p class="intro">A guide to the styles used throughout the website. All generic site-wide styling. Nothing specific to a pattern / page.</p>
</div>

<section id="typography" class="pattern-browser-content-wrapper">
  <h1>Typography</h1>
  <?php include('includes/style-guide/typography.php'); ?>
</section>


<section id="colours" class="pattern-browser-content-wrapper">
  <h1>Colours</h1>
  <?php include('includes/style-guide/colours.php'); ?>
</section>


<section id="text" class="pattern-browser-content-wrapper">
  <h1>Text</h1>
  <?php include('includes/style-guide/text.php'); ?>
</section>


<section id="forms" class="pattern-browser-content-wrapper">
  <h2 class="pattern-browser-header"><a href="viewer.php?view=includes/style-guide/forms_basic.php">Forms, basic</a></h2>
  <?php include('includes/style-guide/forms_basic.php'); ?>
</div>

<section id="tables" class="pattern-browser-content-wrapper">
  <h2 class="pattern-browser-header">Tables</h2>
  <h4 class="pattern-browser-header"><a href="viewer.php?view=includes/style-guide/tables.php">Standard</a></h2>
  <?php include('includes/style-guide/tables.php'); ?>
  <h4 class="pattern-browser-header">Striped</h3>
  <div class="table-striped">
    <?php include('includes/style-guide/tables.php'); ?>
  </div>
</section>

<section id="messages" class="pattern-browser-content-wrapper">
  <h2 class="pattern-browser-header">Messages</h2>
  <?php include('includes/style-guide/messages.php'); ?>
</section>

<section id="buttons" class="pattern-browser-content-wrapper">
  <h2 class="pattern-browser-header">Buttons</h2>
  <?php include('includes/style-guide/buttons.php'); ?>
</section>

<div class="pattern-browser-content-wrapper">
  <h2>The grid</h2>
  <p class="pattern-browser-description">16 column fluid grid. 20px gutters</p>
  <?php include('includes/style-guide/grid.php'); ?>
</div>

<?php include('includes/style-guide/guide-footer.php'); ?>