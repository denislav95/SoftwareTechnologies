using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(ASPNETWebApplicationProject.Startup))]
namespace ASPNETWebApplicationProject
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
