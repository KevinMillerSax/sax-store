//image change on front page banner

const el = document.getElementById('one');
const rooturl = imageStringUrl.substr(0, imageStringUrl.indexOf('images'));

let images = ['images/kandinsky.jpeg', 'images/kandinsky2.jpg'];
if (rooturl) {
  let i = 0; 
  function slide() {
    el.style.backgroundImage = `url(${rooturl}${images[i]})`;
    console.log(images[i]);
    if(i < images.length-1) {
      i++;
    } else i = 0;

    setTimeout("slide()", 2000);
  }
  window.onload = slide;
}

//end image change on front page banner
