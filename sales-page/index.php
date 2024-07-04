<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="shortcut icon" href="img/" type="image/x-icon"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sales Page - FitMeal</title>
</head>

<body>
    <div id="toast-container"></div>

    <div id="toast-template" class="toast flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert" style="display: none;">
        <div class="toast-message mx-3 satoshi text-sm font-normal"></div>
        <button id="toast-btn" type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" aria-label="Close" onclick="closeToast(this)">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>

    <video autoplay muted loop id="bg-video">
        <source src="./img/video.mp4" type="video/mp4">
    </video>
    <!-- Headline -->
    <div class="bg-video container-lg">
        <div class="flex flex-col items-center justify-center">
            <div class="flex flex-col items-center justify-center px-5 md:px-24">
                <h3 class="satoshi font-semibold text-[#121212] text-center font-1-5rem mt-16 md:w-[90%] capitalize">
                    Nourish Your Body, Heal Your Mind: Experience the power of food therapy with our curated recipe collection
                </h3>

                <h1 class="poppins-bold text-[#121212] text-center leading-tight font-3-5rem mt-16 md:w-[80%]">
                    <span class="text-[#1678F2] tracking-tighter">
                        <span class="char">F</span>
                        <span class="char">i</span>
                        <span class="char">t</span>
                        <span class="char">M</span>
                        <span class="char">e</span>
                        <span class="char">a</span>
                        <span class="char">l</span>
                    </span>
                    : Elevate Your Cooking, Elevate Your Wellness
                </h1>

                <div class="border-0 bg-card rounded-full w-full md:w-[90%] p-5 my-16 mx-8 capitalize">
                    <h3 class="satoshi font-medium font-1-5rem text-center text-[#FFFFFF]">
                        Gain control over your health and well-being with our delicious and nourishing recipes.
                    </h3>
                </div>
            </div>

            <img class="p-5 w-[100%] md:w-[80%]" src="img/Mockup.png" alt="">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 grid-rows-2 gap-5 my-16 px-5 md:px-0 w-[100%] md:w-[80%] text-start text-[#121212]">
                <div class="bg-[#FFFFFF] px-4 md:px-5 lg:px-6 py-5 w-full rounded-b-2xl border-t-8 border-[#1678F2] drop-shadow-2xl">
                    <div class="flex flex-col justify-start">
                        <img class=" w-[10%] md:w-[10%] me-5 mb-3 md:mb-5" src="img/icon.png" alt="">
                        <h3 class="font-1-5rem satoshi font-semibold">
                            Over 150+ Delicious & Healthy Recipe
                        </h3>
                    </div>
                </div>
                <div class="bg-[#FFFFFF] px-4 md:px-5 lg:px-6 py-5 w-full rounded-b-2xl border-t-8 border-[#1678F2] drop-shadow-2xl">
                    <div class="flex flex-col justify-start">
                        <i class="fas fa-download fa-2x text-[#1678F2] me-5 mb-3 md:mb-5"></i>
                        <h3 class="font-1-5rem satoshi font-semibold">
                            Downloadable Resources Section
                        </h3>
                    </div>
                </div>
                <div class="bg-[#FFFFFF] px-4 md:px-5 lg:px-6 py-5 w-full rounded-b-2xl border-t-8 border-[#1678F2] drop-shadow-2xl">
                    <div class="flex flex-col justify-start">
                        <i class="fas fa-book fa-2x text-[#1678F2] me-5 mb-3 md:mb-5"></i>
                        <h3 class="font-1-5rem satoshi font-semibold">
                            High-Quality E-book & Cover Content
                        </h3>
                    </div>
                </div>
                <div class="bg-[#FFFFFF] px-4 md:px-5 lg:px-6 py-5 w-full rounded-b-2xl border-t-8 border-[#1678F2] drop-shadow-2xl">
                    <div class="flex flex-col justify-start">
                        <i class="fas fa-share fa-2x text-[#1678F2] me-5 mb-3 md:mb-5"></i>
                        <h3 class="font-1-5rem satoshi font-semibold">
                            Shareable E-Book Recipe
                        </h3>
                    </div>
                </div>
                <div class="bg-[#FFFFFF] px-4 md:px-5 lg:px-6 py-5 w-full rounded-b-2xl border-t-8 border-[#1678F2] drop-shadow-2xl">
                    <div class="flex flex-col justify-start">
                        <i class="fas fa-edit fa-2x text-[#1678F2] me-5 mb-3 md:mb-5"></i>
                        <h3 class="font-1-5rem satoshi font-semibold">
                            Craft Your Perfect Plate
                        </h3>
                    </div>
                </div>
                <div class="bg-[#FFFFFF] px-4 md:px-5 lg:px-6 py-5 w-full rounded-b-2xl border-t-8 border-[#1678F2] drop-shadow-2xl">
                    <div class="flex flex-col justify-start">
                        <img class=" w-[10%] md:w-[10%] me-5 mb-3 md:mb-5" src="img/icon.png" alt="">
                        <h3 class="font-1-5rem satoshi font-semibold">
                            Re-Seller Right License
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-[#F3F3FD] border-gradient-1 flex flex-col items-center justify-center text-center p-3 md:p-0 text-[#121212]">
            <h1 class="poppins-bold font-2-5rem mt-12 w-full md:w-[70%]">
                Exclusive Recipe Vault: Unlock 150+ Delicious & Healthy Dishes!
            </h1>

            <h3 class="font-2rem satoshi font-semibold my-12 w-[90%] md:w-full">
                <span class="text-[#1678F2]">Limited-Time Bonus</span>: Master Wellness with Exclusive Recipes & Re-Seller Right!
            </h3>

            <p class="font-1-2rem satoshi font-medium w-full md:w-[70%] mb-16 capitalize">
                Elevate your culinary creations and empower your wellness journey with our exclusive Re-seller right. This limited-time bonus grants you access to a treasure trove of 150+ exclusive, health-focused recipes designed to support your specific needs and unlock a world of delicious possibilities.
            </p>

            <a id="cta" class="bg-card rounded-lg py-5 px-20 satoshi text-[#FFFFFF] font-1-5rem font-bold mb-16" href="#payment">Get Instant Access Now</a>
        </div>
    </div>

    <div class="bg-5 container-lg">
        <div class="flex flex-col items-center justify-center text-center px-5 md:px-0">
            <h1 class="poppins-bold font-2-5rem mt-16 text-[#FFFFFF] leading-tight tracking-wider w-[100%] md:w-[70%]">
                Do You Find It Difficult To Find Delicious And Easy-To-Follow Recipes That Cater To Your Specific Health Needs?
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 grid-rows-1 gap-8 md:gap-12 my-8 md:my-12 mx-3 md:mx-8 lg:mx-16 w-full md:w-[90%]">
                <div class="bg-[#FFFFFF] rounded-lg px-8 md:px-8 py-16 text-start text-[#121212]">
                    <i class="fas fa-brain fa-2x text-[#1678F2]"></i>
                    <h3 class="satoshi font-bold font-1-2rem my-4 pb-4 border-b-4 border-[#1678F2] ">
                        Feeling Restricted and Uninspired by Bland Diets
                    </h3>
                    <p class="satoshi font-1rem text-justify text-[#696969] capitalize">
                        Many people with specific health conditions feel restricted by bland and unappetizing diets. They crave delicious and satisfying meals that don't compromise their health goals. Your e-recipe book offers a solution with a variety of flavorful and healthy recipes designed for their specific needs.
                    </p>
                </div>
                <div class="bg-[#FFFFFF] rounded-lg px-8 md:px-8 py-16 text-start text-[#121212]">
                    <i class="fab fa-nutritionix fa-2x text-[#1678F2]"></i>
                    <h3 class="satoshi font-bold font-1-2rem my-4 pb-4 border-b-4 border-[#1678F2] ">
                        Juggling Busy Lives with Confusing Nutritional Information
                    </h3>
                    <p class="satoshi font-1rem text-justify text-[#696969] capitalize">
                        People with busy lives often struggle to find the time or energy to cook healthy meals. Additionally, deciphering conflicting nutritional information can be overwhelming. Your e-recipe book provides clear guidance with easy-to-follow recipes that fit into their busy schedules and cater to their specific health conditions.
                    </p>
                </div>
                <div class="bg-[#FFFFFF] rounded-lg px-8 md:px-8 py-16 text-start text-[#121212]">
                    <i class="fas fa-hamburger fa-2x text-[#1678F2]"></i>
                    <h3 class="satoshi font-bold font-1-2rem my-4 pb-4 border-b-4 border-[#1678F2] ">
                        Feeling Lost and Uncertain About Managing Health Through Food
                    </h3>
                    <p class="satoshi font-1rem text-justify text-[#696969] capitalize">
                        Many people with specific health conditions feel unsure about which foods can help manage their symptoms. Your e-recipe book offers a solution by providing scientifically-backed recipes developed by experts (mention nutritionists or chefs if applicable). These recipes empower individuals to take control of their health through informed dietary choices.
                    </p>
                </div>
            </div>

            <div class="flex flex-col md:flex-row items-center justify-center gap-8 md:gap-12 w-full md:w-3/5 mb-16">
                <div class="bg-[#FFFFFF] rounded-lg px-8 md:px-8 py-16 text-start text-[#121212]">
                    <i class="fas fa-notes-medical fa-2x text-[#1678F2]"></i>
                    <h3 class="satoshi font-bold font-1-2rem my-4 pb-4 border-b-4 border-[#1678F2] ">
                        Lack of Variety and Feeling Discouraged by Limited Recipe Options
                    </h3>
                    <p class="satoshi font-1rem text-justify text-[#696969] capitalize">
                        People with specific health conditions often get discouraged by the limited recipe options available for their needs. Your e-recipe book provides a breath of fresh air with a wide variety of over 10+ delicious and healthy recipes, ensuring they can maintain a balanced and enjoyable diet.
                    </p>
                </div>
                <div class="bg-[#FFFFFF] rounded-lg px-8 md:px-8 py-16 text-start text-[#121212]">
                    <i class="fas fa-walking fa-2x text-[#1678F2]"></i>
                    <h3 class="satoshi font-bold font-1-2rem my-4 pb-4 border-b-4 border-[#1678F2] ">
                        Feeling Isolated and Alone in Their Health Journey
                    </h3>
                    <p class="satoshi font-1rem text-justify text-[#696969] capitalize">
                        People with specific health conditions can sometimes feel isolated in their struggles. Your landing page can address this by highlighting a supportive community aspect (e.g., forums, testimonials) alongside your e-recipe book. This fosters a sense of connection and empowers them to feel less alone.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-2 container-lg">
        <div class="flex flex-col items-center justify-center text-center py-16 px-5 md:px-0">
            <h3 class="satoshi font-1-5rem">
                Introducing...
            </h3>
            <h1 class="poppins-bold font-3-5rem tracking-widest text-[#1678F2]">
                FitMeal
            </h1>
            <p class="satoshi font-1-5rem italic mt-8 md:mt-12">
                Nourish Your Body, Heal Your Mind: Take Control of Your Health with Every Bite
            </p>

            <img class="my-12 w-[100%] md:w-[60%]" src="img/Mockup.png" alt="">

            <p class="satoshi font-1-2rem w-full md:w-[60%] capitalize">
                Your journey to a healthier you starts with one simple step: embracing the power of food. Our e-recipe book, empowers you to take control of your health, providing you with delicious, easy-to-follow recipes that promote well-being without compromising taste.
            </p>

            <p class="poppins-bold font-3rem mt-12">
                Come With Reseller Right
            </p>

            <img class="my-5 w-[100%] md:w-[50%] rounded-lg" src="img/sertif.png" alt="">

            <p class="satoshi font-2rem w-full md:w-[70%] my-8 leading-tight">
                Unlock Unlimited Potential with Our Exclusive Reseller Right Digital Product Spookids for Resellers!
            </p>

            <p class="satoshi font-1-2rem w-full md:w-[70%]">
                Are You Ready To Revolutionize Your Reselling Business And Amplify Your Profits? Introducing Our Premium Digital Product Spookids - The Ultimate Solution Designed Exclusively For Resellers Like You, Now Available With a Flexible Reseller License!
            </p>

            <a id="cta" class="mt-16 bg-card rounded-lg py-5 px-20 satoshi text-[#FFFFFF] font-1-5rem font-bold" href="#payment">Get Instant Access Now</a>

        </div>
    </div>

    <div class="bg-1 container-lg">
        <div class="flex flex-col items-center justify-center text-center pt-8 md:pt-16 px-5 md:px-0">
            <h1 class="poppins-bold font-2-5rem text-[#FFFFFF] w-full md:w-[80%] mb-8 md:mb-16 pt-8 mb:pt-0 capitalize leading-tight tracking-wider">
                Embark on a culinary journey to wellness with our extensive collection of over 150+ recipes tailored to your specific health needs.
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 grid-rows-2 gap-8 mt-8 mx-3 md:mx-8 lg:mx-16 w-full md:w-[70%]">
                <div class="bg-4 rounded-lg px-8 md:px-12 py-16 text-start text-[#121212] drop-shadow-2xl">
                    <h3 class="satoshi font-bold font-1-2rem mb-4 pb-4 border-b-4 border-[#1678F2] ">
                        An Extensive Culinary Library for Targeted Wellness
                    </h3>
                    <p class="satoshi font-1rem text-justify text-[#696969] capitalize">
                        Our comprehensive e-recipe book, "E-Recipe", provides an extensive culinary library tailored to address a wide range of health conditions. With over 150+ carefully curated recipes, you'll find the perfect dishes to support your specific needs, whether it's managing diabetes, heart health, or digestive issues.
                    </p>
                </div>
                <div class="bg-4 rounded-lg px-8 md:px-12 py-16 text-start text-[#121212] drop-shadow-2xl">
                    <h3 class="satoshi font-bold font-1-2rem mb-4 pb-4 border-b-4 border-[#1678F2] ">
                        Easy-to-Follow Instructions for Effortless Cooking
                    </h3>
                    <p class="satoshi font-1rem text-justify text-[#696969] capitalize">
                        Say goodbye to complex cooking manuals and confusing instructions. Our e-recipe book features clear, easy-to-follow recipes that anyone can master, regardless of their culinary experience. With step-by-step guidance, helpful tips, and vibrant images, you can effortlessly create delicious and nutritious meals in no time.
                    </p>
                </div>
                <div class="bg-4 rounded-lg px-8 md:px-12 py-16 text-start text-[#121212] drop-shadow-2xl">
                    <h3 class="satoshi font-bold font-1-2rem mb-4 pb-4 border-b-4 border-[#1678F2] ">
                        Recipe Sharing and Community Engagement
                    </h3>
                    <p class="satoshi font-1rem text-justify text-[#696969] capitalize">
                        Share your culinary creations and connect with like-minded individuals in our vibrant online community. Share your favorite recipes, exchange tips, and find inspiration from others who are passionate about healthy eating. Our platform fosters a supportive environment where you can learn, grow, and achieve your wellness goals together.
                    </p>
                </div>
                <div class="bg-4 rounded-lg px-8 md:px-12 py-16 text-start text-[#121212] drop-shadow-2xl">
                    <h3 class="satoshi font-bold font-1-2rem mb-4 pb-4 border-b-4 border-[#1678F2] ">
                        Targeted Culinary Solutions for a Range of Health Concerns
                    </h3>
                    <p class="satoshi font-1rem text-justify text-[#696969] capitalize">
                        Our comprehensive e-recipe book,”E-Recipe" provides a culinary haven for individuals managing various health conditions. With over 150+ carefully curated recipes, you'll discover delectable dishes designed to support your specific needs, whether it's managing diabetes, heart health, or digestive issues.
                    </p>
                </div>
            </div>
        </div>

        <div class="w-full relative my-8 md:my-16">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#F3F3FD" fill-opacity="1" d="M0,32L80,74.7C160,117,320,203,480,234.7C640,267,800,245,960,208C1120,171,1280,117,1360,90.7L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" transform="rotate(180)">
                <path fill="#F3F3FD" fill-opacity="1" d="M0,32L80,74.7C160,117,320,203,480,234.7C640,267,800,245,960,208C1120,171,1280,117,1360,90.7L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
            </svg>

            <div class="flex justify-center items-center">
                <div class="grid grid-cols-5 md:grid-cols-4 lg:grid-cols-5 grid-rows-1 gap-3 md:gap-5 w-[90%] md:w-[80%] mx-5 z-index">
                    <img class="w-full" src="img/cover1.png" alt="">
                    <img class="w-full" src="img/cover2.png" alt="">
                    <img class="w-full" src="img/cover3.png" alt="">
                    <img class="w-full" src="img/cover4.png" alt="">
                    <img class="w-full" src="img/cover5.png" alt="">
                    <img class="w-full" src="img/cover6.png" alt="">
                    <img class="w-full" src="img/cover7.png" alt="">
                    <img class="w-full" src="img/cover8.png" alt="">
                    <img class="w-full" src="img/cover9.png" alt="">
                    <img class="w-full" src="img/cover10.png" alt="">
                </div>
            </div>
        </div>

        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" transform="rotate(180)">
            <path fill="#F3F3FD" fill-opacity="1" d="M0,96L48,133.3C96,171,192,245,288,240C384,235,480,149,576,149.3C672,149,768,235,864,261.3C960,288,1056,256,1152,202.7C1248,149,1344,75,1392,37.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg> -->

        <div class="bg-transparent container-lg">
            <div class="flex flex-col items-center justify-center text-center pb-8 md:pb-16 px-3 md:px-0">
                <div class="flex flex-col justify-center items-center">
                    <h3 class="bg-[#FFFFFF] text-[#121212] rounded-full py-2 satoshi font-bold font-1-2rem w-full md:w-[30%]">
                        SEE WHAT'S FitMeal INSIDE
                    </h3>

                    <h1 class="poppins-bold font-2-5rem leading-tight mt-8 md:mt-16 text-[#FFFFFF] capitalize tracking-wider w-full md:w-[90%]">
                        Every Delicious & Healthy Recipe Awaits! Unlike other recipe collections, ours offers 150+ exclusive, chef-crafted creations designed to empower your wellness journey
                    </h1>

                    <a href="#produk" class="w-[10%] md:w-[3%] mt-5 md:mt-12">
                        <img src="img/arrow.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="produk" class="bg-[#FFFFFF] container-lg relative">
        <div class="flex flex-col justify-center items-center">
            <?php include 'produk.php'; ?>
            <?php foreach ($products as $product) : ?>
                <div class="bg-1 w-full flex flex-row items-center">
                    <img class="w-[20%] md:w-[10%] mx-5 md:mx-16" src="img/logo.png" alt="Logo">
                    <div class="bg-[#F3F3FD] py-3 md:py-8 w-full flex justify-center" style="clip-path: polygon(5% 0, 100% 0, 100% 100%, 0 100%);">
                        <h1 class="poppins-bold font-2rem"><?php echo $product['title']; ?></h1>
                    </div>
                </div>

                <img class="" src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>">

                <div class="h-[18rem] max-[1392px]:h-[20rem] max-[1253px]:h-[20rem] max-[992px]:h-[18rem] max-[870px]:h-[20rem] max-[768px]:h-[16rem] max-[680px]:h-[19rem] max-[610px]:h-[20rem] max-[576px]:h-[18rem] max-[530px]:h-[19rem] max-[480px]:h-[25rem] max-[428px]:h-[22rem] max-[380px]:h-[20rem] w-full relative">
                    <div class="flex flex-col justify-center items-center w-full absolute z-10 top-[-25%]">
                        <div class="bg-gradient-to-r from-[#3A8EF6] to-[#6F3AFA] border-[#FFDE59] border-t-[4px] border-r-[4px] rounded-[20px] w-[70%] max-[1090px]:w-[80%] max-[768px]:w-[90%] p-5 drop-shadow-[3px_3px_7px_rgba(0,0,0,0.6)] satoshi">
                            <p class="text-white text-center max-[768px]:text-[0.9rem] max-[480px]:text-[0.8rem] capitalize">
                                <?php echo $product['desc']; ?>
                            </p>
                        </div>
                        <div class="flex max-[768px]:flex-wrap justify-evenly items-center gap-2 mt-6 w-[70%] max-[1090px]:w-[80%] max-[768px]:w-[90%] satoshi">
                            <div class="flex justify-center items-center gap-2">
                                <img class="w-[2rem] max-[992px]:w-[1.75rem] max-[860px]:w-[1.5rem] max-[480px]:w-[1.25rem]" src="img/list.png" alt="">
                                <p class="font-semibold max-[992px]:text-[0.9rem] max-[800px]:text-[0.8rem]">E-Recipe Books</p>
                            </div>
                            <div class="flex justify-center items-center gap-2">
                                <img class="w-[2rem] max-[992px]:w-[1.75rem] max-[860px]:w-[1.5rem] max-[480px]:w-[1.25rem]" src="img/list.png" alt="">
                                <p class="font-semibold max-[992px]:text-[0.9rem] max-[800px]:text-[0.8rem]">25 Delicious Recipes</p>
                            </div>
                            <div class="flex justify-center items-center gap-2">
                                <img class="w-[2rem] max-[992px]:w-[1.75rem] max-[860px]:w-[1.5rem] max-[480px]:w-[1.25rem]" src="img/list.png" alt="">
                                <p class="font-semibold max-[992px]:text-[0.9rem] max-[800px]:text-[0.8rem]"><?php echo $product['page']; ?> Pages</p>
                            </div>
                            <div class="flex justify-center items-center gap-2">
                                <img class="w-[2rem] max-[992px]:w-[1.75rem] max-[860px]:w-[1.5rem] max-[480px]:w-[1.25rem]" src="img/list.png" alt="">
                                <p class="font-semibold max-[992px]:text-[0.9rem] max-[800px]:text-[0.8rem]">25 Recipes</p>
                            </div>
                            <div class="flex justify-center items-center gap-2">
                                <img class="w-[2rem] max-[992px]:w-[1.75rem] max-[860px]:w-[1.5rem] max-[480px]:w-[1.25rem]" src="img/list.png" alt="">
                                <p class="font-semibold max-[992px]:text-[0.9rem] max-[800px]:text-[0.8rem]">Editable</p>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>

    <div class="bg-1 container-lg">
        <div class="flex flex-col items-center justify-center text-center py-16 px-5 md:px-0">
            <h1 class="poppins-bold capitalize font-2-5rem text-[#FFFFFF] w-full md:w-[80%] mb-0 md:mb-12 tracking-wider leading-tight">
                Unlock a world of delicious recipes designed to support your unique health goals
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 grid-rows-1 gap-8 my-12 mx-3 md:mx-8 lg:mx-16">
                <div class="p-5 md:p-8 text-center text-[#FFFFFF] flex flex-col items-center border-gradient-2">
                    <img class="w-[60%] md:w-[70%] mb-8" src="img/Healthy habit-bro.png" alt="">
                    <p class="satoshi font-1-2rem font-semibold">
                        Health-Conscious Individuals
                    </p>
                </div>
                <div class="p-5 md:p-8 text-center text-[#FFFFFF] flex flex-col items-center border-gradient-2">
                    <img class="w-[60%] md:w-[70%] mb-8" src="img/Medical care-bro.png" alt="">
                    <p class="satoshi font-1-2rem font-semibold">
                        Individuals with Specific Health Conditions
                    </p>
                </div>
                <div class="p-5 md:p-8 text-center text-[#FFFFFF] flex flex-col items-center border-gradient-2">
                    <img class="w-[60%] md:w-[70%] mb-8" src="img/Medical prescription-bro.png" alt="">
                    <p class="satoshi font-1-2rem font-semibold">
                        Individuals Seeking Personalized Guidance
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-3 container-lg">
        <div class="flex flex-col items-center justify-center text-center py-16 px-5 md:px-0">
            <h1 class="poppins-bold font-2-5rem text-[#121212] capitalize w-full md:w-[85%] tracking-wider leading-tight">
                Discover a world of culinary possibilities and support your health goals with our thoughtfully e-recipe book, designed to empower you on your wellness journey
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 grid-rows-4 gap-8 my-16 text-[#121212] w-[100%] md:w-[60%]">
                <div class="bg-[#FFFFFF] border-gradient-3 rounded-lg shadow-lg px-3 md:px-6 lg:px-8 py-8 w-full">
                    <div class="flex flex-col md:flex-row justify-center items-center">
                        <img src="img/Recipe book-bro.png" alt="" class="w-[155px] md:w-[200px] mb-5 md:mb-0">
                        <div class="flex flex-col justify-center text-center md:text-start ms-0 md:ms-8">
                            <h1 class="satoshi font-bold font-1-5rem mb-5 text-[#1678F2]">
                                Targeted Wellness Solutions
                            </h1>
                            <h3 class="satoshi font-medium font-1rem capitalize">
                                Our extensive recipe collection caters to a wide range of health conditions, from managing diabetes and heart health to addressing digestive issues and supporting weight management.
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="bg-[#FFFFFF] border-gradient-3 rounded-lg shadow-lg px-3 md:px-6 lg:px-8 py-8 w-full">
                    <div class="flex flex-col md:flex-row justify-center items-center">
                        <div class="flex flex-col justify-center text-center md:text-start ms-0 md:me-8">
                            <h1 class="satoshi font-bold font-1-5rem mb-5 text-[#1678F2]">
                                Structured Wellness with Customizable Meal Plans
                            </h1>
                            <h3 class="satoshi font-medium font-1rem capitalize">
                                Create personalized meal plans that fit your lifestyle and health goals, ensuring a balanced and nutritious approach to daily meals.
                            </h3>
                        </div>
                        <img src="img/breakfast food-bro.png" alt="" class="w-[155px] md:w-[200px] mb-5 md:mb-0 order-first md:order-last">
                    </div>
                </div>
                <div class="bg-[#FFFFFF] border-gradient-3 rounded-lg shadow-lg px-3 md:px-6 lg:px-8 py-8 w-full">
                    <div class="flex flex-col md:flex-row justify-center items-center">
                        <img src="img/female chef-bro.png" alt="" class="w-[155px] md:w-[200px] mb-5 md:mb-0">
                        <div class="flex flex-col justify-center text-center md:text-start ms-0 md:ms-8">
                            <h1 class="satoshi font-bold font-1-5rem mb-5 text-[#1678F2]">
                                Discover the Joy of Cooking and Eating Healthy
                            </h1>
                            <h3 class="satoshi font-medium font-1rem capitalize">
                                Our recipes are designed to make healthy cooking enjoyable and accessible, transforming mealtimes into a culinary adventure.
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="bg-[#FFFFFF] border-gradient-3 rounded-lg shadow-lg px-3 md:px-6 lg:px-8 py-8 w-full">
                    <div class="flex flex-col md:flex-row justify-center items-center">
                        <div class="flex flex-col justify-center text-center md:text-start ms-0 md:me-8">
                            <h1 class="satoshi font-bold font-1-5rem mb-5 text-[#1678F2]">
                                Embrace a Healthier Lifestyle Without Sacrificing Taste
                            </h1>
                            <h3 class="satoshi font-medium font-1rem capitalize">
                                Indulge in delicious flavors while making conscious choices that support your health goals.
                            </h3>
                        </div>
                        <img src="img/Healthy lifestyle-bro.png" alt="" class="w-[155px] md:w-[200px] mb-5 md:mb-0 order-first md:order-last">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container-lg bg-[#F3F3FD] border-gradient-1">
        <div class="flex flex-col items-center justify-center px-3 md:px-0 py-8 md:py-16">
            <h1 class="poppins-bold text-[#121212] text-center font-2-5rem w-full md:w-[80%] leading-tight tracking-wider">
                Grant Your Launch Discount for <span class="text-[#1678F2]">"FitMeal"</span> Today! <br> For One Time Investment Only!
            </h1>

            <p class="satoshi text-center font-semibold font-2rem text-[#1678F2] mt-8 md:mt-12 leading-tight">
                And Start Making Money by <br>Getting The Reseller Right
            </p>

            <p class="satoshi text-center font-semibold font-2rem text-[#121212] my-8 md:my-12">
                Your Early Bird Discount Valid for the Next
            </p>

            <!-- <div class="countdown flex justify-center items-start gap-4 text-[#1678F2] poppins-bold">
                <div class="flex flex-col justify-center items-center leading-tight">
                    <div class="days text-[4rem] font-medium"></div>
                    <p class="text-[1.5rem] text-[#121212]">Days</p>
                </div>
                <div class="text-[4rem] font-medium">:</div>
                <div class="flex flex-col justify-center items-center leading-tight">
                    <div class="hours text-[4rem] font-medium"></div>
                    <p class="text-[1.5rem] text-[#121212]">Hours</p>
                </div>
                <div class=" text-[4rem] font-medium">:</div>
                <div class="flex flex-col justify-center items-center leading-tight">
                    <div class="minutes text-[4rem] font-medium"></div>
                    <p class="text-[1.5rem] text-[#121212]">Minutes</p>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center relative text-white my-8 poppins-bold">
                <div class="flex justify-center items-center">
                    <div class="text-center flex justify-center items-center w-80 hidden md:flex">
                        <h3 class="text-[6rem] leading-[9rem] text-[#121212]">DO <br> N'T</h3>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="">
                            <div class="h-[110px] w-[250px] bg-[#1678F2] drop-shadow-[0_4px_3px_rgba(0,0,0,0.5)] rounded-t-lg"></div>
                            <div class="h-[110px] w-[250px] bg-gradient-to-tl from-[#6F3AFA] to-[#1678F2] rounded-b-lg"></div>
                        </div>
                    </div>
                    <div class="text-center flex justify-center items-center text-[9rem] text-[#FFFFFF] absolute left-[15px] md:left-[340px]">
                        <div class="seconds-puluhan"></div>
                    </div>
                    <div class="text-center flex justify-center items-center text-[9rem] text-[#FFFFFF] absolute right-[15px] md:right-[340px]">
                        <div class="seconds-satuan"></div>
                        <div class="milli-seconds text-[2rem] ms-2" style="width: 20px;"></div>
                    </div>
                    <div class="text-center flex justify-center items-center w-80 hidden md:flex">
                        <h3 class="text-[6rem] leading-[9rem] text-[#121212]">MISS <br> IT!</h3>
                    </div>
                </div>
                <div class="text-center flex justify-center items-center text-[2rem] text-[#121212] absolute top-[256px] left-[335px] tracking-[1rem] hidden md:flex mt-8">
                    <p>SECONDS</p>
                </div>
            </div> -->
            <div class="flex flex-wrap items-start justify-center w-full gap-4 count-down-main">
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
                <div class="timer w-20 sm:w-40">
                    <div class="bg-1 py-2 px-2 rounded-lg overflow-hidden flex flex-row items-center justify-center">
                        <h3 class="countdown-element seconds satoshi font-semibold text-[2rem] sm:text-[4rem] text-white text-center animate-countinsecond"></h3>
                        <h3 class="satoshi font-semibold text-[2rem] sm:text-[4rem] text-white">.</h3>
                        <h3 class="countdown-element milli-seconds satoshi font-semibold text-[2rem] sm:text-[4rem] text-white text-center animate-countinsecond w-[40px]"></h3>
                    </div>
                    <p class="text-sm sm:text-lg satoshi font-bold text-[#121212] mt-1 text-center w-full">Seconds</p>
                </div>
            </div>

            <a id="cta" class="bg-card rounded-lg py-5 px-20 satoshi text-[#FFFFFF] font-1-5rem font-bold mt-8 md:mt-16" href="#payment">Get Instant Access Now</a>

        </div>
    </div>

    <div class="bg-1 container-lg">
        <div class="flex flex-col items-center justify-center text-center py-16 px-5 md:px-0">
            <h1 class="poppins-bold font-2-5rem text-[#FFFFFF] w-full md:w-[60%] leading-tight tracking-wider">
                You Are Able to Get <span class="text-[#FFFFFF]">Reseller Rights</span> To Make BIG Money... FASTER... EASIER!!
            </h1>

            <div class="border-0 bg-[#FFFFFF] drop-shadow-lg rounded-2xl px-4 md:px-6 lg:px-8 py-8 mt-16 w-full md:w-[70%] flex flex-col md:flex-row items-center justify-center">
                <div class="flex items-center justify-center mb-8 md:mb-0">
                    <img src="img/coin.png" alt="" class="w-[70%] md:w-[900px]">
                </div>
                <div class="flex flex-col justify-center text-justify mx-3 md:mx-6">
                    <h3 class="satoshi font-semibold font-1-2rem text-[#121212]">
                        We Are Offering You A Mind-Blowing And Extremely Profiting Opportunity To Get
                        <span class="text-[#1678F2]">
                            Reseller Right
                        </span>
                        To A Stunning Product That Sells Super Quickly And Enable You To Experience Profits Without Any Hard.
                        <br><br>
                        Top Marketers Know That People Are Running Their Dream Business Online By Selling Their Own Products And Totally Killing It.
                        <br><br>
                        You Also Can Start Your Own Digital Business
                        <span class="text-[#1678F2]">
                            TODAY… FASTER… EASIER…
                        </span>
                        By Getting Your Hands On This
                        <span class="text-[#1678F2]">
                            Complete Package!!
                        </span>
                    </h3>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-[#F3F3FD] container-lg">
        <div class="flex flex-col items-center justify-center text-center py-12 px-8 md:px-12">
            <h1 class="poppins-bold font-2-5rem text-[#121212] w-full md:w-[80%] leading-tight tracking-wider">
                This Money-Making Opportunity Will Sky-Rocket Your Profits In Just 4 Easy Steps…
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 grid-rows-1 gap-5 my-16 text-center">
                <div class="bg-1 rounded-2xl flex flex-col justify-center items-center px-4 md:px-4 lg:px-5 py-8 md:py-8">
                    <h1 class="text-[#FFFFFF] poppins-bold px-3 md:px-4 lg:px-5 w-full font-1-5rem tracking-wider">
                        STEP #1 :
                    </h1>
                    <div class="flex items-center justify-center my-3">
                        <img class="w-[60%] md:w-[60%]" src="img/Download-amico.png" alt="">
                    </div>
                    <h3 class="satoshi font-1-2rem mt-3 text-[#FFFFFF]">
                        Download our Ready-to-Sell Market Product
                    </h3>
                </div>
                <div class="bg-1 rounded-2xl flex flex-col justify-center items-center px-4 md:px-4 lg:px-5 py-8 md:py-8">
                    <h1 class="text-[#FFFFFF] poppins-bold px-3 md:px-4 lg:px-5 w-full font-1-5rem tracking-wider">
                        STEP #2 :
                    </h1>
                    <div class="flex items-center justify-center my-3">
                        <img class="w-[60%] md:w-[60%]" src="img/Notebook-cuate.png" alt="">
                    </div>
                    <h3 class="satoshi font-1-2rem mt-3 text-[#FFFFFF]">
                        Put Your Name on it
                    </h3>
                </div>
                <div class="bg-1 rounded-2xl flex flex-col justify-center items-center px-4 md:px-4 lg:px-5 py-8 md:py-8">
                    <h1 class="text-[#FFFFFF] poppins-bold px-3 md:px-4 lg:px-5 w-full font-1-5rem tracking-wider">
                        STEP #3 :
                    </h1>
                    <div class="flex items-center justify-center my-3">
                        <img class="w-[60%] md:w-[60%]" src="img/Upload-amico.png" alt="">
                    </div>
                    <h3 class="satoshi font-1-2rem mt-3 text-[#FFFFFF]">
                        Upload it to Your Server
                    </h3>
                </div>
                <div class="bg-1 rounded-2xl flex flex-col justify-center items-center px-4 md:px-4 lg:px-5 py-8 md:py-8">
                    <h1 class="text-[#FFFFFF] poppins-bold px-3 md:px-4 lg:px-5 w-full font-1-5rem tracking-wider">
                        STEP #4 :
                    </h1>
                    <div class="flex items-center justify-center my-3">
                        <img class="w-[60%] md:w-[60%]" src="img/Marketing-amico.png" alt="">
                    </div>
                    <h3 class="satoshi font-1-2rem mt-3 text-[#FFFFFF]">
                        Instantly Make Sales and Keep Entire Profits With for Yourself!!!
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container-lg bg-1">
        <div class="flex flex-col items-center justify-center text-[#FFFFFF] text-center py-16 px-5 md:px-16">
            <h1 class="poppins-bold font-2-5rem w-full tracking-wider">
                How To Make Money With This
                Advance Licensed Product…
            </h1>
            <h3 class="satoshi font-1-5rem mt-5 w-full md:w-[70%]">
                The Package Holds Limitless Potential !! - Use It With Complete Confidence To Gain Insane Profits For Your Own
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 grid-rows-2 gap-5 my-8 md:my-16 text-[#121212]">
                <div class="border-0 bg-[#FFFFFF] drop-shadow-lg rounded-2xl px-4 md:px-4 lg:px-5 py-8">
                    <div class="flex items-center justify-center">
                        <img src="img/jvzoo.png" alt="">
                    </div>
                    <h3 class="satoshi font-1rem mt-5 capitalize">
                        Sell them on JVZoo.com marketplace for discounted price, and let's global affiliates promote them for you
                    </h3>
                </div>
                <div class="border-0 bg-[#FFFFFF] drop-shadow-lg rounded-2xl px-4 md:px-4 lg:px-5 py-8">
                    <div class="flex items-center justify-center">
                        <img src="img/warrior.png" alt="">
                    </div>
                    <h3 class="satoshi font-1rem mt-5 capitalize">
                        Sell them on WarriorPlus.com marketplace for discounted price, and let's global affiliates promote them for you
                    </h3>
                </div>
                <div class="border-0 bg-[#FFFFFF] drop-shadow-lg rounded-2xl px-4 md:px-4 lg:px-5 py-8">
                    <div class="flex items-center justify-center">
                        <img src="img/clickbank.png" alt="">
                    </div>
                    <h3 class="satoshi font-1rem mt-5 capitalize">
                        Make them evergreen by Selling them on ClickBank. And let's global affiliates promote them for you
                    </h3>
                </div>
                <div class="border-0 bg-[#FFFFFF] drop-shadow-lg rounded-2xl px-4 md:px-4 lg:px-5 py-8">
                    <div class="flex items-center justify-center">
                        <img src="img/creativemarket.png" alt="">
                    </div>
                    <h3 class="satoshi font-1rem mt-5 capitalize">
                        Make them evergreen by Selling them on Creative Market. And let's global affiliates promote them for you
                    </h3>
                </div>
                <div class="border-0 bg-[#FFFFFF] drop-shadow-lg rounded-2xl px-4 md:px-4 lg:px-5 py-8">
                    <div class="flex items-center justify-center">
                        <img src="img/etsy.png" alt="">
                    </div>
                    <h3 class="satoshi font-1rem mt-5 capitalize">
                        Sell them on etsy.com marketplace for selling digital products offers a low-cost, efficient, and scalable way to reach a global audience and generate passive income.
                    </h3>
                </div>
                <div class="border-0 bg-[#FFFFFF] drop-shadow-lg rounded-2xl px-4 md:px-4 lg:px-5 py-8">
                    <div class="flex items-center justify-center">
                        <img src="img/digitalstore.png" alt="">
                    </div>
                    <h3 class="satoshi font-1rem mt-5 capitalize">
                        Selling digital products on a digital store is a fantastic way to turn your expertise or creativity into a profitable business with a ton of freedom and flexibility.
                    </h3>
                </div>
                <div class="border-0 bg-[#FFFFFF] drop-shadow-lg rounded-2xl px-4 md:px-4 lg:px-5 py-8">
                    <div class="flex items-center justify-center">
                        <img src="img/wordpress.png" alt="">
                    </div>
                    <h3 class="satoshi font-1rem mt-5 capitalize">
                        Selling digital products on WordPress or Blogger offers a compelling combination of affordability, ease of use, and powerful marketing potential.
                    </h3>
                </div>
                <div class="border-0 bg-[#FFFFFF] drop-shadow-lg rounded-2xl px-4 md:px-4 lg:px-5 py-8">
                    <div class="flex items-center justify-center">
                        <img src="img/optin.png" alt="">
                    </div>
                    <h3 class="satoshi font-1rem mt-5 capitalize">
                        Opt-ins are a powerful tool to build a loyal audience for your digital products. By nurturing leads and providing valuable content, you create a win-win situation.
                    </h3>
                </div>
            </div>
            <h1 class="satoshi font-bold font-1-5rem">
                And A Lot More..!! <br>
                So Many Possibility And Place You Can Use To Make Money With This Product
            </h1>
        </div>
    </div>

    <div id="payment" class="container-lg bg-[#F3F3FD]">
        <div class="flex flex-col items-center justify-center text-[#F3E9D3] text-center py-16 px-5 md:px-0">
            <h1 class="poppins-bold text-[#121212] text-center font-2-5rem w-full md:w-[70%] leading-tight tracking-wider mb-12">
                Don't Wait Any Longer... <br>
                Grab Full Access To <span class="text-[#1678F2]">FitMeal</span> Now ! <br> With <span class="text-[#1678F2]">50% Discount</span>
            </h1>

            <img class="p-5 w-[100%] md:w-[90%]" src="img/Mockup-2.png" alt="">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 grid-rows-1 gap-8 w-full md:w-[70%] my-16">
                <div class="border-0 bg-[#FFFFFF] drop-shadow-2xl rounded-2xl px-4 md:px-6 lg:px-8 py-5 capitalize">
                    <h1 class="bg-card rounded-2xl poppins-semibold tracking-wider text-[#FFFFFF] font-2rem my-3 py-3">
                        Personal License
                    </h1>
                    <div class="flex flex-row items-center satoshi font-1rem mt-8 text-[#121212]">
                        <i class="fas fa-check-circle me-5 text-[#1678F2]"></i>
                        <h3 class="text-start">
                            You can use the product in your own Personal projects and projects you create for clients.
                        </h3>
                    </div>
                    <div class="flex flex-row items-center montserrat-medium font-1rem mt-3 text-[#121212]">
                        <i class="fas fa-check-circle me-5 text-[#1678F2]"></i>
                        <h3 class="text-start">
                            You can charge your clients money for the projects you create for them using the assets in this product.
                        </h3>
                    </div>
                    <h1 class="border-gradient-3 satoshi font-bold text-[#1678F2] font-2rem my-8 py-3">
                        Normal Price <span class="line-through">$37</span>
                    </h1>
                    <h2 class="satoshi font-1-2rem text-center text-[#312E35]">
                        Get The LOWEST Price Today <br>
                        with <span class="text-[#1678F2] font-bold">50% Discount!</span>
                    </h2>
                    <div class="flex flex-row items-center justify-between satoshi text-[#121212] my-8">
                        <h3 class="line-through font-1-2rem">
                            Regular Price: $27
                        </h3>
                        <h3 class="satoshi font-bold text-[#FF0404] font-2rem">
                            Today: $19
                        </h3>
                    </div>
                    <div class="flex flex-col items-center mt-5">
                        <button type="button" class="text-white w-full bg-slate-600 hover:bg-bg-yellow-600 montserrat-bold font-1-5rem rounded-2xl py-5 dark:hover:bg-[#FF9119]/80 dark:focus:ring-[#FF9119]/40 mb-5">
                            <i class="fas fa-cart-arrow-down me-5"></i>
                            Buy Now
                        </button>
                        <img class="w-[80%] md:w-[90%]" src="img/guarantee.png" alt="">
                    </div>
                </div>
                <div class="border-0 bg-[#FFFFFF] drop-shadow-2xl rounded-2xl px-4 md:px-6 lg:px-8 py-5 capitalize">
                    <h1 class="bg-[#7C5A90] rounded-2xl poppins-semibold tracking-wider text-[#FFFFFF] font-2rem my-3 py-3">
                        Reseller Right License
                    </h1>
                    <div class="flex flex-row items-center satoshi font-1rem mt-8 text-[#312E35]">
                        <i class="fas fa-check-circle me-5 text-[#1678F2]"></i>
                        <h3 class="text-start">
                            With this license you can sell this product as your own, under your name, your order buttons, etc...
                        </h3>
                    </div>
                    <div class="flex flex-row items-center satoshi font-1rem mt-3 text-[#312E35]">
                        <i class="fas fa-check-circle me-5 text-[#1678F2]"></i>
                        <h3 class="text-start">
                            With Reseller Right license you can sell unlimited number of copies and keep all of the money.
                        </h3>
                    </div>
                    <h1 class="border-gradient-3 satoshi font-bold text-[#1678F2] font-2rem my-8 py-3">
                        Normal Price <span class="line-through">$37</span>
                    </h1>
                    <h2 class="satoshi font-1-2rem text-center text-[#312E35]">
                        Get The LOWEST Price Today <br>
                        with <span class="text-[#1678F2] font-bold">50% Discount!</span>
                    </h2>
                    <div class="flex flex-row items-center justify-between satoshi text-[#312E35] my-8">
                        <h3 class="line-through font-1-2rem">
                            Regular Price: $27
                        </h3>
                        <h3 class="satoshi font-bold text-[#FF0404] font-2rem">
                            Today: $19
                        </h3>
                    </div>
                    <div class="flex flex-col items-center mt-5">
                        <button type="button" class="text-white w-full bg-slate-600 hover:bg-bg-yellow-600 montserrat-bold font-1-5rem rounded-2xl py-5 dark:hover:bg-[#FF9119]/80 dark:focus:ring-[#FF9119]/40 mb-5">
                            <i class="fas fa-cart-arrow-down me-5"></i>
                            Buy Now
                        </button>
                        <img class="w-[80%] md:w-[90%]" src="img/guarantee.png" alt="">
                    </div>
                </div>
            </div>

            <h4 class="font-1-5rem satoshi font-bold text-[#121212]">
                You Must HURRY..!!<br>
                The <span class="text-[#1678F2]">50% Discount</span> Only Available for <span class="text-[#1678F2]">5 Days</span> During The Launch Event! <br>
                After 5 Days... Discount Will Be <span class="text-[#1678F2]">REMOVED!!</span>
            </h4>

        </div>
    </div>

    <div class="container-lg bg-1">
        <div class="flex flex-col items-center justify-center text-center py-16">
            <h1 class="poppins-bold font-3rem text-[#1678F2] text-stroke">
                F . A . Q
            </h1>
            <h2 class="poppins-bold tracking-widest font-2-5rem">
                <span class="text-[#FFFFFF]">Frequently</span>
                <span class="text-[#FFFFFF]">Asked</span>
                <span class="text-[#FFFFFF]">Questions</span>
            </h2>

            <?php
            include 'faqs.php';
            $halfCount = ceil(count($faqs) / 2);
            $firstHalf = array_slice($faqs, 0, $halfCount);
            $secondHalf = array_slice($faqs, $halfCount);
            ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 grid-rows-1 gap-5 mt-16 w-[90%] md:w-[80%]">

                <?php foreach ($firstHalf as $faq) : ?>
                    <details class="group py-1 font-1rem title-faq satoshi font-semibold capitalize">
                        <summary class="flex cursor-pointer flex-row items-center justify-between text-[#121212] bg-[#FFFFFF] rounded-t-2xl px-8 py-3">
                            <?php echo $faq["question"]; ?>
                            <svg class="h-6 w-6 rotate-0 transform text-[#121212] group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </summary>
                        <p class="rounded-b-2xl bg-[#FFFFFF] text-[#121212] p-5 font-1rem text-justify font-medium"><?php echo $faq["answer"]; ?></p>
                    </details>
                <?php endforeach; ?>

                <?php foreach ($secondHalf as $faq) : ?>
                    <details class="group py-1 font-1rem title-faq satoshi font-semibold capitalize">
                        <summary class="flex cursor-pointer flex-row items-center justify-between text-[#121212] bg-[#FFFFFF] rounded-t-2xl px-8 py-3">
                            <?php echo $faq["question"]; ?>
                            <svg class="h-6 w-6 rotate-0 transform text-[#121212] group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </summary>
                        <p class="rounded-b-2xl bg-[#FFFFFF] text-[#121212] p-5 font-1rem text-justify font-medium"><?php echo $faq["answer"]; ?></p>
                    </details>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

    <?php include('privacypolicy.php') ?>
    <script src="js/script.js"></script>
</body>

</html>