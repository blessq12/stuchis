//calc cta script
let currentStep = 0

let allItems = document.getElementsByClassName('item')
let tabsCount = document.getElementsByClassName('tab').length
showTab(currentStep)

for (item of allItems){
    item.addEventListener("click",() => {
        hideTab(currentStep)
        currentStep++
        showTab(currentStep)
    })
}

function showTab(currentStep){
    console.log(tabsCount)
    let nav = document.createElement('div')
    nav.classList.add('calc-nav')
    nav.append('<butto class="btn btn-primary">Назад</button>')
    let tab = document.querySelector("[data-step='"+ currentStep +"']")
    tab.classList.add('tab-show')
    if (currentStep == 0){
        
    } else {

    }
    if (currentStep == tabsCount - 1){

    }
}
function hideTab(step){
    let tab = document.querySelector("[data-step='"+ step +"']")
    if (tab.classList.contains('tab-show')){
        tab.classList.remove('tab-show')
    }
}