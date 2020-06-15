const menuBtn = document.getElementById("menuBtn");

menuBtn.addEventListener("click", overlayToggle);

function overlayToggle() {
  {
    menuBtn.classList.toggle("menu-close");
    document.getElementById("menuScreen").classList.toggle("hidden");

    document.documentElement.style.overflow =
      document.documentElement.style.overflow === "hidden"
        ? "scroll"
        : "hidden";
    document.body.scroll = document.body.scroll === "no" ? "yes" : "no";
  }
}

document.getElementById("home-menu").addEventListener("click", (e) => {
  overlayToggle();
  smoothScroll("#Home", 1500);
});
document.getElementById("about-menu").addEventListener("click", (e) => {
  overlayToggle();
  smoothScroll("#About", 1500);
});
document.getElementById("service-menu").addEventListener("click", (e) => {
  overlayToggle();
  smoothScroll("#Services", 1500);
});
document.getElementById("contact-menu").addEventListener("click", (e) => {
  overlayToggle();
  smoothScroll("#Contact", 1500);
});

function smoothScroll(targetElm, duration) {
  var target = document.querySelector(targetElm);
  var targetPos = target.getBoundingClientRect().top;
  var startPosition = window.pageYOffset;
  var distance = targetPos - startPosition;
  var startTime = null;

  console.log(target);
  console.log("tpos "+targetPos);
  console.log("spos "+startPosition);
  console.log("dis "+distance);
  

  function animation(currentTime) {
    if (startTime === null) startTime = currentTime;
    var timeElapsed = currentTime - startTime;
    var run = ease(timeElapsed, startPosition, distance, duration);
    window.scrollTo(0, run);
    if (timeElapsed < duration) requestAnimationFrame(animation);
  }

  function ease(t, b, c, d) {
    t /= d/2;
	if (t < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
	t -= 2;
	return c/2 * (Math.sqrt(1 - t*t) + 1) + b;
  }

  requestAnimationFrame(animation);
}
