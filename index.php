<?php

  $conn = new mysqli("localhost", "root", "", "aietclub");

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * FROM announcements ORDER BY created_at DESC LIMIT 5"; // Limit to the first 4 rows
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
    <link rel="stylesheet" href="Styles.css" >
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
        <a href="#Clubs">Clubs</a>
        <a href="#gallary">Gallary</a>
        <a href="./../review/review.html">review</a>
        <a href="./contact.html">contact</a>
      </nav>
      <div class="icons">
       <!-- <a href="userlogin.php"> -->
         <i class="fa-solid fa-user" id="login-btn"></i>
        <!-- </a> -->
      </div>
    </header>
    <!-- login form container -->
    <div class="login-form-container">
      <i class="fa-sharp fa-solid fa-circle-xmark" id="form-close"></i>
      <form action="" method="post">
        <h3>login</h3>
        <input type="text" class="box" id="username" name="username" onclick="validat()" placeholder="Your Username"  />
        <input type="password" class="box" id="password" name="password" onclick="validat()" placeholder="Your Password"  />
        <p id="noempty"></p>
        
        <!-- <input type="checkbox" id="remember" />
        
        <label for="remember">remember me</label> -->
        
         <input type="Submit" value="login now" class="btn" name="login" onclick="validate()" id="buttonLogin" />
        <p>forgot password? <a href="#" >click here</a></p>
        <p>don't have an account? <a href="./register.html" target="_blank">register now</a></p>
      </form>
    </div>

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
        <!-- <div class="button" id="buttonExploreMore">
        <input type="button" class="btn" value="Explore More" onclick="openindex()">
          </div> -->
          <!-- popular destination ends here -->
    </section>
      <section class="whytravello">
        <div class="container-title"><h1>Announcements</h1></div>
        <!-- <div class="containerofkrishna"> -->
        <?php
   
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
<!-- </div> -->
        </div>
      </section>


    <!-- services section starts here  -->
    <section class="service" id="Clubs">
        <h1>our clubs</h1>
        <div class="box-container">
            <div class="box">
            <i class="fa-solid fa-music"></i>
                <h3>Raaga - The Music Club</h3>
                <p>"Solo singing, group singing,instrumental music, antakshari, Voice of Amrita are some of the most popular events of the club."</p>
            </div>

            <div class="box">
            <i class="fa-solid fa-leaf"></i>
                            <h3>Prakriti - The Eco Club</h3>
                <p>"Creating awareness of nature conservation, cleanliness drives,energy conservation, tree plantation are some of the initiatives."<p>
            </div>
            
            <div class="box">
            <i class="fa-solid fa-volleyball"></i>
            <h3>The Sports Club</h3>
                <p>"Cricket,Football,Badminton, Tennis and many indoor games are provided for Sports lovers on campus. Students participate in intra and inter university tournaments."</p>
            </div>

            <div class="box">
            <i class="fa-solid fa-camera"></i>
                            <h3>The Photography Club</h3>
                <p>"The club encourages students with passion to shoot. The members of the club go on photo walks to historical places and places of scenic beauty to capture best scenes."</p>
            </div>
            
            <div class="box">
            <i class="fa-solid fa-palette"></i>
            <h3>The Art Club</h3>
                <p>"Painting, sketching, mehendi,face painting, mask making,props making are the popular events of this club. "</p>
            </div>

            <div class="box">
            <i class="fa-solid fa-code"></i>
                            <h3>CodeChef</h3>
                <p>"CodeChef was created as a platform to help programmers make it big in the world of algorithms, computer programming, and programming contests. It hosts three featured contests every month (Long Challenge, CookOff, LunchTime & Starters) and gives away prizes and goodies to the winners as encouragement."</p>
            </div>
        </div>
        <div class="button" id="buttonExploreMore">
        <div class="button">
              <a href="https://www.amrita.edu/" target="_blank" class="btn">Know More</a>
            </div>     
           </div>
    </section>

    <!-- services section ends here  -->
    <!-- Gallary section starts here  -->
        <section class="gallary" id="gallary">
            <h1 class="heading">Gallary</h1>
            <div class="box-container">
                <div class="box">
                    <img src="images/gal3.jpg" alt="gall1">
                    <div class="content">
                        <h3>Convocation Day</h3>
                        <p>See more photos at See More</p>
                        <!-- <input type="button" class="btn" value="See more"> -->
                    </div>
                </div>

                <div class="box">
                    <img src="images/gal2.jpg" alt="gall1">
                    <div class="content">
                        <h3>Swachhata Diwas</h3>
                        <p>See more photos at See More</p>
                        <!-- <a href="./gallery/gallery.html" class="btn" style="text-decoration: none;">See more</a> -->
                    </div>
                </div>

                <div class="box">
                    <img src="images/gal4.jpg" alt="gall1">
                    <div class="content">
                        <h3>Dance Day</h3>
                        <p>See more photos at See More</p>
                        <!-- <a href="/images/feed4.png" class="btn" style="text-decoration: none;">See more</a> -->
                    </div>
                </div>
                <div class="box">
                    <img src="images/gal5.jpg" alt="gall1">
                    <div class="content">
                        <h3>Students</h3>
                        <p>See more photos from <a>See More.</a></p>
                        <!-- <a href="./gallery/gallery.html" class="btn" style="text-decoration: none;">See more</a> -->
                    </div>
                </div>


                <div class="box">
                    <img src="images/gal6.jpg" alt="gall1">
                    <div class="content">
                        <h3>Lab</h3>
                        <p>See more photos at See More</p>
                        <!-- <a href="./gallery/gallery.html" class="btn" style="text-decoration: none;">See more</a> -->
                    </div>
                </div>

                <div class="box">
                    <img src="images/gal7.jpg" alt="gall1">
                    <div class="content">
                        <h3>Faculty</h3>
                        <p>See more photos at See More</p>
                        <!-- <a href="./gallery/gallery.html" class="btn" style="text-decoration: none;">See more</a> -->
                    </div>
                </div>

                <div class="box">
                  <img src="images/gal8.jpeg" alt="gall1">
                  <div class="content">
                      <h3>Our College</h3>
                      <p>See more photos at See More</p>
                      <!-- <a href="./gallery/gallery.html" class="btn" style="text-decoration: none;">See more</a> -->
                  </div>
              </div>
            </div>
            <div class="knowmore" id="knowmore">
             <a href="./review/review.html" class="btn">See More</a>
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
    <h1>Our Team</h1>
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
                                    <a href="https://www.facebook.com/d.arjun03/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/d.arjun03/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="https://github.com/Arjun650" target="_blank"><i class="fa-brands fa-github"></i></a>
                                    <a href="https://www.linkedin.com/in/arjundas03/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
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
                                    <a href="https://www.facebook.com/d.arjun03/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/d.arjun03/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="https://github.com/Arjun650" target="_blank"><i class="fa-brands fa-github"></i></a>
                                    <a href="https://www.linkedin.com/in/arjundas03/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
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
                                    <a href="https://www.facebook.com/d.arjun03/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/d.arjun03/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="https://github.com/Arjun650" target="_blank"><i class="fa-brands fa-github"></i></a>
                                    <a href="https://www.linkedin.com/in/arjundas03/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                </div>
                    </div>
                </div>

                 <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./gallery/pic5.jpeg" alt="">
                        </div> 
                            
                            <div class="name-review">
                                <span class="name">Tharun Alla</span>
                                <p class="review">Travelo: Making vacation dreams come true with a user-friendly website.</p>
                            </div>
                            <div class="rating">
                                    <a href="https://www.facebook.com/d.arjun03/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/d.arjun03/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="https://github.com/Arjun650" target="_blank"><i class="fa-brands fa-github"></i></a>
                                    <a href="https://www.linkedin.com/in/arjundas03/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
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
                                    <a href="https://www.facebook.com/d.arjun03/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/d.arjun03/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="https://github.com/Arjun650" target="_blank"><i class="fa-brands fa-github"></i></a>
                                    <a href="https://www.linkedin.com/in/arjundas03/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
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
                                    <a href="https://www.facebook.com/d.arjun03/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/d.arjun03/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="https://github.com/Arjun650" target="_blank"><i class="fa-brands fa-github"></i></a>
                                    <a href="https://www.linkedin.com/in/arjundas03/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
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
