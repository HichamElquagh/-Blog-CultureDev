
const article = document.querySelector('.article');
const category = document.querySelector('.category');





function getCategoryvalue(id){
    document.querySelector('.modal-title').innerText="Update";
    document.getElementById('inputhiddenid').value=id;
    let input = document.querySelector(`#Categoryvalue${id}`).innerText
   document.getElementById('valuecategory').value=input;

}


function activecategory(){
    category.classList.add("active");
    article.classList.remove("active");
}
function arctivearticle() {
    
    article.classList.add("active");
    category.classList.remove("active");
}



