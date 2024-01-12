function note(chiffre) {
    if (chiffre <= 7) {
        return "Hideux";
    } else if (chiffre >=7 && chiffre < 10) {
        return "Moche";
    } else if (chiffre >=10 && chiffre < 15) {
        return "Nice";
    } else if (chiffre >= 15 && chiffre <= 20) {
        return "GG";
    } else {
        return "Veuillez entrer un chiffre entre 1 et 20";
    }
}

let chiffre = 21;
console.log(note(chiffre));