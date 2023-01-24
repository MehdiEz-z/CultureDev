document.getElementById('add-btn').addEventListener('click', ()=>{
    document.getElementById('article-form').reset();
    document.getElementById("titre-form").innerHTML     = "Ajouter un article";
    document.getElementById('save-btn').style.display   = 'block';
    document.getElementById('updt-btn').style.display   = 'none';
});

function updateArticle(id, titre,article_cat,description,date,old_cover){

    document.getElementById("titre-form").innerHTML     = "Modifier l'article";
    document.getElementById('save-btn').style.display   = 'none';
    document.getElementById('updt-btn').style.display   = 'block';


    document.getElementById("article-id").value         = id;
    document.getElementById("article-titre").value      = titre;
    document.getElementById("article-descrip").value    = description;
    document.getElementById("article-date").value       = date;
    document.getElementById("old-article-cover").value  = old_cover;
    
    document.getElementById(article_cat).selected       = true;
}