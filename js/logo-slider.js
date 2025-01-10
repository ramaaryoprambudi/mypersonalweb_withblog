const slider = document.querySelector('.slide-track-1');
let scrollAmount = 0;
const slideWidth = 250;
const slideCount = 6; // Jumlah slide asli (tanpa duplikasi)

function scrollSlides() {
    scrollAmount -= slideWidth;

    if (Math.abs(scrollAmount) >= slideWidth * slideCount) {
        // Ketika mencapai akhir, pindahkan tanpa transisi ke awal
        slider.style.transition = 'none';
        scrollAmount = 0;
    } else {
        // Transisi normal
        slider.style.transition = 'transform 0.5s ease';
    }

    slider.style.transform = `translateX(${scrollAmount}px)`;

    if (scrollAmount === 0) {
        // Tunggu sebentar untuk memulai transisi lagi setelah menghilangkan transisi
        setTimeout(() => {
            slider.style.transition = 'transform 0.5s ease';
            scrollSlides();
        }, 100); // Delay sebentar sebelum mulai scroll lagi
    } else {
        // Scroll lagi setelah delay
        setTimeout(scrollSlides, 3000); // Sesuaikan delay antar scroll (3 detik)
    }
}

scrollSlides();
