<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script> 
  <title>JV Page</title>
</head>
<body class="bg-[#EAEEFC] bg-center bg-cover bg-repeat bg-fixed overflow-x-hidden">

  <!-- Navbar -->
  <section id="navbar" class="flex justify-between items-center bg-gradient-to-r from-[#3A8EF6] to-[#6F3AFA] py-4 px-20 max-[768px]:px-10 sticky top-0 z-20">
    <img class="w-[12%] max-[768px]:w-[15%] max-[600px]:w-[18%] max-[500px]:w-[28%]" src="./img/logo.png" alt="logo">
    <div class="flex justify-center items-center gap-12 max-[768px]:hidden">
      <a class="smooth-scroll flex justify-center items-center gap-1 text-white hover:border-b-[1px] hover:border-white" href="#affiliate">
        <p>Affiliate Link</p>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
          <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"/>
        </svg>
      </a>
      <a class="smooth-scroll flex justify-center items-center gap-1 text-white hover:border-b-[1px] hover:border-white" href="#contest">
        <p>Contest</p>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
          <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"/>
        </svg>
      </a>
    </div>
    <!-- Bar -->
    <div class="container max-[768px]:flex flex-col hidden items-end" onclick="myFunction(this)">
      <div class="bar1 rounded-[10px] bg-white"></div>
      <div class="bar2 rounded-[10px] bg-white"></div>
      <div class="bar3 rounded-[10px] bg-white"></div>
    </div>
  </section>
  <div class="burger bg-gradient-to-r from-[#3A8EF6] to-[#6F3AFA] w-full px-10 justify-center items-start fixed z-20">
    <a class="smooth-scroll flex justify-center items-center gap-1 text-white hover:border-b-[1px] hover:border-white py-3 border-white border-t-[2px] border-b-[2px] w-full float-start" href="#affiliate">
      <p>Affiliate Link</p>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
        <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"/>
      </svg>
    </a>
    <a class="smooth-scroll flex justify-center items-center gap-1 text-white hover:border-b-[1px] hover:border-white py-3 border-white border-b-[2px] w-full float-start" href="#contest">
      <p>Contest</p>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
        <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"/>
      </svg>
    </a>
  </div>


  <video autoplay muted loop id="bg-video">
    <source src="./img/video.mp4" type="video/mp4">
  </video>
  <!-- Hero -->
  <section class="relative bg-video">
    <div class="flex flex-col justify-center items-center text-center px-32 max-[992px]:px-24 max-[768px]:px-8 max-[480px]:px-4 mt-16 max-[768px]:mt-12 max-[480px]:mt-7">
      <h1 class="headline text-[2.5rem] max-[1024px]:text-[1.5rem] max-[768px]:text-[1.25rem] max-[480px]:text-[0.8rem] text-black font-semibold">Join Us Promoting Our Premium <span class="text-[#3A8EF6]">E-RECIPE</span> Collection</h1>
      <h1 class="headline text-[4rem] max-[992px]:text-[3rem] max-[768px]:text-[2.65rem] max-[480px]:text-[1.5rem] leading-[4rem] max-[768px]:leading-[3rem] max-[480px]:leading-[2rem] text-black font-semibold">Get Instant Commissions on <br> Easy to Sell Nutritious and Delicious Recipes</h1>
      <div class="bg-gradient-to-r from-[#3A8EF6] to-[#6F3AFA] px-64 max-[1024px]:px-16 max-[992px]:px-10 max-[480px]:px-2 py-3 rounded-[20px] mt-5">
        <h3 class="sub-headline tracking-[1px] text-[1.65rem] max-[992px]:text-[1.5rem] max-[768px]:text-[1.35rem] max-[568px]:text-[0.8rem] text-white font-semibold leading-[2rem] max-[768px]:leading-[1.5rem] max-[480px]:leading-[1rem]">Explore 10+ Deliciously Healthy Recipes</h3>
      </div>
    </div>
    <div class="flex justify-center items-center mt-16 mb-12 max-[768px]:my-8 max-[480px]:my-5">
      <img class="w-[65rem] max-[992px]:w-[50rem] max-[768px]:w-[40rem] max-[480px]:w-[25rem]" src="./img/BoxMockup.png" alt="">
    </div>
    <div class="text-center text-black px-40 max-[992px]:px-24 max-[768px]:px-8 max-[480px]:px-4 text-[1.25rem] max-[992px]:text-[1.15rem] max-[768px]:text-[1rem] max-[480px]:text-[0.65rem] leading-[2rem] max-[992px]:leading-[2rem] max-[768px]:leading-[1.5rem] max-[480px]:leading-[1rem]">
      <h3>Elevate your menu with our healthy recipes! Expand your business by providing nutritious and delicious meal options that your customers will love. Start creating and selling wholesome dishes today!</h3>
    </div>
  </section>


  <!-- Timeline -->
  <section class="flex place-content-center gap-10 max-[600px]:gap-5 max-[480px]:gap-3 py-12 max-[768px]:py-8 max-[600px]:py-5">
    <div class="bg-white rounded-b-[30px] px-8 py-2 border-[#3A8EF6] border-t-[7px]">
      <h1 class="text-[4rem] max-[768px]:text-[3rem] max-[600px]:text-[2.5rem] max-[480px]:text-[1.75rem] font-medium">Start On</h1>
      <h3 class="text-[1.5rem] max-[768px]:text-[1.15rem] max-[600px]:text-[1rem] max-[480px]:text-[0.8rem]">July 1st, 2024</h3>
      <h3 class="text-[1.15rem] max-[768px]:text-[0.9rem] max-[600px]:text-[0.8rem] max-[480px]:text-[0.6rem]">09:00 EST</h3>
    </div>
    <div class="bg-white rounded-b-[30px] px-8 py-2 border-[#3A8EF6] border-t-[7px]">
      <h1 class="text-[4rem] max-[768px]:text-[3rem] max-[600px]:text-[2.5rem] max-[480px]:text-[1.75rem] font-medium">Ends On</h1>
      <h3 class="text-[1.5rem] max-[768px]:text-[1.15rem] max-[600px]:text-[1rem] max-[480px]:text-[0.8rem]">July 5th, 2024</h3>
      <h3 class="text-[1.15rem] max-[768px]:text-[0.9rem] max-[600px]:text-[0.8rem] max-[480px]:text-[0.6rem]">12:00 EST</h3>
    </div>
  </section>


  <!-- Countdown -->
  <div class="flex flex-wrap items-start justify-center w-full gap-4 count-down-main mb-16">
    <div class="timer w-24 sm:w-28">
        <div class="bg-1 py-2 px-2 rounded-lg overflow-hidden">
            <h3 class="countdown-element days satoshi font-semibold text-[2rem] sm:text-[4rem] text-white text-center"></h3>
        </div>
        <p class="text-sm sm:text-lg satoshi font-bold text-[#121212] mt-1 text-center w-full">Days</p>
    </div>
    <h3 class="satoshi font-semibold text-[2rem] sm:text-[4rem] text-[#121212] hidden sm:block">:</h3>
    <div class="timer w-24 sm:w-28">
        <div class="bg-1 py-2 px-2 rounded-lg overflow-hidden">
            <h3 class="countdown-element hours satoshi font-semibold text-[2rem] sm:text-[4rem] text-white text-center"></h3>
        </div>
        <p class="text-sm sm:text-lg satoshi font-bold text-[#121212] mt-1 text-center w-full">Hours</p>
    </div>
    <h3 class="satoshi font-semibold text-[2rem] sm:text-[4rem] text-[#121212] hidden sm:block">:</h3>
    <div class="timer w-24 sm:w-28">
        <div class="bg-1 py-2 px-2 rounded-lg overflow-hidden">
            <h3 class="countdown-element minutes satoshi font-semibold text-[2rem] sm:text-[4rem] text-white text-center"></h3>
        </div>
        <p class="text-sm sm:text-lg satoshi font-bold text-[#121212] mt-1 text-center w-full">Minutes</p>
    </div>
    <h3 class="satoshi font-semibold text-[2rem] sm:text-[4rem] text-[#121212] hidden sm:block">:</h3>
    <div class="timer sm:w-36">
        <div class="bg-1 py-2 px-2 rounded-lg overflow-hidden flex justify-center items-center">
            <h3 class="countdown-element seconds satoshi font-semibold text-[2rem] sm:text-[4rem] text-white text-center animate-countinsecond"></h3>
            <p class="text-[3rem] text-white leading-[1rem]">.</p>
            <h3 class="countdown-element milli-seconds satoshi font-semibold text-[2rem] sm:text-[4rem] text-white text-center animate-countinsecond"></h3>
        </div>
        <p class="text-sm sm:text-lg satoshi font-bold text-[#121212] mt-1 text-center w-full">Seconds</p>
    </div>
  </div>


  <!-- Affiliate Link -->
  <section id="affiliate" class="bg-[#EAEEFC] border-gradient-1 border-gradient-2 py-16 max-[992px]:py-12 max-[768px]:py-10 max-[480px]:py-5">
    <div class="text-center">
      <h1 class="text-[3.5rem] max-[992px]:text-[3rem] max-[768px]:text-[2.75rem] max-[480px]:text-[2rem] leading-[3.5rem] max-[992px]:leading-[3rem] max-[768px]:leading-[2.75rem] max-[480px]:leading-[2rem] font-">Affiliate Link</h1>
      <h3 class="font-medium text-[1.25rem] max-[992px]:text-[1.25rem] max-[768px]:text-[1rem] max-[480px]:text-[0.8rem]">Get Your Affiliate Link Now<h3>
    </div>
    <div class="flex justify-center items-center mt-12">
      <form class="form-affiliate flex flex-col gap-5">
        <input class="w-[50rem] max-[992px]:w-[40rem] max-[768px]:w-[30rem] max-[500px]:w-[22rem] border-gradient-1-2 border-gradient-2-2 rounded-[30px] px-4 py-2 focus:outline-[#3A8EF6]" type="text" name="name" id="name" placeholder="Your name" required>
        <input class="w-[50rem] max-[992px]:w-[40rem] max-[768px]:w-[30rem] max-[500px]:w-[22rem] border-gradient-1-2 border-gradient-2-2 rounded-[30px] px-4 py-2 focus:outline-[#3A8EF6]" type="email" name="email" id="email" placeholder="Your email" required>
        <div class="w-full mt-2 max-[992px]:mt-6 max-[768px]:mt-3 max-[480px]:mt-2">
          <button class="float-end bg-gradient-to-r from-[#3A8EF6] to-[#6F3AFA] text-white text-[1.15rem] px-8 py-2 rounded-[20px] hover:scale-105 duration-200">Get Affiliate Link</button>
        </div>
      </form>
    </div>
  </section>


  <!-- About -->
  <section class="relative overflow-x-hidden flex flex-col place-items-center bg-[#EAEEFC] bg-cover bg-no-repeat bg-fixed bg-center py-16 max-[768px]:py-12 max-[480px]:py-8">
    <img class="absolute w-[35%] top-[10%] -left-[15%]" src="./img/strawberries.png" alt="">
    <img class="absolute w-[35%] top-[65%] -right-[10%]" src="./img/oranges.png" alt="">
    <h1 class="text-[3.5rem] max-[992px]:text-[3rem] max-[768px]:text-[2.75rem] max-[480px]:text-[2rem] leading-[3.5rem] max-[992px]:leading-[3rem] max-[768px]:leading-[2.75rem] max-[480px]:leading-[2rem] font-medium">Introducing</h1>
    <h1 class="text-[3.5rem] max-[992px]:text-[3rem] max-[768px]:text-[2.75rem] max-[480px]:text-[2rem] leading-[3.5rem] max-[992px]:leading-[3rem] max-[768px]:leading-[2.75rem] max-[480px]:leading-[2rem] font-medium text-[#3A8EF6]">FitMeal</h1>
    <div class="text-center w-[50%] max-[992px]:w-[85%] max-[768px]:w-[90%] max-[480px]:w-[95%] mt-10 max-[768px]:mt-5">
      <h3 class="text-[1.25rem] max-[768px]:text-[1rem] max-[480px]:text-[0.75rem] max-[768px]:-my-3 max-[480px]:-my-1 font-normal leading-[1.75rem] max-[768px]:leading-[1.5rem] max-[480px]:leading-[1rem] mb-5">Discover the joy of healthy eating with FitMeal, the ultimate collection of nutritious recipes designed to support and manage various health conditions. Say goodbye to bland, restrictive diets and hello to flavorful, wholesome meals that cater to your unique dietary needs. From managing diabetes and heart disease to promoting overall wellness, our carefully curated recipes transform your kitchen into a haven of health and taste.</h3>
      <h3 class="text-[1.25rem] max-[768px]:text-[1rem] max-[480px]:text-[0.75rem] max-[768px]:-my-3 max-[480px]:-my-1 font-normal leading-[1.75rem] max-[768px]:leading-[1.5rem] max-[480px]:leading-[1rem]">FitMeal is a fresh, innovative product created by a team of expert nutritionists and culinary artists with over 15 years of experience in crafting health-centric digital products. Each recipe is meticulously developed to ensure it’s not only delicious but also packed with the nutrients your body needs to thrive.</h3>
    </div>
    <div class="flex justify-center items-center my-12 max-[992px]:my-8 max-[480px]:my-4">
      <img class="w-[65%] max-[992px]:w-[80%] max-[480px]:w-[90%]" src="./img/BoxMockup-phone.png" alt="mockup">
    </div>
    <div class="grid grid-cols-2 place-items-center max-[992px]:grid-cols-1 gap-10 max-[500px]:px-5">
      <div class="bg-white flex flex-col justify-center rounded-[30px] border-[4px] border-[#3A8EF6]">
        <div class="flex flex-col items-center justify-center pt-5 pb-3 px-8 border-gradient-2-2 bg-[#3A8EF6] rounded-t-[24px]">
          <h1 class="text-white text-[2rem] max-[1024px]:text-[1.5rem] text-center font-medium leading-[2rem]">Front End</h1>
          <h3 class="text-white text-[1.15rem] max-[1024px]:text-[1rem] text-center font-medium">There are 10 Modules at The Frontend Sales Page</h3>
        </div>
        <div class="flex justify-evenly items-center gap-10 text-left p-5">
          <div class="flex flex-col justify-start items-start">
            <div class="flex justify-start items-center">
              <p>Acid Reflux</p>
            </div>
            <div class="flex place-content-center">
              <p>Hipertensi</p>
            </div>
            <div class="flex justify-start items-center">
              <p>Hearth Attack</p>
            </div>
            <div class="flex place-content-center">
              <p>Osteoporosis</p>
            </div>
            <div class="flex justify-start items-center">
              <p>Kidney Stone</p>
            </div>
          </div>
          <div class="flex flex-col justify-start items-start">
            <div class="flex justify-start items-center">
              <p>Leukimia</p>
            </div>
            <div class="flex place-content-center">
              <p>Hemorrhoids</p>
            </div>
            <div class="flex justify-start items-center">
              <p>Rheumatoid Arthritis</p>
            </div>
            <div class="flex place-content-center">
              <p>Acne</p>
            </div>
            <div class="flex justify-start items-center">
              <p>Underweight</p>
            </div>
          </div>
        </div>
        <div class="flex justify-center items-center mt-2 mb-5">
          <a class="bg-gradient-to-r from-[#3A8EF6] to-[#6F3AFA] text-white text-[1.15rem] px-8 py-2 rounded-[20px] hover:scale-105 duration-200" href="../sales-page/index.php">Sales Page</a>
        </div>
      </div>
      <div class="bg-white rounded-[30px] border-[4px] border-[#6F3AFA]">
        <div class="flex flex-col items-center justify-center pt-5 pb-3 px-8 border-gradient-2-2-1 bg-[#6F3AFA] rounded-t-[24px]">
          <h1 class="text-white text-[2rem] max-[1024px]:text-[1.5rem] text-center font-medium leading-[2rem]">Upsell</h1>
          <h3 class="text-white text-[1.15rem] max-[1024px]:text-[1rem] text-center font-medium">There are 15 Modules at The Upsell Sales Page</h3>
        </div>
        <div class="flex justify-evenly items-start gap-10 text-left p-5">
          <div class="flex flex-col justify-start items-start">
            <div class="flex justify-start items-center">
              <p>Kidney Failure</p>
            </div>
            <div class="flex place-content-center">
              <p>Stroke</p>
            </div>
            <div class="flex justify-start items-center">
              <p>Chickenpox</p>
            </div>
            <div class="flex place-content-center">
              <p>Cancer</p>
            </div>
            <div class="flex justify-start items-center">
              <p>Appendicitis</p>
            </div>
          </div>
          <div class="flex flex-col justify-start items-start">
            <div class="flex justify-start items-center">
              <p>HIV</p>
            </div>
            <div class="flex place-content-center">
              <p>Gallstone</p>
            </div>
            <div class="flex justify-start items-center">
              <p>TBC</p>
            </div>
            <div class="flex place-content-center">
              <p>Diabetes</p>
            </div>
            <div class="flex justify-start items-center">
              <p>Asthma</p>
            </div>
          </div>
          <div class="flex flex-col justify-start items-start">
            <div class="flex justify-start items-center">
              <p>Vertigo</p>
            </div>
            <div class="flex place-content-center">
              <p>Alzheimer</p>
            </div>
            <div class="flex justify-start items-center">
              <p>Autoimmune</p>
            </div>
            <div class="flex place-content-center">
              <p>Liver</p>
            </div>
            <div class="flex justify-start items-center">
              <p>Galucoma</p>
            </div>
          </div>
        </div>
        <div class="flex justify-center items-center mt-2 mb-5">
          <a class="bg-gradient-to-r from-[#3A8EF6] to-[#6F3AFA] text-white text-[1.15rem] px-8 py-2 rounded-[20px] hover:scale-105 duration-200" href="../sales-page/index.php">Sales Page</a>
        </div>
      </div>
    </div>
    <div class="text-center w-[50%] max-[992px]:w-[85%] max-[768px]:w-[90%] max-[480px]:w-[95%] my-12 max-[768px]:my-10">
      <h3 class="text-[1.25rem] max-[768px]:text-[1rem] max-[480px]:text-[0.75rem] max-[768px]:-my-3 max-[480px]:-my-1 font-normal leading-[1.75rem] max-[768px]:leading-[1.5rem] max-[480px]:leading-[1rem]">Get ready to revolutionize your approach to health with FitMeal: Healthy Recipes for Various Disease! Our collection of recipes is designed not only to delight your taste buds but also to support and manage a wide range of health conditions. With FitMeal, you'll empower and educate your audience, offering meals crafted to address specific dietary needs while still being irresistibly delicious.<h3>
    </div>
    <div class="px-28 mb-10">
      <h3 class="text-center text-[2.5rem] max-[992px]:text-[2rem] max-[768px]:text-[1.5rem] max-[480px]:text-[1.1rem] leading-[2.75rem] max-[768px]:leading-[2rem] max-[480px]:leading-[1.5rem] font-semibold">Here are some specific examples <br> of how can be used by different professions:</h3>
    </div>
    <div class="flex flex-col justify-center items-center gap-5 px-64 max-[1196px]:px-36 max-[1024px]:px-28 max-[992px]:px-32 max-[768px]:px-10 max-[480px]:px-1">
      <div class="grid grid-cols-2 max-[992px]:grid-cols-1 max-[768px]:grid-cols-1 max-[480px]:grid-cols-1 gap-x-10 gap-y-5">
        <div class="flex justify-center items-center gap-3 py-2 bg-[#3A8EF6] rounded-[50px] px-8 max-[480px]:px-5 drop-shadow-[1px_2px_5px_rgba(0,0,0,0.3)] border-[2px] border-white">
          <img class="w-[3rem] max-[480px]:w-[3.25rem]" src="./img/nutritionist.png" alt="">
          <div class="text-white">
            <h3 class="font-bold text-[16px] max-[768px]:leading-[1.15rem]">Dietitians and Nutritionists</h3>
            <p class="text-[12px] max-[768px]:leading-[1rem] mt-1">By incorporating these recipes into their practice, dietitians can help clients better manage their conditions through proper nutrition, ensuring they receive balanced, tasty meals that adhere to their dietary requirements.</p>
          </div>
        </div>
        <div class="flex justify-center items-center gap-3 py-2 bg-[#3A8EF6] rounded-[50px] px-8 max-[480px]:px-5 drop-shadow-[1px_2px_5px_rgba(0,0,0,0.3)] border-[2px] border-white">
          <img class="w-[3rem] max-[480px]:w-[3.25rem]" src="./img/chef.png" alt="">
          <div class="text-white">
            <h3 class="font-bold text-[16px] max-[768px]:leading-[1.15rem]">Chefs and Culinary Professional</h3>
            <p class="text-[12px] max-[768px]:leading-[1rem] mt-1">By demonstrating these recipes, chefs can educate their students on the importance of nutrition and how to create flavorful dishes that promote health and well-being, expanding their culinary skills and knowledge.</p>
          </div>
        </div>
        <div class="flex justify-center items-center gap-3 py-2 bg-[#3A8EF6] rounded-[50px] px-8 max-[480px]:px-5 drop-shadow-[1px_2px_5px_rgba(0,0,0,0.3)] border-[2px] border-white">
          <img class="w-[3rem] max-[480px]:w-[3.25rem]" src="./img/healtheducoator.png" alt="">
          <div class="text-white">
            <h3 class="font-bold text-[16px] max-[768px]:leading-[1.15rem]">Health Educators</h3>
            <p class="text-[12px] max-[768px]:leading-[1rem] mt-1">Using these recipes, health educators can offer hands-on learning experiences, empowering individuals to make healthier food choices and understand the impact of diet on their overall health.</p>
          </div>
        </div>
        <div class="flex justify-center items-center gap-3 py-2 bg-[#3A8EF6] rounded-[50px] px-8 max-[480px]:px-5 drop-shadow-[1px_2px_5px_rgba(0,0,0,0.3)] border-[2px] border-white">
          <img class="w-[3rem] max-[480px]:w-[3.25rem]" src="./img/trainer.png" alt="">
          <div class="text-white">
            <h3 class="font-bold text-[16px] max-[768px]:leading-[1.15rem]">Personal Trainers</h3>
            <p class="text-[12px] max-[768px]:leading-[1rem] mt-1">The recipes can be shared during training sessions or included in customized meal plans, helping clients achieve optimal results by pairing physical activity with healthy eating habits.</p>
          </div>
        </div>
        <div class="flex justify-center items-center gap-3 py-2 bg-[#3A8EF6] rounded-[50px] px-8 max-[480px]:px-5 drop-shadow-[1px_2px_5px_rgba(0,0,0,0.3)] border-[2px] border-white">
          <img class="w-[3rem] max-[480px]:w-[3.25rem]" src="./img/coach.png" alt="">
          <div class="text-white">
            <h3 class="font-bold text-[16px] max-[768px]:leading-[1.15rem]">Health Coaches</h3>
            <p class="text-[12px] max-[768px]:leading-[1rem] mt-1">By integrating these recipes into their coaching programs, health coaches can provide clients with practical tools and inspiration to make sustainable dietary changes that enhance their overall well-being.</p>
          </div>
        </div>
        <div class="flex justify-center items-center gap-3 py-2 bg-[#3A8EF6] rounded-[50px] px-8 max-[480px]:px-5 drop-shadow-[1px_2px_5px_rgba(0,0,0,0.3)] border-[2px] border-white">
          <img class="w-[3rem] max-[480px]:w-[3.25rem]" src="./img/influencer.png" alt="">
          <div class="text-white">
            <h3 class="font-bold text-[16px] max-[768px]:leading-[1.15rem]">Bloggers and Social Media Influencers</h3>
            <p class="text-[12px] max-[768px]:leading-[1rem] mt-1">By showcasing these recipes, influencers can attract a health-conscious audience, providing valuable content that inspires followers to try new, healthy dishes and adopt better eating habits.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Module -->
  <section id="produk" class="bg-[#EAEEFC] container-lg">
    <div class="flex flex-col justify-center items-center">
      <?php include 'produk.php'; ?>
      <?php foreach ($products as $product) : ?>
        <div class="bg-1 w-full flex flex-row items-center">
          <img class="w-[10%] max-[992px]:w-[15%] max-[768px]:w-[18%] mx-16 max-[992px]:mx-12 max-[768px]:mx-8 max-[500px]:mx-5" src="img/logo.png" alt="Logo">
          <div class="bg-[#F3F3FD] py-8 max-[768px]:py-5 max-[468px]:py-4 w-full flex justify-center" style="clip-path: polygon(10% 0, 100% 0, 100% 100%, 0 100%);">
            <h1 class="text-[2.5rem] max-[992px]:text-[2rem] max-[768px]:text-[1.75rem] max-[600px]:text-[1.25rem] font-bold text-[#303030]"><?php echo $product['title']; ?></h1>
          </div>
        </div>
        <img class="" src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>">
        <div class="h-[18rem] max-[1392px]:h-[20rem] max-[1253px]:h-[20rem] max-[992px]:h-[18rem] max-[870px]:h-[20rem] max-[768px]:h-[16rem] max-[680px]:h-[19rem] max-[610px]:h-[20rem] max-[576px]:h-[18rem] max-[530px]:h-[19rem] max-[480px]:h-[20rem] max-[428px]:h-[22rem] max-[380px]:h-[20rem] w-full relative">
          <div class="flex flex-col justify-center items-center w-full absolute z-10 top-[-25%]">
            <div class="bg-gradient-to-r from-[#3A8EF6] to-[#6F3AFA] border-[#FFDE59] border-t-[4px] border-r-[4px] rounded-[20px] w-[60%] max-[1254px]:w-[70%] max-[1090px]:w-[80%] max-[768px]:w-[90%] p-5 drop-shadow-[3px_3px_7px_rgba(0,0,0,0.6)]">
              <p class="text-white text-center max-[992px]:text-[0.9rem] max-[768px]:text-[0.8rem] max-[576px]:text-[0.7rem] max-[380px]:text-[0.6rem]">
              <?php echo $product['desc']; ?>
              </p>
            </div>
            <div class="flex max-[768px]:flex-wrap justify-evenly items-center gap-2 mt-6 w-[60%] max-[1254px]:w-[70%] max-[1090px]:w-[80%] max-[768px]:w-[90%]">
              <div class="flex justify-center items-center gap-2">
                <img class="w-[2rem] max-[992px]:w-[1.75rem] max-[860px]:w-[1.5rem] max-[768px]:w-[1.15rem]" src="./img/checklist.png" alt="">
                <p class="font-semibold max-[992px]:text-[0.9rem] max-[800px]:text-[0.8rem] max-[768px]:text-[0.7rem]">E-Recipe Books</p>
              </div>
              <div class="flex justify-center items-center gap-2">
                <img class="w-[2rem] max-[992px]:w-[1.75rem] max-[860px]:w-[1.5rem] max-[768px]:w-[1.15rem]" src="./img/checklist.png" alt="">
                <p class="font-semibold max-[992px]:text-[0.9rem] max-[800px]:text-[0.8rem] max-[768px]:text-[0.7rem]">25 Delicious Recipes</p>
              </div>
              <div class="flex justify-center items-center gap-2">
                <img class="w-[2rem] max-[992px]:w-[1.75rem] max-[860px]:w-[1.5rem] max-[768px]:w-[1.15rem]" src="./img/checklist.png" alt="">
                <p class="font-semibold max-[992px]:text-[0.9rem] max-[800px]:text-[0.8rem] max-[768px]:text-[0.7rem]"><?php echo $product['page']; ?> Pages</p>
              </div>
              <div class="flex justify-center items-center gap-2">
                <img class="w-[2rem] max-[992px]:w-[1.75rem] max-[860px]:w-[1.5rem] max-[768px]:w-[1.15rem]" src="./img/checklist.png" alt="">
                <p class="font-semibold max-[992px]:text-[0.9rem] max-[800px]:text-[0.8rem] max-[768px]:text-[0.7rem]">25 Recipes</p>
              </div>
              <div class="flex justify-center items-center gap-2">
                <img class="w-[2rem] max-[992px]:w-[1.75rem] max-[860px]:w-[1.5rem] max-[768px]:w-[1.15rem]" src="./img/checklist.png" alt="">
                <p class="font-semibold max-[992px]:text-[0.9rem] max-[800px]:text-[0.8rem] max-[768px]:text-[0.7rem]">Editable</p>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>



  <!-- Affilate Contest -->
  <section id="contest" class="relative border-gradient-1 flex flex-col place-items-center bg-[#EAEEFC] bg-[url('./img/bg-3.png')] bg-cover bg-no-repeat bg-center w-full py-16 max-[768px]:py-12 max-[480px]:py-8 px-20 max-[480px]:px-5">
    <div class="text-center w-[70%] max-[992px]:w-[90%] max-[768px]:w-[100%]">
      <h1 class="text-[3.5rem] max-[992px]:text-[2.5rem] max-[768px]:text-[2rem] max-[480px]:text-[1.5rem] font-medium mb-4 max-[992px]:mb-2 max-[768px]:mb-1">Affiliate Contest</h1>
      <h3 class="font-normal text-[1.2rem] max-[992px]:text-[1rem] max-[768px]:text-[0.8rem] max-[480px]:text-[0.6rem]">By promoting our product, you are not only get instant commission but also you can win extra cash from contest prize! The Affiliate Contest is 5 days, starting from 01 July 2024 at 9 am est and end 05 July 2024 at 12 am est.</h3>
    </div>
    <div class="w-[50rem] max-[992px]:w-[40rem] max-[769px]:w-[30rem] max-[480px]:w-[18rem] my-12 max-[992px]:my-10 max-[768px]:my-6 max-[480px]:my-3">
      <img src="./img/prize-board.png" alt="champions">
    </div>
    <div class="w-[40rem] max-[992px]:w-[30rem] max-[769px]:w-[25rem] max-[480px]:w-[15rem] mb-10 max-[992px]:mb-8 max-[768px]:mb-5 max-[480px]:mb-3">
      <img src="./img/prize-desc.png" alt="position">
    </div>
    <div class="text-center w-[60%] max-[992px]:w-[80%] max-[768px]:w-[90%] font-normal text-[1.15rem] max-[992px]:text-[1rem] max-[768px]:text-[0.8rem] max-[480px]:text-[0.6rem]">
      <p class="mb-4">If minimun sales for prize position #1 and #2 are not met, then only prizes 3, 4 and 5 will be delivered to top affilaites</p>
      <p>Teams of up to 2 are allowed for the contest. The leaderboard will be based on the front end sales during <span class="font-semibold">5 days</span> launch ending on <span class="font-semibold">05 July 2024</span> midnight at 23:59 EST.</p>
    </div>
  </section>


  <!-- Sales Funnel -->
  <section class="relative bg-[url('img/sales-funnel.png')] bg-center bg-cover bg-no-repeat grid grid-cols-3 max-[768px]:grid-cols-4 max-[600px]:grid-cols-1 place-items-center py-12 max-[992px]:py-12 max-[768px]:py-10 max-[480px]:py-5 px-16 max-[992px]:px-16 max-[480px]:px-12">
    <div class="col-end-4 max-[768px]:col-end-5 col-span-2 max-[768px]:col-span-3 text-center w-[70%] max-[992px]:w-[80%] max-[768px]:w-[90%] max-[468px]:w-[100%] text-white">
      <h1 class="text-[3.5rem] max-[992px]:text-[2.5rem] max-[768px]:text-[2.25rem] max-[480px]:text-[1.75rem] font-bold mb-1">Sales Funnel</h1>
      <h3 class="font-normal text-[1.15rem] max-[992px]:text-[1rem] max-[768px]:text-[0.8rem] max-[480px]:text-[0.5rem]">Our sales funnel will generate more profit for you, enjoy multiple commission from our high converting sales funnel.</h3>
    </div>
    <div class="col-end-4 max-[768px]:col-end-5 col-span-2 max-[768px]:col-span-3 mt-7">
      <div class="grid grid-cols-4 gap-7 max-[992px]:gap-2 max-[768px]:gap-4:">
        <div class="bg-white text-center border-white border-[3px] rounded-b-[40px] max-[768px]:rounded-b-[20px]">
          <div class="bg-[#3A8EF6]">
            <h3 class="text-white text-[1.5rem] max-[992px]:text-[1.25rem] max-[800px]:text-[1rem] max-[480px]:text-[0.8rem] font-bold">Front End</h3>
          </div>
          <div class="">
            <h3 class="text-[3.5rem] max-[992px]:text-[2.5rem] max-[768px]:text-[1.75rem] max-[480px]:text-[1.25rem] font-bold border-gradient-2-2 py-2 px-10 max-[992px]:px-4 max-[768px]:px-5">$19</h3>
            <p class="text-[1.25rem] max-[992px]:text-[1rem] max-[768px]:text-[0.8rem] max-[480px]:text-[0.6rem] py-3">50% OFF</p>
          </div>
        </div>
        <div class="bg-white text-center border-white border-[3px] rounded-b-[40px] max-[768px]:rounded-b-[20px]">
          <div class="bg-[#3A8EF6]">
            <h3 class="text-white text-[1.5rem] max-[992px]:text-[1.25rem] max-[800px]:text-[1rem] max-[480px]:text-[0.8rem] font-bold">Upsell</h3>
          </div>
          <div class="">
            <h3 class="text-[3.5rem] max-[992px]:text-[2.5rem] max-[768px]:text-[1.75rem] max-[480px]:text-[1.25rem] font-bold border-gradient-2-2 py-2 px-10 max-[992px]:px-4 max-[768px]:px-5">$37</h3>
            <p class="text-[1.25rem] max-[992px]:text-[1rem] max-[768px]:text-[0.8rem] max-[480px]:text-[0.6rem] py-3">50% OFF</p>
          </div>
        </div>
        <div class="bg-white text-center border-white border-[3px] rounded-b-[40px] max-[768px]:rounded-b-[20px]">
          <div class="bg-[#3A8EF6]">
            <h3 class="text-white text-[1.5rem] max-[992px]:text-[1.25rem] max-[800px]:text-[1rem] max-[480px]:text-[0.8rem] font-bold">Downsell</h3>
          </div>
          <div class="">
            <h3 class="text-[3.5rem] max-[992px]:text-[2.5rem] max-[768px]:text-[1.75rem] max-[480px]:text-[1.25rem] font-bold border-gradient-2-2 py-2 px-10 max-[992px]:px-4 max-[768px]:px-5">$27</h3>
            <p class="text-[1.25rem] max-[992px]:text-[1rem] max-[768px]:text-[0.8rem] max-[480px]:text-[0.6rem] py-3">50% OFF</p>
          </div>
        </div>
        <div class="bg-white text-center border-white border-[3px] rounded-b-[40px] max-[768px]:rounded-b-[20px]">
          <div class="bg-[#3A8EF6]">
            <h3 class="text-white text-[1.5rem] max-[992px]:text-[1.25rem] max-[800px]:text-[1rem] max-[480px]:text-[0.8rem] font-bold">Upsell 2</h3>
          </div>
          <div class="">
            <h3 class="text-[3.5rem] max-[992px]:text-[2.5rem] max-[768px]:text-[1.75rem] max-[480px]:text-[1.25rem] font-bold border-gradient-2-2 py-2 px-10 max-[992px]:px-4 max-[768px]:px-5">$47</h3>
            <p class="text-[1.25rem] max-[992px]:text-[1rem] max-[768px]:text-[0.8rem] max-[480px]:text-[0.6rem] py-3">50% OFF</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Terms and Condition -->
  <section class="bg-[#EAEEFC] bg-cover bg-center bg-no-repeat bg-fixed py-16 max-[992px]:py-12 max-[768px]:py-10 max-[480px]:py-5 px-28 max-[992px]:px-16 max-[768px]:px-10 max-[480px]:px-5">
    <div class="flex justify-center items-center w-full">
      <h1 class="text-center text-[3.5rem] max-[992px]:text-[2.5rem] max-[768px]:text-[2rem] max-[480px]:text-[1.25rem] font-medium">Affiliate Promotion Terms & Conditions</h1>
    </div>
    <div class="grid grid-cols-3 max-[992px]:grid-cols-1 gap-28 max-[992px]:gap-12 max-[480px]:gap-6 place-items-center mt-12 max-[992px]:mt-8 max-[480px]:mt-4">
      <div class="col-span-2 max-[992px]:col-span-1">
        <p class="text-[1.15rem] max-[480px]:text-[0.75rem]">Before joining this affiliate program, please read carefully and agree to the following rules:</p>
        <div class="mt-2 flex flex-col justify-center items-start gap-2 max-[480px]:gap-1">
          <div class="flex justify-start items-start gap-2 font-light">
            <img class="w-[1.5rem] max-[480px]:w-[1.15rem]" src="./img/point.png" alt="poin">
            <p class="max-[480px]:text-[0.65rem]">You cannot use a 3rd party system to send email promotions. All email contacts must be your own opt-in email list.</p>
          </div>
          <div class="flex justify-start items-start gap-2 font-light">
            <img class="w-[1.5rem] max-[480px]:w-[1.15rem]" src="./img/point.png" alt="poin">
            <p class="max-[480px]:text-[0.65rem]">You cannot use paid to click traffic, click exchange traffic, cheap traffic, or any other junk traffic.</p>
          </div>
          <div class="flex justify-start items-start gap-2 font-light">
            <img class="w-[1.5rem] max-[480px]:w-[1.15rem]" src="./img/point.png" alt="poin">
            <p class="max-[480px]:text-[0.65rem]">You cannot run negative PPC or iframe domain campaigns. This creates a bad image for the company and will result in immediate termination from the program.
            </p>
          </div>
          <div class="flex justify-start items-start gap-2 font-light">
            <img class="w-[1.5rem] max-[480px]:w-[1.15rem]" src="./img/point.png" alt="poin">
            <p class="max-[480px]:text-[0.65rem]">You cannot earn commission on your own purchases.
              If you have a new affiliate account, your payments will be delayed until you have a good track record.</p>
          </div>
          <div class="flex justify-start items-start gap-2 font-light">
            <img class="w-[1.5rem] max-[480px]:w-[1.15rem]" src="./img/point.png" alt="poin">
            <p class="max-[480px]:text-[0.65rem]">You must accurately represent the product and its features and benefits to customers. Misleading claims, inaccurate information, or false testimonials will result in immediate termination from the program.</p>
          </div>
          <div class="flex justify-start items-start gap-2 font-light">
            <img class="w-[1.5rem] max-[480px]:w-[1.15rem]" src="./img/point.png" alt="poin">
            <p class="max-[480px]:text-[0.65rem]">Bonuses from this page can only be used to promote Spookids. You cannot re-use, re-sell, redistribute, copy, or edit any of the bonus content.</p>
          </div>
        </div>
      </div>
      <div class="w-full flex place-content-center">
        <img class="w-[25rem] max-[992px]:w-[28rem] max-[480px]:w-[18rem]" src="./img/terms.png" alt="">
      </div>
    </div>
  </section>


  <script src="./script.js"></script>
</body>
</html>