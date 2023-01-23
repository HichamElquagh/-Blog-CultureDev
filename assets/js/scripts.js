
const article = document.querySelector('.article');
const category = document.querySelector('.category');



    // let rowUpdate=document.querySelector(".update");
    // rowUpdate.for



    function getArticlevalue(id,category){
//    console.log(document.querySelector(`#imageValue${id}`));
//    console.log(document.getElementById('Date_value'));
// console.log(id);
document.getElementById('article-update-btn').style.display="block";
document.getElementById('saveBtn').style.display="none"; 
document.getElementById('idArticle').value=id;
document.getElementById('Category_value').value= category;
document.getElementById('Title_value').value=document.querySelector(`#titleValue${id}`).innerText;
document.getElementById('Image').style.display="block";
let valueimage = document.querySelector(`#imageValue${id}`).getAttribute('src');
document.getElementById('hiddenpic').value=valueimage
let imagee = document.getElementById("Image");
// let description=
document.getElementById('Description_value').value;
console.log(document.querySelector(`#descriptionValue${id}`).textContent);
//   document.getElementById('Description_value').value;   //input

  tinyMCE.activeEditor.setContent(document.querySelector(`#descriptionValue${id}`).textContent);

  document.getElementById('Date_value').value=document.querySelector(`#datetimeValue${id}`).innerText;
  imagee.setAttribute('src',valueimage)


    }

function getCategoryvalue(id){
    document.querySelector('.modal-title').innerText="Update";
    document.getElementById('saveBtn').style.display='none'
    document.getElementById('updateBtn').style.display='block'
    document.getElementById('inputhiddenid').value=id;
    let input = document.querySelector(`#Categoryvalue${id}`).innerText
   document.getElementById('valuecategory').value=input;

}


// function activecategory(){
//     category.classList.add("active");
//     article.classList.remove("active");
// }
// function arctivearticle() {
    
//     article.classList.add("active");
//     category.classList.remove("active");
// }

function CopyAr(){
  const article = document.getElementById('form1');
  const articles = document.getElementById('allForms');


  let Copyarticle = article.cloneNode(true)
  
  var newBtn = document.createElement("a");
  newBtn.className = "btn btn-secondary";
  newBtn.innerHTML = "Remove";
  newBtn.addEventListener("click",function remove(){
    Copyarticle.remove();
  });

  Copyarticle.appendChild(newBtn);

  x=0;
  for(children of Copyarticle.children){
      children.children[1].value = ''
      x++;
      if(x==4){
          break;
      }
  }

  articles.appendChild(Copyarticle)

}
   