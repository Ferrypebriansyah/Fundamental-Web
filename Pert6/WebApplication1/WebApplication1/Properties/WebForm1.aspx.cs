using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace WebApplication1.Properties
{
    public partial class WebForm1 : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            Response.Write("Hello       World<br/>");
            Response.Write("Hello&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;World<br/>");
            Response.Write("Hello" + (char)0xA0 + (char)0xA0 + (char)0xA0 + "World<br/>");
            Response.Write("Hello\tWorld<br/>");
            Response.Write("Hello\nWorld<br/>");
            Response.Write("Hello\\World<br/>");
            Response.Write("\"HelloWorld\"<br/>");

        }
    }
}