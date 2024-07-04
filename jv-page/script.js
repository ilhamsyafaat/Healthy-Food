const targetDate = new Date('June 30, 2024 00:00:00').getTime();

function updateCountdown() {
  const now = new Date().getTime();
  const distance = targetDate - now;

  if (distance < 0) {
    clearInterval(countdown);
    document.querySelector(".countdown").innerHTML = `
    <div class="first-item count-item flex flex-col items-center justify-center bg-gradient-to-b from-white via-gray-200 to-gray-300">
      <div class="days font-extrabold text-4xl">00</div>
      <div class="font-bold">Days</div>
    </div>
    <div class="count-item flex flex-col items-center justify-center bg-gradient-to-b from-white via-gray-200 to-gray-300">
      <div class="hours font-extrabold text-4xl">00</div>
      <div class="font-bold">Hours</div>
    </div>
    <div class="count-item flex flex-col items-center justify-center bg-gradient-to-b from-white via-gray-200 to-gray-300">
      <div class="minutes font-extrabold text-4xl">00</div>
      <div class="font-bold">Minutes</div>
    </div>
    <div class="last-item count-item flex flex-col items-center justify-center bg-gradient-to-b from-white via-gray-200 to-gray-300">
      <div class="seconds font-extrabold text-4xl">00</div>
      <div class="font-bold">Seconds</div>
    </div>
    `;
    document.querySelector(".result-container").style.display = "flex";
    return;
  }

  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);
  const milliseconds = Math.floor((distance % 1000) / 100);

  const daysString = days.toString().padStart(2, '0');
  const hoursString = hours.toString().padStart(2, '0');
  const minutesString = minutes.toString().padStart(2, '0');
  const secondsString = seconds.toString().padStart(2, '0');
  const millisecondsString = milliseconds.toString();

  document.querySelector(".days").innerHTML = daysString;
  document.querySelector(".hours").innerHTML = hoursString;
  document.querySelector(".minutes").innerHTML = minutesString;
  document.querySelector(".seconds").innerHTML = secondsString;
  document.querySelector(".milli-seconds").innerHTML = millisecondsString;
}

const countdown = setInterval(updateCountdown, 100);

updateCountdown();

let lastScrollTop = 0;
    const navbar = document.getElementById('navbar');

    window.addEventListener('scroll', () => {
        let scrollTop = window.scrollY || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
            // Scrolling down
            navbar.classList.add('navbar-hidden');
        } else {
            // Scrolling up
            navbar.classList.remove('navbar-hidden');
        }
        lastScrollTop = scrollTop;
    });




// Hamburger Button
function myFunction(x) {
  x.classList.toggle("change");
  const navBurger = document.querySelector(".burger")
  navBurger.classList.toggle("show");
}

// Scroll
const smoothScrollLinks = document.querySelectorAll('.smooth-scroll');
smoothScrollLinks.forEach(link => {
    link.addEventListener('click', smoothScroll);
});
function smoothScroll(event) {
    event.preventDefault();

    const targetId = this.getAttribute('href');

    const targetElement = document.querySelector(targetId);

    targetElement.scrollIntoView({
        behavior: 'smooth'
    });
}


function openVideo(videoUrl, videoId, videoType) {
  var allVideos = document.querySelectorAll('iframe');
  allVideos.forEach(function(video) {
      if (video.getAttribute('id') !== videoType + '-video-' + videoId) {
          video.contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
      }
  });

  var video = document.getElementById(videoType + '-video-' + videoId);
  video.src = videoUrl;
  video.classList.remove('hidden');

  var playButton = document.querySelector('#play-button-' + videoType + '-' + videoId);
  if (playButton) {
      playButton.style.display = 'none';
  }
}

document.querySelectorAll('.preview-image').forEach(item => {
  item.addEventListener('click', event => {
      var productId = item.getAttribute('data-product-id');
      var videoUrl = item.getAttribute('data-preview-url');
      openVideo(videoUrl, productId, 'preview');
  });
});

document.querySelectorAll('.trailer-image').forEach(item => {
  item.addEventListener('click', event => {
      var productId = item.getAttribute('data-product-id');
      var videoUrl = item.getAttribute('data-trailer-url');
      openVideo(videoUrl, productId, 'trailer');
  });
});