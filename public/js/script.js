const dynamicText = document.getElementById('dynamic-text');
const cursor = document.querySelector('.cursor');
const toRotate = ["I want to explore Course Overview", "I want to explore Job Overview", "I want to explore Global Trends", "I want to improve my Soft Skills", "I want to know my Intrest in IT", "I want to be an Expert in IT field"];
const period = 2000;
let loopNum = 0;
let text = '';
let isDeleting = false;
let delta = 300 - Math.random() * 100;
console.log('hello')
function tick() {
  const i = loopNum % toRotate.length;
  const fullText = toRotate[i];
  if (isDeleting) {
    text = fullText.substring(0, text.length - 1);
  } else {
    text = fullText.substring(0, text.length + 1);
  }

  dynamicText.innerHTML = text;

  let typingSpeed = 200 - Math.random() * 100;

  if (isDeleting) {
    typingSpeed /= 2;
  }

  if (!isDeleting && text === fullText) {
    typingSpeed = period;
    isDeleting = true;
  } else if (isDeleting && text === '') {
    isDeleting = false;
    loopNum++;
    typingSpeed = 500;
  }

  setTimeout(tick, typingSpeed);
}

// Start the animation
tick();