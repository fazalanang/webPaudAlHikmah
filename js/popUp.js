function toggleText() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("readMoreBtn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more"; 
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less"; 
        moreText.style.display = "inline";
    }
}

// Open the popup modal
function openPopup() {
    document.getElementById('popupModal').style.display = 'flex';
    document.body.classList.add('modal-open'); // Disable scrolling on body
}

// Close the popup modal
function closePopup() {
    document.getElementById('popupModal').style.display = 'none';
    document.body.classList.remove('modal-open'); // Re-enable scrolling on body
}
