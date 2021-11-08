import logo from './logo.svg';
import './App.css';
import axios from 'axios';
import React from "react";

const baseURL = "http://treeline.local/wp-json/vivid_rest_api/v1/hero_banner";

function App() {
  
  const [heroBanner, setHerobanner] = React.useState(null);

  React.useEffect(() => {
    axios.get(baseURL).then((response) => {
      setHerobanner(response.data);
    });
  }, []);

  if (!heroBanner) 
    return null;

  const renData = heroBanner.map((data, idx) => {
    // console.log(data.banner);
    // console.log(data.title);
    return (
      <div key={idx} className={`hero_banner_${idx}`}>
          <img src={data.banner} className="App-logo" alt="logo" />
          <h2>{data.title}</h2>
          <h5>{data.subtitle}</h5>
        </div>
      );
  });

  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        {renData}
      </header>
    </div>
  );
}

export default App;
