<html>
<head>
<title>Employee Salary</title>
<script type = "text/javascript">
    function calc()
    {
        var bp,DA,HRA,GP,PF,Tax,Deduction,NetPay,name,id,desg;
        name = document.form1.firstname.value;
        id = document.form1.empid.value;
        desg = document.form1.designation.value;
        bp = parseInt(document.form1.bp.value);

        DA = bp * 0.6;
        HRA = bp * 0.4;
        GP = bp + DA + HRA;
        PF = GP * 0.05;
        Tax = GP * 0.10;
        Deduction = Tax + PF;
        NetPay = GP - Deduction;

        document.form1.da.value = DA;
        document.form1.hra.value = HRA;
        document.form1.gp.value = GP;
        document.form1.pf.value = PF;
        document.form1.tax.value = Tax;
        document.form1.deduction.value = Deduction;
        document.form1.netpay.value = NetPay
    }
</script>
</head>
<h1 style="background-color:Yellow;">Employee Salary Slip</h1>
<h3 style="background-color:Yellow;">Company : Sunil Infotech</h1>
<body >
    <form name = "form1">
        <table border = "1">
            <tr>
                <td>Name</td>
                <td><input type = "text" name = "firstname" /></td>
            </tr>
            <tr>
                <td>Employee ID</td>
                <td><input type = "text" name = "empid" /></td>
            </tr>
            <tr>
                <td>Designation</td>
                <td><input type = "text" name = "designation" /></td>
            </tr>
            <tr>
                <td>Basic Pay</td>
                <td><input type = "text" name = "bp"></td>
            </tr>
            <tr>
                <td colspan = "2" align = "center">
                <input type = "button" name = "calculate" value = "Click Here To Calculate"onclick ="calc()"></td>

            </tr>
            <tr>
                <td>Dearness Allowance </td>
                <td><input type = "text" name = "da"/></td>
            </tr>
            <tr>
                <td>House Rent Allowance </td>
                <td><input type = "text" name = "hra"></td>
            </tr>
            <tr>
                <td>GP</td>
                <td><input type = "text" name = "gp"></td>
            </tr>
            <tr>
                <td>Provident Fund</td>
                <td><input type = "text" name = "pf" /></td>
            </tr>
            <tr>
                <td>Tax</td>
                <td><input type = "text" name = "tax" /></td>
            </tr>
            <tr>
                <td>Deduction</td>
                <td><input type = "text" name = "deduction" /></td>
            </tr>
            <tr>
                <td>NetPay</td>
                <td><input type = "text" name = "netpay" /></td>
            </tr>           
        </table>      </form> </body></html>
