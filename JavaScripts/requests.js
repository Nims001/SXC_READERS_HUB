

function acceptreq(id, title1, author,genre, publication, edition) {
    localStorage.setItem('id', id);
    localStorage.setItem('title', title1);
    localStorage.setItem('author', author);
    localStorage.setItem('genre', genre);
    localStorage.setItem('publication', publication);
    localStorage.setItem('edition', edition);

    window.location.href = 'http://localhost/sxc/SXC_Readers_Hub/bookreq.php';
    
   
}
function addstuff(){
    let a = localStorage.getItem('title');
    let b = localStorage.getItem('author');
    let d = localStorage.getItem('genre');
    let e = localStorage.getItem('publication');
    let f = parseInt(localStorage.getItem('edition'));

    document.getElementById("author").value = b;   
    document.getElementById("title").value = a;   
    document.getElementById("genre").value = d;   
    document.getElementById("publication").value = e;  
    document.getElementById("edition").value = f;   
    
}
