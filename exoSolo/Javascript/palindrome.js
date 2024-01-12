// Écrivez une fonction en JavaScript appelée estPalindrome qui prend une chaîne 
// de caractères en paramètre et renvoie true si la chaîne est un palindrome, et false sinon.
// Un palindrome est une séquence de caractères qui se lit de la même manière de gauche à droite et de droite à gauche.

// Par exemple, les mots "radar" et "level" sont des palindromes.

// Testez votre fonction en appelant estPalindrome avec différentes chaînes et affichez le résultat dans la console.

// N'oubliez pas de prendre en compte les espaces et de rendre votre fonction insensible à la casse 
// (c'est-à-dire que "Radar" doit également être considéré comme un palindrome).

function estPalindrome(mot) {
    resultat = mot.split('').reverse().join('');

    if (resultat == mot) {
        return `${mot} est un palindrome`
    } else {
        return `${mot} n'est pas un palindrome`
    }
}
console.log(estPalindrome("fraise"))