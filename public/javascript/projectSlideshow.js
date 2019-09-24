// create slideshow object
function slideshow(currentIndex, allSlides) {
    this.initialIndex = 0;
    this.currentIndex = currentIndex;
    this.allSlides = allSlides
}

// all slideshows
const slideshowContainers = document.getElementsByClassName("slideshow_container")

// initialises all slideshow objects
let slideshowArr = []
for(var i = 0; i < slideshowContainers.length; i++) {
    slideshowArr.push(new slideshow(0, slideshowContainers[i].getElementsByClassName('mySlides'))) 
}

// update visible index and reset all others to display none
const showSlides = (index, allSlides) => {
    for (var i = 0; i < allSlides.length; i++) {
        allSlides[i].style.display = "none"; 
    }
    allSlides[index].style.display = "block";
}

// update slideshow objects current index property and pass to show slides function
const nextSlide = clickedObject => {
    let clickedContainerId = clickedObject.parentElement.id.slice(10)
    let currentSlideshow = slideshowArr[clickedContainerId]
    let allSlides = slideshowArr[clickedContainerId].allSlides

    // check if the next index is higher than array count
    if (currentSlideshow.currentIndex >= allSlides.length - 1) {
        currentSlideshow.currentIndex = 0
    } else {
        currentSlideshow.currentIndex += 1
    }
    showSlides(currentSlideshow.currentIndex, allSlides)
}

// update slideshow objects current index property and pass to show slides function
const prevSlide = clickedObject => {
    let clickedContainerId = clickedObject.parentElement.id.slice(10)
    let currentSlideshow = slideshowArr[clickedContainerId]
    let allSlides = slideshowArr[clickedContainerId].allSlides

    // check if the next index is higher than array count
    if (currentSlideshow.currentIndex === 0) {
        currentSlideshow.currentIndex = allSlides.length - 1
    } else {
        currentSlideshow.currentIndex -= 1
    }
    showSlides(currentSlideshow.currentIndex, allSlides)
}

// set the initial image visibility to be index 0
(function setInital(){
    for (var i = 0; i < slideshowContainers.length; i++) {
        console.log(slideshowContainers[i].getElementsByClassName("mySlides")[0])
        slideshowContainers[i].getElementsByClassName("mySlides")[0].style.display = "block";
    }
}())