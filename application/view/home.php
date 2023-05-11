<div id="home" class="container-fluid main_container">
  <div class="row">
    <div id="main_3d_image" class="col-sm-12">
      <div id="main_text" class="col-xs-12 col-sm-4">
        <div><h2 id="title_home"><?= $data['name'] ?></h2></div>
        <div id="subTitle_home"><h3><?= $data['subtitle'] ?></h3></div>
        <div id="description_home"><p><?= $data['description'] ?></p></div>
      </div>
    </div>
  </div>
  <div class="row">
    <?php foreach ($data['cards'] as $row) : ?>
      <div class="col-sm-4">
        <div class="card">
          <a href="assets/images/render_images/coke.jpg" data-fancybox data-caption="My 3D Coke can render" class="thumbnail">
            <img src="./assets/images/site_images/<?php echo $row['image'] ?>" class="card-img-top img-fluid img-thumbnail" alt="Coca Cola">
          </a>
          <div class="card-body">
            <div id="title_left" class="drinksText"><h2><?= $row['name'] ?></h2></div>
            <div id="subTitle_left" class="drinksText"><h3><?= $row['subtitle'] ?></h3></div>
            <div id="description_left" class="drinksText"><p><?= $row['description'] ?></p></div>
            <a href="<?php echo $row['link'] ?>" class="btn btn-link button-main-style">Find out more ...</a>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>