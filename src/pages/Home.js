import React from "react";

import Header from "../section/Header"
import HeroBanner from "../section/Herobanner";
import Expertise from "../section/Expertise";
import Service from "../section/Services";
import Whychooseus from "../section/Whychooseus";
import Portfolio from "../section/Portfolio";
import Testimonial from "../section/Testimonial";
import Footer from "../section/Footer";

function Home() {
    return (
      <div className="page-wrapper">

        {/*  Site header */}
        <Header />
           
        <HeroBanner />
        <Expertise />
        <Service />
        <Whychooseus />
        <Portfolio />
        <Testimonial />

        <Footer/>
  
      </div>
    );
  }
  
export default Home;