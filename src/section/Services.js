import React from "react";

function Service(){
    return(
        <section className="service-section">
            <div className="container">
                <div className="service-title">SERVICES</div>
            </div>
            <div className="service-bgsec">
                <div className="container">
                    <div className="row">
                        <div className="service-col">
                            <a href="#">
                                <div className="service-boxdiv">
                                    <img src={require('../images/web-programming.svg').default} alt="VIVID WEB SOLUTION" />
                                    <h4>Web Development</h4>
                                </div>
                            </a>
                            <a href="#">
                                <div className="service-boxdiv">
                                    <img src={require('../images/web-designing.svg').default} alt="VIVID WEB SOLUTION" />
                                    <h4>Web Designing</h4>
                                </div>
                            </a>
                        </div>
                        <div className="service-col">
                            <a href="#">
                                <div className="service-boxdiv">
                                    <img src={require('../images/e-commerce.svg').default} alt="VIVID WEB SOLUTION" />
                                    <h4>E-Commerce Development</h4>
                                </div>
                            </a>                    
                            <a href="#">
                                <div className="service-boxdiv">
                                    <img src={require('../images/cms.svg').default} alt="VIVID WEB SOLUTION" />
                                    <h4>CMS & MVC Website Development</h4>
                                </div>
                            </a>
                        </div>
                        <div className="service-col">
                            <a href="#">
                                <div className="service-boxdiv">
                                    <img src={require('../images/app.svg').default} alt="VIVID WEB SOLUTION" />
                                    <h4>Mobile Application Development</h4>
                                </div>
                            </a>
                            <a href="#">
                                <div className="service-boxdiv">
                                    <img src={require('../images/wordpress-logo.svg').default} alt="VIVID WEB SOLUTION" />
                                    <h4>Wordpress Development</h4>
                                </div>
                            </a>
                        </div>
                        <div className="service-col">
                            <a href="#">
                                <div className="service-boxdiv">
                                    <img src={require('../images/api.svg').default} alt="VIVID WEB SOLUTION" />
                                    <h4>API Development</h4>
                                </div>
                            </a>
                            <a href="#">
                                <div className="service-boxdiv">
                                    <img src={require('../images/maintenance.svg').default} alt="VIVID WEB SOLUTION" />
                                    <h4>Maintenance And Support</h4>
                                </div>
                            </a>
                        </div>
                    </div>                
                </div>
            </div>
        </section>
        
    );
}
export default Service;