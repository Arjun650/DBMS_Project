<?php
// index.php

// Fetch announcements from the database
$conn = new mysqli("localhost", "root", "", "aietclub");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM announcements ORDER BY created_at DESC LIMIT 4"; // Limit to the first 4 rows
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="icon" type="image/x-icon" href="/media_content/gall1.jpg">
    <link rel="stylesheet" href="./Styles.css" >
    

  <style>
    .contain{
    margin: 14%;
}
.body{
  background-image: url('aiet-logo.png');
}
  </style>
  <link rel="icon" href="images/logo.png" />
    <title>Amrita Club  </title>
</head>

<body>
  
<!-- <body class="bg-[url('images/index.jpeg')]">
    <div class="contain animate__animated animate__zoomInDown">
<div class="bg-red-100 rounded-lg bg-opacity-40">
<div class="mx-auto max-w-7xl py-12 px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
  <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
    <span class="block">Ready to dive in?</span>
    <span class="block text-indigo-600">Login as...,</span>
  </h2>
  <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
    <div class="inline-flex rounded-md shadow">
      <a href="admin/login.php" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-5 py-3 text-base font-medium text-white hover:bg-indigo-700">ADMIN</a>
    </div>
    <div class="ml-3 inline-flex rounded-md shadow">
      <a href="userlogin.php" class="inline-flex items-center justify-center rounded-md border border-transparent bg-white px-5 py-3 text-base font-medium text-indigo-600 hover:bg-indigo-50">USER</a>
    </div>
  </div>
</div>
</div>
</div> -->


