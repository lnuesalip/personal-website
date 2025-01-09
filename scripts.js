

function searchTable() {
    var input = document.getElementById("myInput");
    input = input.value.toUpperCase();
    var shows = document.getElementsByClassName('title');
    var genres = document.getElementsByClassName('genre');
    var status = document.getElementsByClassName('status');
    var rating = document.getElementsByClassName('rating');
    var review = document.getElementsByClassName('review');
    var show_image = document.getElementsByClassName('show_image');
    var watch_point = document.getElementsByClassName('watch-point');
    var flex = document.getElementsByClassName('flex');

    for (i=0; i < shows.length; i ++) {
        if (shows[i].innerHTML.toUpperCase().includes(input)) {
            shows[i].style.display = "";
            genres[i].style.display = "";
            status[i].style.display = "";
            rating[i].style.display = "";
            review[i].style.display = "";
            show_image[i].style.display = "";
            watch_point[i].style.display = "";
            flex[i].style.display = "";
        }
        else {
            shows[i].style.display = "none";
            genres[i].style.display = "none";
            status[i].style.display = "none";
            rating[i].style.display = "none";
            review[i].style.display = "none";
            show_image[i].style.display = "none";
            watch_point[i].style.display = "none";
            flex[i].style.display = "none";
        }
    }
}