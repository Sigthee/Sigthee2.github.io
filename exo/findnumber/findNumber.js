function compterChiffreTrois(taille, findMe) {
    let count = 0;

    for (taille = 1; taille <= 365; taille++) {
        // Convertir le nombre en chaîne de caractères pour vérifier chaque chiffre
        findMe = taille.toString();

        // Parcourir chaque chiffre dans la chaîne
        for (let i = 0; i < findMe.length; i++) {
            // Vérifier si le chiffre est égal à 3
            if (findMe[i] === '3') {
                count++;
            }
        }
    }

    return count;
}

const resultat = compterChiffreTrois();
console.log(resultat);