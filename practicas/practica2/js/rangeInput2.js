const CHARACTERISTICS =["Strength","Skill", "Physique", "Intelligence", "Wisdom", "Charisma"]

for (let characteristic of CHARACTERISTICS) {
    let     output= document.getElementById(`${characteristic}Output`)
    let charInput = document.getElementById(`${characteristic}`)
    charInput.addEventListener("input", (e) => {
        e.preventDefault()
        output.innerHTML = charInput.value
    })}