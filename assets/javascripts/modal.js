// modal
const btnYoutube = document.querySelector('#btn-youtube');
const btnJoin = document.querySelectorAll('#btn-join');

const modalYoutube = document.querySelector('#modal-youtube');
const modalForm = document.querySelector('#modal-form');

const body = document.querySelector('body');
const selectedCourse = document.querySelectorAll('.modal-content #course option')

// btn close modal
function btnCloseModal(el) {

    if (el.id === "btn-close-modal-youtube") {
        // delete youtubeframe
        modalYoutube.querySelector('iframe').remove();

        // hide modalyoutube
        modalYoutube.style.display = "none";
        body.style.overflow = "visible";
    }

    if (el.id === "btn-close-modal-form") {
        // hide modalForm
        modalForm.style.display = "none";

        body.style.overflow = "visible";
    }

}

// modalYoutube
// check element button youtube
if (btnYoutube != null && modalYoutube != null) {
    // modalYoutube.style.display = "none";
    btnYoutube.addEventListener("click", () => {

        // show modalyoutube
        modalYoutube.style.display = "flex";
        body.style.overflow = "hidden";

        // create youtubeframe
        const youtubeFrame = document.createElement("iframe");
        youtubeFrame.setAttribute('src', 'https://www.youtube.com/embed/gTMwx9-rKe8');
        youtubeFrame.setAttribute('title', 'YouTube video player');
        youtubeFrame.setAttribute('frameborder', '0');
        youtubeFrame.setAttribute('allow', 'accelerometer');
        youtubeFrame.setAttribute('autoplay', '');
        youtubeFrame.setAttribute('clipboard-write', '');
        youtubeFrame.setAttribute('encrypted-media', '');
        youtubeFrame.setAttribute('gyroscope', '');

        // add youtubeframe
        modalYoutube.appendChild(youtubeFrame);
    })
}

// check element button youtube
if (btnJoin != null && modalForm != null) {
    // modalForm.style.display = "none";
    
    btnJoin.forEach(el => {
        el.addEventListener("click", () => {
            let id_product = el.value

            modalForm.style.display = "flex";
            body.style.overflow = "hidden";

            selectedCourse.forEach(selected => {
                selected.removeAttribute("selected");

                if (selected.id == id_product) {
                    selected.setAttribute("selected", "");
                }

                if (selected.id == 0) {
                    selected.setAttribute("selected", "")
                }
            })
        })
    });
}

