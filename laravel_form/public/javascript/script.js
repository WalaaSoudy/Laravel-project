function getName(x) {
    const data = null;

    const xhr = new XMLHttpRequest();

    xhr.addEventListener('readystatechange', function() {
        if (this.readyState === this.DONE) {
            let name = this.responseText;
            name = name.substring(name.indexOf('"name":"') + 8, name.indexOf('"birthDate"') - 2);
            document.getElementById('actor').innerHTML += name + "<br>";
        }
    });

    xhr.open('GET', 'https://online-movie-database.p.rapidapi.com/actors/get-bio?nconst=' + x, true);
    xhr.setRequestHeader('X-RapidAPI-Key', '72d716b174msha6dd184bb7685c8p151511jsn5e807e95a61d');
    xhr.setRequestHeader('X-RapidAPI-Host', 'online-movie-database.p.rapidapi.com');
    xhr.send(data);
}


function actors() {
    const data = null;

    const xhr = new XMLHttpRequest();

    xhr.addEventListener('readystatechange', function() {
        if (this.readyState === this.DONE) {
            let text = this.responseText;
            text = text.substring(1);

            const myArray = text.split(",");
            for (let i = 0; i < 4; i++) {
                myArray[i] = myArray[i].substring(7, 16);
                getName(myArray[i]);
            }
        }
    });
    let date = document.getElementById('date').value;
    let day = date.substring(8);
    let month = date.substring(5, 7);

    xhr.open('GET', 'https://online-movie-database.p.rapidapi.com/actors/list-born-today?month=' + month + '&day=' + day, true);

    xhr.setRequestHeader('X-RapidAPI-Key', '72d716b174msha6dd184bb7685c8p151511jsn5e807e95a61d');
    xhr.setRequestHeader('X-RapidAPI-Host', 'online-movie-database.p.rapidapi.com');

    xhr.send(data);
    return true;
}