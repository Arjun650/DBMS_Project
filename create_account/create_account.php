<?php
include '../dbconnect.php';
if(isset($_POST['name'])) {
    $username = $_POST['name'];
    $query = "SELECT * FROM members WHERE name='$username'";
    $result = $conn->query($query);
    //if the username already exists
    if ($result->num_rows > 0) {
        echo "<script>
                alert('name already exists. Please choose a different one.');
              </script>";
    } else {
        if(isset($_POST['name'])) {
            $username = $_POST['email'];
            $query = "SELECT * FROM members WHERE email='$username'";
            $result = $conn->query($query);
            //if the username already exists
            if ($result->num_rows > 0) {
                echo "<script>
                        alert('Mail id already exists.');
                      </script>";
            } else {

                if(isset($_POST['name'])) {
                    $username = $_POST['password'];
                    $query = "SELECT * FROM members WHERE password='$username'";
                    $result = $conn->query($query);
                    //if the username already exists
                    if ($result->num_rows > 0) {
                        echo "<script>
                                alert('Password Already exists');
                              </script>";
                    } else {
                        // code to insert into database goes here
                        
                // code to insert into database goes here
                if(isset($_POST['password']) && isset($_POST['confirmpassword'])) {
                    $password = $_POST['password'];
                    $confirm_password = $_POST['confirmpassword'];
                    if($password == $confirm_password) {
                        // passwords match, insert into database
                        // code to insert into database goes here
                        // echo "Passwords match. Successfully saved!";
                        if(isset($_POST['submit'])){
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $club = $_POST['club_name'];
                            $password =$_POST['password'];
                        
                            $sql = "insert into `members` (name, email, club_name, password) values ('$name','$email','$club','$password')";
                        
                            $result = mysqli_query($conn,$sql);
                            if($result){
                                echo  "<script>alert('Account created successfully');</script>";
                            }else{
                                die(mysqli_error($conn));
                            }
                        
                        }
                      } else {
                        // passwords do not match
                        echo "<script>alert('Passwords do not match. Please try again.');</script>";
                      }
                    }
                }
            }
        }        
    }
}
}


// include '../dbconnect.php';

// if(isset($_POST['submit'])) {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $club = $_POST['club_name'];
//     $password = $_POST['password'];
//     $confirm_password = $_POST['confirmpassword'];

//     // Check if the passwords match
//     if ($password == $confirm_password) {
//         // Hash the password
//         $hashed_password = password_hash($password, PASSWORD_DEFAULT);
//         // Check if the username already exists
//         $query = "SELECT * FROM members WHERE name='$name'";
//         $result = $conn->query($query);

//         if ($result->num_rows > 0) {
//             echo "<script>alert('Name already exists. Please choose a different one.');</script>";
//         } else {
//             // Check if the email already exists
//             $query = "SELECT * FROM members WHERE email='$email'";
//             $result = $conn->query($query);

//             if ($result->num_rows > 0) {
//                 echo "<script>alert('Email already exists.');</script>";
//             } else {
//                 // Insert the user into the database
//                 $sql = "INSERT INTO `members` (name, email, club_name, password) VALUES ('$name', '$email', '$club', '$hashed_password')";

//                 $result = mysqli_query($conn, $sql);

//                 if ($result) {
//                     echo "<script>alert('Account created successfully');</script>";
//                 } else {
//                     die(mysqli_error($conn));
//                 }
//             }
//         }
//     } else {
//         // Passwords do not match
//         echo "<script>alert('Passwords do not match. Please try again.');</script>";
//     }
// }


                
                


        
        



        // code to insert into database goes here
        


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
    <title>CREATE NEW ACCOUNT</title>
