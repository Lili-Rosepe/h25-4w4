/**
 *  Script js permettant d'extraite des destinations de voyage
 */
(function(){
    console.log("destination.js")
    let categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
    let mode = "categories"; // ou "search"
    const domaine = window.location.origin + "/";
    parcourir_bouton()
    mon_fetch(categoryId)

   


function parcourir_bouton(){
    const categorie__ul__li = document.querySelectorAll(".categorie__ul__li")
    console.log("categorie__ul__li.length = ", categorie__ul__li.length)
    categorie__ul__li.forEach(elm => {
        elm.addEventListener('mousedown', function(){
            
            console.log(elm.tagName)
            console.log("elm.dataset.category_id = " , elm.dataset.category_id)
            categoryId = elm.dataset.category_id
            mon_fetch(categoryId)
        })
    })

}

function mon_fetch(categoryId){
    let apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            const destinationsList = document.querySelector('.destinations__list');
            destinationsList.innerHTML = "";
            data.forEach(article => {
                const articleElement = document.createElement('div');
                console.log(article.title.rendered)
                // <div>${article.excerpt.rendered}</div>
                articleElement.innerHTML = `
                    <h3>${article.title.rendered}
                    <input type="checkbox" class="chk__acordeon"> 
                    </h3>
                    <label for="rad_${categoryId}">...</label>
                    <div class="description">${article.excerpt.rendered}</div>
                    <a href="${article.link}">Lire plus</a>
                `;
                destinationsList.appendChild(articleElement);

               

            });
        })
        .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }

    })()