<?php
include_once 'header.php'; 
?>

    <form>
        value 1: <input type="text" id="value1">
        value 2: <input type="text" id="value2">
        operator: 
        <select id="operator">
            <option value="add">Add</option>
            <option value="min">Minus</option>
            <option value="div">Divide</option>
            <option value="mul">Multiply</option>
        </select>
        <button type="button" onclick="calc()">Calculate</button>
    </form>

<div id="result"></div>

</body>
<script src="Main.js"></script>
</html>