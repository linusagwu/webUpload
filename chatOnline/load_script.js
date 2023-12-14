// Load navigation.html and insert it into the placeholder div
fetch('chatOnline/includes/H_nav.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('navigation').innerHTML = data;
            });

// Load footer.html and insert it into the footer placeholder
fetch('chatOnline/includes/footer.html')
    .then(response => response.text())
    .then(data => {
        document.getElementById('footer').innerHTML = data;
    });


    fetch('chatOnline/includes/nav.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('nav').innerHTML = data;
            });

 
    fetch('chatOnline/includes/workout_nav.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('work_nav').innerHTML = data;
        });


        