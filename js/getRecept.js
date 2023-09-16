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
            let ol = document.createElement('ol');
            let ul = document.createElement('ul');
            let header = document.createElement('header');
            let h1 = document.createElement('h1');
            let p = document.createElement('p');
            let h2G = document.createElement('h2');
            let h2I = document.createElement('h2');
            let section1 = document.createElement('section');
            let section2 = document.createElement('section');
            let time = document.createElement('span');
            h1.textContent = item.name;
            p.textContent = item.description;
            time.textContent = item.time;
            img.setAttribute('src',item.imageURL);
            h1.classList.add('class', 'recipe-heading')
            figure.setAttribute('class','recept-img');
            time.classList.add('class', 'time-recipe')
            p.classList.add('class', 'info-recipe')
            section1.classList.add('steps-container');
            section2.classList.add('steps-container');
            h2G.textContent = 'Gör så här';
            h2I.textContent = 'Ingredienser';
            ul.classList.add('steps-list');
            ol.classList.add('steps-list');
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
            section1.append(time,p,h2I,ul);
            section2.append(h2G,ol);
            figure.append(img);
            header.append(h1);
            getID.append(header,figure,section1,section2); 
        }
    });
})

