<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- here "bg-dark" is used to change navbar background and "navbar-dark" is used to change font color into white -->
    <div class="container-fluid">
      <a class="navbar-brand" href="#">#BEAUTIFUL_BANGLADESH</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> <!--  here "ms" means margin start that means navbars margins right -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="box, form-control me-2" type="search" placeholder="Search.." aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Sign</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- This code is taken from "w3school bootstrap5 carousel" and background images is taken from online -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/pic1.jpg" alt="Los Angeles" class="d-block" style="width:100%; height:96vh">
      </div>
      <div class="carousel-item">
        <img src="images/pic2.jpg" alt="Chicago" class="d-block" style="width:100%; height:96vh">
      </div>
      <div class="carousel-item">
        <img src="images/pic3.jpg" alt="New York" class="d-block" style="width:100%; height:96vh">
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center" style="<i class="fa-duotone fa-location-dot"></i>Locations</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/sundarban.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-4">Sundarbans</h2>
          <p class="py-4">Sundarbans (pronounced /sʌnˈdɑːrbənz/) is a mangrove area in the delta formed by the confluence of the Ganges, Brahmaputra and Meghna Rivers in the Bay of Bengal. Sundarban Reserve Forest (SRF) of Bangladesh is the largest mangrove forest in the world. It spans the area from the Baleswar River in Bangladesh's division of Khulna to the Hooghly River in India's state of West Bengal. It comprises closed and open mangrove forests, land used for agricultural purpose, mudflats and barren land, and is intersected by multiple tidal streams and channels. Sundarbans is home to the world's largest area of mangrove forests.

            Despite these protections, the Indian Sundarbans were considered endangered in a 2020 assessment under the IUCN Red List of Ecosystems framework.[5] The Sundarbans mangrove forest covers an area of about 10,000 km2 (3,900 sq mi), of which forests in Bangladesh's Khulna Division extend over 6,517 km2 (2,516 sq mi) and in West Bengal, they extend over 3,483 km2 (1,345 sq mi) across the South 24 Parganas and North 24 Parganas districts.[6] The most abundant tree species are sundri (Heritiera fomes) and gewa (Excoecaria agallocha). The forests provide habitat to 453 fauna wildlife, including 290 bird, 120 fish, 42 mammal, 35 reptile and eight amphibian species.[7] Despite a total ban on all killing or capture of wildlife other than fish and some invertebrates, it appears tha....</p>
          <a href="about.php" class="btn btn-success"> Read More </a>
        </div>
      </div>
    </div>
  </section>
  <section class="my-1.5">
    <div class="py-1.5">
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/sajek.jpg" alt="" class="img-fluid" style="width:
          150%">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-4">Sajek Valley</h2>
          <p class="py-4">Sajek Valley is one of the most popular tourist spots in Bangladesh situated among the hills of the Kasalong range of mountains in Sajek union, Baghaichhari Upazila in Rangamati District.[3] The valley is 2,000 feet (610 m) above sea level.[4] Sajek Valley is known as the Queen of Hills & Roof of Rangamati.The name of Sajek Valley came from the Sajek River that originates from Karnafuli river. The Sajek river works as a border between Bangladesh.Sajek is a union located in the north of Chittagong Hill Tracts. It's under Baghaichori Upazila in Rangamati hill district, it is situated 67 kilometres (42 mi) north-east from Khagrachhari town and 95 kilometres (59 mi) north from Rangamati city. The border of Bangladesh and Mizoram of India is 8 kilometres (5.0 mi) east from Sajek.Sajek valley is known for its natural environment and is surrounded by mountains, dense forest, and grassland hill tracks. Many small rivers flow through the mountains among which the Kachalong and the Machalong are notable. On the way to Sajek valley, one has to cross the Mayni range and the Mayni river. The road to Sajek has high peaks and falls.The native people of Sajek valley are ethnic minorities. Among them Chakma, Marma, Tripuri, Pankho, Kaibarta, Lushai and other indigenous communities are mentionable. Women seem to be more involved in economic activities here.[citation needed] Tea stalls, food joints and roadside marketplaces are dominated by women....</p>
          <a href="about.php" class="btn btn-success"> Read More </a>
        </div>
      </div>
    </div>
  </section><br><br>
  <section class="my-1.5">
    <div class="py-1.5">
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/bandarban.jpg" alt="" class="img-fluid">
        </div>
    <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-4">Bandarban</h2>
          <p class="py-4">Bandarban is a district in South-Eastern Bangladesh, and a part of the Chittagong Division.[4] It is one of the three hill districts of Bangladesh and a part of the Chittagong Hill Tracts, the others being Rangamati District and Khagrachhari District. Bandarban district (4,479 km2) is not only the most remote district of the country, but also the least populous (population 388,000).[5] There is an army contingent at Bandarban Cantonment.According to the 2011 Bangladesh census, Bandarban district had a population was 388,335, of which 203,350 were males and 184,985 females. Rural population was 287,912 (74.14%) while the urban population was 100,423 (25.86%). Bandarban district had a literacy rate of 35.86% for the population 7 years and above: 40.29% for males and 30.93% for females.Tribal Mro people holding traditional pipes in their hands, Bandarban (1950)
