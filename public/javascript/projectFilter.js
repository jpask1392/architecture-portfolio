const checkedItems = []
const elementsArr = document.getElementsByClassName("grid-item")

const onCheckChange = e => {
    // if the value is already in the array remove, else add to array
    checkedItems.includes(e.value)
    ? checkedItems.splice(checkedItems.indexOf(e.value), 1)
    : checkedItems.push(e.value)
    
    // loop through all grid-items checking if checkedItems contains the selected item
    // show/hide accoringly
    for (var i = 0; i < elementsArr.length; i++) {
        checkedItems.includes(elementsArr[i].classList[1]) || checkedItems.length === 0 
        ? elementsArr[i].style.display = "block"
        : elementsArr[i].style.display = "none"
    }
}
