/*======================================================================================*/
/*==================================== navbar =====================================*/
/*======================================================================================*/

function nav(){
    var a = document.getElementById("nav");
    if (a.style.display=="block"){
        a.style.display="none";
    }else{
        a.style.display="block";
    }        
}


/*======================================================================================*/
/*==================================== filtrage =====================================*/
/*======================================================================================*/


function trieparauthor(){
    var select=document.getElementById("select");
    var author=document.getElementsByName("auteur");
    var book=document.getElementsByName("book");
    for(var i=0;i<book.length;i++){

        if(select.value=='all'){
            book[i].style.display="block";
        
        }else if(select.value==author[i].innerText){
            book[i].style.display="block";
            
        }else{
            book[i].style.display="none";
        }

  }
}


function trieparprix(){
    var prixmin=document.getElementById("min").value;
    var prixmax=document.getElementById("max").value;
    var prixbooks=document.getElementsByName("prix");
    var book=document.getElementsByName("book");
  
    for(var i=0;i<prixbooks.length;i++){

        if (parseFloat(prixbooks[i].innerText) >= parseFloat(prixmin)  && parseFloat(prixbooks[i].innerText) <= parseFloat(prixmax) ){
            book[i].style.display="block";

        }else{
            book[i].style.display="none";
        }
    }
}
/*====================================================*/



function ImageSetter(input,target) {
    if (input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
            target.attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$(".fileup").change(function(){
    var imgDiv=$(this).data('id');  
        imgDiv=$('#' + imgDiv);    
        ImageSetter(this,imgDiv);
    });



/*======================================================================================*/
/*==================================== Swiper =====================================*/
/*======================================================================================*/



