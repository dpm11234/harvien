import React from 'react';
import { BrowserRouter as Router, Route, Link } from 'react-router-dom';
import AppClient from './layout/Client/AppClient';
import AppAdmin from './layout/AppAdmin';


function App() {
  return (
    <div className="App">
      <Router>
        <Route path="/" component={AppClient}/>
        <Route path="/admin" component={AppAdmin}/>

      </Router>
    </div>
  );
}

export default App;
