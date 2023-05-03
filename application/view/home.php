<div id="home" class="container-fluid main_container">
  <div class="row">
    <div id="main_3d_image" class="col-sm-12">
      <div id="main_text" class="col-xs-12 col-sm-4">
        <div id="title_home"><?= $data['name'] ?></div>
        <div id="subTitle_home"><?= $data['subtitle'] ?></div>
        <div id="description_home"><?= $data['description'] ?></div>
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
            <div id="title_left" class="drinksText"><?= $row['name'] ?></div>
            <div id="subTitle_left" class="drinksText"><?= $row['subtitle'] ?></div>
            <div id="description_left" class="drinksText"><?= $row['description'] ?></div>
            <a href="#" class="btn btn-primary">Find out more ...</a>
          </div>
        </div>
      </div>
    <?php endforeach ?>
    <!-- <div class="col-sm-4">
      <div class="card">
        <a href="assets/images/render_images/coke.jpg" data-fancybox data-caption="My 3D Coke can render" class="thumbnail">
          <img src="./assets/images/site_images/coca_cola.jpg" class="card-img-top img-fluid img-thumbnail" alt="Coca Cola">
        </a>
        <div class="card-body">
          <div id="title_left" class="drinksText"></div>
          <div id="subTitle_left" class="drinksText"></div>
          <div id="description_left" class="drinksText"></div>
          <a href="#" class="btn btn-primary">Find out more ...</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <a href="assets/images/render_images/sprite.jpg" data-fancybox data-caption="My 3D Sprite can render" class="thumbnail">
          <img src="./assets/images/site_images/sprite.jpg" class="card-img-top img-fluid img-thumbnail" alt="Sprite">
        </a>
        <div class="card-body">
          <div id="title_centre" class="drinksText"></div>
          <div id="subTitle_centre" class="drinksText"></div>
          <div id="description_centre" class="drinksText"></div>
          <a href="#" class="btn btn-primary">Find out more ...</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <a href="assets/images/render_images/pepper.jpg" data-fancybox data-caption="My 3D Pepper can render">
          <img src="./assets/images/site_images/dr_pepper.jpg" class="card-img-top img-fluid img-thumbnail" alt="Dr Pepper">
        </a>
        <div class="card-body">
          <div id="title_right" class="drinksText"></div>
          <div id="subTitle_right" class="drinksText"></div>
          <div id="description_right" class="drinksText"></div>
          <a href="#" class="btn btn-primary">Find out more ...</a>
        </div>
      </div>
    </div> -->
  </div>
</div>