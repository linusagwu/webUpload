

 function filterVideos(bodyPart) {
    var videos = document.querySelectorAll(".video");

    for (var i = 0; i < videos.length; i++) {
        if (bodyPart === "all" || videos[i].classList.contains(bodyPart)) {
            videos[i].style.display = "block";
        } else {
            videos[i].style.display = "none";
        }
    }
}