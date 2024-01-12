function escargotAvance(puit) {
    let cm = 0;
    let i;

    for (i = 0; cm < puit; i++) {
        cm += 7 - 2;
    }
    return "L'escargot met " + i + " jours pour atteindre le sommet du puit.";
}
console.log(escargotAvance(32));
