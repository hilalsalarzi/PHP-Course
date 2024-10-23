<!DOCTYPE html>
<html>
<head>
    <title>Add 45 to Input Value</title>
</head>
<body>
    <input type="number" id="myInput" value="12" oninput="add45()">
    <p class="result"></p>

    <script>
        function add45() {
            let inputElement = document.getElementById("myInput");
            let currentValue = parseInt(inputElement.value); // Convert input value to an integer
            let newValue = currentValue + 45; // Add 45 to the current value
            document.getElementsByClassName("result")[0].innerHTML = "New Value: " + newValue; // Display result
        }
    </script>
</body>
</html>
