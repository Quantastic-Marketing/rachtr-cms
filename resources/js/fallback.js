document.addEventListener("DOMContentLoaded", function () {
    var animationContainer = document.querySelector(".lottie-animation");
    console.log("in lootie");
    if (animationContainer) {
        lottie.loadAnimation({
            container: animationContainer, 
            renderer: "svg",
            loop: true,
            autoplay: true,
            path: "/images/404-animation.json"  // Ensure this path is correct
        });
    }
});
