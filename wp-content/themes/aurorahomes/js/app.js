require('alpinejs');
import AOS from 'aos';

AOS.init();

let header = document.getElementById('header');

if (window.scrollY > header.getBoundingClientRect().height) {
  header.classList.add('bg-aurora-blue-02');
  header.classList.remove('py-16');
}

document.addEventListener('scroll', e => {
  if (window.scrollY > header.getBoundingClientRect().height) {
    header.classList.add('bg-aurora-blue-02');
    header.classList.remove('py-16');
  } else {
    header.classList.remove('bg-aurora-blue-02');
    header.classList.add('py-16');
  }
});


let header_mobile = document.getElementById('header-mobile');

if (window.scrollY > header.getBoundingClientRect().height) {
  header_mobile.classList.add('bg-aurora-blue-02');
}

document.addEventListener('scroll', e => {
  if (window.scrollY > header_mobile.getBoundingClientRect().height) {
    header_mobile.classList.add('bg-aurora-blue-02');
  } else {
    header_mobile.classList.remove('bg-aurora-blue-02');
  }
});