As per the 2011 census, there were 215,934 Bengalis and 142,401 (36.67%) indigenous people in the district.[7] There are more than fifteen ethnic minorities living in the district besides the Bengalis, including: Marma, who are Arakanese descendants or Rakhine and are also known as Magh, Mru (also known as Mro or Murong), Bawm, Khyang, Tripura (also known as Tipra or Tipperah), Lushei (also known as Lushei), Khumi, Chak, Kuki, Chakma and Tanchangya (also spelt as Tenchungya).Tribal children, The Mru, also known as Murong, who are famous for their music and dance.....</p>
          <a href="about.php" class="btn btn-success"> Read More </a>
        </div>
      </div>
    </div>
  </section>
  <br>
  <hr>
  <hr>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">"Our Services"</h2>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img class="card-img-top" src="images/cc1.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Dhaka</h4>
                  <p class="card-text">Here we can see the capital city of Bangladssh...</p>
                  <a href="#" class="btn btn-primary">See More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img class="card-img-top" src="images/cc1.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Dhaka</h4>
                  <p class="card-text">Here we can see the capital city of Bangladssh...</p>
                  <a href="#" class="btn btn-primary">See More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img class="card-img-top" src="images/cc1.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Dhaka</h4>
                  <p class="card-text">Here we can see the capital city of Bangladssh...</p>
                  <a href="#" class="btn btn-primary">See More</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section><br>
  <hr><hr>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Our Gallery</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
              <img src="images/cc1.jpg" class="img-fluid pb-4">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
              <img src="images/cc1.jpg" class="img-fluid pb-4">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
              <img src="images/cc1.jpg" class="img-fluid pb-4">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
              <img src="images/cc1.jpg" class="img-fluid pb-4">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
              <img src="images/cc1.jpg" class="img-fluid pb-4">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
              <img src="images/cc1.jpg" class="img-fluid pb-4">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
              <img src="images/cc1.jpg" class="img-fluid pb-4">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
              <img src="images/cc1.jpg" class="img-fluid pb-4">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
              <img src="images/cc1.jpg" class="img-fluid pb-4">
          </div>
        </div>
    </div>
  </section>
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">User Info</h2>
    </div>
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
            <label ><b>Username</b></label>
              <input type="text" name="user" autocomplete="off" class="form-control">  
        </div><br>
        <div class="form-group">
            <label ><b>Email</b></label>
              <input type="text" name="email" autocomplete="off" class="form-control">  
        </div><br>
        <div class="form-group">
            <label ><b>Mobile</b></label>
              <input type="text" name="mobile" autocomplete="off" class="form-control">  
        </div><br>
        <div class="form-group">
            <label ><b>Comments</b></label>
              <textarea name="comment" class="form-control"></textarea> 
        </div><br>
        <button type="submit" class="btn btn-success">Submit</button>

      </form>
    </div>
  </section>

  <footer>
    <h3 class="p-3 bg-dark text-white text-center">Field Work Project by Sumaiya Yasmin - 387</h3>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>