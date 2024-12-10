document.addEventListener('DOMContentLoaded', function() {
   
    const statusContainer = document.getElementById('statusContainer');
    const offerStatus = statusContainer.querySelector('h5').textContent.trim(); 

    if (offerStatus === 'Aceptado') {
        statusContainer.style.color = 'green'; 
    } else if (offerStatus === 'En proceso') {
        statusContainer.style.color = 'orange'; 
    } else if (offerStatus === 'Denegado') {
        statusContainer.style.color = 'red'; 
    }
});