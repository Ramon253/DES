<!--Script para darle estetica al boton range-->


let output = document.getElementById(`salaryOutput`)
let salaryInput = document.getElementById(`salaryInput`)
salaryInput.addEventListener("input", (e) => {
    e.preventDefault()
    output.innerHTML = salaryInput.value
})








