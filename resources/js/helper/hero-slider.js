// Checking if we are in the home page
if (window.location.pathname === "/") {
    //step 1: get DOM
    let nextDom = document.getElementById("next");
    let prevDom = document.getElementById("prev");

    let carouselDom = document.querySelector(".carousel");

    // Only proceed if carousel exists
    if (carouselDom) {
        let SliderDom = carouselDom.querySelector(".list");
        let thumbnailBorderDom = carouselDom.querySelector(".thumbnail");

        // Only proceed if required elements exist
        if (SliderDom && thumbnailBorderDom) {
            let thumbnailItemsDom =
                thumbnailBorderDom.querySelectorAll(".item");
            let timeDom = carouselDom.querySelector(".time");

            thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
            let timeRunning = 3000;
            let timeAutoNext = 5000;

            nextDom.onclick = function () {
                showSlider("next");
            };

            prevDom.onclick = function () {
                showSlider("prev");
            };

            let runTimeOut;
            let runNextAuto = setTimeout(() => {
                next.click();
            }, timeAutoNext);

            function showSlider(type) {
                let SliderItemsDom = SliderDom.querySelectorAll(".item");
                let thumbnailItemsDom =
                    thumbnailBorderDom.querySelectorAll(".item");

                if (type === "next") {
                    SliderDom.appendChild(SliderItemsDom[0]);
                    thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
                    carouselDom.classList.add("next");
                } else {
                    SliderDom.prepend(
                        SliderItemsDom[SliderItemsDom.length - 1]
                    );
                    thumbnailBorderDom.prepend(
                        thumbnailItemsDom[thumbnailItemsDom.length - 1]
                    );
                    carouselDom.classList.add("prev");
                }

                clearTimeout(runTimeOut);

                runTimeOut = setTimeout(() => {
                    carouselDom.classList.remove("next");
                    carouselDom.classList.remove("prev");
                }, timeRunning);

                clearTimeout(runNextAuto);

                runNextAuto = setTimeout(() => {
                    next.click();
                }, timeAutoNext);
            }
        }
    }
}
