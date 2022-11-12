<?php
session_start();
require_once("pages/panier/dbConnexion.php");
$DB = new PDODB("localhost","root","","commerce-lap");
$dbRequest = $DB->PDOConnecte();

$productTopLaptrop = $dbRequest->query("SELECT * FROM `products` WHERE categorie_id=1 LIMIT 9 OFFSET 0");
$productLaptopFetch = $productTopLaptrop->fetchAll(PDO::FETCH_OBJ);



$productTopOutil = $dbRequest->query("SELECT * FROM `products` WHERE categorie_id=2 LIMIT 9 OFFSET 0");
$productOutilFetch = $productTopOutil->fetchAll(PDO::FETCH_OBJ);


// SEARCH CODE 
if (isset($_GET["search"])) {
  $search = true ;
  $keyWord = trim($_GET["search"]);
  $keyWord = htmlspecialchars($keyWord);
  $keyWord = stripslashes($keyWord);

  $dbSearchRequest = $DB->PDOConnecte();
  $searchRequest = $dbSearchRequest->query("SELECT * FROM `products` WHERE lib_product LIKE '%$keyWord%'");
  $searchResult = $searchRequest->fetchAll(PDO::FETCH_OBJ);

  




} else {
  $search = false ;
  
}
// SEARCH CODE 

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Acheter vos portable et pc en ligne depuis n'importe quel lieu">
  <meta name="keywords" content="smartphone;pc;achat;acheter;vente en ligne">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="public/js/vendor/owl carousel/dist/assets/owl.carousel.css">
  <link rel="stylesheet" href="public/js/vendor/owl carousel/dist/assets/owl.theme.default.css">
  <link rel="stylesheet" href="public/css/vendor/bootstrap.css">
  <link rel="stylesheet" href="public/css/css/footer.css">
  <link rel="stylesheet" href="public/css/css/styles.css">
  <link rel="stylesheet" href="public/css/css/product_card_clone.css">
  <link rel="stylesheet" href="public/css/css/description_product.css">

  <title>Smartcommerce Site E-commerce Portable</title>

</head>

