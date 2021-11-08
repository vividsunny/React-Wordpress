import React from "react";

function Expertise(){
    return(
        <section className="expertise-section p-70">
            <div className="container">
                <div className="page-title">Our Expertise</div>

                <div className="expertise-list">
                    <ul>
                        <li>
                            <img src={require('../images/shopify.png').default} alt="VIVID WEB SOLUTION" />
                        </li>
                        <li>
                            <img src={require('../images/wordpress.png').default} alt="VIVID WEB SOLUTION" />
                        </li>
                        <li>
                            <img src={require('../images/angularjs.png').default} alt="VIVID WEB SOLUTION" />
                        </li>
                        <li>
                            <img src={require('../images/nodejs.png').default} alt="VIVID WEB SOLUTION" />
                        </li>
                        <li>
                            <img src={require('../images/reactjs.png').default} alt="VIVID WEB SOLUTION" />
                        </li>
                        <li>
                            <img src={require('../images/laravel.png').default} alt="VIVID WEB SOLUTION" />
                        </li>
                        <li>
                            <img src={require('../images/php.png').default} alt="VIVID WEB SOLUTION" />
                        </li>
                        <li>
                            <img src={require('../images/htmlcssjs.png').default} alt="VIVID WEB SOLUTION" />
                        </li>
                        <li>
                            <img src={require('../images/sass.png').default} alt="VIVID WEB SOLUTION" />
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    );
}
export default Expertise;