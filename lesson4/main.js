function showImg(img) {
    document.getElementById('modal_img').src = img.src;
    document.getElementById('modal').style.display = "block";
    document.getElementById('veil').style.display = "block";
}
function hideImg() {
    document.getElementById('modal').style.display = "none";
    document.getElementById('veil').style.display = "none";
}