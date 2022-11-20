<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page &mdash; Stisla</title>

  <?php $this->load->view("admin/partial/css.php") ?>
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <!--Top Navbar -->
      <?php $this->load->view("admin/partial/topnavbar.php") ?>

      <!-- Side Navbar -->
      <?php $this->load->view("admin/partial/sidenavbar.php") ?>


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Blank Page</h1>
          </div>

          <div class="section-body">
          </div>
        </section>
      </div>
      <!-- footer -->
      <?php $this->load->view("admin/partial/footer.php") ?>
    </div>
  </div>

  <!-- General JS Scripts -->
  <?php $this->load->view("admin/partial/js.php") ?>
</body>
</html>