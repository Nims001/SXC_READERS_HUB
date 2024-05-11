

    function submitForm() {
        // Extracting form data
       
     alert('Your Request has been created Successfully')
    }; 
    
    function hello(title, author, genre, publication, edition){
        window.location.href = "http://localhost/sxc/SXC_Readers_Hub/home.php";
        cardHtml = `
    <div class="card book-card">
        <div class="card-body">
            <h5 class="card-title">${title}</h5>
            <p class="card-text">Author: ${author}</p>
            <p class="card-text">Genre: ${genre}</p>
            <p class="card-text">Publication Year: ${publication}</p>
            <p class="card-text">Publication Year: ${edition}</p>
        </div>
    </div>`;
    


   

    document.querySelector('.container').innerHTML = document.querySelector('.container').innerHTML + cardHtml;
    };