//portfolio menu dropdown
let portfolioEl = document.querySelector('.portfolioEl');
let portfolioItemsEl = document.querySelector('.portfolio-items');
let portfolionIconEl = document.querySelector('.portfolio-icon');
portfolioEl.addEventListener('click', _ => {
    if (portfolioEl.classList.contains('hidden')){
        portfolioItemsEl.style.visibility = "visible";
        portfolioEl.classList.remove('hidden');
        portfolionIconEl.style.transform='rotate(0deg)'
    } else {
        portfolioItemsEl.style.visibility = "hidden";
        portfolioEl.classList.add('hidden');
        portfolionIconEl.style.transform='rotate(-90deg)'
    }
});
