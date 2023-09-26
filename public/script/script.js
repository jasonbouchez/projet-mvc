fetch('controller/controller.php')
 .then(response => response.json())
 .then(data => {
    data.forEach(element => {
        const createP = document.createElement('p')
        createP.textContent = `${element.nom}`
        document.body.appendChild(createP)
    });
 })

//   Effectuez la requête POST vers post.php
  fetch("http/post.php", {
    method: "POST",
    body: formData
})
.then(response => {
    if (!response.ok) {
        throw new Error("La requête a échoué.");
    }
    return response.json();
})
.then(data => {
    // Traitez la réponse du serveur ici
    console.log(data);
})
.catch(error => {
    // Gérez les erreurs ici
    console.error(error);
});