// Add event listeners or other JavaScript functionality here
document.addEventListener('DOMContentLoaded', function() {
    // DOMContentLoaded event ensures the DOM is fully loaded before executing JavaScript
    
    // Example: Change background color on button click
    const changeColorButton = document.getElementById('changeColorButton');
    const body = document.body;

    changeColorButton.addEventListener('click', function() {
        body.style.backgroundColor = getRandomColor();
    });

    // Function to generate a random color
    function getRandomColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }
});
