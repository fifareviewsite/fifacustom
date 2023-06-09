import React from 'react';
import { slide as Menu } from 'react-burger-menu'
import { Link, NavLink } from "react-router-dom";
import '../../scss/burger.scss';

class Burger extends React.Component{

  render () {
    return (
      <div className="navtext-container">
      <div className="navtext">FIFA TACTICS COMMUNITY</div>
        <div id="outer-container">
          <Menu pageWrapId={ "page-wrap" } outerContainerId={ "outer-container" } right>
            <main id="page-wrap">
              <a id="home" className="menu-item" href="/">Home</a>
              <a id="about" className="menu-item" href="/about">About</a>
              <a id="contact" className="menu-item" href="/contact">Contact</a>
              <a id="settings" className="menu-item--small" href="">Settings</a>
              {/*
              <NavLink exact to='/' className='header-item' activeClassName='active'>Home</NavLink>
              <NavLink to='/' className='header-item' activeClassName='active'>Item1</NavLink>
              <NavLink to='/page_a' className='header-item' activeClassName='active'>Item2</NavLink>
              */}
              <NavLink to='/' className='header-item'>Home</NavLink>
              <NavLink to='/' className='header-item'>Item1</NavLink>
              <NavLink to='/page_a' className='header-item'>Item2</NavLink>

            </main>
          </Menu>
        </div>
        </div>
    );
  }
}
export default Burger;