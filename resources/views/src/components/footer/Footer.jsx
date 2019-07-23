import React from 'react';

import './Footer.scss';

const footer = () => {
   return (
      <div className="harvee-footer py-5">
         <div className="container position-relative">
            <div className="row harvee-footer-top">
               <div className="col-lg-3">
                  <div className="info">
                     <ul className="px-lg-0 px-3">
                        <li className="mb-2">
                           <h1>ADDRESS:</h1>
                           <p>HCM</p>
                        </li>
                        <li className="mb-2">
                           <h1>PHONE:</h1>
                           <p>XXXX <a href="/abc">013456789</a> </p>
                        </li>
                        <li className="mb-2">
                           <h1>EMAIL:</h1>
                           <p><a href="/abc">XXXX@XXX.XXX</a></p>
                        </li>
                        <li className="mb-2">
                           <h1>WORKING DAYS/HOURS:</h1>
                           <p>Mon - Sun / 9:00AM - 8:00PM</p>
                        </li>
                     </ul>
                  </div>
               </div>
               <div className="col-lg-2">
                  <div className="widget">
                     <h1 className="px-lg-0 px-3">MY ACCOUNT</h1>
                     <ul className="px-lg-0 px-3">
                        <li className="mb-2">
                           <a href="/abc">About Us</a>
                        </li>
                        <li className="mb-2">
                           <a href="/abc">Contact Us</a>
                        </li>
                        <li className="mb-2">
                           <a href="/abc">My Account</a>
                        </li>
                        <li className="mb-2">
                           <a href="/abc">Orders History</a>
                        </li>
                        <li className="mb-2">
                           <a href="/abc">Advanced Search</a>
                        </li>
                        <li className="mb-2">
                           <a href="/abc">Login</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div className="col-lg-3">
                  <div className="widget">
                     <h1 className="px-lg-0 px-3">MAIN FEATURES</h1>
                     <ul className="px-lg-0 px-3">
                        <li className="mb-2">
                           <a href="/abc">Super Fast Magento Theme</a>
                        </li>
                        <li className="mb-2">
                           <a href="/abc">1st Fully working Ajax Theme</a>
                        </li>
                        <li className="mb-2">
                           <a href="/abc">20 Unique Homepage Layouts</a>
                        </li>
                        <li className="mb-2">
                           <a href="/abc">Mobile & Retina Optimized</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div className="col-lg-4">
                  <div className="widget-subscribe">
                     <h1 className="px-lg-0 px-3">SUBSCRIBE NEWSLETTER</h1>
                     <p className="px-lg-0 px-3">Get all the latest information on Events,Sales and Offers. Sign up for newsletter today</p>
                     <div className="input-group px-lg-0 px-3 mb-3 submit-form">
                        <input className="input-email" type="email" placeholder="Username" aria-label="Username"
                           aria-describedby="basic-addon1" />
                        <input className="btn-submit" type="submit" value="SUBSCRIBE" />
                     </div>
                  </div>
               </div>
            </div>
            <div className="row harvee-footer-bottom pt-4">
               <div className="col-lg-7 col-md-12">
                  <div className="copy-right">
                     Copyright © 2019 <span>Gocodee</span>
                  </div>
               </div>
               <div className="col-lg-5 col-md-12">
                  <div className="row">
                     <div className="col-lg-8 d-flex justify-content-between">
                        <img src="{{ asset('storage/images/payments.png') }}" alt="deom" />
                     </div>
                     <div className="col-lg-4 col-md-12">
                        <div className="social text-lg-right text-md-center mt-3 mt-lg-0">
                           <a href="/abc" className="mr-2">
                           <i className="fab fa-facebook-f"></i>
                           </a>
                           <a href="/abc">
                           <i className="fab fa-twitter"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div className="banner">
               <div className="content">
                  Get in touch
               </div>
            </div>
         </div>
      </div>
   );
};

export default footer;