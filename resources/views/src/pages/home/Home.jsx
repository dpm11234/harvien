import React, { Component } from 'react';
import Navbar from '../../layout/navbar/Navbar';
import CarouselComponet from '../../components/carousel/Carousel';

class Home extends Component {
  render() {
    return (
      <div>
        <div className="hv-home">
          <CarouselComponet />
        </div>
      </div>
    );
  }
}

export default Home;