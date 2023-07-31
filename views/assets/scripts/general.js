



window.onload = () => {
    //This fades the splash screen out and then removes it from the screen;
    setTimeout( () => {

        $('.splash_screen').addClass('fade_out');

        setTimeout( () => {
            $('.splash_screen').removeClass('active');
        }, 3000);

    }, 2000);

}


function getContents() {
    return JSON.stringify(quill.getContents());
}