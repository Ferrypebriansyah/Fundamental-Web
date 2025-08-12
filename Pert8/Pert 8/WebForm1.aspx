<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="WebForm1.aspx.cs" Inherits="Pert_7.WebForm1" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <asp:Table ID="Table1" runat="server" GridLines="Horizontal" HorizontalAlign="Center">
                <asp:TableRow>
                    <asp:TableCell>1</asp:TableCell>
                    <asp:TableCell>2</asp:TableCell>
                </asp:TableRow>
                <asp:TableRow>
                    <asp:TableCell>3</asp:TableCell>
                    <asp:TableCell>4</asp:TableCell>
                </asp:TableRow>
            </asp:Table>
            <br />
            <asp:Table ID="Table2" runat="server" GridLines="Vertical" HorizontalAlign="Center">
                <asp:TableRow>
                    <asp:TableCell>1</asp:TableCell>
                    <asp:TableCell>2</asp:TableCell>
                </asp:TableRow>
                <asp:TableRow>
                    <asp:TableCell>3</asp:TableCell>
                    <asp:TableCell>4</asp:TableCell>
                </asp:TableRow>
            </asp:Table>
            <br />
            <asp:Table ID="Table3" runat="server" GridLines="Both" HorizontalAlign="Center">
                <asp:TableRow>
                    <asp:TableCell>1</asp:TableCell>
                    <asp:TableCell>2</asp:TableCell>
                </asp:TableRow>
                <asp:TableRow>
                    <asp:TableCell>3</asp:TableCell>
                    <asp:TableCell>4</asp:TableCell>
                </asp:TableRow>
            </asp:Table>
        </div>
    </form>
</body>
</html>
