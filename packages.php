<?php include 'include/header.php' ?>
<section class="main-banner branding-bg-inner" style="background-image: url(images/banner07.jpg);">
   <div class="container position-relative">
      <div class="row">
         <div class="col-md-6 col-sm-6 col-12 p-0">
            <article>
               <h2 data-aos="flip-up" data-aos-duration="2000">Packages</h2>
            </article>
         </div>
      </div>
   </div>
</section>
<section class="packages-sec packages-home">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-sm-12 col-12 centerCol">
             <div class="heading">
          <h3 data-aos="flip-up" data-aos-duration="1500">Our Affordable
          <span>Packages</span></h3>
          <p data-aos="flip-up" data-aos-duration="1800">High-quality Web Design, Logo and Marketing packages designed to meet your budget and demands.</p>
        </div>
         </div>
      </div>
    <?php
         $categoriesPackages = getCategoriesPackages();
         if (count($categoriesPackages)) { ?>
      <div class="row">
         <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="portfolio-tabs">
               <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <?php foreach ($categoriesPackages as $index => $categoryPackage) { ?>
                  <li class="nav-item">
                     <a class="nav-link <?= $index == 0 ? 'active' : '' ?>" id="tab_<?= $categoryPackage['id'] ?>" data-toggle="tab"
                        href="#tab_content_<?= $categoryPackage['id'] ?>" role="tab"
                        aria-controls="<?= $categoryPackage['name'] ?>"
                        aria-selected="false"><?= $categoryPackage['name'] ?></a>
                  </li>
                  <?php } ?>
               </ul>
            </div>
         </div>
      </div>
      <div class="tab-content" id="myTabContent">
         <?php foreach ($categoriesPackages as $index => $categoryPackage) { ?>
         <div class="tab-pane <?= $index == 0 ? 'active' : '' ?>" id="tab_content_<?= $categoryPackage['id'] ?>"
            role="tabpanel" aria-labelledby="profile-tab">
            <div class="packages-slider">
               <?php if (count($categoryPackage['packages'])) { ?>
               <?php foreach ($categoryPackage['packages'] as $package) { ?>
               <?php if (!$package['is_advance']) { ?>
                   <?= generatePackageBox('brand_package_box',$package) ?>
               <?php } ?>
               <?php } ?>
               <?php } ?>
            </div>
         </div>
         <?php } ?>
      </div>
      <?php } ?>
   </div>
</section>
<?php include __DIR__ . '/include/together-sec.php'?>
<?php include __DIR__ . '/include/how-it-works.php'?>
<?php include __DIR__ . '/include/client-sec.php'?>
<?php include __DIR__ . '/include/footer.php'?>
 