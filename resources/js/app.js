import PhotoSwipeLightbox from 'photoswipe/lightbox';

import 'photoswipe/style.css';
import '../css/app.css'
import './bootstrap';

function initLightbox() {
    const lightbox = new PhotoSwipeLightbox({
        gallery: '#photo-gallery',
        children: 'a',
        showHideAnimationType: 'fade',
        pswpModule: () => import('photoswipe')
    });
    lightbox.init();

    const lightboxShows = new PhotoSwipeLightbox({
        gallery: '#show-gallery',
        children: 'a.show-poster',
        showHideAnimationType: 'fade',
        pswpModule: () => import('photoswipe')
    });
    lightboxShows.init();
}

window.addEventListener('livewire:navigated', e => {
    initLightbox()
});
