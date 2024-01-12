// Écrivez une fonction en JavaScript appelée compterVoyelles 
// qui prend une chaîne de caractères en paramètre et retourne le nombre de voyelles présentes dans la chaîne. 
// Considérez les voyelles comme étant "a", "e", "i", "o", et "u".
// Ignorez la casse, c'est-à-dire que "A" et "a" doivent être comptés comme la même voyelle.

// Testez votre fonction en appelant compterVoyelles avec différentes chaînes et affichez le résultat dans la console.

function compterVoyelles(mot) {
    let voyelle = 0; // resultat

    cut = mot.split('');

    for (i = 0; i < cut.length; i++) {
        if (cut[i] == 'a' || cut[i] == 'e' || cut[i] == 'i' || cut[i] == 'o' || cut[i] == 'u' || cut[i] == 'y') {
            voyelle++;
        }
    }
    return voyelle;
}

console.log(compterVoyelles('didier'));