const getID = document.querySelector('.recept');

//Detta script hämtar och spottar ut data till ett enkillt recept

fetch('../json/recept.json')
    .then(response => response.json())
    .then(data => {
    data.forEach(item => {
        if(item.id == getID.id){
            console.log(item);
            let figure = document.createElement('figure');
            let img = document.createElement('img');
            //!srcet 400px
            //let imgS = document.createElement('img');
            let ol = document.createElement('ol');
            let ul = document.createElement('ul');
            let header = document.createElement('header');
            let h1 = document.createElement('h1');
            let p = document.createElement('p');
            let h2G = document.createElement('h2');
            let h2I = document.createElement('h2');
            let section1 = document.createElement('section');
            let section2 = document.createElement('section');
            let section4 = document.createElement('section');
            let bigBox = document.createElement('div');
            let timeCategoty = document.createElement('section');
            let time = document.createElement('span');
            let buyIngredients = document.createElement('span');
            let amountIngredients = item.ingredients.length;
            //! icon from google symbols
            let timeIcon = document.createElement('span');
            let ingridentsIcon = document.createElement('span');
            //! Div box till tid och ikon
            let timebox = document.createElement('div');
            //! Div box till ingredinser och ikon
            let ingridentsBox = document.createElement('div');
             //! Div box till heading, figure och info-recipie
             let section3 = document.createElement('div');


            //! CLASSES

            timebox.classList.add('time-box');
            ingridentsBox.classList.add('ingridients-box');
            h1.classList.add('recipe-heading');
            time.classList.add('time-recipe');
            section3.classList.add('section3');
            section4.classList.add('howToMake');
            buyIngredients.classList.add('class','buy-ingredients');
            p.classList.add('info-recipe')
            section1.classList.add('steps-container');
            section2.classList.add('steps-container');
            timeCategoty.classList.add('time-ingredients-container');
            ul.classList.add('steps-list');
            ol.classList.add('steps-list');
            //! icon from google symbols
            timeIcon.classList.add('material-symbols-outlined');
            ingridentsIcon.classList.add('material-symbols-outlined');
            bigBox.classList.add('bigBox');


            h1.textContent = item.name;
            p.textContent = item.description;
            time.textContent = item.time;
            buyIngredients.textContent = `${amountIngredients} ingredienser`;
            h2G.textContent = 'Gör så här';
            h2I.textContent = 'Ingredienser';
            timeIcon.textContent = "schedule";
            ingridentsIcon.textContent = "local_pizza";
        
     
            img.setAttribute('src',item.imageURL);
            img.setAttribute('srcset',`${item.image400} 400w`);
            img.setAttribute('srcset',`${item.image800} 800w`);
            img.setAttribute('srcset',`${item.imageURL} 1200w`);
           
            figure.setAttribute('class','recept-img');

            console.log(item.ingredients.length);
   
            //För att skapa nya LI för varje step i json
            item.steps.forEach(step => {
                let li = document.createElement('li');
                li.textContent = step;
                ol.append(li);
            });
            item.ingredients.forEach(ingrident => {
                let li = document.createElement('li');
                console.log(ingrident);
                li.textContent = `${ingrident.quantity}  ${ingrident.name}`;
                ul.append(li);
            });
            //Lägger till det nya elementen i DOM

            // divNew1.append(iconWatch,time)
            // divNe2w.append(iconbag,buyIngredients)



            //!APPEND
            timebox.append(timeIcon, time );
            ingridentsBox.append(ingridentsIcon,buyIngredients);
           


            // timeCategoty.append(time,buyIngredients);
            timeCategoty.append(timebox, ingridentsBox);
           // section3.append(h1,figure, timebox)
           section3.append(header,figure, timeCategoty,p);
            section4.append(section1, section2);

            bigBox.append(section3,section4);
            
            section1.append(h2I,ul);
            section2.append(h2G,ol);
            figure.append(img);
            header.append(h1);
            // getID.append(section3,section4); 
            getID.append(bigBox); 
        }
    });
})

