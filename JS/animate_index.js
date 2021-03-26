let listArticles=document.querySelectorAll("#idService article");
[].forEach.call(listArticles, function(article) {
    article.style.visibility = "hidden";
});
window.onscroll = function() {
    if (screen.height*(1/3)<window.scrollY) {
        let listArticles=document.querySelectorAll("#idService article");        
        // article haut gauche    
        listArticles[0].classList.add("animate__fadeInTopLeft");
        // article haut droite
        listArticles[1].classList.add("animate__fadeInTopRight");
        // article bas gauche
        listArticles[2].classList.add("animate__fadeInBottomLeft");
        // article bas droite
        listArticles[3].classList.add("animate__fadeInBottomRight");
          
        [].forEach.call(listArticles, function(article) {
            article.style.visibility = "visible"; 
            article.classList.add("animate__animated");
            article.style.setProperty('--animate-delay', '2s');
        });           
    };                          
};