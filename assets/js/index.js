
    // like active parament

    const likeButtons = document.querySelectorAll('.prodcutCard__buttons_item--toFavorites');

    likeButtons.forEach(button => {
        button.addEventListener('click', function() {
            button.classList.toggle('active');
        });
    });



    const basketAddButtons = document.querySelectorAll('.prodcutCard__buttons_item--toCart');

    basketAddButtons.forEach(button => {
        button.addEventListener('click', function() {
            button.classList.toggle('active');
        });
    });


    // seacrch modal

    document.addEventListener("DOMContentLoaded", function() {
        const input = document.getElementById("searchInput");
        const prompt = document.getElementById("prompt");
        const overlay = document.getElementById("overlay");
    
        input.addEventListener("focus", function() {
            prompt.style.display = "block";
            overlay.style.display = "block";
            document.body.classList.add("no-scroll"); // добавляем класс no-scroll к body
        });
    
        input.addEventListener("blur", function() {
            prompt.style.display = "none";
            overlay.style.display = "none";
            document.body.classList.remove("no-scroll"); // удаляем класс no-scroll из body
        });
    
        overlay.addEventListener("click", function() {
            prompt.style.display = "none";
            overlay.style.display = "none";
            input.blur(); // Убираем фокус с инпута
            document.body.classList.remove("no-scroll"); // удаляем класс no-scroll из body
        });
    });
    








    