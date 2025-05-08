
function changeMainImage(imageSrc, clickedThumbnail) {
// Đổi ảnh chính
document.getElementById("main-image").src = "HinhCTSP/HinhSanPham/" + imageSrc;

// Xóa class "active" khỏi tất cả ảnh nhỏ
let thumbnails = document.querySelectorAll(".sub-thumbnail");
thumbnails.forEach(img => img.classList.remove("active"));

// Thêm class "active" cho ảnh nhỏ được click
clickedThumbnail.classList.add("active");
}

// Khởi tạo Swiper
var swiper = new Swiper('.swiper-container', {
slidesPerView: 4,
spaceBetween: 10,
navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
},
});

