using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Pert_7
{
    public partial class WebForm4 : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            if (!IsPostBack)
            {
                if (Session["klik"] == null)
                {
                    Session["klik"] = 0;
                }
                TextBox1.Text = Session["klik"].ToString();
            }
        }

        protected void Button1_Click(object sender, EventArgs e)
        {
            int hitungKlik = (int)Session["klik"] + 1;
            Session["klik"] = hitungKlik;
            TextBox1.Text = hitungKlik.ToString();
        }
    
    }
}