//calc cta script
let currentStep = 0

let token = document.querySelector('[name=_token]').value

let order = {optional:{},contact:{name:'',phone:''}}
let allItems = document.getElementsByClassName('item')
let tabsCount = document.getElementsByClassName('tab').length
let prevButton = document.getElementsByClassName('prev-button')[0]
let nextButton = document.getElementsByClassName('next-button')[0]
let submButton = document.getElementsByClassName('submit')[0]

let checkboxContainer = document.querySelector('.check-group')
let checkboxes = checkboxContainer.querySelectorAll('input[type="checkbox"]')

showTab(currentStep)

for (item of checkboxes){
    item.addEventListener('change',function(){
        if(this.checked){
            order['optional'][this.dataset.attr] = true
          } else {
            order['optional'][this.dataset.attr] = false
          }
    })
}
for (item of allItems){
    item.addEventListener("click",function(){
        order[this.dataset.attr] = this.dataset.value
        hideTab(currentStep)
        currentStep++
        showTab(currentStep)
    })
}
function showTab(currentStep){
    let navigation = document.getElementsByClassName('navigation')
    let tab = document.querySelector("[data-step='"+ currentStep +"']")
    tab.classList.add('tab-show')
    //previous button control
    if (currentStep !== 0){
        prevButton.classList.remove('d-none')
    } else {
        prevButton.classList.add('d-none')
    }
    if (currentStep == 2){
        nextButton.classList.remove('d-none')
        prevButton.classList.add('d-none')
    } else {
        nextButton.classList.add('d-none')
    }
    //submit button control
    if (currentStep == tabsCount - 1){
        prevButton.classList.add('d-none')
        submButton.classList.remove('d-none')
    }
}
function hideTab(step){
    let tab = document.querySelector("[data-step='"+ step +"']")
    if (tab.classList.contains('tab-show')){
        tab.classList.remove('tab-show')
    }
}
// click events
prevButton.addEventListener("click",function(){
    hideTab(currentStep)
    currentStep--
    showTab(currentStep)
})
nextButton.addEventListener("click",function(){
    hideTab(currentStep)
    currentStep++
    showTab(currentStep)
})
submButton.addEventListener("click",function(){
    //validate            
    let quizContact = document.querySelector('.quiz-contact')
    let nameField = quizContact.querySelector('input[name="name"]')
    let phoneField = quizContact.querySelector('input[name="phone"]')
    if (nameField == ''){
        nameField.style.background = 'red'
    } else {
        order['contact']['name'] = nameField.value
    }
    if (phoneField == ''){
        phoneField.style.background = 'red'
    } else {
        order['contact']['phone'] = phoneField.value
    }
    if (order['contact']['name'] !== '' && order['contact']['phone'] !== ''){

        let xhr = new XMLHttpRequest()
        xhr.open('POST','/action/calc',true)
        xhr.setRequestHeader('X-CSRF-TOKEN',token)
        xhr.send(JSON.stringify(order))
        xhr.onload = function(){
            if (xhr.status == 200){
                let tab = document.querySelector("[data-step='"+ currentStep +"']")
                tab.querySelector('.header').style.opacity = 0
                submButton.classList.add('d-none')
                let height = quizContact.offsetHeight
                quizContact.classList.add('d-none')
                let thnx = document.querySelector('.thanx')
                thnx.classList.remove('d-none')
                thnx.style.height = height
            }
        }
    } else {
        alert ('не все поля заполнены')
    }
})

