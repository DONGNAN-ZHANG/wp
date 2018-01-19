const add = document.querySelector('#plus')
const remove = document.querySelector('#minus')
const quantity = document.querySelector('#quantity');

add.addEventListener('click', e => {
    e.preventDefault()
    quantity.value = parseInt(quantity.value) + 1;
    console.log(quantity.value)
})
remove.addEventListener('click', e => {
    e.preventDefault();
    if (parseInt(quantity.value) === 0) {
        console.log(`Value can't be less than 0`)
        return;
    }
    quantity.value = parseInt(quantity.value) - 1;
    console.log(quantity.value)
})