</head>
<body  class="bg-[#fdba74]">
    <!-- <div class="navbarheader">
        <div class="flex justify-center ">
            <div class="self-center top-0 w-full max-w-7xl ">
                <div class="flex justify-between items-center text-gray-700">
                    <div class="mx-2 my-4 ">
                      <div class=" md:w-1/6 overflow-hidden ">
                        <img src="images/aiet-logo.png" alt="" class="" />
                      </div>
                    </div>
                    <ul class="hidden md:flex items-center text-[18px] font-semibold pr-10">
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                href="home.html">Home</a></li>
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a href="dashboard.html">
                                dashboard</a></li>
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a href="clubs.html">Our
                                Clubs</a></li>
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                href="#">Notices</a></li>
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                href="contact.html">Contact</a></li>
                        <li
                            class="text-blue-600 hover:text-white hover:bg-blue-600 mx-4 my-1 border-2 border-blue-600 px-2 rounded-2xl ">
                            <a href="#">LogIn</a></li>
                        <li
                            class="text-white bg-blue-600 px-2 rounded-2xl mx-4 my-1 hover:bg-white hover:text-blue-600 hover:border-2 hover:border-blue-600">
                            <a href="#">SignUp</a></li> 
                    </ul> <button class="block p-3 mx-10 md:hidden hover:bg-gray-200 rounded-xl group">
                        <div class="w-5 my-[3px] h-[3px] bg-gray-600 mb-[2px]"></div>
                        <div class="w-5 my-[3px] h-[3px] bg-gray-600 mb-[2px]"></div>
                        <div class="w-5 my-[3px] h-[3px] bg-gray-600"></div>
                        <div
                            class="absolute top-0 -right-full opacity-0 h-screen w-[60%] border bg-white group-focus:right-0 group-focus:opacity-100 transition-all ease-in duration-300 ">
                            <ul class="flex flex-col items-center text-[18px] pt-[60px]">
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">Home</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">About Us</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">Our Services</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">Portfolio</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">Contact</a></li>
                                <li
                                    class="text-blue-600 hover:text-white hover:bg-blue-600 mx-4 my-1 border-2 border-blue-600 px-2 rounded-2xl ">
                                    <a href="#">LogIn</a></li>
                                <li
                                    class="text-white bg-blue-600 px-2 rounded-2xl mx-4 my-1 hover:bg-white hover:text-blue-600 hover:border-2 hover:border-blue-600">
                                    <a href="#">SignUp</a></li> 
                            </ul>
                        </div>
                    </button>
                </div>
                
            </div>
           </div>-->
           <script src="https://cdn.tailwindcss.com"></script>
           <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
           <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
           <script nomodule src="../images/logo.png"></script> 
    </div> 



    <div class="flex items-center justify-center min-h-screen bg-[#fdba74]-600 animate__animated animate__bounceInDown">
        <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
            <div class="flex justify-center">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-blue-600" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path
                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                </svg> -->
                <div class=" md:w-1/6 overflow-hidden ">
                    <img src="../images/logo.png" alt="" class="" />
                </div>
            </div>
            <h3 class="text-2xl font-bold text-center">JOIN US</h3>
            <form action="" method="post">
                <div class="mt-4">
                    <div>
                        <label class="block" for="Name">Name<label>
                                <input type="text" placeholder="Name" name="name" required="" autofocus
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"/>
                    </div>
                    <div class="mt-4">
                    <label class="block" for="Name">Email<label>
                        <label class="block" for="email"><label>
                                <input type="email" placeholder="Email" name="email" required=""
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />
                    </div>


                    <div class="mt-4">
                    <label class="block" for="Name">Club<label>
                    <div class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">

                    <?php
				   include '../dbconnect.php'; 


			        $query = "SELECT * FROM clubinfo";
					$results = mysqli_query($conn, $query);

					
			        echo '<select name="club_name" id="club_name" required>';
					echo '<option value=""></option>';
					while($row = mysqli_fetch_assoc($results)) {
			        echo '<option value="'.$row['club_name'].'">'.$row['club_name']. '</option>';
					//echo $row['id'];
					
					}
			   echo '</select>';

			?>
            </div>
            </div>
                    <!-- <div class="mt-4">
                    
                    <label class="block" for="Name">Date of birth<label>
                        <div class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                      <input type="date" name="DOB" id="DOB" value="0000-00-00" class="date" />
                </div> -->

                    </div>
                    <div class="mt-4">
                        <label class="block">Password<label>
                                <input type="password" placeholder="Password" name="password" required="" minlength=8  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />
                                <input type="password" placeholder="Confirm Password" name="confirmpassword" required="" minlength=8  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />
                                    <h7 class="text-xs text-rose-600 font-thin">must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters </h7>
                                </div>
                                <div>
                                    <?php
                                                if (isset($error)) {
                                                    echo $error;
                                                }
                                                if(isset($noerror)){
                                                    echo $noerror;
                                                }
                                                ?>  
                                                    </div>  
                                                   
                   <!--   <div class="mt-4">
                        <label class="block">Confirm Password<label>
                                <input type="password" placeholder="Password"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                    </div>
                    <span class="text-xs text-red-400">Password must be same!</span> -->
                    <div class="flex">
                        <button type="submit" class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900"  name="submit">SUBMIT</button>
                    </div>
                    
                    <div class="mt-6 text-grey-dark">
                        Already have an account?
                        <a class="text-blue-600 hover:underline" href="../userlogin.php">
                            Log in
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>