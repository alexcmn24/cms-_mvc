<section class="content-header">
  <h1>Blog</h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Blog</li>
  </ol>
</section>

<section class="content">

  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Administracija Blogova</h3>
      <div class="pull-right">
        <div id="search_polje_div" class="box-tools pull-left">
          <div class="has-feedback">
            <input id="search_blog_polje" type="text" class="form-control input-sm" placeholder="Search Mail">
            <span class="glyphicon glyphicon-search form-control-feedback"></span>
          </div>
        </div>
      <button id="proizvod-dodaj-dugme" class="btn btn-sm btn-info btn-flat cd-popup-dodaj-trigger" type="button">Dodaj Blog</button>
      </div>
    </div>
    
    <div class="box-body">
      <div class="table-responsive">
        <div class="box-header clearfix pull-right">
          
        </div>
        <table class="table no-margin table-bordered">
          <thead>
            <tr>
              <th class="text-center">Redni Broj Bloga</th>
              <th class="text-center">Naslov Bloga</th>
              <th class="text-center">Datum Unosa Bloga</th>
              <th class="text-center">Autor Bloga</th>
              <th class="text-center">Opcija Izmijeni</th>
              <th class="text-center">Aktiviraj/Deaktiviraj</th>
              <th class="text-center">Opcija Izbriši</th>
            </tr>
          </thead>
          <tbody>
            <?php if(isset($_SESSION['svi_blogovi'])): ?>
              <?php foreach($_SESSION['svi_blogovi'] as $blog): ?>
                <tr>
                  <td class="text-center"><?php echo $blog->id; ?></td>
                  <td class="text-center"><?php echo $blog->naslov; ?></td>
                  <td class="text-center"><?php echo $blog->vrijeme; ?></td>
                  <td class="text-center"><?php echo $blog->full_name; ?></td>
                  <td class="text-center">
                    <button class="blog-izmijeni-dugme btn btn-sm btn-info cd-popup-izmijeni-trigger" type="button" blog-id="<?php echo $blog->id; ?>">Izmijeni</button>
                  </td>
                  <td class="text-center">
                    <a class="btn btn-sm" href="<?php echo URLROOT; ?>/blog/deaktiviraj/<?php echo $blog->id; ?>" status-vrijednost="<?php echo $blog->status; ?>"></a>
                  </td>
                  <td class="text-center">
                    <a class="btn btn-sm btn-danger" href="<?php echo URLROOT; ?>/blog/selektuj/<?php echo $blog->id . '/' . 'brisanje'; ?>" >Izbriši</a>
                  </td>
                </tr>
              <?php endforeach; ?>
              <?php unset($_SESSION['svi_blogovi']); ?>
            <?php else: ?>
              <?php foreach($data['svi_blogovi'] as $blog): ?>
                <tr>
                  <td class="text-center"><?php echo $blog->id; ?></td>
                  <td class="text-center"><?php echo $blog->naslov; ?></td>
                  <td class="text-center"><?php echo $blog->vrijeme; ?></td>
                  <td class="text-center"><?php echo $blog->full_name; ?></td>
                  <td class="text-center">
                    <button class="blog-izmijeni-dugme btn btn-sm btn-info cd-popup-izmijeni-trigger" type="button" blog-id="<?php echo $blog->id; ?>">Izmijeni</button>
                  </td>
                  <td class="text-center">
                    <a class="btn btn-sm" href="<?php echo URLROOT; ?>/blog/deaktiviraj/<?php echo $blog->id; ?>" status-vrijednost="<?php echo $blog->status; ?>"></a>
                  </td>
                  <td class="text-center">
                    <a class="btn btn-sm btn-danger" href="<?php echo URLROOT; ?>/blog/selektuj/<?php echo $blog->id . '/' . 'brisanje'; ?>" >Izbriši</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
        </table>
        <?php if(isset($_SESSION['stranica'])): ?>
          <ul class="pagination pull-right" id="pager">
            <?php for($i = 1; $i <= $_SESSION['broj_stranica']; $i++) {
                if($i == $_SESSION['stranica']) {
                  echo "<li class='page-item active'><a class='page-link' href='" . URLROOT . "/blog/stranica/{$i}'>{$i}</a></li>";
                } else {
                  echo "<li><a class='page-item' href='" . URLROOT . "/blog/stranica/{$i}'>{$i}</a></li>";
                }
              }
              unset($_SESSION['broj_stranica']);
              unset($_SESSION['stranica']);
            ?>
          </ul>
        <?php else: ?>
          <ul class="pagination pull-right" id="pager">
            <?php for($i = 1; $i <= $data['broj_stranica']; $i++) {
                if($i == $data['stranica']) {
                  echo "<li class='page-item active'><a class='page-link' href='" . URLROOT . "/blog/stranica/{$i}'>{$i}</a></li>";
                } else {
                  echo "<li><a class='page-item' href='" . URLROOT . "/blog/stranica/{$i}'>{$i}</a></li>";
                }
              }
            ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
  
  <?php require APPROOT . "/views/blogovi/inc/dodaj_blog_modal.php"; ?>
  <?php require APPROOT . "/views/blogovi/inc/izmijeni_blog_modal.php"; ?>
  <?php require APPROOT . "/views/blogovi/inc/popup_potvrda.php"; ?>
  <?php require APPROOT . "/views/blogovi/inc/popup_uspjeh.php"; ?>
  <?php require APPROOT . "/views/blogovi/inc/popup_dodaj_uspjeh.php"; ?>
</section>

<?php require APPROOT . "/views/blogovi/inc/success_modal.php"; ?>
<?php require APPROOT . "/views/blogovi/inc/izbrisi_blog_modal.php"; ?>
<?php require APPROOT . "/views/blogovi/inc/potvrda_modal.php"; ?>

<script src="http://localhost/cms/js/blog_aktiviraj_deaktiviraj.js"></script>
<script src="http://localhost/cms/js/blog_drag_and_drop.js"></script>
<script src="http://localhost/cms/js/blog_fotografije.js"></script>
<script src="http://localhost/cms/js/blog_tagovi.js"></script>
<script src="http://localhost/cms/js/upload_slike.js"></script>
<script src="http://localhost/cms/js/blog_validacija_forme.js"></script>
<script src="http://localhost/cms/js/blog_search_polje.js"></script>