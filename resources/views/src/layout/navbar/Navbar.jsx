import React, { Component } from 'react';
import './Navbar.scss';
import logo from '../../assets/images/logo.png';

console.log(logo);


class Navbar extends Component {

  render() {
    return (
      <div>
        <div className="harvee-navbar">
          <div className="nav-non-scroll d-none d-sm-block">
            <div className="container">
              <div className="row">
                <div className="col-lg-4">
                  <a href="/home">
                    <img className="harvee-logo" src={logo} alt="Logo" /></a>
                </div>
                <div className="col-lg-4">
                  <div className="harvee-search-bar pt-4 pb-4 m-2 text-center">
                    <input type="text" className="p-2" name="search-bar" placeholder="Search..." />
                    <label htmlFor="search-bar">
                      <i className="fa fa-search" />
                    </label>
                  </div>
                </div>
                <div className="col-lg-4">
                  <div className="container  pt-4 pb-4">
                    <div className="row">
                      <div className="col-lg-8 harvee-hotline text-right">
                        <p className="m-0">CALL US NOW</p>
                        <h4 className="font-weight-bold">+8465 469 403</h4>
                      </div>
                      <div className="col-lg-4 text-right">
                        <button id="my-cart" className="btn btn-harvee">
                          <i className="fa fa-cart-plus harvee-cart" />
                        </button>
                        <div id="cart-detail" className="harvee-cart-detail">
                          <div className="container">
                            <div className="row">
                              <a href="/my-cart">
                                <button className="btn btn-success w-100 m-2">
                                  Check-out!
                              </button>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="non-scroll" className="container-fluid px-4 harvee-nav-link">
              <div className="row">
                <div className="col-lg-2 text-uppercase text-center">
                  <a href="/home" className="nav-link ">Home</a>
                </div>
                <div className="col-lg-2 text-uppercase text-center">
                  <a href="/category" id="cate-1" className="nav-link ">Category
                  <i className="fa fa-angle-down" />
                  </a>
                  <div id="cate-detail-1" className="harvee-category-detail">
                  </div>
                </div>
                <div className="col-lg-2 text-uppercase text-center">
                  <a id="cate-2" className="nav-link ">Product
                  <i className="fa fa-angle-down" />
                  </a>
                  <div id="cate-detail-2" className="harvee-category-detail">
                  </div>
                </div>
                <div className="col-lg-2 text-uppercase text-center">
                  <a href className="nav-link ">Payment
                </a>
                </div>
                <div className="col-lg-2 text-uppercase text-center">
                  <a href className="nav-link ">Shipment
                </a>
                </div>
                <div className="col-lg-2 text-uppercase text-center">
                  <a href="contact" className="nav-link ">Contact
                </a>
                </div>
              </div>
            </div>
          </div>
          <style dangerouslySetInnerHTML={{ __html: "\n\n    " }} />
          {/* Scroll nav */}
          <div id="nav-scroll" style={{ top: '-60px', display: 'none', transition: 'top 0.25s ease-out', position: 'fixed' }} className="container-fluid px-4 harvee-nav-link harvee-navbar-scroll d-none d-sm-block">
            <div className="row">
              <div className="col-auto text-center m-1">
                <a href="home">
                  <img className="harvee-logo-scroll" src="{{asset('storage/images/logo.png')}}" alt />
                </a>
              </div>
              <div className="col-auto  text-uppercase text-center">
                <a href="/home" className="nav-link mt-2 ">Home</a>
              </div>
              <div className="col-auto  text-uppercase text-center">
                <a id="cate-scroll-1" className="nav-link mt-2 ">Category
                <i className="fa fa-angle-down" />
                </a>
                <div id="cate-detail-scroll-1" className="harvee-category-detail">
                </div>
              </div>
              <div className="col-auto  text-uppercase text-center">
                <a id="cate-scroll-2" className="nav-link mt-2 ">Product
                <i className="fa fa-angle-down" />
                </a>
                <div id="cate-detail-scroll-2" className="harvee-category-detail">
                </div>
              </div>
              <div className="col-auto  text-uppercase text-center">
                <a href className="nav-link mt-2 ">Payment
              </a>
              </div>
              <div className="col-auto  text-uppercase text-center">
                <a href className="nav-link mt-2 ">Shipment
              </a>
              </div>
              <div className="col-auto  text-uppercase text-center">
                <a href="contact" className="nav-link mt-2 ">Contact
              </a>
              </div>
              <div className="col-3 text-right">
                <button id="my-cart-2" className="btn btn-harvee">
                  <i className="fa fa-cart-plus harvee-cart" />
                </button>
                <div id="cart-detail-2" className="harvee-cart-detail">
                  <div className="container">
                    <div className="row">
                      <button className="btn btn-success w-100">
                        Check-out!
                    </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <nav className="navbar navbar-expand-sm harvee-nav-mobile d-block d-sm-none w-100">
            <a className="navbar-brand" href="/home">
              <img className="harvee-logo-scroll" src="{{asset('storage/images/logo.png')}}" alt />
            </a>
            <button className="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
              <span className="navbar-toggler-icon my-1" />
              <span className="navbar-toggler-icon my-1" />
              <span className="navbar-toggler-icon my-1" />
            </button>
            <div className="collapse navbar-collapse" id="navbarsExample03">
              <ul className="navbar-nav mr-auto harvee-nav-link p-2">
                <li className="nav-item active">
                  <a className="nav-link" href="/home">Home</a>
                </li>
                <li className="nav-item dropdown">
                  <a className="nav-link dropdown-toggle" href="http://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category
                </a>
                  <div className="dropdown-menu" aria-labelledby="dropdown03">
                    <a className="dropdown-item" href="#">Action</a>
                    <a className="dropdown-item" href="#">Another action</a>
                    <a className="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li className="nav-item dropdown">
                  <a className="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product
                </a>
                  <div className="dropdown-menu" aria-labelledby="dropdown04">
                    <a className="dropdown-item" href="#">Action</a>
                    <a className="dropdown-item" href="#">Another action</a>
                    <a className="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li className="nav-item">
                  <a className="nav-link" href="#">Payment</a>
                </li>
                <li className="nav-item">
                  <a className="nav-link" href="#">Shipment</a>
                </li>
                <li className="nav-item">
                  <a className="nav-link" href="/contact">Contact</a>
                </li>
              </ul>
              <form className="form-inline my-2 my-md-0">
                <input className="form-control" type="text" placeholder="Search" />
              </form>
            </div>
          </nav>
        </div>

      </div>
    );
  }
}

export default Navbar;
