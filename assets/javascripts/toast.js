const toast = document.querySelector('.toast');
const btnToast = document.querySelector('.toast .btn');


if(toast !== null){
    setTimeout(() => {
        toast.style.display = 'none';
    }, 1500);
}

btnToast.addEventListener('click', () => {
    toast.style.display = 'none';
})