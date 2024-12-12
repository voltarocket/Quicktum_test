const paragraph = document.getElementById('paragraph');
const button1 = document.getElementById('button1');
const button2 = document.getElementById('button2');

let isButton1Clicked = false;

button1.addEventListener('click', () => {
  isButton1Clicked = true;
});

button2.addEventListener('click', () => {
  if (isButton1Clicked) {
    paragraph.style.display = (paragraph.style.display === 'none') ? 'block' : 'none';
    isButton1Clicked = false; // Сбрасываем флаг
  }
});