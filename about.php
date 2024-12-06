<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>Choose Learntopia, your gateway to a world of knowledge. Our online platform offers a diverse range of courses, taught by expert instructors who are passionate about sharing their expertise. Learn at your own pace, on your own schedule, and from the comfort of your home. Our effort towards students will ensure a seamless and rewarding learning experience. Elevate your skills, advance your career, and unlock your full potential with Learntopia.
</p>
         <a href="courses.php" class="inline-btn">Our courses</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>100+</h3>
            <span>Online courses</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>5k+</h3>
            <span>Brilliants students</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>300+</h3>
            <span>Expert teachers</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>Job placement</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">Student's reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>"I was initially hesitant to try online learning, but Learntopia completely changed my perspective. The courses are well-structured, the instructors are knowledgeable and engaging, and the platform is user-friendly. I've learned so much and gained valuable skills that have directly benefited my career."</p>
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>From Sarah</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"I've taken several courses on Learntopia, and I'm consistently impressed by the quality of the content. The flexibility to learn at my own pace is a huge plus. The instructors are always available to answer questions, and the community forums are a great place to connect with other learners. Definitely worth the investment!"</p>
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>From Asif</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"As a busy working professional, finding time to learn new skills was a challenge. Learntopia's online platform made it easy to fit learning into my schedule. The courses are concise and to the point, and the interactive elements keep me engaged. I've already recommended Learntopia to several of my colleagues!"</p>
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>From Wasif</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"I was looking for a way to upskill myself in a specific area, and Learntopia had exactly what I needed. The courses are comprehensive and cover all the essential topics. The instructors are experts in their field and provide clear explanations. I'm confident that the knowledge and skills I've gained will help me advance in my career."</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>From Rehana</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"I've always been a visual learner, and Learntopia's video-based courses are perfect for me. The instructors are dynamic and engaging, and the content is easy to follow. I appreciate the opportunity to ask questions and interact with other learners. It's a great way to learn and connect with like-minded people."</p>
         <div class="user">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>From Mizan</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"I've been using Learntopia for over a year now, and I'm amazed at how much I've learned. The platform offers a wide range of courses on various topics, and the quality of the content is consistently high. I've even completed a few certification courses that have significantly boosted my professional profile."</p>
         <div class="user">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>From Emma</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>