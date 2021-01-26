<HTML>
<HEAD>
    <TITLE>Employee Details</TITLE>
</HEAD>

<BODY>
<H4> Enter your details</H4>
<FORM METHOD = POST ACTION = "EMP_DETAILS.php">
    <TABLE>
        <TR>
            <TD> EMPLOYEE ID</TD>
            <TD><INPUT TYPE = "text" NAME = "empid"></TD>
        </TR>
        <TR>
            <TD>Name</TD>
            <TD><INPUT TYPE = "text" NAME = "Name"></TD>
        </TR>
        <TR>
            <TD>Department</TD>
            <TD>
                <INPUT TYPE="radio" NAME = "dept" VALUE ="Finance">Finance
                <INPUT TYPE="radio" NAME = "dept" VALUE ="Marketing">Marketing
                <INPUT TYPE="radio" NAME = "dept" VALUE ="IT">IT

            </TD>
        </TR>
        <TR>
            <TD>Email</TD>
            <TD><INPUT TYPE="submit" VALUE="SUBMIT"></TD>
        </TR>
    </TABLE>
</FORM>
</BODY>
</HTML>