<body>
























  <!-- Description Product container Laptop-->

  <div class="description_product_container_laptop">
  <div class="btn_close_laptop_description">X</div>
    <div class="container zIndex">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="row justify-content-center">
            <div class="col-md-12 p-4">

              <div class="page_big_title mb-4 laptop_name">Manette</div>

              <div class="loop owl-carousel owl-theme description_container">
                <div class="description">
                  <div class="description_card" style="padding:0px;">
                    <div class="description_img">

                    </div>

                  </div>
                </div>




                <div class="description">
                  <div class="description_card">
                    <div class="description_title">
                      RAM
                    </div>
                    <div class="description_value ram">
                      2GB
                    </div>
                  </div>
                </div>
                <div class="description">
                  <div class="description_card">
                    <div class="description_title">
                      ROM
                    </div>
                    <div class="description_value rom">
                      200GB
                    </div>
                  </div>
                </div>
                <div class="description">
                  <div class="description_card">
                    <div class="description_title">
                      Processeur
                    </div>
                    <div class="description_value processor">
                      2.9GHZ 4 coeur 6 coeurs logiques Intel
                    </div>
                  </div>
                </div>


                <div class="description">
                  <div class="description_card">
                    <div class="description_title">
                      Ecran
                    </div>
                    <div class="description_value screen">
                      1300px X 750px
                    </div>
                  </div>
                </div>




                <div class="description">
                  <div class="description_card">
                    <div class="description_title">
                      Graphique
                    </div>
                    <div class="description_value graphique">
                      2GB NVIDIA Carte graphique
                    </div>
                  </div>
                </div>




                <div class="description">
                  <div class="description_card">
                    <div class="description_title">
                      Autre <br /> Description
                    </div>
                    <div class="description_value other_description">
                      USB 3.0 Port RJ45
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- Description Product Container Laptop-->


  <!-- Description Product container Outil-->

  <div class="description_product_container_outil">
  <div class="btn_close_outil_description">X</div>
    <div class="container zIndex">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="row justify-content-center">
            <div class="col-md-12 p-4">

              <div class="page_big_title mb-4 outil_name">Manette</div>

              <div class="loop owl-carousel owl-theme description_container">
                <div class="description">
                  <div class="description_card" style="padding:0px;">
                    <div class="description_img">

                    </div>

                  </div>
                </div>




                <div class="description">
                  <div class="description_card">
                    <div class="description_title">
                      Autre <br /> Description
                    </div>
                    <div class="description_value other_description">
                      USB 3.0 Port RJ45
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- Description Product Container Outil-->


















  <!-- Header  -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="img_header img_header_one">
          <div class="img_header_text">
            <div class="container">
              <div class="img_header_title">Reduction de 20% sur l'achat d'un laptop.</div>
              <div class="img_header_text_small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae
                consequatur distinctio iusto, sequi nam corporis adipisci.
                velit consequatur illum exercitationem amet omnis fuga corporis dolores aperiam nesciunt, repellat quis
                voluptates!
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="img_header img_header_two">
          <div class="img_header_text">
            <div class="container">
              <div class="img_header_title">Reduction de 50% sur l'achat d'un smartphone.</div>
              <div class="img_header_text_small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae
                consequatur distinctio iusto, sequi nam corporis adipisci.
                velit consequatur illum exercitationem amet nesciunt, repellat quis voluptates!
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="img_header img_header_three">
          <div class="img_header_text">
            <div class="container">
              <div class="img_header_title">20% sur l'achat d'une unité centrale.</div>
              <div class="img_header_text_small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae
                consequatur distinctio iusto, sequi nam corporis adipisci.
                velit consequatur illum exercitationem amet omnis fuga corporis dolores aperiam nesciunt, repellat quis
                voluptates!
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Header  -->



  <!-- NavBar  -->
  <nav class="navbar navbar navbar-light bg-light navbar-expand-lg">


    <div class="container">
      <a class="navbar-brand" id="logo" href="#">Commerce-Lap</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/panier.php">Panier</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Categories
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="pages/all_products.php?page=1">All products</a></li>
              <li><a class="dropdown-item" href="pages/laptop.php?page=1">Laptop</a></li>
              <li><a class="dropdown-item" href="pages/outils_informatique.php?page=1">Outis informatique</a></li>

            </ul>
          </li>

        </ul>
        
        <form>
          <div class="flex_div_search">
            <form method="get" id="search-form">
              <input class="input_search-control" name="search" type="text" placeholder="Recherche" />
              <button class="btn_submit" type="submit">
                RECHERCHE
              </button>

            </form>


          </div>

        </form>
      </div>
    </div>


  </nav>
  <!-- NavBar  -->






  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="row justify-content-center">
          <div class="col-md-12 p-4">

            <div class="page_big_title">
              
              <?php if ($search == true) :?>
              Resultat de votre recherche
              <?php endif?>

            </div>

            <?php if ($search == true) :?>
            <?php if (empty($searchResult)) :?>
            <div class="container mt-4">
              <div class="row justify-content-center">
                <div class="col-md-12 card shadow p-4">
                  <h3 align="center">Pas de resultat</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quasi, perferendis quos molestias
                    similique maiores totam iste repudiandae sit! Minus eius facere sunt officiis minima iste modi
                    excepturi voluptas. Inventore.</p>
                </div>
              </div>
            </div>
            <?php endif ?>
            <?php endif?>


            <?php if ($search == true) :?>

            <?php if (!empty($searchResult)) :?>

            <div class="card_grid_products">

              <?php foreach($searchResult as $key => $value) :?>
              <div class="item_content_clone">
                <div class="product_card_clone">

                  <div class="product_img_card_clone">
                    <div class="product_img_clone"
                      style="background-image:url('../admin/<?= $value->img_link_product  ?>')">
                     
                    </div>
                  </div>
                  <div class="product_text_clone">
                    <div class="product_name_clone"><?= $value->lib_product  ?></div>
                    <div class="product_price_clone"><?= $value->price  ?> $</div>
                    <a href="pages/panier/addPanier.php?id=<?= $value->id  ?>" style="text-decoration:none;">
                      <div class="product_btn_buy_clone">ACHETER</div>
                    </a>
                  </div>
                </div>
              </div>

              <?php endforeach ?>
            </div>

            <?php endif?>
            <?php endif?>


          </div>
        </div>
      </div>
    </div>
  </div>






  <?php if ($search == false) :?>



  <!-- CONTENT  -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="row justify-content-center">
          <div class="col-md-12 p-4">










          <div class="row justify-content-center mt-4 mg-bottom">
                      <div class="col-md-8 p-2">
                          <div class="promotion_card">
                              <div class="row">
                                          <div class="col-md-8">
                                                  <div class="promotion_img">

                                                  </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="promotion_text p-4">
                                                      <div class="promotion_big_title">
                                                           20% de reduction
                                                      </div>
                                                      <div class="promotion_small_title">
                                                           Profitez de cet offre jusqu'au 20 Novembre.
                                                      </div>
                                                      <a href="pages/panier/addPanier.php?id=41" style="text-decoration:none;">
                                                          <div class="promotion_btn">
                                                              ACHETER
                                                          </div>
                                                      </a>
                                                     
                                              </div>

                                          </div>
                                      </div>
                              </div>
                      </div>
                      <div class="col-md-4 p-2">
                            <div class="promotion_card">
                                     <div class="promotion_text p-4">
                                                   <div class="promotion_big_title">
                                                          Tout outils informatique
                                                      </div>
                                                      <div class="promotion_small_title">
                                                           Profitez de cet offre jusqu'au 10 Novembre.
                                                      </div>
                                                      
                                     </div>
                            </div>
                      </div>
            </div>












            
            <!-- Laptop les plus veendus -->
            <div class="big-title-top mb-2">Meilleure <span class="crimson">Laptop</span> vendus</div>
            <div class="small-title-top mg-bottom">Top 10 des laptop les plus vendu et les plus puissant.</div>



            <div class="loop owl-carousel owl-theme">


            <?php foreach ($productLaptopFetch as $key => $value): ?>
              <div class="item_content">
                <div class="product_card">
                  <a href="pages/description/descriptionsrequest.php?id=<?= $value->id  ?>" class="product_info_plus">
                    <svg id="Layer_1" fill="white" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24">
                      <path
                        d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Zm5-10a1,1,0,0,1-1,1H13v3a1,1,0,0,1-2,0V13H8a1,1,0,0,1,0-2h3V8a1,1,0,0,1,2,0v3h3A1,1,0,0,1,17,12Z" />
                      </svg>
                  </a>
                  <div class="product_img_card">
                    <div class="product_img" style="background-image:url('admin/<?= $value->img_link_product?>')">
                    </div>
                  </div>
                  <div class="product_text">
                    <div class="product_name"><?= $value->lib_product?></div>
                    <div class="product_price"><?= $value->price?> $</div>
                    <a href="pages/panier/addPanier.php?id=<?= $value->id  ?>" style="text-decoration:none;">
                      <div class="product_btn_buy">ACHETER</div>
                    </a>
                  </div>
                </div>
              </div>
              <?php endforeach ?>










            </div>

          </div>
        </div>
      </div>
    </div>
  </div>














































  <div class="divider_page">

  </div>




  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="row justify-content-center">
          <div class="col-md-12 p-4">



            <!-- Outils informatique top 10 -->
            <div class="big-title-top  mb-2">Top 10 outils informatique</div>
            <div class="small-title-top  mg-bottom">Les top 10 des outils les plus vendu sur le plan mondial.</div>






            <div class="loop owl-carousel owl-theme">


             
            <?php foreach ($productOutilFetch as $key => $value): ?>
              <div class="item_content">
                <div class="product_card">
                  <a href="pages/description/descriptionsrequest.php?id=<?= $value->id  ?>" class="product_info_plus">
                    <svg id="Layer_1" fill="white" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24">
                      <path
                        d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Zm5-10a1,1,0,0,1-1,1H13v3a1,1,0,0,1-2,0V13H8a1,1,0,0,1,0-2h3V8a1,1,0,0,1,2,0v3h3A1,1,0,0,1,17,12Z" />
                      </svg>
                  </a>
                  <div class="product_img_card">
                    <div class="product_img" style="background-image:url('admin/<?= $value->img_link_product?>')">
                    </div>
                  </div>
                  <div class="product_text">
                    <div class="product_name"><?= $value->lib_product?></div>
                    <div class="product_price"><?= $value->price?> $</div>
                    <a href="pages/panier/addPanier.php?id=<?= $value->id  ?>" style="text-decoration:none;">
                      <div class="product_btn_buy">ACHETER</div>
                    </a>
                  </div>
                </div>
              </div>
              <?php endforeach ?>






            </div>

        


          </div>
        </div>
      </div>
    </div>
  </div>













  <?php endif ?>









  <?php include("components/footer.php"); ?>



  <!-- CONTENT  -->

  <!-- <h1>Page Home</h1> -->
</body>

<script src="public/js/vendor/JQuery/Jquery.js"></script>
<script>
  jQuery(document).ready(function ($) {



    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 12,
      fluidSpeed: true,
      autoHeight: true,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 3,
          nav: false
        },
        1000: {
          items: 5,
          nav: true,
          loop: false
        }
      }
    })




  });
</script>
<script src="public/js/vendor/owl carousel/dist/owl.carousel.js"></script>
<script src="public/js/vendor/bootstrap/bootstrap.js"></script>
<script src="public/js/vendor/gsap/gsap.js"></script>
<script src="public/js/description/description_ajax.js"></script>

<!-- <script src="public/js/vendor/owl carousel/dist/owl.carousel.min.js"></script> -->

</html>
