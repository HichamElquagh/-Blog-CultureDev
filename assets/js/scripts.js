
const article = document.querySelector('.dd');
const category = document.querySelector('.ss');

function showcategory(){
    article.style.display = "none";
    category.style.display = "block";
}
function showarticle() {
    article.style.display = "block";
    category.style.display = "none";

}