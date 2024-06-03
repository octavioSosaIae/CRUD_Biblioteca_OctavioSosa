window.onload = () => {

    addEventSelect();
    obtainBooks();
}

async function obtainBooks() {

    let url = 'http://localhost/crud_biblioteca_octaviososa/BACKEND/CONTROLLER/bookController.php?function=obtain';
    let query = await fetch(url);
    let data = await query.json();
    booksList = data;
    showBooks(data);
}

function showBooks(book) {

    let tbodyElement = document.querySelector("#tableBooks");
    tbodyElement.innerHTML = "";
    for (let i = 0; i < book.length; i++) {

        tbodyElement.innerHTML += `               
                <tr>
                <td>${book[i].id}</td>
                <td>${book[i].nombre}</td>
                <td>${book[i].fecha}</td>
                <td>${book[i].precio}</td>    
                </tr>
                `;

    }

}

function addEventSelect() {

    let filter = document.querySelector("#select")

    filter.onchange = () => {

        let value = filter.options[filter.selectedIndex].value;




    }


}