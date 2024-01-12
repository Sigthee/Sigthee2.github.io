let tInit = [];

for (let i = 0; i < 10; i++) {
    tInit.push(Math.floor(Math.random() * 20));
};
                                                //défini ici
                                                //la flèche def une fonction
let tInf = tInit.filter(chiffre => chiffre < 10).sort((a, b) => a - b);
let tSup = tInit.filter(nombre => nombre > 9).sort((a, b) => a - b);

console.log(tInit);
console.log(tInf);
console.log(tSup);