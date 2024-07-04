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

const names = [
  "Alice", "Bob", "Charlie", "Diana", "Eve",
  "Frank", "Grace", "Henry", "Isabella", "Jack",
  "Katherine", "Leo", "Mia", "Nathan", "Olivia",
  "Patrick", "Quinn", "Rachel", "Samuel", "Tina",
  "Ulysses", "Victoria", "Walter", "Xavier", "Yvonne", "Zane",
  "Aaron", "Bella", "Caleb", "David", "Emily",
  "Fiona", "George", "Hannah", "Ian", "Julia",
  "Kevin", "Lily", "Michael", "Natalie", "Oscar",
  "Penelope", "Quentin", "Rebecca", "Samantha", "Theo",
  "Uma", "Vincent", "Wendy", "Xander", "Yasmine", "Zara",
  "Adam", "Benjamin", "Chloe", "Daniel", "Emma",
  "Faith", "Gabriel", "Holly", "Ivy", "Jacob",
  "Kate", "Liam", "Molly", "Noah", "Oliver",
  "Paige", "Quincy", "Rose", "Sophia", "Thomas",
  "Una", "Violet", "William", "Xena", "Yolanda", "Zack"
];

const toastContainer = document.getElementById('toast-container');
const toastTemplate = document.getElementById('toast-template');

function getRandomName() {
  return names[Math.floor(Math.random() * names.length)];
}

function randomTime() {
  const hours = Math.floor(Math.random() * 24);
  const minutes = Math.floor(Math.random() * 60);

  if (hours > 0) {
    return `${hours} Hours Ago`;
  } else {
    return `${minutes} Minutes Ago`;
  }
}

function showToast() {
  const newToast = toastTemplate.cloneNode(true);
  newToast.style.display = 'flex';
  newToast.querySelector('.toast-message').textContent = `${getRandomName()} Just Bought FitMeal ${randomTime()} !`;

  toastContainer.appendChild(newToast);

  setTimeout(() => {
    if (newToast) {
      toastContainer.removeChild(newToast);
    }
  }, 5000);
}

function closeToast(button) {
  const toast = button.parentElement;
  toastContainer.removeChild(toast);
}

setInterval(showToast, 60000);

showToast();