<header>
      <!-- <div id="menu-bar" class="fas fa-bars"></div> -->
      <a href="./index.html" class="logo"> <span>A</span>MRITA</a>

      <nav class="navbar">
        <!-- <a href="./index.html"  id="homeNav" style="color: orange;"><i class="fa-solid fa-house"></i></a> -->
        <a href="admin/login.php">ADMIN</a>
        <a href="userlogin.php">USER</a>
        <a href="#service">services</a>
        <a href="./../gallery/gallery.html">Gallary</a>
        <a href="./../review/review.html">review</a>
        <a href="./contact.html">contact</a>
      </nav>
      <div class="icons">
       <a href="userlogin.php"> <i class="fa-solid fa-user" id="login-btn"></i></a>
      </div>
    </header>
    <!-- login form container -->
    <!-- <div class="login-form-container">
      <i class="fa-sharp fa-solid fa-circle-xmark" id="form-close"></i>
      <form action="javascript:void(0);">
        <h3>login</h3>
        <input type="email" class="box" id="emaill" onclick="validat()" placeholder="Your Username" required />
        <input type="password" class="box" id="pass" onclick="validat()" placeholder="Your Password" required />
        <p id="noempty"></p>
        <input type="Submit" value="login now" class="btn" onclick="validate()" id="buttonLogin" />
        <input type="checkbox" id="remember" />
        <label for="remember">remember me</label>
        <p>forgot password? <a href="#" >click here</a></p>
        <p>don't have an account? <a href="./register.html" target="_blank">register now</a></p>
      </form>
    </div> -->

    <!-- home section  -->
    <section class="home" id="home">
      <div class="content">
        <h3>Discover. Explore. Learn.</h3>
        <p>Welcome to our website !</p>
      </div>

      <div class="search-container">
        <form action="./index.html" class="search-bar">
          <input type="search" placeholder="Search" class="text" />
          <button>
            <a href="#" id="searchbtn"
              ><i class="fa-solid fa-magnifying-glass" id="search-btn"></i
            ></a>
          </button>
        </form>
      </div>

      <!-- <div class="contorls">
            <span class="vid-btn active" data-src="/media_content/vid.mp4"></span>
            <span class="vid-btn" data-src="/media_content/vid2.mp4"></span>
            <span class="vid-btn" data-src="/media_content/vid3.mp4"></span>
            <span class="vid-btn" data-src="/media_content/vid4.mp4"></span>
            <span class="vid-btn" data-src="/media_content/vid5.mp4"></span>
        </div> -->

      <div class="video-container">
        <video
          src="./images/main.mp4"
          id="video-slider"
          autoplay
          muted
          loop
        ></video>
        <!-- <video src="/media_content/vid2.mp4" autoplay muted loop></video> -->
      </div>
    </section>
    <!-- how it works starts -->
    <!-- <section class="how-it-works">
      <div class="howitworks">
        <h3>How it works</h3>
        <div class="secbox">
          <div class="imagebox">
            <img
              src="./media_content/vector-illustration-people-book-vacation-on-laptop-travel-or-journey-planning-plan-holiday-route-online-concept-internet-e-commerce-travel-techno-2F80F0R.jpg"
              alt=""
            />
          </div>
          <div class="imagebox">
            <img
              src="./media_content/vector-illustration-people-book-vacation-on-laptop-travel-or-journey-planning-plan-holiday-route-online-concept-internet-e-commerce-travel-techno-2F80F0R.jpg"
              alt=""
            />
          </div>
          <div class="imagebox">
            <img
              src="./media_content/vector-illustration-people-book-vacation-on-laptop-travel-or-journey-planning-plan-holiday-route-online-concept-internet-e-commerce-travel-techno-2F80F0R.jpg"
              alt=""
            />
          </div>
        </div>
      </div>
    </section> -->
    <!-- how it works section ends -->

    <!-- popular destination starts here -->
    <section class="packages" id="packges">
      <h1>Popular Events</h1>

      <div class="box-container">
        <div class="box">
          <img src="./images/dastaan.jpg" alt="pop1" />
          <div class="content">
            <h3><i class="fa-solid fa-calendar-days"></i>Dastaan</h3>
            <p>
            Dastaan is a national-level college fest where the fusion of technology and storytelling takes center stage. We invite you to explore the captivating link between narratives and innovation where you craft your own stories and just as stories shape our lives. “Awakening the Eternal Now” promises to be a historic celebration of innovation and entertainment with a profound commitment to making a positive impact on society. 
            </p>
          </div>
          <div class="button">
            <a href="https://dastaan.amrita.edu/discover" target="_blank" class="btn">Know More</a>
          </div>
        </div>

        <div class="box">
            <img src="./images/kalakriti3.jpg" alt="pop1" />
            <div class="content">
              <h3><i class="fa-solid fa-calendar-days"></i>Kalakriti</h3>
              <p>
              The School of Engineering, Amrita Vishwa Vidyapeetham, Bengaluru, organised Kalakriti’19, the Annual Talent Hunt for freshmen, on August 23, 2019. The inaugural ceremony commenced with the lighting of lamp by the Chief Guest Prof. Rakesh S.G., Associate Dean and Ms. G.S. Jyotsna, Co-Chair, Amritadhaara
              </p>
            </div>
            <div class="button">
              <div>
              <a href="https://www.amrita.edu/event/kalakriti-19/" target="_blank" class="btn">Know More</a></div>
            </div>
          </div>
          
          <div class="box">
            <img src="./images/kalanjali.jpeg" alt="pop1" />
            <div class="content">
              <h3><i class="fa-solid fa-calendar-days"></i>Kalanjali</h3>
              <p>
              Amritakalanjali’19, the Annual Cultural Fest of the School of Engineering, Amrita Vishwa Vidyapeetham, Bengaluru, was hosted from March 15-16, 2019, with ‘mythology’ as the theme. Various events were conducted during the 2-day fest.  
              </p>
            </div>
            <div class="button">
              <a href="https://www.amrita.edu/event/amrita-kalanjali-2019/" target="_blank" class="btn">Know More</a>
            </div>
          </div>



          <!-- <div class="box">
            <img src="/media_content/pop1.jpg" alt="pop1" />
            <div class="content">
              <h3><i class="fa-solid fa-location-dot"></i>Mt.Everest</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta
                dolorem sapiente recusandae exercitationem! Corporis rerum, quidem
                perspiciatis a quam omnis placeat nostrum esse unde sed itaque
                ipsa quisquam quasi officia.
              </p>
            </div>
            <div class="button">
              <a href="#" class="btn">Know More</a>
            </div>
          </div>

          <div class="box">
            <img src="/media_content/pop2.jpg" alt="pop1" />
            <div class="content">
              <h3><i class="fa-solid fa-location-dot"></i>Mt.Everest</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta
                dolorem sapiente recusandae exercitationem! Corporis rerum, quidem
                perspiciatis a quam omnis placeat nostrum esse unde sed itaque
                ipsa quisquam quasi officia.
              </p>
            </div>
            <div class="button">
              <a href="#" class="btn">Know More</a>
            </div>
          </div>

          <div class="box">
            <img src="/media_content/pop3.jpg" alt="pop1" />
            <div class="content">
              <h3><i class="fa-solid fa-location-dot"></i>Mt.Everest</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta
                dolorem sapiente recusandae exercitationem! Corporis rerum, quidem
                perspiciatis a quam omnis placeat nostrum esse unde sed itaque
                ipsa quisquam quasi officia.
              </p>
            </div>
            <div class="button">
              <a href="#" class="btn">Know More</a>
            </div>
          </div> -->
        </div>
        <div class="button" id="buttonExploreMore">
        <input type="button" class="btn" value="Explore More" onclick="openindex()">
          </div>
    </section>
    <!-- popular destination ends here -->
      <section class="whytravello">
        <div class="container-title"><h1>Announcements</h1></div>
        <div class="containerofkrishna">
          <div class="container-paragraph">
            <div class="left-content">
              <ul>
                <li id="option1">About Us</li>
                <li id="option2">Our Expertise</li>
                <li id="option3">Unforgettable Destination</li>
                <li id="option4">Tailor-Made Experience</li>
                <li id="option5">Exceptional Services</li>
                <li id="option6">Sustainable Travel</li>
              </ul>
            </div>
            <div class="right-content">
              <p class="option1-content">
                Welcome to Travelo! <br />Experience the world with
                Wanderlust Adventures, your premier tour and travel company
                dedicated to creating unforgettable journeys. Whether you're a
                seasoned traveler or embarking on your first adventure, we have the
                perfect itinerary to suit your wanderlust.
              </p>
              <p class="option2-content">
                With years of experience in the travel industry, our team of
                passionate experts curates exceptional tours designed to immerse you
                in the beauty and cultural richness of every destination. We believe
                that travel is not just about seeing new places; it's about creating
                meaningful connections, broadening horizons, and embracing the
                spirit of adventure.
              </p>
              <p class="option3-content">
                From the pristine beaches of Bali to the majestic mountains of the
                Swiss Alps, we offer an extensive range of hand-picked destinations
                that cater to all types of travelers. Whether you seek relaxation,
                cultural exploration, or thrilling adventures, our diverse selection
                of tours will cater to your interests and leave you with memories to
                last a lifetime.
              </p>
              <p class="option4-content">
                At Travelo , we understand that each traveler has
                unique preferences. That's why we offer tailor-made itineraries,
                allowing you to customize your journey according to your desires.
                Our team will work closely with you to craft a personalized
                experience that aligns with your interests, travel style, and
                budget. We take care of all the details so you can focus on enjoying
                your trip.
              </p>
              <p class="option5-content">
                From the moment you contact us until you return home, we strive to
                provide exceptional service and support. Our friendly and
                knowledgeable team is available around the clock to answer your
                questions, offer guidance, and ensure a seamless travel experience.
                We partner with trusted local guides and accommodations to ensure
                your comfort and safety throughout your journey.
              </p>
              <p class="option6-content">
                As travelo , we recognize the importance of preserving the
                destinations we visit. We are committed to promoting sustainable
                tourism practices and minimizing our ecological footprint. Through
                responsible travel initiatives, we aim to protect the environment,
                support local communities, and preserve cultural heritage for future
                generations to enjoy.
              </p>
            </div>
          </div>
        </div>
      </section>


      <!-- phpp Announcements -->
 <section class="whytravello">
        <div class="container-title"><h1>Announcements</h1></div>
        <?php
    // Display announcements
    while ($row = $result->fetch_assoc()) {
        echo "<div class='announcement-container'>";
        echo "<div class='left-container'>";
        echo "<h2>{$row['title']}</h2>";
        echo "</div>";
        echo "<div class='right-container'>";
        echo "<p>{$row['content']}</p>";
        echo "<span>Posted on: {$row['created_at']}</span>";
        echo "</div>";
        echo "</div>";
    }
    ?>
    <p>
        </div>
      </section>
      <!-- php announcements ends  -->



    <!-- services section starts here  -->
    <section class="service" id="service">
        <h1>our services</h1>
        <div class="box-container">
            <div class="box">
                <i class="fa-solid fa-hotel"></i>
                <h3>Best Hotels</h3>
                <p>"Experience luxury and comfort at its finest with our handpicked selection of the best hotels, offering impeccable service and exquisite amenities."</p>
            </div>

            <div class="box">
                <i class="fa-solid fa-utensils"></i>
                <h3>Food and Drinks</h3>
                <p>"Savor delectable cuisines from around the world as you explore new destinations, with our top-notch food facilities designed to cater to your gastronomic desires."</p>
            </div>
            
            <div class="box">
                <i class="fa-solid fa-bullhorn"></i>
                <h3>Experienced guides</h3>
                <p>"Embark on a journey led by our experienced guides, who bring destinations to life with their wealth of knowledge and captivating storytelling."</p>
            </div>

            <div class="box">
                <i class="fa-solid fa-house"></i>
                <h3>family Trip</h3>
                <p>"Create unforgettable family memories with our tailor-made trips, designed to cater to the unique needs and preferences of every family member."</p>
            </div>
            
            <div class="box">
                <i class="fa-solid fa-plane"></i>
                <h3>Fastest travel</h3>
                <p>"Experience swift and hassle-free journeys with our commitment to providing the fastest travel options, allowing you to maximize your adventures."</p>
            </div>

            <div class="box">
                <i class="fa-solid fa-person-cane"></i>
                <h3>old aged and disabled tour</h3>
                <p>"Experience inclusivity and thoughtful assistance throughout your trip, with our specialized services catering to the unique requirements of elderly and disabled travelers."</p>
            </div>
        </div>
        <!-- <div class="button" id="buttonExploreMore">
            <input type="button" class="btn" value="Know More">
              </div> -->
    </section>

    <!-- services section ends here  -->
    <!-- Gallary section starts here  -->
        <section class="gallary" id="gallary">
            <h1 class="heading">Gallary</h1>
            <div class="box-container">
                <div class="box">
                    <img src="./media_content/gall1.jpg" alt="gall1">
                    <div class="content">
                        <h3>Religious Site</h3>
                        <p>See more photos from @travello.</p>
                        <!-- <input type="button" class="btn" value="See more"> -->
                        <a href="./gallery/gallery.html" class="btn" style="text-decoration: none;">See more</a>
                    </div>
                </div>

                <div class="box">
                    <img src="./gallery/mountain10.jpg" alt="gall1">
                    <div class="content">
                        <h3>Mountain</h3>
                        <p>See more photos from @travello.</p>
                        <a href="./gallery/gallery.html" class="btn" style="text-decoration: none;">See more</a>
                    </div>
                </div>

                <div class="box">
                    <img src="./media_content/gall5.jpg" alt="gall1">
                    <div class="content">
                        <h3>Historical</h3>
                        <p>See more photos from @travello.</p>
                        <a href="./gallery/gallery.html" class="btn" style="text-decoration: none;">See more</a>
                    </div>
                </div>
                <div class="box">
                    <img src="./gallery/nature2.jpg" alt="gall1">
                    <div class="content">
                        <h3>Nature</h3>
                        <p>See more photos from @travello.</p>
                        <a href="./gallery/gallery.html" class="btn" style="text-decoration: none;">See more</a>
                    </div>
                </div>


                <div class="box">
                    <img src="./gallery/life7.jpg" alt="gall1">
                    <div class="content">
                        <h3>Trekking</h3>
                        <p>See more photos from @travello.</p>
                        <a href="./gallery/gallery.html" class="btn" style="text-decoration: none;">See more</a>
                    </div>
                </div>

                <div class="box">
                    <img src="./media_content/gall3.jpeg" alt="gall1">
                    <div class="content">
                        <h3>Adventure</h3>
                        <p>See more photos from @travello.</p>
                        <a href="./gallery/gallery.html" class="btn" style="text-decoration: none;">See more</a>
                    </div>
                </div>

                <div class="box">
                  <img src="./gallery/life2.jpg" alt="gall1">
                  <div class="content">
                      <h3>Boating</h3>
                      <p>See more photos from @travello.</p>
                      <a href="./gallery/gallery.html" class="btn" style="text-decoration: none;">See more</a>
                  </div>
              </div>
                
            </div>
        </section>

    <!-- gallary section ends here  -->
    
    <!-- review section starts here -->
    <!-- <section class="review" id="review">
        <h1>Customer's review</h1>
        <div class="box-container">
            <div class="box">
                <img src="./media_content/pro2.jpg" alt="aayush">
                <div class="content">
                    <h3>Aayush</h3>
                    <p>the service was really best. go for it</p>
                </div>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                
                </div>
            </div>

            <div class="box">
                <img src="./media_content/pro3.jpg" alt="aayush">
                <div class="content">
                    <h3>Krishna Bhagat</h3>
                    <p>"Beautiful experience. Loved the hospitality planning and coordination.</p>
                </div>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                
                </div>
            </div>

            <div class="box">
                <img src="./media_content/pro4.jpg" alt="aayush">
                <div class="content">
                    <h3>Sanskar Agrahari</h3>
                    <p>Thanks Travello for such a wonderul experience.</p>
                </div>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                
                </div>
            </div>

            <div class="box">
                <img src="./media_content/pro3.jpg" alt="aayush">
                <div class="content">
                    <h3>Aayush</h3>
                    <p>the service was really best. go for it</p>
                </div>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                
                </div>
            </div>

            <div class="box">
                <img src="./media_content/pro4.jpg" alt="aayush">
                <div class="content">
                    <h3>Aayush</h3>
                    <p>the service was really best. go for it</p>
                </div>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                
                </div>
            </div>

            <div class="box">
                <img src="./media_content/pro1.jpg" alt="aayush">
                <div class="content">
                    <h3>Aayush</h3>
                    <p>the service was really best. go for it</p>
                </div>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                
                </div>
                </div>
            </div> -->
            <!-- <div class="knowmore" id="knowmore">
            <a href="#" class="btn">Know More</a>
            </div> -->
    </section>
    <!-- review section ends here  -->


   <section class="developers">
    <h1>Customer's review</h1>
        <div class="swiper mySwiper containerop">
            <div class="swiper-wrapper content">
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./gallery/pic1.jpeg" alt="">
                        </div> 
                            
                            <div class="name-review">
                                <span class="name">Sanskar Agrahari</span>
                                <p class="review">Travelo: Seamless booking and exceptional customer service for an amazing experience.</p>
                            </div>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./gallery/pic2.jpeg" alt="">
                        </div> 
                            
                            <div class="name-review">
                                <span class="name">Arjun Das</span>
                                <p class="review">Personalized vacations made easy with Travelo's extensive range of destinations.</p>
                            </div>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./gallery/pic3.jpeg" alt="">
                        </div> 
                            
                            <div class="name-review">
                                <span class="name">Krishna Bhagat</span>
                                <p class="review">Travelo: Exceeding expectations with intuitive interface, competitive prices, and reliable information.</p>
                            </div>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./gallery/pic5.jpeg" alt="">
                        </div> 
                            
                            <div class="name-review">
                                <span class="name">Aayush Thakur</span>
                                <p class="review">Travelo: Making vacation dreams come true with a user-friendly website.</p>
                            </div>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./gallery/pic4.jpeg" alt="">
                        </div> 
                            
                            <div class="name-review">
                                <span class="name">Rishu Jaiswal</span>
                                <p class="review">Effortless and enjoyable! Travelo made our vacation stress-free with excellent accommodations.</p>
                            </div>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./gallery/pic6.jpeg" alt="">
                        </div> 
                            
                            <div class="name-review">
                                <span class="name">JayKishor Chauhan</span>
                                <p class="review">Incredible value for money! Travelo offers competitive prices without compromising quality.</p>
                            </div>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div> -->
    </div>
  </div>
  <div class="knowmore" id="knowmore">
    <a href="./review/review.html" class="btn">Know More</a>
    </div>
    </section>



    <!-- contact section starts here  -->
        <section class="contact" id="contact">
            <h1>connect to us</h1>
            <div class="row">
                <div class="image">
                    <img src="./media_content/contact.png" alt="conatct">
                </div>
                <form action="./index.html">
                    <div class="inputBox">
                        <input type="text" placeholder="Name">
                        <input type="email" placeholder="email">
                    </div>
                    <div class="inputBox">
                        <input type="number" placeholder="number">
                        <input type="text" placeholder="subject">
                    </div>
                    <textarea name="message" id="avc" cols="30" rows="10" placeholder="message"></textarea>
                    <div class="submitbutton">
                    <input type="submit" class="btn" >
                    </div>
                </form>
            </div>

            <!-- <div class="findus" id="findus">
                <div class="boxe" id="box1">
                </div>
                <div class="boxe" id="box2">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7778.371083742662!2d77.67509480000002!3d12.895787899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1339d7500cd3%3A0x4b4fbdff03bfee09!2sAmrita%20School%20of%20Engineering!5e0!3m2!1sen!2sin!4v1687152589637!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div> -->

        </section>
    <!-- contact section ends here  -->

    <!-- footer section starts here  -->
    <section class="footer">
          <div class="box-container">
            <div class="box">
              <h3>about us</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis temporibus eum eos ipsa eligendi sed itaque voluptatem dignissimos beatae dolore?</p>
            </div>

            <div class="box">
              <h3>Our Location</h3>
              <a href="./undercons.html">India</a>
              <a href="./undercons.html">nepal</a>
            </div>

            <div class="box">
              <h3>quick links</h3>
              <a href="#">home</a>
              <a href="./book.html">book</a>
              <a href="./packages.html">packages</a>
              <a href="./../gallery/gallery.html">gallary</a>
              <a href="./contact.html">contacts</a>
            </div>

            <div class="box">
              <h3>Follow us</h3>
              <a href="#">facebook</a>
              <a href="#">instagram</a>
              <a href="#">twitter</a>
              <a href="#">linkedin</a>
              <a href="#">github</a>
              
            </div>

          </div>
          <h1 class="credit">created by <span>team Amrita</span> | all rights reserved!</h1>
    </section>
    <!-- footer section ends here  -->
    <script src="./Script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  
    <script> var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      centeredSlides: true,
      loop: true,
      autoplay: 
    {
      delay: 2000,
    } , 

      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        type: "fraction",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    var appendNumber = 4;
    var prependNumber = 1;
    document
      .querySelector(".prepend-2-slides")
      .addEventListener("click", function (e) {
        e.preventDefault();
        swiper.prependSlide([
          '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
          '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
        ]);
      });
    document
      .querySelector(".prepend-slide")
      .addEventListener("click", function (e) {
        e.preventDefault();
        swiper.prependSlide(
          '<div class="swiper-slide">Slide ' + --prependNumber + "</div>"
        );
      });
    document
      .querySelector(".append-slide")
      .addEventListener("click", function (e) {
        e.preventDefault();
        swiper.appendSlide(
          '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>"
        );
      });
    document
      .querySelector(".append-2-slides")
      .addEventListener("click", function (e) {
        e.preventDefault();
        swiper.appendSlide([
          '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
          '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
        ]);
      });</script>


      <script>
      let opt1 = document.getElementById("option1");
      let opt2 = document.getElementById("option2");
      let opt3 = document.getElementById("option3");
      let opt4 = document.getElementById("option4");
      let opt5 = document.getElementById("option5");
      let opt6 = document.getElementById("option6");

      let opt1_content = document.querySelector(".option1-content");
      let opt2_content = document.querySelector('.option2-content');
      let opt3_content = document.querySelector('.option3-content');
      let opt4_content = document.querySelector('.option4-content');
      let opt5_content = document.querySelector('.option5-content');
      let opt6_content = document.querySelector('.option6-content');

      opt1_content.style.display = "block";
      opt1.classList.add('active-option');
      opt2_content.style.display = "none";
      opt3_content.style.display = "none";
      opt4_content.style.display = "none";
      opt5_content.style.display = "none";
      opt6_content.style.display = "none";

      opt1.addEventListener('click',function(){
        opt1_content.style.display = "block";
        opt1.classList.add('active-option');
      opt2_content.style.display = "none";
      opt3_content.style.display = "none";
      opt4_content.style.display = "none";
      opt5_content.style.display = "none";
      opt6_content.style.display = "none";

      opt2.classList.remove('active-option');
      opt3.classList.remove('active-option');
      opt4.classList.remove('active-option');
      opt5.classList.remove('active-option');
      opt6.classList.remove('active-option');
      
      })

      opt2.addEventListener('click',function(){
        opt1_content.style.display = "none";
      opt2_content.style.display = "block";
      opt3_content.style.display = "none";
      opt4_content.style.display = "none";
      opt5_content.style.display = "none";
      opt6_content.style.display = "none";

      opt2.classList.add('active-option');

      opt1.classList.remove('active-option');
      opt3.classList.remove('active-option');
      opt4.classList.remove('active-option');
      opt5.classList.remove('active-option');
      opt6.classList.remove('active-option');
      })

      opt3.addEventListener('click',function(){
        opt1_content.style.display = "none";
      opt2_content.style.display = "none";
      opt3_content.style.display = "block";
      opt4_content.style.display = "none";
      opt5_content.style.display = "none";
      opt6_content.style.display = "none";

      opt3.classList.add('active-option');

      opt1.classList.remove('active-option');
      opt2.classList.remove('active-option');
      opt4.classList.remove('active-option');
      opt5.classList.remove('active-option');
      opt6.classList.remove('active-option');
      })

      opt4.addEventListener('click',function(){
        opt1_content.style.display = "none";
      opt2_content.style.display = "none";
      opt3_content.style.display = "none";
      opt4_content.style.display = "block";
      opt5_content.style.display = "none";
      opt6_content.style.display = "none";

      opt4.classList.add('active-option');

      opt1.classList.remove('active-option');
      opt2.classList.remove('active-option');
      opt3.classList.remove('active-option');
      opt5.classList.remove('active-option');
      opt6.classList.remove('active-option');
      })

      opt5.addEventListener('click',function(){
        opt1_content.style.display = "none";
      opt2_content.style.display = "none";
      opt3_content.style.display = "none";
      opt4_content.style.display = "none";
      opt5_content.style.display = "block";
      opt6_content.style.display = "none";


      opt5.classList.add('active-option');
      opt1.classList.remove('active-option');
      opt3.classList.remove('active-option');
      opt4.classList.remove('active-option');
      opt2.classList.remove('active-option');
      opt6.classList.remove('active-option');
      })

      opt6.addEventListener('click',function(){
        opt1_content.style.display = "none";
      opt2_content.style.display = "none";
      opt3_content.style.display = "none";
      opt4_content.style.display = "none";
      opt5_content.style.display = "none";
      opt6_content.style.display = "block";

      opt6.classList.add('active-option');

      opt1.classList.remove('active-option');
      opt3.classList.remove('active-option');
      opt4.classList.remove('active-option');
      opt5.classList.remove('active-option');
      opt2.classList.remove('active-option');
      })
      </script>
  </body>
</html>
