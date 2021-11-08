import React from "react";

function Header(){
    return(
        <header className="site-header">
            <div className="container">
                <div className="logo-nav-div">
                    <div className="logo-div">    
                        <a href="#">
                            <img src={require('../images/logo.png').default} alt="VIVID WEB SOLUTION" />
                        </a>
                    </div>
                    <div className="navigation-div">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Who we are</a></li>
                            <li><a href="#">Service</a>
                                <ul>
                                    <li><a href="#">Web Development</a></li>
                                    <li><a href="#">Web Development</a></li>
                                    <li><a href="#">Web Development</a></li>
                                    <li><a href="#">Web Development</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    );
}
export default Header;