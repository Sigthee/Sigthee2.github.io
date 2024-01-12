// Fonction pour vérifier si un nombre est premier
function estPremier(nombreTest) {
    // NombreTest sera le nombre calculé
    // NombreTest = 13 / i s'auto incrémentera au 12 car i < nombreTest(13)
    // donc il va diviser faire (13 / 2) (13 / 3) (13 / 4) . . . (13 / 12)
    // Si il trouve pas 0 il est un nombre Premier
    // Si il trouve 0 il n'est pas un nombre premier
    for (let i = 2; i < nombreTest; i++) {
        if (nombreTest % i === 0) {
            return false;
        }
    }
    // verifie si c'est supérieur à 1
    return nombreTest > 1;
}

// Fonction pour trouver les 100 premiers nombres premiers et calculer leur somme
function trouverNombresPremiersEtSomme() {
    let nombresPremiers = [];
    let somme = 0;
    let nombreTest = 2;

    while (nombresPremiers.length < 100) {
        if (estPremier(nombreTest)) {
            nombresPremiers.push(nombreTest);
            somme += nombreTest;
        }
        nombreTest++;
    }

    return {
        premiers: nombresPremiers,
        somme: somme
    };
}

// Appel de la fonction
const resultats = trouverNombresPremiersEtSomme();

// Affichage des résultats
console.log("Les 100 premiers nombres premiers :", resultats.premiers);
console.log("La somme des 100 premiers nombres premiers :", resultats.somme);
