<!DOCTYPE html>
<html>
<head>
<title>Mathematical Expression</title>
<style>
    body {
        background-color: #00ff00;
    }
    h1 {
        background-color: yellow;
        text-align: center;
    }
    table {
        margin: 0 auto;
        border-collapse: collapse;
    }
    td {
        padding: 8px;
        text-align: center;
    }
    input[type="text"], input[type="button"] {
        padding: 6px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }
    input[type="button"]:hover {
        cursor: pointer;
        background-color: #ddd;
    }
</style>
<script>
    function Eval_math_exp() {
        var x = document.PRG2.expr.value;
        try {
            var result = eval(x);
            if (isNaN(result)) {
                throw "Invalid expression";
            }
            document.PRG2.result.value = result;
        } catch (error) {
            alert("Error: " + error);
            document.PRG2.result.value = "";
        }
    }
</script>
</head>
<body>

<h1>Mathematical Expression Form</h1>
<form name="PRG2">
    <table>
        <tr>
            <td>Enter Expression</td>
            <td><input type="text" name="expr" /></td>
        </tr>
        <tr>
            <td>Result of Expression</td>
            <td><input type="text" name="result" readonly /></td>
        </tr>
        <tr>
            <td colspan="2"><input type="button" value="Evaluate Expression" onclick="Eval_math_exp()" /></td>
        </tr>
     </table>
</form>

</body>
</html>

