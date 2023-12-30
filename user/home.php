<?php

include '../dbconnect.php';
  
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $message = $_POST['message'];
  $query = "INSERT INTO `feedback` (`email`, `message`) VALUES ('$email', '$message')";
  
  if (mysqli_query($conn, $query)) {
    $noerror = "Message sent successfully";
  } else {
    $error = "Error: " . $query . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    
    <link rel="icon" href="../images/logo.png" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title>Home</title>
</head>
<body>
    <div class="navbarheader">
        <div class="flex justify-center ">
            <div class="self-center top-0 w-full max-w-7xl ">
                <div class="flex justify-between items-center text-gray-700">
                    <div class="mx-2 my-4 ">
                      <div class=" md:w-1/6 overflow-hidden ">
                        <img src="../images/logo.png" alt="" class="" />
                      </div>
                    </div>
                    <ul class="hidden md:flex items-center text-[18px] font-semibold pr-10">
                    <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                href="home.php">Home</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a href="clubs.php">Our
                                    Clubs</a></li>
                                    <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                    href="notice.php">Notices</a></li>
                                    <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                    href="contact.php">Contact</a></li>
                                    <!-- <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm" role="menuitem" tabindex="-1" id="menu-item-3"><a href="login.html">Sign out</a></button> -->
                                    
                                    <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                    href="../index.php">Sign out</a></li>
                        <!-- <li
                            class="text-blue-600 hover:text-white hover:bg-blue-600 mx-4 my-1 border-2 border-blue-600 px-2 rounded-2xl ">
                            <a href="#">LogIn</a></li>
                        <li
                            class="text-white bg-blue-600 px-2 rounded-2xl mx-4 my-1 hover:bg-white hover:text-blue-600 hover:border-2 hover:border-blue-600">
                            <a href="#">SignUp</a></li> -->
                    </ul> <button class="block p-3 mx-10 md:hidden hover:bg-gray-200 rounded-xl group ">
                        <div class="w-5 my-[3px] h-[3px] bg-gray-600 mb-[2px]"></div>
                        <div class="w-5 my-[3px] h-[3px] bg-gray-600 mb-[2px]"></div>
                        <div class="w-5 my-[3px] h-[3px] bg-gray-600"></div>
                        <div
                            class="absolute top-0 -right-full opacity-0 h-screen w-[60%] border bg-white group-focus:right-0 group-focus:opacity-100 transition-all ease-in duration-300 ">
                            <ul class="flex flex-col items-center text-[18px] pt-[60px]">
                            <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                href="home.php">Home</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a href="clubs.php">Our
                                    Clubs</a></li>
                                    <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                    href="notice.php">Notices</a></li>
                                    <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                    href="contact.php">Contact</a></li>
                                    <!-- <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm" role="menuitem" tabindex="-1" id="menu-item-3"><a href="login.html">Sign out</a></button> -->
                                    <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a href="../dashboard/dashboard.php">
                                            profile</a></li>
                                    <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                    href="../index.php">Sign out</a></li>
                                <!-- <li
                                    class="text-blue-600 hover:text-white hover:bg-blue-600 mx-4 my-1 border-2 border-blue-600 px-2 rounded-2xl ">
                                    <a href="#">LogIn</a></li>
                                <li
                                    class="text-white bg-blue-600 px-2 rounded-2xl mx-4 my-1 hover:bg-white hover:text-blue-600 hover:border-2 hover:border-blue-600">
                                    <a href="#">SignUp</a></li> -->
                            </ul>
                        </div>
                    </button>
                </div>
                
            </div>
           </div>
           <script src="https://cdn.tailwindcss.com"></script>
           <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
           <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
           <script nomodule src="../images/logo.png"></script> 
    </div>

    <div class="posts animate__animated animate__fadeInUp">
        <div class="flex justify-center">
            <div class="flex flex-col justify-center">
                <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center ">
                    <div class="overflow-hidden w-full m-4 shadow-sm flex flex-col md:flex-row justify-center">
                        <div class="flex flex-col md:flex-row items-center">
                            <div class=" w-full overflow-hidden"> <img class="animate__animated animate__fadeInUp" src="../images/football.jpeg" alt=""
                                    class="" /> </div>
                            <div class="md:w-2/3 m-4 ">
                                <div class="flex text-gray-500 text-sm m-2">
                                    <div class="m-1 font-bold"></div>
                                    <div class="m-1">Mon, Jan 11 2021 05:42:43 PM</div>
                                </div>
                                <div class="font-bold text-black text-xl m-2"Amrita's club conducts Football mathc</div>
                                <div class="text-sm text-gray-500 mt-4 m-2"><a href="#">Unfortunately neither social media nor technology was so advanced at a time when I went to school & college. So, I don't have any from my college days.

With photos or without them ....one thing is for sure that SPORTS brings out skills and makes one a better person both physically & mentally.
Sports in college life does it a little more than at any other level.</a></div>
                                <div class="flex cursor-pointer">
                                    <!-- <div class="m-2"> <img src="https://source.unsplash.com/50x50/?boy" alt=""
                                            class=" rounded-full" /> </div> -->
                                    <div class="grid m-1">
                                        <div class="font-bold text-sm hover:text-gray-600 mt-2"><a href="#">linkedin.com</a></div>
                                        <div class=" text-sm hover:text-gray-600">Rashmi Verma, Jan 11</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </div>
    <div class="posts animate__animated animate__fadeInUp">
        <div class="flex justify-center">
            <div class="flex flex-col justify-center">
                <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center ">
                    <div class="overflow-hidden w-full m-4 shadow-sm flex flex-col md:flex-row justify-center">
                        <div class="flex flex-col md:flex-row items-center">
                            <div class=" w-full overflow-hidden"> <img class="animate__animated animate__fadeInUp" src="../images/news2.jpeg" alt=""
                                    class="" /> </div>
                            <div class="md:w-2/3 m-4 ">
                                <div class="flex text-gray-500 text-sm m-2">
                                    <!-- <div class="m-1 font-bold">Vlog,</div> -->
                                    <div class="m-1">September 15, 2022 02:41 pm</div>
                                </div>
                                <div class="font-bold text-black text-xl m-2">Stage fright or performance anxiety </div>
                                <div class="text-sm text-gray-500 mt-4 m-2"><a href="#">
                                What's common in @Nicole Kidman, Jim Carrey & Emma Watson ............all three of them took stage fright and with time and practice, threw it out of the window.

Stage fright or performance anxiety is the anxiety, fear, or persistent phobia  that may be aroused in an individual by the requirement to perform in front of an audience.
Stage -
scares ............yet makes one confident
frightens .........yet brings out the best
shames ...........yet helps fight bigger challenges
amazes ........... but gives one jitters
spotlights..........but gets butterflies in the stomach.</a></div>
                                <div class="flex cursor-pointer">
                                    <!-- <div class="m-2"> <img src="https://source.unsplash.com/50x50/?girl" alt=""
                                            class=" rounded-full" /> </div> -->
                                    <div class="grid m-1">
                                        <div class="font-bold text-sm hover:text-gray-600 mt-2"><a href="https://www.thehindu.com/news/cities/Mangalore/alvas-pragati-mega-job-fair-moodbidri-coastal-karnataka-october-14-15/article65894026.ece"></a>linkedin.com</div>
                                        <div class=" text-sm hover:text-gray-600">Rashmi Verma Sep 15</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </div>
    <div class="posts animate__animated animate__fadeInUp">
        <div class="flex justify-center">
            <div class="flex flex-col justify-center">
                <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center ">
                    <div class="overflow-hidden w-full m-4 shadow-sm flex flex-col md:flex-row justify-center">
                        <div class="flex flex-col md:flex-row items-center">
                            <div class=" w-full overflow-hidden"> <img class="animate__animated animate__fadeInUp" src="../images/raagRang.jpeg" alt=""
                                    class="" /> </div>
                            <div class="md:w-2/3 m-4 ">
                                <div class="flex text-gray-500 text-sm m-2">
                                    <!-- <div class="m-1 font-bold">Vlog,</div> -->
                                    <div class="m-1">December 08, 2022 10:51 pm </div>
                                </div>
                                <div class="font-bold text-black text-xl m-2"> Raag and Rang</div>
                                <div class="text-sm text-gray-500 mt-4 m-2"><a href="#">RAAG & RANG -An event planned for Teacher's Day Celebration at Amrita School of Engineering, Bangalore
Three memorable months of planning .......innumerable hours of insane practice........amidst juggling between humungous minutes of academic meetings..........10 amazing music lovers who wear their love for music on their sleeves.
We at Amrita believe in leading by example. Soulful singers came together despite their busy schedule and created musical memories which left the audience asking for more.


                                </a></div>
                                <div class="flex cursor-pointer">
                                    <!-- <div class="m-2"> <img src="https://source.unsplash.com/50x50/?man" alt=""
                                            class=" rounded-full" /> </div> -->
                                    <div class="grid m-1">
                                        <div class="font-bold text-sm hover:text-gray-600 mt-2"><a href="#">linkedin.com</a></div>
                                        <div class=" text-sm hover:text-gray-600"> Rashmi Verma Dec 08</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </div>
    <div class="posts animate__animated animate__fadeInUp">
        <div class="flex justify-center">
            <div class="flex flex-col justify-center">
                <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center ">
                    <div class="overflow-hidden w-full m-4 shadow-sm flex flex-col md:flex-row justify-center">
                        <div class="flex flex-col md:flex-row items-center">
                            <div class=" w-full overflow-hidden"> <img class="animate__animated animate__fadeInUp" src="../images/squad.jpeg" alt=""
                                    class="" /> </div>
                            <div class="md:w-2/3 m-4 ">
                                <div class="flex text-gray-500 text-sm m-2">
                                    <!-- <div class="m-1 font-bold">Vlog,</div> -->
                                    <div class="m-1">December 05, 2022 9:39 am </div>
                                </div>
                                <div class="font-bold text-black text-xl m-2">Squad Club</div>
                                <div class="text-sm text-gray-500 mt-4 m-2"><a href="#">SQUAD Club at Amrita inculcates Discipline & Focus in the students and uses this two fold approach for their holistic growth.
In the words of Jim Rohn- "Discipline is the bridge between goals & accomplishments."

Alumni in these FLASHBACK pics are well settled professionally and personally and OUTSHINE others with their strong sense of discipline and focus.
Share the story behind these pics .......Tag your friends.....and Keep shining BRIGHT!!!</a></div>
                                <div class="flex cursor-pointer">
                                    <!-- <div class="m-2"> <img src="https://source.unsplash.com/50x50/?woman" alt=""
                                            class=" rounded-full" /> </div> -->
                                    <div class="grid m-1">
                                        <div class="font-bold text-sm hover:text-gray-600 mt-2"><a href="#">linkedin.com</a></div>
                                        <div class=" text-sm hover:text-gray-600">Rashmi Verma Dec 5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </div>
    <!-- <div class="posts animate__animated animate__fadeInUp">
        <div class="flex justify-center">
            <div class="flex flex-col justify-center">
                <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center ">
                    <div class="overflow-hidden w-full m-4 shadow-sm flex flex-col md:flex-row justify-center">
                        <div class="flex flex-col md:flex-row items-center">
                            <div class=" w-full overflow-hidden"> <img src="https://source.unsplash.com/700x350/?dance" alt=""
                                    class="" /> </div>
                            <div class="md:w-2/3 m-4 ">
                                <div class="flex text-gray-500 text-sm m-2">
                                    <div class="m-1 font-bold">Vlog,</div>
                                    <div class="m-1">31 March, 2023</div>
                                </div>
                                <div class="font-bold text-black text-xl m-2">The 8 Best City Lights In The World! </div>
                                <div class="text-sm text-gray-500 mt-4 m-2"><a href="#">There's something about city lights that
                                        make them so captivating and romantic. Maybe it's because they remind us of all the
                                        possibilities that exist in the world, or maybe it's because they're just so darn pretty
                                        to look at.
        
                                        No matter what the reason is, there's no denying that city lights are some of the most
                                        beautiful things in the world.</a></div>
                                <div class="flex cursor-pointer">
                                    <div class="m-2"> <img src="https://source.unsplash.com/50x50/?lady" alt=""
                                            class=" rounded-full" /> </div>
                                    <div class="grid m-1">
                                        <div class="font-bold text-sm hover:text-gray-600 mt-2">Belen J. Cherry</div>
                                        <div class=" text-sm hover:text-gray-600">Greenville, NC 27858</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </div> -->

    <div class="div animate__animated animate__fadeInUp">
        <form class="text-gray-600 body-font relative" action="" method="post">
            <div class="absolute inset-0 bg-gray-300">
                <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15557.01030760906!2d77.66536799540073!3d12.891473797325707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1339d7500cd3%3A0x4b4fbdff03bfee09!2sAmrita%20School%20of%20Engineering!5e0!3m2!1sen!2sin!4v1701837812218!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="container px-5 py-24 mx-auto flex">
              <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                <p class="leading-relaxed mb-5 text-gray-600">"Continuous improvement is better than delayed perfection" – Mark Twain</p>
                <div class="relative mb-4">
                  <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                  <input type="email" id="email" name="email"  required class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                  <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                  <textarea id="message" required name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <input type="submit" name="submit" required class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" value="SUBMIT" />
              </div>
            </div>
          </form>

    </div>
<hr>
<hr>
<div class="footer">

    <footer class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
          <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
              <img src="../images/logo.png" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="19 16 24 24" />
                <!-- <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path> -->
              
              <span class="ml-3 text-xl">Amrita</span>
            </a>
            <p class="mt-2 text-sm text-gray-500">Amrita Club Management System</p>
          </div>
          <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
            <div class="lg:w-3/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CONTACT US</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Amrita School Of Engineering <br>
                    Bengaluru Campus <br>
                    Kasavanhalli, Carmelaram P.O 560035 
                    Karnataka State - INDIA.</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">College Phone: 08258- 262724 / 25</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Admission Cell: +91 8050585606</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Email: principalaiet08@gmail.com</a>
                </li>
              </nav>
            </div>
            <!-- <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-gray-600 hover:text-gray-800">First Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-gray-600 hover:text-gray-800">First Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                </li>
              </nav>
            </div> -->
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">QUICK LINKS</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-gray-600 hover:text-gray-800" href="https://www.aiet.org.in/training-placement/">Training & Placement</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800" href="https://www.aiet.org.in/life-alvas/ ">Life @ Amrita</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800" href="https://www.youtube.com/channel/UCJv1H5ZiikrG5KSXfddsDUg ">Youtube</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800" href=" https://www.instagram.com/alvasengineeringofficial/">Instagram</a>
                </li>
              </nav>
            </div>
          </div>
        </div>
        <div class="bg-gray-100">
          <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
            <!-- <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 Tailblocks —
              <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@knyttneve</a>
            </p> -->
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
              <a class="text-gray-500" href="https://www.facebook.com/AmritaUniversity">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500" href="https://www.facebook.com/AmritaUniversity #">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500" href="https://www.instagram.com/amrita_university/">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500" href="https://www.linkedin.com/school/amrita-school-of-engineering-bangalore/">
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                  <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                  <circle cx="4" cy="4" r="2" stroke="none"></circle>
                </svg>
              </a>
            </span>
          </div>
        </div>
      </footer>
</div>

</body>
</html>

