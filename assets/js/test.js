// footer changement de date annuel en javascript 
window.onload = function () {

    let date_footer = document.getElementById('date_footer');
    let date_years = (new Date()).getFullYear();

    date_footer.textContent = date_years

}