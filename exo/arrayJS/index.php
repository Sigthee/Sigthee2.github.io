<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/style/main.css">
    <title>Array dynamique</title>
</head>
<body>
    <main>
        <div class="menu">

            <div class="element" id="e1">Element 1</div>

            <div class="element" id="e2">Element 2</div>
            <div class="element" id="e3">Element 3</div>
            <div class="element" id="e4">Element 4</div>
        </div>
        <button onclick="elementUp()">ElementUp</button>
        <button onclick="elementDown()">ElementDown</button>
    </main>

    <script>
        function elementDown() {
            var element1 = document.getElementById('e1');
            var nextElement = element1.nextElementSibling;

            if (nextElement) {
                // Clone the element1
                var element1Clone = element1.cloneNode(true);

                // Replace element1 with nextElement
                element1.parentNode.replaceChild(nextElement, element1);

                // Insert element1 clone after nextElement
                nextElement.parentNode.insertBefore(element1Clone, nextElement.nextSibling);
            }
        }

        function elementUp() {
            var element1 = document.getElementById('e1');
            var previousElement = element1.previousElementSibling;

            if (previousElement) {
                var element1Clone = element1.cloneNode(true);

                element1.parentNode.replaceChild(previousElement, element1);

                previousElement.parentNode.insertBefore(element1Clone, previousElement)
            }
        }

    </script>
</body>
</html>