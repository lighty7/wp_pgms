<!DOCTYPE html>
<html>
<head>
<title>Student Result and Grade</title>
<style>
    body {
        background-color: yellow;
    }
    h1 {
        background-color: orange;
        text-align: center;
    }
    table {
        border-collapse: collapse;
        margin: 0 auto;
    }
    td {
        padding: 8px;
        text-align: left;
    }
</style>
<script type="text/javascript">
    function calc() {
        var m1 = parseInt(document.getElementById("wp").value);
        var m2 = parseInt(document.getElementById("cns").value);
        var m3 = parseInt(document.getElementById("sp").value);
        var m4 = parseInt(document.getElementById("toc").value);

        if (isNaN(m1) || isNaN(m2) || isNaN(m3) || isNaN(m4) || m1 < 0 || m2 < 0 || m3 < 0 || m4 < 0 || m1 > 100 || m2 > 100 || m3 > 100 || m4 > 100) {
            alert("Please enter valid marks between 0 and 100.");
            return;
        }

        var total = m1 + m2 + m3 + m4;
        var avg = total / 4;
        var result, grade;

        if (m1 < 35 || m2 < 35 || m3 < 35 || m4 < 35) {
            result = "Fail";
            grade = "D";
        } else if (avg >= 75) {
            result = "Distinction";
            grade = "A+";
        } else if (avg >= 60) {
            result = "First Class";
            grade = "A";
        } else if (avg >= 50) {
            result = "Second Class";
            grade = "B";
        } else if (avg >= 35) {
            result = "Pass";
            grade = "C";
        }

        document.getElementById("total").value = total;
        document.getElementById("average").value = avg.toFixed(2);
        document.getElementById("result").value = result;
        document.getElementById("grade").value = grade;
    }
</script>
</head>
<body>
<h1>Student Result Form</h1>
<form name="form1">
    <table border="3">
        <tr>
            <td><b>Student Name</b></td>
            <td><input type="text" id="studentName" required /></td>
        </tr>
        <tr>
            <td colspan="2" align="center">Subject Marks</td>
        </tr>
        <tr>
            <td>Web Programming</td>
            <td><input type="number" id="wp" min="0" max="100" /></td>
        </tr>
        <tr>
            <td>Network Security</td>
            <td><input type="number" id="cns" min="0" max="100" /></td>
        </tr>
        <tr>
            <td>System Programming</td>
            <td><input type="number" id="sp" min="0" max="100" /></td>
        </tr>
        <tr>
            <td>Theory of Computing</td>
            <td><input type="number" id="toc" min="0" max="100" /></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="button" onclick="calc()" value="Calculate" /></td>
        </tr>
        <tr>
            <td>Total</td>
            <td><input type="text" id="total" readonly /></td>
        </tr>
        <tr>
            <td>Average</td>
            <td><input type="text" id="average" readonly /></td>
        </tr>
        <tr>
            <td>Result</td>
            <td><input type="text" id="result" readonly /></td>
        </tr>
        <tr>
            <td>Grade</td>
            <td><input type="text" id="grade" readonly /></td>
        </tr>
    </table>
</form>
</body>
</html>
