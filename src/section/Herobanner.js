import React from "react";
import axios from 'axios';

const baseURL = "http://treeline.local/wp-json/vivid_rest_api/v1/hero_banner";

function HeroBanner(){

    const [heroBanner, setHerobanner] = React.useState(null);

    React.useEffect(() => {
        axios.get(baseURL).then((response) => {
            setHerobanner(response.data);
        });
    }, []);

    if (!heroBanner) 
        return null;

    const renBannerData = heroBanner.map((data, idx) => {
        return (

            <div key={idx} className="banner-slide">
                <img src={data.banner} alt="vivid web solution" />
                <div className="banner-content">
                    <h1 className="slider-title">{data.title}</h1>
                    <p>{data.subtitle}</p>
                </div>
            </div>
        );
    });

    return(
        <section className="Hero-banner-section">
            <div className="Hero-Banner-slider">
                {renBannerData}             
            </div>
        </section>
    );
}
export default HeroBanner;