const playlist = document.querySelector('.playlist ul');
const video = document.querySelector('video');

playlist.addEventListener('click', (e) => {
  e.preventDefault();
  if (e.target.tagName === 'A') {
    const source = e.target.getAttribute('href');
    video.src = source;
    video.play();
  }
});