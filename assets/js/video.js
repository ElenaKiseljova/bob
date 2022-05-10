const videos = document.querySelectorAll('.video');

if (videos.length > 0) {
  videos.forEach(video => {
    const videoPlayButton = video.querySelector('.video__img');
    const videoIframe = video.querySelector('iframe');
    const videoTag = video.querySelector('video');

    if (videoPlayButton) {
      if (videoIframe) {
        videoPlayButton.addEventListener('click', () => {
          const videoSrc = videoPlayButton.dataset.src;

          if (videoSrc) {
            videoIframe.src = videoSrc;

            videoPlayButton.classList.add('hide');
          }
        });
      } else if (videoTag) {
        videoPlayButton.addEventListener('click', () => {
          videoTag.play();

          videoPlayButton.classList.add('hide');
        });
      }
    }
  });
}