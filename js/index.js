var slides = document.getElementsByClassName('slide');
var slideCount = slides.length;
var i = 0;

//next button
function moveLeft() {
  console.log("working!");
  i++; // i++ = i+i
  if (i < slideCount) {
    slides[i].style.visibility = "visible";
    slides[i].style.left = "0";
    slides[i - 1].style.left = "-100%";
    console.log("advance i = " + i);
  } else {
    i = 0; // set current slide back to zero
    slides[i].style.visibility = "visible";
    slides[i].style.left = "0";
    slides[slideCount - 1].style.left = "-100%";

    console.log("back to start");

    //Reset
    for (var x = 1; x < slideCount - 1; x++) {
      slides[x].style.visibility = "hidden";
      slides[x].style.left = "100%";
    }
  }
  if (i === slideCount - 1) { //reset first slide to the right of container
    slides[0].style.visibility = "hidden";
    slides[0].style.left = "100%";
  }
  if (i === slideCount - 2) { //reset last slide to the right of container
    slides[slideCount - 1].style.visibility = "hidden";
    slides[slideCount - 1].style.left = "100%";
  }
}
// Run the fuction move left when you click on next
document.getElementById("next").onclick = moveLeft;


// Have last slide ready in the wings on the left side.
slides[slideCount - 1].style.left = "-100%";

function moveRight() {
  console.log("working!");
  if (i > 0) { // THIS CHANGES FROM i < slideCount // run code for slides 1 and higher
    i--; // decrease value of i by one 
    slides[i].style.visibility = "visible"; // current slide visible
    slides[i + 1].style.left = "100%"; //THIS CHANGES FROM i -1 // move previous slide to the right
    slides[i].style.left = "0"; // move current slide to center

  } else { // if current slide is 0, last slide becomes current slide

    // SET CURRENT SLIDE to LAST SLIDE
    i = slideCount - 1; // CHANGES FROM i = 0 // set current slide to last slide
    slides[i].style.visibility = "visible"; // current slide visible
    slides[0].style.left = "100%"; // move first slide right
    slides[i].style.left = "0"; // move last slide center

    console.log("end, i = " + i);

    // RESET ALL OTHER SLIDES
    for (var x = 1; x < slides.length - 1; x++) {
      slides[x].style.visibility = "hidden"; // set to invisible while reseting
      slides[x].style.left = "-100%"; // all other slides go to left
    }
  }
  if (i === 1) { //move first slide back to left
    slides[0].style.visibility = "hidden";
    slides[0].style.left = "-100%";
  }
  if (i === 0) { //move last slide back to left
    slides[slideCount - 1].style.visibility = "hidden";
    slides[slideCount - 1].style.left = "-100%";
  }
}

//Run the function moveRight when you click on prev
document.getElementById('prev').onclick = moveRight;