// carousel animation

const imgs = document.getElementsByClassName('img');
const img_test = document.getElementsByClassName('img')[2];
const img_test_title = img_test.children[0].children[0];
const img_test_paragraph = img_test.children[0].children[2];

// img.style.cssText = "animation: "
console.log(imgs[2]);
console.log(img_test_title);

// Adding typewriter effect
const contents = 'delious pizza';
const desc = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. ';
let i = 0;

setTimeout(() => {
    // const typewriter = setInterval(() => {
    //     img_test_title.textContent += contents[i];
    //     i++;
    //     if (i === contents.length) clearInterval(typewriter);
    // }, 100);

    const typewriter2 = setInterval(() => {
        img_test_paragraph.textContent += desc[i];
        i++;
        if (i === desc.length) clearInterval(typewriter2);
    }, 100);
}, 2000);
