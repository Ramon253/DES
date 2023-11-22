const CHARACTERISTICS = ["Strength", "Skill", "Physique", "Intelligence", "Wisdom", "Charisma"]

for (let characteristic of CHARACTERISTICS) {
    let output = document.getElementById(`${characteristic}Output`)
    let charInput = document.getElementById(`${characteristic}`)
    charInput.addEventListener("input", (e) => {
        e.preventDefault()
        output.innerHTML = charInput.value
    })
}

let colors = {
    skin: document.getElementById("skinColor"),
    hair : document.getElementById("hairColor"),
    eye : document.getElementById("eyesColor")
}
colors["skin"].addEventListener("input",() =>{
    colors.hair.style.backgroundColor =colors.hair.value
})

